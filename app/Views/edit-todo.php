<!DOCTYPE html>
<html>
<head>
<title>Todo List</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>
<body>
<div class="container">
<br>
<?= \Config\Services::validation()->listErrors(); ?>
<span class="d-none alert alert-success mb-3" id="res_message"></span>
<div class="row">
<div class="col-md-9">
<form action="<?php echo base_url('/todos/update');?>" name="edit-todo" id="edit-todo" method="post" accept-charset="utf-8">
<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $todo['id'] ?>">
<div class="form-group">
<label for="formGroupExampleInput">Title</label>
<input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Please enter title" value="<?php echo $todo['title'] ?>">
</div> 
<div class="form-group">
<label for="description">Description</label>
<input type="text" name="description" class="form-control" id="description" placeholder="Please enter description" value="<?php echo $todo['description'] ?>">
</div>   
<div class="form-group">
<button type="submit" id="send_form" class="btn btn-success">Submit</button>
</div>
</form>
</div>
</div>
</div>
<script>
</script>
</body>
</html>