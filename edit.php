<?php

   $conn = mysqli_connect("localhost","root","","blog");
   if($conn==FALSE)
   {
	   echo "Connection Failed";
   }

   if(isset($_POST['edit']))
   {
	$id = $_POST['id'];
$que = "select * from content where id=$id ";
   $res = mysqli_query($conn,$que);
   while($row = mysqli_fetch_array($res))
   {
   ?>
   <!DOCTYPE html>
<html lang="en">
		<head>
		<link rel="stylesheet" href="css/upload.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <script src="ckeditor/ckeditor.js"></script>
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
    <div id="upl" style="margin:10px 10px;">
        <div class="require">
            <h3 align="left">Edit A Blog - Upload</h3><br>
            <b align="left">Enter the fields and Create a Blog :</b><br><br><hr><br>
            <img class="logo" src="pictures/logo.png" height="85px" width="95px">
                </div>
            <div class="upform">
                <div class="sp">
                    <form method="post" action="http://localhost/BLOG/edit.php" enctype="multipart/form-data">
						                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                                <label><b>Category</b></label><br>
                                <input id="cat" type="text" name="category" placeholder="Category" value='<?php echo $row["category"]?>' required/><br><br>
                                <label><b>Thumbnail Caption</b></label><br>
                                <input id="cap" type="text" name="cap" placeholder="caption" value='<?php echo $row["caption"]?>'  required/><br><br>
                                <label><b>Description (in Two Lines)</b></label><br>
                                <textarea id="desc" name="desc"><?php echo $row["description"]?></textarea><br><br>
                                <label><b>Date</b></label><br>
                                <input id="date" type="date" name="date" value='<?php echo $row["date"]?>'/><br><br>
                                <label><b>Thumbnail Image</b></label><br>
                                <input id="img" type="file" name="image"/><br><br>
                                <label><b>Cover Image</b></label><br>
                                <input id="cimg" type="file" name="cimage" /><br><br>
                                <label><b>Title of the Content</b></label><br>
                                <input id="title" type="text" name="title" placeholder="Title" value='<?php echo $row["title"]?>' required/><br><br>
                                <label><b>Subtitle / Second Title (Optional) </b></label><br>
                                <input id="stitle" type="text" name="stitle" placeholder="Subtitle" value='<?php echo $row["subtitle"]?>'/><br><br>
                                <label><b>Blog Document</b></label><br><br>
                                <textarea id="content"  name="content"><?php echo $row["contents"]?></textarea><br><br>
                                <label><b>Uploaded By</b></label><br><br>
                                <h4 style="margin-left:10px;font-family:calibri,cursive;" ><?php echo $row["staff"]?></h4><br><br>
                                <input type="checkbox" required><b>  Accept to Edit and Update a blog in SKC - BCA</b><br><br>
                                <input type="submit" name="editv" value="Update Now"/>
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

	<?php
   }
   }

   if(isset($_POST['editv']))
{
	$id = $_POST['id'];
	$category = $_POST['category'];
	  $caption  = $_POST['cap'];
	  $des = $_POST['desc'];
	  $date  = $_POST['date'];
	  $title = $_POST['title'];
	  $subtitle = $_POST['stitle'];
	  $content =$_POST['content'];

	  $que = "update content set category = '$category', caption = '$caption', description = '$des', date = '$date', title = '$title', subtitle = '$subtitle', contents = '$content' where id = $id ";
	  $res = mysqli_query($conn,$que);
	  if($res)
	  {
		  echo '<script> alert("Record Updated Successfully"); </script>';
		  echo '<script> location.href="http://localhost/BLOG/inblog.php"; </script>';
	  }
	  else{
		echo '<script> alert("Not Record updated Successfully"); </script>';
		echo '<script> location.href="http://localhost/BLOG/inblog.php"; </script>';
   }

}

if(isset($_POST['del']))
    {
        $id = $_POST['id'];
        $que = "Delete from content where id=$id ";
        $res = mysqli_query($conn,$que);
        if($res)
	  {
		  echo '<script> alert("Record Deleted Successfully"); </script>';
          echo '<script> location.href="inblog.php"; </script>';
	  }
	  else{
		echo '<script> alert("Not Record Deleted Successfully"); </script>';
        echo '<script> location.href="inblog.php"; </script>';
   }
    }
	?>
