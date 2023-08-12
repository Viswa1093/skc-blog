var pass;
  function upload()
  {
    var title = document.getElementById("title").value;
    var category = document.getElementById("cat").value;
    var Description =document.getElementById("desc").value;
    var date = document.getElementById("date").value;
    var photo = document.getElementById("photo1").files[0];
    document.getElementById('img').src=photo;
    alert("Uploaded Successfully");
    alert(photo);
    window.open("User.html");
  }
  function logout(){
    alert("Logging Out....");
    window.close("http://localhost/BLOG/newdash.php");
  }

  function home(){
    window.open("http://localhost/BLOG/Blog.php","_self");
  }
  function blog(){
    window.open("http://127.0.0.1:5500/Home.html","_self");
  }
  function back(){
    window.open("http://localhost/BLOG/Blog.php","_self");
  }
  
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000); // Change image every 2 seconds
  }