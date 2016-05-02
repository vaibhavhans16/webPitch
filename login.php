<html>
<head>
  <style>
  ul {
    background: grey;
    padding: 10px;
}

ul li {
    background: grey;
    padding: 5px;
    margin-left: 35px;
}
</style>
</head>



<?php
//connect to db
require_once 'db.inc.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$t= $_POST['type'];
$query="select password from login where username ='".$user."' and type=".$t;
$p= mysql_query($query)or die(mysql_error());
$result=mysql_fetch_assoc($p)or die(mysql_error());
if($result['password']== $pass)
         {
           echo "Welcome ";
           echo $_POST["username"];
         }

        ?>
                  <body bgcolor="green">
                  <h2>Choose from the Below:</h2>
        <?php
               if($t==0)
              { ?>
                <ul id="choose">
                <li><a href="startupdetails.html">Enter Start Up Details</a></li>
                <li><a href="profile.php">View Profile</a></li>
                </ul>

       <?php   }
              elseif($t==1)
              {
               ?>  <a href="ranking.php"> GO INVEST</a>
       <?php
              }

                 else
                 {
                   echo "user not found";
                 }
        ?>
</html>
