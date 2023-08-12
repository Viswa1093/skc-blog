<?php 
$conn = mysqli_connect("localhost","root","","blog");
     if($conn==FALSE)
     {
       echo "Connection Failed";
     }

     if(isset($_POST['login']))
   {
     $pass=$_POST['pass'];
     $que = "select * from security where id=1 ";
   $res = mysqli_query($conn,$que);
   while($row = mysqli_fetch_array($res))
   {
      $qq=$row["password"]; 
     if($pass==$qq)
     {
        echo '<script> alert("Login Successfully"); </script>';
        echo '<script> location.href="newdash.php"; </script>';
        ?>
  <?php
     }
     else{
        echo '<script> alert("Wrong! Please Check Password!!"); </script>';
        echo '<script> location.href="Login.php"; </script>';

     }
   }
}
?>