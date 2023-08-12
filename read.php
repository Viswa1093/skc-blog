<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
       body{
    background-color:#f5eded;
    font-family:cursive;
    margin:30px;
}
.name{
  float:left;
  margin-top:-15px;
    width:100%;
    padding:9px 10px;
    color:rgb(27, 10, 73);
    text-transform: uppercase;
    font-weight: 700;
    font-family:cursive;
    background-color:#762476;
    color:white;
}
.name img{
  margin-left:66px;
}
.clgname{
  margin-right: 230px;
  margin-left:10px;
  float:right;

}
.bar .name img{
   margin-top:15px;

}

 .bar{

  height:90%;
   width:100%;
   margin:auto;
   overflow:hidden;
    padding:10px 0px;
    color:rgb(4, 4, 43);
    font-size:24px;
    font-family:cursive;
    
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    height:50%;
 }
 
 .document{
      width:100%;
      display:flex;
      background-color:rgb(166, 183, 201);
      padding-top: 18px;
      padding-bottom: 18px;

      
 }
 .content{
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    width:100%;
    background-color:beige;
    margin-right:25px;
    margin-left:25px;
    background-color:rgb(240 245 249);
    padding:20px;
 }
 .post{
    padding:15px;
    width:30%;
    height:50%;
    background-color:white;
    margin-right:15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
 }
 .description .date{
    
     float:right;
     margin-top: -61px;
     color:red;
     background-color:#dbbbaf;
    width:27%;
    padding:8px;
 }
 .description .titlebox{
    width:102.5%;
    margin-left:-20px;
    background:linear-gradient(rgba(0,0,0,3.6),violet,black);;
    padding:10px;
 }
 .cate{
    margin-top:28px;
    color:#210d8f;
    background-color:dodgerblue;
    width:30%;
    padding:8px;
 }

 .sub{
    background-color:beige;
    width:50%;
    margin-left:195px;
    padding:3px;
 }
 .btn{
    padding: 10px 20px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.7);
    color: #000;
    text-decoration: none;
    text-transform: capitalize;
    width:40%;
}

.blogs-section{
    width: 90%;
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
    width:100%;
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
}

.blog-overview{
    margin: 5px 0 20px;
    line-height: 25px;
    font-family:calibri;
}

.btn.dark{
    background: gold;
    color: black;
    border:none;
}
.blog, .article{
    position: relative;
    height: fit-content;
    padding-bottom: 0;
    margin:14px;
}

 .title{
    min-height: auto;
    height: fit-content;
    font-size:40px;
    text-align:center;
    font-family:cursive;
    padding: 0 10px;
    width:100%;
    white-space: normal;
}

.published{
    margin: 20px 0 60px;
    padding: 10px 10px;
    text-transform: capitalize;
    font-style: italic;
    color: rgba(0, 0, 0, 0.5);
    background-color: red;
    width:25%;
    font-family:cursive;
    color:white;
    font-size:20px;
}

.published span{
    font-weight: 700;
    text-align:center;
    font-style: normal;
    padding:20px;
}

.article *{
    margin: 17px 0;
    color: #2d2d2d;
    font-family:calibri;
    font-size:22px;
}

.article-image{
    max-width: 100%;
    max-height: 400px;
    display: block;
    margin: 30px auto;
    object-fit: contain;
}

.sub-heading{
    padding: 0 5vw;
    color: #2d2d2d;
    font-weight: 500;
    font-size: 40px;
    margin-top: 80px;
}

    </style>
</head>
<body>
<script src="js/blogfun.js" type="text/javascript"></script>
    <div class="bar">
        <div class="name">
                <img src="pictures/logo.png" height="65px" width="75px"><h3 class="clgname">SKC - BCA Department of Computer Application Blog</h3>
</div>
      <br><br><br>
</div>
   <?php

     $conn = mysqli_connect("localhost","root","","blog");
     if($conn==FALSE)
     {
       echo "Connection Failed";
     }

    if(isset($_POST['view']))
    {
        $id = $_POST['id'];
        $rr = "update content set view=view+1 where id=$id ";
        $res = mysqli_query($conn,$rr);
     $que = "select * from content where id=$id ";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
          ?>

           <div class="banner"> <img src="images/<?php echo $row['cimage'];?>" width="100%"> 
           <p class="published" style="float:left;"><span>published at -  <?php echo $row["date"]; ?></span></p>
    <p class="published" align="center" style="float:right;"><span>category -  <?php echo $row["category"]; ?></span></p><br><br><br>
    <br>
        </div>
 <br>
<div class="blogs">
<h3 class="title"><?php echo $row["title"]; ?></h3>
    <h5 class="title"><?php echo $row["subtitle"]; ?></h5>
    <div class="article">
    <?php echo $row["contents"]; ?>
    </div>
</div>
   
 <?php
       }

       ?>
         <br><br><h1 align=center>Read More </h1>
         <section class="blogs-section">
<?php
       $que = "select * from content where not id=$id ";
       $res = mysqli_query($conn,$que);
       while($row = mysqli_fetch_array($res))
       {
          ?>
          <form method="post" action="read.php">

          <div class="blog-card">
          <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
            <img align="center" src="images/<?php echo $row['image'];?>" class="blog-image" alt="">
            <h1 class="blog-title"><?php echo $row["title"]; ?></h1>
            <p class="blog-overview"><?php echo $row["description"]; ?> </p>
            <input type="submit" value="Click to View" name="view" class="btn dark"/><br><br>
        </div>

       </form>


      <?php
       }
    }
          //<img src="<?php echo $row["image"]; q>" width="100%" height="100%">

          
          ?>
                 </section>
</div>
</body>
</html>



























