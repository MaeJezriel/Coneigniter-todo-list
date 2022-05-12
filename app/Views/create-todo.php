<!DOCTYPE html>
<html>
<head>
<title>Todo List</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">

<style>

  .card{
    margin: 0 auto; /* Added */
    float: none; /* Added */
    margin-bottom: 10px; /* Added */
    margin-top: 50px;   
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

  label{
    color: #1434A4;
    font-weight: bold;
    margin-left: 0px;
  }

 .form-group{
      width: 90%;
      margin-left: 40px;
  }

  .form-group{
      width: 90%;
      height: 100
      margin-left: 40px;
  }



</style>

</head>




<div class="card" style="width: 50rem;">


  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body">
    
    <h5 class="card-title">Create Task</h5>
    <!-- <p class="card-text">May</p> -->
 

   
  </div>

  <form action="<?php echo base_url('/todos/store');?>" name="user_create" id="todo_create" method="post" accept-charset="utf-8">
<div class="form-group">
<label for="formGroupExampleInput">Title</label>
<input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Please enter Title">
</div> 
<div class="form-group">
<label for="description">Description</label>
<input type="text" name="description" class="form-control" id="description" placeholder="Please enter Description">
</div>   
<div class="form-group">
<button type="submit" id="send_form" class="btn btn-success">Submit</button>
</div>
</form>
  <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
 
</div>





<script>
</script>
</body>
</html>