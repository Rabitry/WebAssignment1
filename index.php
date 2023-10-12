<!DOCTYPE html>
<html>
<head>
    <title>Book Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Book Library</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                    <th>Pages</th>
                    <th>ISBN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Read the JSON file and display books
                $jsonFile = 'books.json';
                if (file_exists($jsonFile)) {
                    $jsonContent = file_get_contents($jsonFile);
                    $books = json_decode($jsonContent, true);

                    foreach ($books as $book) {
                        echo '<tr>';
                        echo '<td>' . $book['title'] . '</td>';
                        echo '<td>' . $book['author'] . '</td>';
                        echo '<td>' . $book['available'] . '</td>';
                        echo '<td>' . $book['pages'] . '</td>';
                        echo '<td>' . $book['isbn'] . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
