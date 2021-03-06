<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="css/style.css">
    <title>Login Administrator</title>
</head>
<body>

    <!-- form login -->
    <section class="login_admin" id="login_admin">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col m8 12 offset-m2">
                    <form>
                        <div class="card-panel">
                            <h5 class="center" style="height: 50px;">LOGIN ADMINISTRATOR</h5>
                            <div class="input-field">
                                <input type="text" name="username" id="username" class="validate" require>
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" id="password" require>
                                <label for="password">Password</label>
                            </div>
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end form login -->




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
</body>
</html>