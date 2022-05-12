<!doctype html>
<html lang="en">
  <head>
  <style>

  .card{
    margin: 0 auto; /* Added */
    float: none; /* Added */
    margin-bottom: 10px; /* Added */
    margin-top: 50px;
    border-radius: 25px;
    
  }
  
  .btn{
    float: right;
    margin-left: 10px;
  }

  .addbtn{
    margin-bottom:-100px;

  }

  h5{
    color: #0047AB;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  }
  

  .card-title{
    color: #0047AB;
    font-size: 40px;
    font-weight: 900;
  }

  .card-text{
    color: #0047AB;
    font-weight: bold;
    font-size: 20px;
  }

</style>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Todo List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Bootstrap icons -->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />  
   <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">To-Do List</span>
</nav>

</head>
<body>
  
 
<div class="card" style="width: 50rem;">


  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    
    <h5 class="card-title">Thursday, 12</h5>
    <p class="card-text">May</p>
    <a href="<?php echo site_url('todos/create') ?>" class="btn btn-success mb-2">Create</a> 

    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }?>
  </div>

  <ul class="list-group list-group-flush">
    <br>
  <?php if($todos): ?>
   <?php foreach($todos as $todo): ?>
    <li class="list-group-item"><?php echo $todo['title']; ?>
    <a href="<?php echo base_url('todos/edit/'.$todo['id']);?>" class="btn btn-success">Edit</a>
    <a href="<?php echo base_url('todos/delete/'.$todo['id']);?>" class="btn btn-danger">Delete</a>
  </li>
    
  </ul>
  <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
  <?php endforeach; ?>
   <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
<script>
    $(document).ready( function () {
      $('#todos').DataTable();
  } );
  
</script>
</body>
</html>