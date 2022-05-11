<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Todo List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">To-Do List</span>
</nav>

</head>
<body>
 
<div class="container mt-5">
    <a href="<?php echo site_url('todos/create') ?>" class="btn btn-success mb-2">Create</a>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>

  <div class="row mt-3">
      <!--Row for todolist-->
     <div class="row" >
   <?php if($todos): ?>
   <?php foreach($todos as $todo): ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $todo['id']; ?></h5>
        <p class="card-text"><?php echo $todo['title']; ?></p>
        <p class="card-text"><?php echo $todo['description']; ?></p>
        <a href="<?php echo base_url('todos/edit/'.$todo['id']);?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url('todos/delete/'.$todo['id']);?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
    <br>
  </div>
  
  <?php endforeach; ?>
   <?php endif; ?>


</div>

  </div>
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