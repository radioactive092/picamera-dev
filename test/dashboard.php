<?php include('dashboard_action.php'); ?>

<?php if(!(isset($_SESSION['username']))) { include('nopermission.php'); } else { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="./dashboard.css">
    </head>
    <h3>Change Settings</h3>
    <body>
        <form action="../editsettings.php" method="post">
            <p>From Email :<input type="text" name="semail"></p>
            <p>Password :<input type="password" name="passwd"></p>
            <p>To Email :<input type="text" name="temail"></p>
            <p>Email minimum interval:<input type="text" name="interval"></p>
            <p>Toggle service ON/OFF :
              <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
              </label></p>
            <p><input type="submit" name="submit" value="Submit"></p>




        </form>
    </body>
</html>

<?php } ?>
