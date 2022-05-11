<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Todo List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
     <table class="table table-bordered" id="todos">
       <thead>
          <tr>
             <th>ID</th>
             <th>Title</th>
             <th>Description</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($todos): ?>
          <?php foreach($todos as $todo): ?>
          <tr>
             <td><?php echo $todo['id']; ?></td>
             <td><?php echo $todo['title']; ?></td>
             <td><?php echo $todo['description']; ?></td>
             <td>
              <a href="<?php echo base_url('todos/edit/'.$todo['id']);?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url('todos/delete/'.$todo['id']);?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
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