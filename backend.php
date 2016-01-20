<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Back End</title>
</head>

<body>
    <?php include 'connectdb.php'; ?>
    <h1> <center> Welcome to the Back End </center> </h1>
    <br>
     <a href = "index.php"> Home page </a>
    <br>
    <h4> Add a movie </h4>
    <form action="addmovie.php" method="post">
        Movie name:
        <input type="text" name="name">
        <br> Movie year:
        <input type="text" name="year">
        <br> ID:
        <input type="text" name="id">
        <br> Genres (separate genres by commas):
        <input type="text" name="genres">
        <br>
        <input type="submit" value="Submit">
    </form>
    <h4> Delete a movie </h4>
    <form action="deleteMovie.php" method="post">
        Which movie would you like to delete?
        <br>
        <?php include 'getMovies.php' ?>
        <br>
        <input type="submit" value="delete Movie">
    </form>
    <h4> Update a movie </h4>
    <form action="updateMovie.php" method="post">
        <?php include 'selectMovie.php' ?>
        <br> New name:
        <input type="text" name="name">
        <br> New year:
        <input type="text" name="year">
        <br>
        <input type="submit" value="update Movie">
    </form>
    <h4> List movies alphabetically </h4>
    <form action="alphabetical.php">
        <input type="submit" value="Display movies alphabetically">
    </form>
    <br>
    <h4> List movies by year </h4>
    <form action="byYear.php">
        <input type="submit" value="Display movies by year">
    </form>
    <h4> Add a genre to a movie </h4>
    <form action="addGenre.php" method="post">
        <?php 
		echo "<br>". "Please select a movie". "<br>"; 
		include 'selectMovie.php'; 
		echo "<br>". "Select which genre you want to add to your movie". "<br>"; 
		include 'getGenres.php'; 
	?>
        <input type="submit" value="Add this genre to the movie">
    </form>
    <h4> Delete a genre from a movie </h4>
    <form action="deleteGenre.php" method="post">
        <?php 
		echo "<br>". "Please select a movie". "<br>"; 
		include 'selectMovie.php'; 
		echo "<br>". "Select which genre you don't want you movie to be associated with". "<br>";
		 include 'getGenres.php'; 
	?>
        <input type="submit" value="Delete this genre from the movie">
    </form>
    <h4> Modify a genre associated with a movie </h4>
    <form action = "updateGenre.php" method = "post">
    <?php 
		echo "<br>". "Please select a movie". "<br>"; 
		include 'selectMovie.php'; 
		echo "<br>". "Please select a genre". "<br>";
		include 'selectGenre.php'; 
    ?> 
    Rename this genre: <br>
    <input type = "text" name ="newGenre">
    <input type = "submit" value = "Update genre">
    </form>
    <br>
    <h4> Add a room </h4>
    <form action="addRoom.php" method="post">
        Room Number:
        <input type="text" name="roomNumber">
        <br> Capacity:
        <input type="text" name="capacity">
        <br>
        <input type="submit" value="Submit">
    </form>
    <h4> Delete a room </h4>
    <form action="deleteRoom.php" method="post">
        <?php include 'getRooms.php'; ?>
        <input type="submit" value="Delete this room from the theater">
    </form>
    <h4> Modify a room </h4>
    <form action="updateRoom.php" method="post">
        <?php include 'getRooms.php' ?>
        <br> New Capacity:
        <input type="text" name="capacity">
        <br>
        <input type="submit" value="update Room">
    </form>
    <h4> Add a showing </h4>
    <form action="addShowing.php" method="post">
        Select the movie:
        <br>
        <?php include 'selectMovie.php' ?>
        <br> Select the room:
        <br>
        <?php include 'getRooms.php' ?> Showing ID:
        <input type="text" name="sid">
        <br> Date:
        <input type="text" name="date">
        <br> Time:
        <input type="text" name="time">
        <br>
        <input type="submit" value="Add Showing">
    </form>
    <h4> Delete a showing </h4> Select a showing:
    <br>
    <form action="deleteShowing.php" method="post">
        <?php include 'getShowings.php' ?>
        <input type="submit" value="Delete this showing">
    </form>
    <h4> Modify a showing </h4>
    <form action = "updateShowing.php" method = "post"> 
	Select a showing: <br>
    	<?php include 'getShowings.php' ?>
	<br>Select a new movie:<br>
	 <?php include 'selectMovie.php' ?>
	<br>Select a new room: <br>
 	<?php include 'getRooms.php' ?>
	<br>Enter in a new date: 
	<input type = "text" name = "date">
	<br> Enter in a new time:
	<input type = "text" name = "time"> <br>
	<input type = "submit" value = "Update Showing">
    </form>
    <h4> List all showings </h4>
    <form action="listShowings.php" method="post">
        <input type="submit" value="List showings">
    </form>
    <h4> Add a customer </h4>
    <form action="addCustomer.php" method="post">
        Customer ID:
        <input type="text" name="cid">
        <br> First Name:
        <input type="text" name="fname">
        <br> Last Name:
        <input type="text" name="lname">
        <br> Sex:
        <input type="text" name="sex">
        <br> Email:
        <input type="text" name="email">
        <br>
        <input type="submit" value="Add Customer">
    </form>
    <h4> Delete a customer </h4>
    <form action="deleteCustomer.php" method="post">
        <?php include 'getCustomers.php'; ?>
        <input type="submit" value="Delete Customer">
    </form>
    <h4> Modify a customer </h4>
    <form action="updateCustomer.php" method="post">
        Select a Customer to modify:
        <br>
        <?php include 'getCustomers.php'; ?>
        <br> New First Name:
        <input type="text" name="fname">
        <br> New Last Name:
        <input type="text" name="lname">
        <br> New Sex:
        <input type="text" name="sex">
        <br> New Email:
        <input type="text" name="email">
        <br>
        <input type="submit" value="Update Customer">
    </form>
    <h4> List all customers </h4>
    <form action="listCustomers.php">
        <input type="submit" value="List all customers">
    </form>
</body>

</html>