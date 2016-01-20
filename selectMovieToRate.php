<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Theater Home Page</title>
</head>

<body>
    <?php include 'connectdb.php'; ?>
    <h4> Select a showing and give it a rating </h4>
    <form action="rateMovie.php" method="post">
        Showings:
        <br>
        <?php include 'getViewedShowings.php'; ?> Give it a rating:
        <br>
        <input type="text" name="rating">
        <input type="submit" value="Rate Movie">
    </form>
</body>

</html>