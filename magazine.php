<?php
     $conn = mysqli_connect("localhost","root","","blog");
     if($conn==FALSE)
     {
       echo "Connection Failed";
     }
     $rr = "update security set mviews=mviews+1 where id=1 ";
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
    <title>Document</title>
    <style>
        body{
    background-color:white;
    font-family:cursive;
}
.name{
    width:50%;
    padding:0px 10px;
    display:flex;
    color:rgb(27, 10, 73);
    text-transform: uppercase;
    font-weight: 700;
    font-family:cursive;
}
.clgname{
  margin-left:5px;
  font-size:28px;
}
nav{
    display:flex;
    font-weight: 700;
    font-family:cursive;
    justify-content: space-around;
    align-items:center;
    padding:0px -3px;
    height:60px;
}

.nav-links{
    display:flex;
    justify-content: space-around;
     width:44%; 
}
.nav-links li{
    list-style:none;
}
.nav-links a{
    color:rgb(4, 4, 43);
    text-decoration: none;
    font-size: 21px;
    font-weight:bold;
    padding:14px 19px;
 }
 .nav-links li a:hover:not(.active){
    color:white;
    background-color: rgb(179, 72, 173);
 }
 .heading{
    background-color: white;
    width:97%;
    height:140%;
    padding:15px 21px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;

 }
 .heading .des{
    margin-top:100px;
    margin-left:15px;
  }
 .heading .des b{
    font-size:53px;
 }
 .heading .des p{
  font-size:22px;
  color:rgb(92, 91, 91);
  width: 745px;
 }
 .heading img{
  float:right;
  margin-top:-430px;
  margin-right:20px;
 }
 .post{
   background-color: beige;
   margin-left:15px;
   width:50%;
   float:left;
   border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
 }
 .post:hover{
   box-shadow:0px 3px 6px rgba(0,0,0,0.16);
   transform:translate(0px,-8px);
 }
 input[type="submit"]:hover{
   scale: 1.1;
}
 .post input[type="submit"]{
   margin-left:5px;
   font-family: cursive;
   font-weight: bold;
   background-color:gold;
   border:none;
   color:black;
   padding:7px;
   width:45%;
 }
 input[type="text"]{
     margin-top:20px;
     margin-left:385px;
     padding:12px;
     width:25%;
     border:4px solid rgb(179, 72, 173);
     border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
 }
 input[type="button"]{
     padding:16px;
     width:10%;
     font-weight:bold;
     background-color: rgb(179, 72, 173);
     border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        border:none;
 }
 input[type="button"]:hover{
  scale: 1.1;
 }
 .post .photo
 {
   height:225px;
   width:100%;
 }
 .post .description{
   margin-left:10px;
   margin-right:10px;
 }
 .post .description h5{
   color: rgb(92, 92, 88);
 }
 .post .description h3{
   color:rgb(27, 10, 73);
 }
 .post .description p{
   color:black;
 }
 h1{
    color:rgb(27, 10, 73);
 }
 .heading button{
  color:white;
  margin-top:-2px;
  margin-left:8px;
  background-color: rgb(179, 72, 173) ;
   padding:10px;
   font-family:cursive;
   font-size:17px;
   width:10%;
   border-color:white;
   border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;

 }
 .heading button:hover{
    scale:1.1;
 }
 table{
    background-color:#b1a9a9;
 }
 .filters{
  margin-top:2px;
  margin-left: 15px;
    width:70%;
    padding:1px 15px;
    background-color:white;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;

 }
 .filters li{
    list-style:none;
}
.filters a{
    text-decoration: none;
    font-size: 18px;
    font-weight:bold;
    padding:14px 16px;
    color:black;
 }
 .filters div{
  padding:10px;
 }
 .filters div:hover{
  color:white;
  background-color: rgb(179, 72, 173);
  scale:1.1;
 }
 .col{
  font-weight:bold;
  font-size:20px;
   color:rgb(179, 72, 173);
 }

 table .bloglist{
  display:flex;
 }
 table .td1{
   width:30%;
 }
 table .td2{
   width:70%;
 }
 .btn{
    padding: 10px 20px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.7);
    color: #000;
    text-decoration: none;
    text-transform: capitalize;
}

.blogs-section{
    width: 92%;
    padding: 50px 5vw;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 35px;
}
.blog-card{
  border:2px solid grey;
  height: 85vh;
  padding:20px;
  border-radius:30px;
}
.blog-card:hover{
  scale:1.02;
  box-shadow:rgba(0,0,0,0.9);
}
.blog-image{
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
}

.blog-overview{
  margin: 10px 0 20px;
    line-height: 30px;
    overflow: hidden;
    height: 15vh;
}

.btn.dark{
    background: gold;
    color: black;
    border:none;
}
    </style>
</head>
<body>
  <script src="blogfun.js" type="text/javascript"></script>
    <div class="heading">
      <nav>
        <div class="name">
          <img src="images/deptlogo.jpg" height="75px" width="85px" style="margin-top:18px;"><h3 class="clgname">SKC - BCA </h3>
        </div>
        <ul class="nav-links">
        <LI><a href="Home.php" target="_self">Home</a>
        <li><a href="Blog.php" target="_self">Blogs</a></li>
                            <LI><a href="contact.html" target="_self">ContactUs</a>
                            <LI><a href="Login.php" target="_self">Login</a></button>
                            </ul>
    </nav>
    <div class="des">
    <b>Magazine Posts <br>of BCA</b>
    <p><?php echo $row["magdesc"]?></p><br>
    <button id="ch" type="submit" name="clicktoblog" onclick="blog(null)" target="_self" >Back</button><br><br><br> 
    </div>
    <img src="images/<?php echo $row["magimg"]?>" width="33%" height="40%"/>
  </div><br>
   
  <?php
       }
  ?>

  <input type="text" name="search" placeholder="Search.."/><input type="button" name="searchbut" value="Search"/>
  <br><br><br>
  <div class="blogs">

   <section class="blogs-section">  
     <?php 
       $que = "select * from magazine";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
          ?>
          <form method="post" action="magread.php">
          <div class="blog-card">
          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
            <img align="center" src="images/<?php echo $row['Timage'];?>" class="blog-image" alt="">
            <h1 class="blog-title"><?php echo $row["caption"]; ?></h1>
            <p class="blog-overview"><?php echo $row["descrip"]; ?> </p>
            <input type="submit" value="Click to View" name="view" class="btn dark"/><br><br>
        </div>
       </form>
        
        <?php
       }
          ?>
          </section>
  </div>
</body>
</html>