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
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/newdash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<script src="js/blogfun.js" type="text/javascript"></script>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <h2 class="title" align="center">SKC - Blogs</h2>
                    </a>
                </li>

                <li>
                    <a href="newdash.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Blogs Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="inblog.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Magazines Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="uploadd.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Upload - Blogs</span>
                    </a>
                </li>

                <li>
                    <a href="mupload.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Upload - Magazines</span>
                    </a>
                </li>

                <li>
                    <a href="contacts.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Contacts Notify</span>
                    </a>
                </li>

                <li>
                    <a href="settings.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>


                <li>
                    <a href="javascript:void(0)" onclick="logout()">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <?PHP 
       $que = "select * from security where id=1";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
	?>
            <div name=user style="display:flex;border:1px solid;padding:5px;">
                <div class="user" style="margin-right:5px;">
                    <img src="pictures/logo.png" alt="">
                </div>
                <h5 style="margin-top:10px;font-family:calibri,cursive;" ><?php echo $row["log"]?></h5>
            </div>
            </div>
            <?PHP
	   }
	?>
            <!-- ======================= Cards ================== -->
            <?PHP 
       $que = "select * from security where id=1";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
	?>
            <div class="cardBox">
                <div class="card">
                <p class="head-1">Blogs</p>
			<p class="number"><?php echo $row["blogs"]?></p>
			<p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> Count<span> of Blogs Posted</span></p>
			<i class="fa fa-line-chart box-icon"></i>
                </div>

                <div class="card">
                <p class="head-1">Views</p>
			<p class="number"><?php echo $row["views"]?></p>
			<p class="percent" style="color:rgb(6, 160, 32)!important"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> Members <span>Have viewed our Website</span></p>
			<i class="fa fa-circle-o-notch box-icon"></i>
                </div>

                <div class="card">
                <p class="head-1">Students</p>
			<p class="number"><?php echo $row["students"]?>+</p>
			<p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> Students <span> are studying in our Department</span></p>
			<i class="fa fa-user icons box-icon"></i>
                </div>

                <div class="card">
                <p class="head-1">Staffs</p>
			<p class="number"><?php echo $row["staff"]?>+</p>
			<p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> Staffs<span> are Teaching in our Department</span></p>
			<i class="fa fa-user icons box-icon"></i>
                </div>
            </div>
            <?PHP
	   }
	?>
            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Blogs</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                            <th>Post Name</th>
                <th>Category</th>
                <th>Views</th>
                <th>Date</th>
                <th>User</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>View</th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
<?php 
       $que = "select * from content";
       $res = mysqli_query($conn,$que);
       $blog=0;
       while($row = mysqli_fetch_array($res))
       {
        $blog=$blog+1;
        ?>
        <center>
         <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
    <td align="center" ><?php echo $row["title"]; ?></td>
    <td align="center"><?php echo $row["category"]; ?> </td>
    <td align="center"><?php echo $row["view"]; ?></td>
    <td align="center"><?php echo $row["date"]; ?></td>
    <td align="center"><?php echo $row["staff"]; ?></td>
    <td align="center"> <input type="submit" value="Edit" name="edit" onclick="tot()"/><br>
    <td align="center"> <input type="submit" value="Delete" name="del" /></td>
       </form>
       <form method="post" action="read.php">
       <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
	<td align="center"><input type="submit" value="View" name="view"/></td>
       </form>
       </tr>
       </center>
       <?php
        $lo=$blog;
	   }
	   $rr = "update security set blogs='$lo' where id=1 ";
	   $res = mysqli_query($conn,$rr);
          ?>

                            
                        </tbody>
                    </table>
                </div>

    <!-- =========== Scripts =========  -->
    <script >
     // add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>