<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="./fav_index/android-chrome-512x512.png" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
    <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>User Input with PHP: Street Address</title>
  </head>
  <body>

    <!-- Header -->
    <?php echo "<h1>User Input in PHP: Street Address</h1>" ?>

    <!-- User input functions -->
    <form action="./welcome.php" method="post" target="result">
      <label for="street-name">Street Name</label>
      <input type="text" id="street-name" placeholder="Street Name" name="street-name"><br><br>
      <label for="street-number">Street Number</label>
      <input type="number" id="street-number" placeholder="Street Number" name="street-number"><br><br>
      <input type="submit" value="Enter">
			<br><br>	
    </form>
<div id="result"></div>
    <center>
      <iframe id="result" name="result">
				Your first name is <?php echo $_POST["first-name"]; ?> and your age is <?php echo $_POST["age"]; ?>.
      </iframe>
    </center>
  </body>
</html>