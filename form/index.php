<?php include "header.php"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>

<h1>Database Crud</h1>
<!-- <h>Find user based on Name</h> -->
<div class="topnav" style = "padding:20px; float:left;">
<form action="index.php">
<a href="#">
   <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="search">
   <button class="btn btn-outline-success my-2 my-sm-o" type="submit">search</button>
</a>
   <a href="index.php">Back to home</a>
</form>
</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right;">Add New Person</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="index.php" method="post">
  <div class="imgcontainer">  <h2>create new person</h2></div>


    <div class="container">
      <label for="name"><b>Name:</b></label>
      <input type="text" placeholder="Enter name" name="name" required>

      <label for="email"><b>Email:</b></label><br>
      <input type="email" placeholder="Enter email" name="email" required><br>

      <label for="Phone number"><b>Phonenumber:</b></label><br>
      <input type="number" placeholder="Enter Phone number" name="Phone number" required><br>

      <label>Gender: </label><br>
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female<br><br>

      <label for="date"><b>Date of Birth:</b></label><br>
      <input type="date" placeholder="Enter date " name="date" required><br>

      <label for="weight"><b>Weight:</b></label><br>
      <input type="float" placeholder="Enter weight" name="weight" required><br>

      <label>Married: <span class="red">* </label><br>
      <input type="radio" name="married" value="yes">yes
      <input type="radio" name="married" value="no">No<br><br>

      <label>Timein:  </label><br>
      <input type="time" name="timein" value="time in">
  
      <button type="submit">Add</button>
 
    
    </div>
  </form>
</div>
<div>
<body class ="table">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Weight</th>
      <th scope="col">Married</th>
      <th scope="col">Timein</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td> <a href="create.php"><strong>Create</strong></a> 
      <a href="read.php"><strong>Read</strong></a>
      <a href="delete.php"><strong>Delete</strong></a> </td>
    </tr>
    <tr>
    <td>1</td>
      <td></td>
      <td></td>    
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td> <a href="create.php"><strong>Create</strong></a> 
      <a href="read.php"><strong>Read</strong></a>
      <a href="delete.php"><strong>Delete</strong></a> </td>
    </tr><tr>
    <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td> <a href="create.php"><strong>Create</strong></a> 
      <a href="read.php"><strong>Read</strong></a>
      <a href="delete.php"><strong>Delete</strong></a> </td>
    </tr><tr>
    <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td> <a href="create.php"><strong>Create</strong></a> 
      <a href="read.php"><strong>Read</strong></a>
      <a href="delete.php"><strong>Delete</strong></a> </td>
    </tr><tr>
    <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td> <a href="create.php"><strong>Create</strong></a> 
      <a href="read.php"><strong>Read</strong>
      <a href="delete.php"><strong>Delete</strong></a> </a></td>
    </tr>
    <tr>
    <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td> <a href="create.php"><strong>Create</strong></a> 
      <a href="read.php"><strong>Read</strong></a>
      <a href="delete.php"><strong>Delete</strong></a> </td>
    </tr><tr>
    <td>1</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     <td> <a href="create.php"><strong>Create</strong></a> 
      <a href="read.php"><strong>Read</strong></a>
      <a href="delete.php"><strong>Delete</strong></a> </td>
    </tr>
    
  </tbody>
</table>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>


<ul>
  <li>
    

<?php include "footer.php"; ?>