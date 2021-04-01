<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:first.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
  <style>
div.a {
   -webkit-text-decoration-line: overline; 
   text-decoration-line: overline; 
}

div.b {
   -webkit-text-decoration-line: underline; 
   text-decoration-line: underline; 
}

div.c {
   -webkit-text-decoration-line: line-through; 
   text-decoration-line: line-through; 
}

div.d {
   -webkit-text-decoration-line: overline underline; 
   text-decoration-line: overline underline; 
}
</style>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
  <style>
body {
  background-image: url("images/index1.jpg");
}
</style>
<style>


h1 {
  font-size: 60px;
}

</style>

 
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sikkim Manipal Institute Of Technology</a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="first.php">Home</a>
        </li>
 
         <li class="nav-item">
          <a class="nav-link active" href="departmental.php">Departmental Stock</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
       
      <div class = 'container'>
     	<h5 style="color:white;" >welcome <?php echo $_SESSION['username']; ?></h5>
     	<a class='text-center' href="logout.php"> LOGOUT </a>
     </div>
       
      </ul>
 
    </div>
  </div>
</nav>

<div  class = 'container'class='text-center' >
	<div class = 'b'>
    <h1 style="color:white"> Select Department</h1>
    </div>
</div>


 <form class = 'container' action= 'CSE.php' method= "post"  >
 	<p class="solid">
     <h2>
      <button type="submit" class ="btn btn-secondary"> Computer Science</button>
     </h2>
     </p> 
    </form> 

    <form class = 'container' action= 'IT.php' method= "post"  >
     
     <p class="solid">
      <button type="submit" class ="btn btn-secondary"> Information Technology </button>
      </p>
    </form> 

<form class = 'container' action= 'ECE.php' method= "post"  >
     <p class="solid">
      <button type="submit" class ="btn btn-secondary">Electronic and Communication Engineering </button>
      </p>
    </form> 

<form class = 'container' action= 'EE.php' method= "post"  >
     <p class="solid">
      <button type="submit" class ="btn btn-secondary">  Electrical and Electronics Engineering </button>
      </p>
    </form> 

<form class = 'container' action= 'ME.php' method= "post"  >
     <p class="solid">
      <button type="submit" class ="btn btn-secondary">  Mechanical Engineering  </button>
      
    </p>
 </form> 



	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>