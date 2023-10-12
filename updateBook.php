
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateBook</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
       <h1 id>Book Management Form</h1>
        <div id="form">
        <div class="headingsContainer">
        <h3>Search Book</h3>
            <p>Search Book By Title or Author Name</p>
        </div>
            
            <form method="GET" action="searchBook.php"> 
           <input type="text" name="search" placeholder="Search for a book"><br></br>
           <input type="Submit" id="btn" value="Search Book">
        </form>
        <div class="headingsContainer">
        <h3>Add New Book</h3>
            <p>Add Book Title,Author,Available,Pages,Isbn</p>
        </div>  
            <form method="POST" action="saveBook.php"> 
           <input type="text" name="title" placeholder="Add book title"><br></br>
           <input type="text" name="author" placeholder="Add book author"><br></br>
           <input type="text" name="available" placeholder="Add book available or not"><br></br>
           <input type="text" name="pages" placeholder="Add book pages"><br></br>
           <input type="text" name="isbn" placeholder="Add book isbn"><br></br>
           <input type="Submit" id="btn" value="Add Book">
        </form>
        <div id="form">
        <div class="headingsContainer">
        <h3>Delete Book</h3>
            <p>Delete Book By Title or Author Name</p>
        </div>
            
            <form method="GET" action="deleteBook.php"> 
           <input type="text" name="search" placeholder="Delete for a book"><br></br>
           <input type="Submit" id="btn" value="Delete Book">
        </form>
        </div>
    </body>
</html>