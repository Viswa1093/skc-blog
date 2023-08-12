<?php
     $conn = mysqli_connect("localhost","root","","blog");
     if($conn==FALSE)
     {
       echo "Connection Failed";
     }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/loginsty.css">
</head>
<body>
    <script src="js/blogfun.js" type="text/javascript"></script>
        <div class="box">
        <div class="login" style="padding:25px; background-color:white;" height="100px" width="50%">
        <form method="post" action="Login.php" enctype="multipart/form-data">
            <h3 align="left">Login</h3><br>
            <b>Enter Password and Login to Your Account :</b><br><br><hr><br>
            <div class="team"><q>Only the SKC College - Department of BCA staffs can login to the account and modify the Blog Content</q></div><br>
            <label><b>Username </b></label><br>
            <select name="staff">
            <option value="">CHOOSE USER</option>
            <?php
       $que = "select * from users";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
          ?>
          <option value="<?php echo $row["staff"]; ?>"><?php echo $row["staff"]; ?></option>
        <?php
       }
        ?>
    </select><br><br>
            <label><b>Password </b></label><br>
            <input id="pass" type="password" name="pass" placeholder="Password"  required/><br><br>
            <input type="checkbox"> Remember me<br><br><hr><br>
            <input type="submit" class="ccss" id="ccss" name="login" value="Login" onclick="Login()">
            <button id="can" type="reset" id="cancel">Clear</button><br><br>
            <b class="clue">Click if forgot your Password - </b><a href="forgot.html" target="_self">Forgot Password</a><br><br>
</form>
        </div>
     <?php
        $que = "select * from overcontent";
       $ress = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($ress))
       {
        ?>
        <div class="img">
            <img class="logo" src="images/deptlogo.jpg" height="85px" width="95px">
            <img class="side" src="images/<?php echo $row["logimg"]?>" width="40%" height="80%" />
        </div>
      </div>
      <?php
       }
      ?>

</body>
<?php
if(isset($_POST["login"]))
{
  $name= $_POST['staff'];
  if($name!="")
  {
  $pass=$_POST['pass'];
  $quee = "update security set cp='$pass'" ;
  $rese = mysqli_query($conn,$quee);
  $que = "select * from security where id=1 ";
$res = mysqli_query($conn,$que);
while($row = mysqli_fetch_array($res))
{ 
?>
<script>
 
  function Login()
{
   pass = document.getElementById("pass").value;
     if(pass=="<?php echo $row["password"] ?>")
     {
       alert("Login Successfully!!");
       window.open("http://localhost/BLOG/newdash.php");
     }
     else
     {
       alert("Wrong! Please Check Email ID and Password!!");
     }
     
  }

  </script> 
<?php
  }
    $sname= $_POST['staff'];
    $que = "update security set log= '$sname'";
    $res = mysqli_query($conn,$que);
}
else
{
  echo "<script>alert('Choose Username and Enter Password');</script>";
}
}
?>

</html>