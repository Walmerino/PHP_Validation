<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST">

        <input type="text" placeholder="name" type="text" name="user_name">
            <?php if(isset($name_error)){ ?>
                <p><?php echo $name_error ?></p>
            <?php } ?>
        <input type="text" placeholder="password" type="text" name="user_password">
            <?php if(isset($pass_error)){ ?>
                <p><?php echo $pass_error ?></p>
            <?php } ?>
        <input type="submit" value="Register">
    </form>
</body>
</html>