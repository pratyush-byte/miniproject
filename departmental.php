
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
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
  <style>
body {
  background-image: url("images/index.jpg");
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
       
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

	<div class = "container">
    <div  class="jumbotron text-center" style="margin-bottom:0">
    <form action= 'validation.php' method= "post"  >
      <h1>Login</h1>
      <div class = "form group">
        <label> username</label>
        <input type="text" name="username" class ="form-control">

        
      </div>
       <div class = "form group">
        <label> password</label>
        <input type="password" name="password" class ="form-control">
        
        
      </div>


      <button type="submit" class ="btn btn-secondary"> Login </button>
      
    </form>
      

   </div>
  </div>




 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>