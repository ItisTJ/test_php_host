<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head> 
<body>
    
    
    <div id="test_form">
        <div id="form_content">
            <form method="post" action="form.php" target="_parent">
                <h1>Enter your details.</h1>
                
                
                <input type="text" name="f_name"  placeholder="First name">
                <input type="text" name="l_name" placeholder="Last name">

                <a href="fullname.php"><input type="submit" value="submit"></a>
            </form>
            
        </div>
    </div>
</body>
</html>