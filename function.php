<?php
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contact";
    public $mysqli;
    
    public function __construct() {
        $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        
        // Sanitize inputs to prevent SQL injection
        $name = $this->mysqli->real_escape_string($name);
        $email = $this->mysqli->real_escape_string($email);
        $message = $this->mysqli->real_escape_string($message);
        
        $q = "INSERT INTO contact_us (Name, Email, Message) VALUES ('$name', '$email', '$message')";
        $result = $this->mysqli->query($q);
        
        if ($result) {
            return "Our team shall contact you soon";
        } else {
            return "Query unsuccessful";
        }
    }
}

// Create Contact object
$obj = new Contact();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $message = $obj->contact_us($_POST);
    echo $message;
    exit(); // Stop further execution after echoing the message
}
?>
