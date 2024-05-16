<?php

    $f_name = $_POST['f_name'];
    $l_name = $_POST["l_name"];

    $full_name = "{$f_name} {$l_name}";

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
    <!-- Display the greeting message -->
    <h1><?php echo "Hello, {$full_name}"; ?></h1>
</body>
</html>