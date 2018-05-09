<?php include('action/dashboard_action.php'); ?>

<?php if(!(isset($_SESSION['username']))) { include('nopermission.php'); } else { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
    </head>
    <h3>Change Settings</h3>
    <body>
        <form action="../editsettings.php" method="post">
            <p>From Email :<input type="text" name="semail"></p>
            <p>Password :<input type="password" name="passwd"></p>
            <p>To Email :<input type="text" name="temail"></p>
            <p>Email minimum interval:<input type="text" name="interval"></p>
            <p><input type="submit" name="submit" value="Submit"></p>
        </form>

        <form action="../loginsystem/servicestatus.php" method="post">
          <p>Change Service Status:
            <input type="radio" name="servicestatus" value="restart"/>Restart Service
            <input type="radio" name="servicestatus" value="start"/>Start Service
            <input type="radio" name="servicestatus" value="stop"/>Stop Service
          </p>
          <input type="submit" name="submit" value="Submit"/>
        </form>
        <br><br>
        <a target="_blank" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:7001">View Stream</a>
        <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/logout.php">Logout</a>
    </body>
</html>

<?php } ?>
