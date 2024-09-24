<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecpoy.css">
    <title>Regform</title>
</head>
<body>
    <div class="container">
        <?php
        print_r($_POST)
        ?>
        <form action="regcopy.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
          

        </form>
    </div>
    
</body>
</html>