<?php
     $conn = mysqli_connect("localhost","root","","blog");
     if($conn==FALSE)
     {
       echo "Connection Failed";
     }
     $rr = "update security set viewers=viewers+1 where id=1 ";
        $res = mysqli_query($conn,$rr);


        $que = "select * from overcontent";
       $ress = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($ress))
       {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKC BCA Blog</title>
    <link rel="stylesheet" href="css/Homestyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ffa7f4cd19.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <script src="js/blogfun.js" type="text/javascript"></script>
    <nav>
      <img src="images/banner.png" alt="college banner" class="top-banner"> 
      <img src="images/deptlogo.jpg" alt="department-logo" class="dept-logo">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
          
        <ul class="nav-links">
          <li><a href="Home.php" target="_self">Home</a></li>
          <li><a href="Blog.php" target="_self">Blogs</a></li>
          <li><a href="magazine.php" target="_self">Magazine</a></li>
          <li><a href="https://kaliswaricollege.edu.in" target="_blank">AboutUs</a></li>
          <li><a href="contact.html" target="_self">ContactUs</a></li>
          <li><a href="Login.php" target="_self">Login</a></li>
        </ul>
      </nav>

    <div class="bar">
        <div class="des">
        <b>Department of <br>Computer Applications <br>- BCA</b>
       <p><?php echo $row["deptdesc"]?></p>
       <input type="submit" name="clicktoblog" onclick="home()" value="View Blogs"/> 
        </div>
    </div><br><br><br><br>
   

    
    <h2 class="tit" align="center"><u>Vision & Mission</u></h2><br><br>
    <div class="boxex">
        <div id="boxx">
            <h2 class="kk" align="center">Vision of Institution</h2>
           <img class="bimg" src="pictures/clglogo.png" alt="">
           <div class="layer">
            <h3>Vision of the Instituition</h3>
             <ul>
                <p>To impart quality higher education to produce highly talented youth capable of 
                    developing the nation</p>
             </ul>
            
           </div>
        </div>
    
        <div id="boxx">
            <h2 class="kk" align="center">Vision of the Department</h2>
             <img class="bimg" src="pictures/div.png" alt="">
              
             <div class="layer">
                <h3>Vision of the Department</h3>
                <ul>
                    <p>To groom the students technically and ethically so that they remains a preferred 
                        choice of the software industry.</p>
                    <p>To set up the students for a globalized technological society and orient them 
                        towards serving the general public.
    </p>
                </ul>
                
               </div>
        </div>
            
          <div id="boxx">
            <h2 class="kk" align="center">Mission of the Department</h2>
             <img class="bimg" src="images/deptlogo.jpg" alt="">
             <div class="layer">
                <h3>Mission of the Department</h3>
                <ul>
                    <p>To train interpersonal and communication skills for the rural students.</p>
                    <p>To accomplish employability in programming industry and other industrial areas 
                         and furthermore elevate understudies to turn into a successful entrepreneur.</p>
                    <p>To prepare young minds in the field of recent technologies through education, 
                        research and industry-institute interaction to serve society, the nation and beyond</p>
                </ul>
                
               </div>
    </div>
    </div>
    <div class="center">
        <img src="images/<?php echo $row["img2"]?>" width="40%" height="40%" style="margin-left:15px;"/>
     <div class="des2">
        <b><?php echo $row["deshead1"]?></b>
        <p><?php echo $row["descrip1"]?></p>
     </div>
     </div>
     <div class="bottom">
        <img src="images/<?php echo $row["img3"]?>" width="40%" height="40%" style="margin-left:15px;"/>
     <div class="des3">
        <b><?php echo $row["deshead2"]?></b>
        <p><?php echo $row["descrip2"]?></p>
     </div>
     </div>
     <?PHP 
       $que = "select * from security where id=1";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
	?>
     <div class="boxess">
            <div class="boxes">
            <div class="bos">
          <h1><i class="fa fa-male"></i> <?php echo $row["viewers"]?>+</h1><br>
          <h3>VIEWERS</h3>
        </div>   
        <div class="bos">
          <h1><i class="fa fa-male"></i>  <?php echo $row["students"]?>+</h1><br>
          <h3>STUDENTS</h3>
        </div>
        <div class="bos">
            <h1><i class="fa fa-bookmark"></i> <?php echo $row["staff"]?>+</h1><br>
          <h3>STAFFS</h3>
        </div>
        <div class="bos">
            <h1><i class="fa fa-handshake-o"></i>     100%</h1><br>
          <h3>PLACEMENTS</h3>
        </div>
        </div>
        <?PHP
	   }
    }
	?>
     </div>
     <div class="footer">
        <div>
            <h2>About</h2><hr width="10%" align="left" size="5px solid" style="margin-top: -18px;"color="beige"><br>
            <p>To groom the students technically and ethically so that they remains a preferred 
                choice of the software industry.To set up the students for a globalized technological society and orient them 
                towards serving the general public.</p>
            

        </div>
        <div>
            <h2>Get in Touch</h2><hr width="10%" align="left"  size="5px solid" style="margin-top: -18px;
            "color="beige"><br>
            <h3><i class="bi-geo-alt"></i>   Virudhunagar Main Road, Anaikuttam
                Sivakasi – 626 130</h3>
            <h3><i class="bi-telephone"></i>  (+91) 9487487825</h3>
            <h3><i class="bi-chat-left"></i>  srikaliswaricollege@gmail.com</h3>
            <h3><i class="bi-alarm"></i>  Mon-Sat, 10AM - 4.00PM</h3>
        </div>
        <div>
            <h2>Useful Links</h2><hr width="10%" align="left"  size="5px solid" style="margin-top: -18px;"color="beige"><br>
            <a href="#" class="links"><i class="fa-brands fa-youtube" style="color: #ffffff;"></i></a>
            <a href="#" class="links"><i class="fa-solid fa-globe" style="color: #ffffff;"></i></a>
            <a href="#" class="links"><i class="fa-brands fa-linkedin" style="color: #ffffff;"></i></a>

        </div>
        <div>

   <?php
        $que = "select * from overcontent";
       $ress = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($ress))
       {
?>
            <h2>Latest Events</h2><hr width="10%" align="left" size="5px solid" style="margin-top: -18px;"color="beige"><br>
            <table>
                <tr>
                    <td><img src="images/<?php echo $row["fimg1"]?>" width="100" height="80"></td>
                    <td><img src="images/<?php echo $row["fimg2"]?>" width="100" height="80"></td>
                    <td><img src="images/<?php echo $row["fimg3"]?>" width="100" height="80"></td>
                </tr>
                <tr>
                    <td><img src="images/<?php echo $row["fimg4"]?>" width="100" height="80"></td>
                    <td><img src="images/<?php echo $row["fimg5"]?>" width="100" height="80"></td>
                    <td><img src="images/<?php echo $row["fimg6"]?>" width="100" height="80"></td>
                </tr>
            </table>
        </div><br><br><br><br>
     </div>
    <div class="last">
        <div class="rg">
        <h3 align="center" ><a href="#">&copy; SKC-BCA</a>  - All Rights Reserved</h3></div>
    </div>


    <?php
       }
    ?>
    
    
</body>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var y = document.getElementsByClassName("desp");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    y[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000); // Change image every 2 seconds
}
</script>
</html>