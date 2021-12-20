<?php include('server.php')?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="signup.php" method="post">
                    <?php include('errors.php')?>
                    <h3>Register</h3>
                  
                        <label for="username">First name</label>
                        <input type="text" class="form-control" name="firstname" id="firstName" required>
                    </div>

                    
                    <div>
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                  <div>
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                
                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">
                        Sign up
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>