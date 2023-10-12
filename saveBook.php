<?php
// Read books from the JSON file
$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);

// Check if JSON decoding was successful
if ($books === null) {
    die('Error reading JSON file');
}
?>

<?php
// Handle the save request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newBook = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'available' => $_POST['available'],
        'pages' => $_POST['pages'],
        'isbn' => $_POST['isbn'],

    ];

    // Add the new book to the array
    $books[] = $newBook;

    // Encode the updated book array back to JSON
    $updatedBooksJson = json_encode($books, JSON_PRETTY_PRINT);

    if (file_put_contents('books.json', $updatedBooksJson)) {
        echo '<p>New book saved successfully!</p>';
        require_once 'index.php' ;
    } else {
        echo '<p>Error saving the book.</p>';
    }
}
?>
