<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Display Page</title>
    
</head>

<body>
    <!-- Display the last inserted value -->
    <p>value: <?php echo $_SESSION["lastInsertedValue"]; ?></p>
</body>
</html>