<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="/phpassignment2/tech_support/main.css">
        <title>Add Technician</title>
    </head>
<body>
    <?php
    include ("header.php"); 
    ?>
    <main>

<div>
    <h2>
        Thank you for adding new technician.
    </h2>
    <p>
        <?php echo $_SESSION['name']; ?> has been added to your technician list.
    </p>
    
</div>
<p><a href="index.php">Back to home</a></p>
    </main>
    <?php 
    include ("footer.php"); 
    ?>
</body>
</html>