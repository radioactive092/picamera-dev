<?php include('action/dashboard_action.php'); ?>

<?php if(!(isset($_SESSION['username']))) { include('/loginsystem/nopermission.php'); } else { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
    </head>
    <h3>Change Settings</h3>
    <body>
        <form action="/editsettings.php" method="post">
            <p>From Email :<input type="text" name="semail"></p>
            <p>Password :<input type="password" name="passwd"></p>
            <p>To Email :<input type="text" name="temail"></p>
            <p>Email minimum interval:<input type="text" name="interval"></p>
            <p><input type="submit" name="submit" value="Submit"></p>
        </form>

        <form action="/changelogincred.php" method="post">
            <p>User ID :<input type="text" name="uid"></p>
            <p>Password : <input type="password" name="password"> </p>
            <p><input type="submit" name="submit" value="Submit"></p>
        </form>

<!--        <form action="../loginsystem/servicestatus.php" method="post">
          <p>Change Service Status:
            <input type="radio" name="servicestatus" value="restart"/>Restart Service
            <input type="radio" name="servicestatus" value="start"/>Start Service
            <input type="radio" name="servicestatus" value="stop"/>Stop Service
          </p>
          <input type="submit" name="submit" value="Submit"/>
        </form>
-->
        <br><br>
        <a href="documentation/FAQ.html">FAQ</a>
        <br>
        <a target="_blank" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>:7001">View Stream</a>
        <br>
        <a href="/updatesystem.php">Update System</a>
        <br>
        <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/logout.php">Logout</a>
    </body>
</html>

<?php } ?>
