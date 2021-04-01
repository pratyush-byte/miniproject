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
  background-image: url("images/index1.jpg");
}
</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
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

<div  style="margin-bottom:0" class="container">
  <h1  style="text-align: center; color:red">ECE DEPARTMENTAL STOCK</h1>
    <form action= 'enterece.php' method= "post" style="margin-bottom:0" >
      <h1 class = 'container' style = 'color:red'>Add items</h1>

       <div class = "form group">
        <label class = 'container' style = 'color:red' > Item ID</label>
        <input class = 'container' type="text" name="id" class ="form-control">

        
      </div>
       
      <div class = "form group">
        <label class = 'container' style = 'color:red' > Item NAME</label>
        <input class = 'container' type="text" name="username" class ="form-control">

        
      </div>
       <div class = "form group">
        <label class = 'container'style = 'color:red'> stock</label>
        <input class = 'container' type="text" name="number" class ="form-control">
        
        
      </div>




      <button type="submit" class ="btn btn-secondary"> Enter </button>
      
    </form>
</div>


<h1 class="main-div" style = 'color:red'>Stock List</h1>
    <div class="center">

    	<table id="customers">
    		     <tr>
    			     <th> ID </th>
    			     <th> NAME</th>
    			     <th> Stock</th>
    		     </tr>



    	</table>

    </div>








 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
