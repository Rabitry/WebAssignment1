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
// Handle the search request
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $searchResults = [];

    foreach ($books as $book) {
        if (stripos($book['title'], $searchTerm) !== false || stripos($book['author'], $searchTerm) !== false) {
            $searchResults[] = $book;
        }
    }

    if (!empty($searchResults)) {
        echo '<h2>Search Results:</h2>';
        require_once 'index.php' ;
    } else {
        echo '<p>No matching books found.</p>';
    }
}
?>
