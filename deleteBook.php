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
        $isbn = $_POST['isbn'];
        $check = 0;
        foreach ($books as $key => $book) {
            if ($book['isbn'] === $isbn) {
                $check  = 1;
                unset($books[$key]);
                $books = array_values($books);
                $updatedBooksJson = json_encode($books, JSON_PRETTY_PRINT);
                if (file_put_contents('books.json', $updatedBooksJson)) {
                    // Redirect back to the index page
                    header('Location: index.php');
                    exit;
                } 
                //break;
            }
        }
        if($check<=0){
            echo '<p>Error deleting the book.</p>';
        }
?>
