<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Front End</title>
</head>
<body>
    <?php include 'connectdb.php'; ?>
    <h1> <center>Welcome to the Front End </center> </h1>
     <br>
     <a href = "index.php"> Home page </a>
    <br>
    <h4> Sell a ticket to Customer:</h4>
    <form action="sellTicket.php" method="post">
        Customers:
        <br>
        <?php 
		include 'getCustomers.php'; 
      	?>
        <br> Showings:
        <br>
        <?php 
		include 'getShowings.php'; 
      	?>
        <br> Select ticket price:
        <br>
        <input type="text" name="price">
        <input type="submit" value="Sell Ticket">
    </form>
    <h4> Rate a movie </h4>
    <form action="selectMovieToRate.php" method="post">
        Select a customer:
        <br>
        <?php 
		include 'getCustomers.php'; 
      	?>
        <input type="submit" value="Go">
    </form>
    <h4> List Showings based on: </h4>
    <form action="listShowingsByGenre.php" method="post">
        Genre:
        <br>
        <?php 
		include 'selectGenre.php'; 
      	?>
        <input type="submit" value="Go">
    </form>
    <br> Range of dates:
    <form action="listShowingsByDate.php" method="post">
        <br> Min date:
        <input type="text" name="minDate">
        <br> Max date:
        <input type="text" name="maxDate">
        <br>
        <input type="submit" value="Go">
    </form>
    <br> Theatres that still have seats available:
    <br>
    <form action="listOpenRooms.php" method="post">
        <input type="submit" value="Go">
    </form>
    <br> Movie title:
    <br>
    <form action="listMovieShowings.php" method="post">
        <?php
		include 'selectMovie.php';
      	?>
        <input type="submit" value="Go">
    </form>
    <h4> See all movie titles and ratings for that a customer has viewed </h4> Select a customer:
    <br>
    <form action="listCustomerMovies.php" method="post">
        <?php include 'getCustomers.php'; ?>
        <br>
        <input type="submit" value="Go">
    </form>
    <h4> View a customer profile </h4>
    <form action="customerProfile.php" method="post">
        Select a customer:
        <br>
        <?php 
		include 'getCustomers.php'; 
      	?>
        <input type="submit" value="Go">
    </form>
    <h4> See each genre and how much each has had in ticket sales </h4>
    <form action="totalSales.php" method="post">
        Select a genre:
        <br>
        <?php 
		include 'selectGenre.php'; 
      	?>
        <input type="submit" value="Go">
    </form>
    <h4> Select a genre and see how many movies there are in that genre </h4>
    <form action="countMovies.php" method="post">
        Select a genre:
        <br>
        <?php 
		include 'selectGenre.php'; 
      	?>
        <input type="submit" value="Go">
    </form>
    <h4> List all movie titles with an average of 4 or more stars </h4>
    <form action="fourOrMore.php" method="post">
        <input type="submit" value="Go">
    </form>
</body>

</html>