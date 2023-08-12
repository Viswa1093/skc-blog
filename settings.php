<?php $conn = mysqli_connect("localhost","root","","blog");
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
    <link rel="stylesheet" href="css/set.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<script src="js/blogfun.js" type="text/javascript"></script>
    <script src="ckeditor/ckeditor.js"></script>
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

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>


                <div class="user">
                    <img src="pictures/logo.png" alt="">
                </div>
            </div>

        <div id="upl">
        <div class="require">
            <h3 align="left">Settings</h3><br><hr><br>
                </div>
            <div class="upform">
                <div class="sp">
                    <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label class="hh"><b>Change Password</b></label><br>
                                <input id="cpass" type="text" name="cpass" placeholder="Current Password"  required/><br><br>
                                <input id="cinpass" type="text" name="cinpass" placeholder="New Password"  required/><br><br>
                            <input type="submit" name="passchange" value="Change"/>
                        <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                            <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label><b>Change Students Count</b></label><br>
                                <input id="sschange" type="text" name="sschange" placeholder="Enter Count"  required/><br><br>
                                <input type="submit" name="schange" value="Change"/>
                        <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                            <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label><b>Change Staff Count</b></label><br>
                                <input id="sttchange" type="text" name="sttchange" placeholder="Enter Count"  required/><br><br>
                                <input type="submit" name="stchange" value="Change"/>
                        <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                            <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label><b>Add Login User</b></label><br>
                                <input id="user" type="text" name="user" placeholder="Enter new user"  required/><br><br>
                                <input type="submit" name="create" value="Create"/>
                        <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                            <label><b>Remove Login User</b></label><br><br>
                            <table border="1" width="100%">
                        <thead>
                            <tr>
                            <th>Post Name</th>
                            <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                        <tr>
<?php 
       $que = "select * from users";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
        ?>
         <form method="post" action="http://localhost/BLOG/uploading.php">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
    <td align="center"><?php echo $row["staff"]; ?></td>
    <td align="center"> <input type="submit" value="Delete" name="udel" /></td>
       </form>
       </tr>
       <?php
       }
          ?>

                            
                        </tbody>
                    </table><br>

                            <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label><b><u>Home Page Changes</u></b></label><br><br>
                                <label><b>Department Description Change</b></label><br>
                                <textarea id="deptdesc" name="deptdesc">  </textarea><br><br>
                                <input type="submit" name="deptdescupdate" value="Update"/><br><br>
                                
                                <label><b>Description-1 Title Change</b></label><br>
                                <input type="text" id="deschead1" name="deschead1" placeholder="Enter Title"><br><br>
                                <input type="submit" name="deschead1update" value="Update"/><br><br>

                                <label><b>Description-1 Change</b></label><br>
                                <textarea id="desc1" name="desc1">  </textarea><br><br>
                                <input type="submit" name="desc1update" value="Update"/><br><br>

                                <label><b>Description-1 Image Change</b></label><br>
                                <input type="file" id="desc1img" name="desc1img"><br><br>
                                <input type="submit" name="desc1imgupdate" value="Update"/><br><br>
                                
                                <label><b>Description-2 Title Change</b></label><br>
                                <input type="text" id="deschead2" name="deschead2" placeholder="Enter Title"><br><br>
                                <input type="submit" name="deschead2update" value="Update"/><br><br>

                                <label><b>Description-2 Change</b></label><br>
                                <textarea id="desc2" name="desc2">  </textarea><br><br>
                                <input type="submit" name="desc2update" value="Update"/><br><br>

                                <label><b>Description-2 Image Change</b></label><br>
                                <input type="file" id="desc2img" name="desc2img"><br><br>
                                <input type="submit" name="desc2imgupdate" value="Update"/><br><br>

                                <label><b><u>Latest Events Image Changes</u></b></label><br><br>
                                1.<input type="file" id="foot1img" name="foot1img"><br><br>
                                2.<input type="file" id="foot2img" name="foot2img"><br><br>
                                3.<input type="file" id="foot3img" name="foot3img"><br><br>
                                4.<input type="file" id="foot4img" name="foot4img"><br><br>
                                5.<input type="file" id="foot5img" name="foot5img"><br><br>
                                6.<input type="file" id="foot6img" name="foot6img"><br><br>
                                <input type="submit" name="footimgupdate" value="Update"/><br><br>



                                <label><b><u>Blog Page Changes</u></b></label><br><br>
                                <label><b>Description Change</b></label><br>
                                <textarea id="blogdesc" name="blogdesc">  </textarea><br><br>
                                <input type="submit" name="blogdescupdate" value="Update"/><br><br>

                                <label><b>Image Change</b></label><br>
                                <input type="file" id="bdescimg" name="bdescimg"><br><br>
                                <input type="submit" name="bdescimgupdate" value="Update"/><br><br>

                                <label><b><u>Magazine Page Changes</u></b></label><br><br>
                                <label><b>Description Change</b></label><br>
                                <textarea id="magdesc" name="magdesc">  </textarea><br><br>
                                <input type="submit" name="magdescupdate" value="Update"/><br><br>

                                <label><b>Image Change</b></label><br>
                                <input type="file" id="mdescimg" name="mdescimg"><br><br>
                                <input type="submit" name="mdescimgupdate" value="Update"/><br><br>

                                <label><b><u>Login Page Changes</u></b></label><br><br>
                                <label><b>Image Change</b></label><br>
                                <input type="file" id="loginimg" name="loginimg"><br><br>
                                <input type="submit" name="loginimgupdate" value="Update"/><br><br>

                            </form>
                                </div>
                        </div>
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
















<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/set.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <script src="js/blogfun.js" type="text/javascript"></script>

    <script src="ckeditor/ckeditor.js"></script>
    <div id="mySidenav" class="sidenav">
    <p class="logo">SKC-Blog</p>
  <a href="http://localhost/BLOG/User.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
  <a href="http://localhost/BLOG/inBlog.php"class="icon-a" onclick="tab()"><i class="fa fa-pie-chart icons"></i>  Blogs</a>
  <a href="http://127.0.0.1:5500/Uploadd.html" class="icon-a" onclick="toggle()"><i class="fa fa-list icons"></i> Upload</a>
  <a href="http://localhost/BLOG/contacts.php"class="icon-a" onclick="tab()"><i class="fa fa-pie-chart icons"></i>  Contacts</a>
  <a href="http://localhost/BLOG/settings.php"class="icon-a"><i class="fa fa-user icons"></i>   Settings</a>
  <a href="javascript:void(0)"class="icon-a" onclick="logout()"><i class="fa fa-power-off"></i> Logout</a>
</div>
    <div id="upl">
        <div class="require">
            <h3 align="left">Settings<br>
            <img class="logo" src="pictures/logo.png" height="85px" width="95px">
                </div>
            <div class="upform">
                <div class="sp">
                    <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label class="hh"><b>Change Password</b></label><br>
                                <input id="cpass" type="text" name="cpass" placeholder="Current Password"  required/><br><br>
                                <input id="cinpass" type="text" name="cinpass" placeholder="New Password"  required/><br><br>
                            <input type="submit" name="passchange" value="Change Password"/>
                        <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                            <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label><b>Change Students Count</b></label><br>
                                <input id="sschange" type="text" name="sschange" placeholder="Enter Count"  required/><br><br>
                                <input type="submit" name="schange" value="Change"/>
                        <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                            <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label><b>Change Dashboard Image</b></label><br>
                                <input id="changeimg" type="file" name="changeimg" accept="image/x-png,image/gif,image/jpeg,image/jpg" required/><br><br>
                                <input type="submit" name="chimg" value="Change"/>
                        <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                                </div>
                        </div>
                        </div>
</body>
<script>
    CKEDITOR.replace('content');
    </script>
</html>