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
    <link rel="stylesheet" href="css/upload.css" type="text/css"/>
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

        <div id="upl">
        <div class="require">
            <h3 align="left">Create A Magazine - Upload</h3><br>
            <b align="left">Enter the fields and Upload a Magazine :</b><br><br><hr><br>
            <img class="logo" src="pictures/logo.png" height="85px" width="95px">
                </div>
            <div class="upform">
                <div class="sp">
                    <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                        <input type="hidden" name="staff" value="<?php echo $row["log"]?>" />
                                <label><b>Category</b></label><br>
                                <input id="cat" type="text" name="category" placeholder="Category"  required/><br><br>
                                <label><b>Thumbnail Caption</b></label><br>
                                <input id="cap" type="text" name="cap" placeholder="caption"  required/><br><br>
                                <label><b>Description (in Two Lines)</b></label><br>
                                <textarea id="desc" name="desc">  </textarea><br><br>
                                <label><b>Date</b></label><br>
                                <input id="date" type="date" name="date" /><br><br>
                                <label><b>Thumbnail Image</b></label><br>
                                <input id="img" type="file" name="image"accept="image/x-png,image/gif,image/jpeg,image/jpg" required/><br><br>
                                <label><b>Magazine (pdf only)</b></label><br><br>
                                <input id="doc" type="file" name="magz" required/><br><br>
                                <label><b>Uploaded By</b></label><br><br>
                                <h4 style="margin-left:10px;font-family:calibri,cursive;" ><?php echo $row["log"]?></h4><br><br>
                                <?PHP
	   }
	?>
                                <input type="checkbox" required><b>  Accept to Upload a blog in SKC - BCA</b><br><br>
                                <input type="submit" name="mag" value="Upload"/>
                                    <input name="clear" type="reset" value="Clear"/><br><br>
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





<!--
<body>
    <script src="js/blogfun.js" type="text/javascript"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <div id="upl">
        <div class="require">
            <h3 align="left">Create A Blog - Upload</h3><br>
            <b align="left">Enter the fields and Create a Blog :</b><br><br><hr><br>
            <img class="logo" src="pictures/logo.png" height="85px" width="95px">
                </div>
            <div class="upform">
                <div class="sp">
                    <form method="post" action="http://localhost/BLOG/uploading.php" enctype="multipart/form-data">
                                <label><b>Category</b></label><br>
                                <input id="cat" type="text" name="category" placeholder="Category"  required/><br><br>
                                <label><b>Thumbnail Caption</b></label><br>
                                <input id="cap" type="text" name="cap" placeholder="caption"  required/><br><br>
                                <label><b>Description (in Two Lines)</b></label><br>
                                <textarea id="desc" name="desc">  </textarea><br><br>
                                <label><b>Date</b></label><br>
                                <input id="date" type="date" name="date" /><br><br>
                                <label><b>Thumbnail Image</b></label><br>
                                <input id="img" type="file" name="image"accept="image/x-png,image/gif,image/jpeg,image/jpg" required/><br><br>
                                <label><b>Cover Image</b></label><br>
                                <input id="cimg" type="file" name="cimage" accept="image/x-png,image/gif,image/jpeg,image/jpg" required/><br><br>
                                <label><b>Title of the Content</b></label><br>
                                <input id="title" type="text" name="title" placeholder="Title"  required/><br><br>
                                <label><b>Subtitle / Second Title (Optional) </b></label><br>
                                <input id="stitle" type="text" name="stitle" placeholder="Subtitle"/><br><br>
                                <label><b>Blog Document</b></label><br><br>
                                <textarea id="content"  name="content">  </textarea><br><br>
                                <input type="checkbox" required><b>  Accept to Upload a blog in SKC - BCA</b><br><br>
                                <input type="submit" name="submit" value="Upload"/>
                                    <input name="clear" type="reset" value="Clear"/><br><br>
                            </form>
                                </div>
                        </div>
                        </div>
</body>-->
<script>
    CKEDITOR.replace('content');
    </script>
</html>