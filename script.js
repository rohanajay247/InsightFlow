function fetchBooks() {
    fetch('backend.php?action=get_books')
    .then(response => response.json())
    .then(data => {
        const booksList = document.getElementById('books');
        booksList.innerHTML = '';
        data.forEach(book => {
            const li = document.createElement('li');
            li.textContent = `${book.title} by ${book.author}`;
            booksList.appendChild(li);
        });
    });
}

function addBook() {
    const title = document.getElementById('book-title').value;
    const author = document.getElementById('book-author').value;
    fetch('backend.php?action=add_book', {
        method: 'POST',
        body: JSON.stringify({ title, author })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            fetchBooks();
            document.getElementById('book-title').value = '';
            document.getElementById('book-author').value = '';
        } else {
            alert(data.message);
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    fetchBooks();
});
