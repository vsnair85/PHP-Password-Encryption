<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Encryption</title>
</head>

<body>
    <h1>Enter Your Password to encrypt</h1>
    <form action="" method="post">
    <input type="text" name="ppqs">
    <button type="submit">Submit</button>
    </form>    
    <?php
    $ppqs = isset($_REQUEST['ppqs'])?$_REQUEST['ppqs']:"";
    $pwd="";
    if(!empty($ppqs)){
        $pwd = password_hash($ppqs, PASSWORD_DEFAULT);
    }    
    ?>
    <div>
        <p><?php echo "<span style='font-weight: bold;'>Your Password: </span>" . $ppqs . "<br> <span style='font-weight: bold;'>Your Encrypted Password: </span>" . $pwd; ?></p>
    </div>
</body>

</html>