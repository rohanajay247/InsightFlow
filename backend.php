<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'get_books':
        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);
        $books = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $books[] = array(
                    'title' => $row['title'],
                    'author' => $row['author']
                );
            }
        }
        echo json_encode($books);
        break;
    case 'add_book':
        $data = json_decode(file_get_contents('php://input'), true);
        $title = $data['title'];
        $author = $data['author'];
        $sql = "INSERT INTO books (title, author) VALUES ('$title', '$author')";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Error adding book'));
        }
        break;
    default:
        echo json_encode(array('success' => false, 'message' => 'Invalid action'));
        break;
}

$conn->close();

?>
