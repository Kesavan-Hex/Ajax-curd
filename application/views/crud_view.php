<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTf-8">
    <title>CRUD operations </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/css/bootstrap.min.css">
</head>
<body>
   <div class="jambotron">
    <h1 align="center">CRUD CI App<h1>
   </div>
<div class="container">
<div class="clear-fix">
<h3 style="float: left">All Productse</h3>
<a href="#" class="btn btn-primary" style="float: right"  data-toggle="modal" data-target="#exampleModal">Add Product</a>
</div>
<table class="table table-striped table-hover">
    <thead>
     <tr>
        <th>Product Nane</th>
        <th>Product Price</th>
        <th>Product Quantity</th>
        <th>Actions</th>
     <tr>
   </thead>
<tbody>
    <?php foreach($product_details as $products): ?>
    <tr>
      <td>
        <?php echo $products->name; ?>
    </td>
    <td>
        <?php echo $products->price; ?>
    </td>
    <td>
        <?php echo $products-> quantity; ?>
    </td>
    <td>
        <a href="<?php echo base_url(); ?>index.php/crud/editProduct/<?php echo $products->id; ?>"  class="btn btn-success">Edit</a>
        <a href="<?php echo base_url(); ?>index.php/crud/deleteProduct/<?php echo $products->id; ?>" class="btn btn-danger">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</tbody> 
</table>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="<?php echo base_url(); ?>index.php/crud/addproduct" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter Price" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" value="Add Products" class="btn btn-info">
      </div> 
    </form>
    </div>
  </div>
</div>

<?php if($this->session->flashdata('error')): ?>
<div align="center" style="color:#FFF" class="bg-danger">
<?php echo $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('inserted')): ?>
<div align="center" style="color:#FFF" class="bg-success">
<?php echo $this->session->flashdata('inserted'); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('updated')): ?>
<div align="center" style="color:#FFF" class="bg-success">
<?php echo $this->session->flashdata('updated'); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('deleted')): ?>
<div align="center" style="color:#FFF" class="bg-warning">
<?php echo $this->session->flashdata('deleted'); ?>
</div>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>