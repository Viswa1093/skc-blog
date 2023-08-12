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
                    <a href="#">
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
                

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Contacts</h2>
                    </div>

                    <table>
                        <thead>
                        <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>City</th>
                <th>Subject</th>
                <th>Reason</th>
                <th>Delete</th>
</tr>
                        </thead>

                        <tbody>
                        <tr>
<?php 
       $que = "select * from contact";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
        ?>
         <form method="post" action="Uploading.php">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
        <td align="center" style="width:30px;"><?php echo $row["fname"]; ?></td>
    <td align="center" style="width:30px;"><?php echo $row["lname"]; ?></td>
    <td align="center" style="width:50px;"><?php echo $row["mail"]; ?> </td>
    <td align="center" style="width:40px;"><?php echo $row["mob"]; ?></td>
    <td align="center" style="width:40px;"><?php echo $row["city"]; ?></td>
    <td align="center" style="width:330px;"><?php echo $row["subject"]; ?></td>
    <td align="center" style="width:350px;"><?php echo $row["reason"]; ?></td>
    <td align="center" style="width:80px;"> <input type="submit" value="Delete" name="delc" /></td>
       </form>
       </tr>
       <?php
	   }
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
