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

<h1 align="center">Edit Product</h1>
<form action="<?php echo base_url(); ?>index.php/crud/update/<?php echo $singleProduct->id; ?>" method="post">
     
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $singleProduct->name; ?>">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter Price" class="form-control" value="<?php echo $singleProduct->price; ?>">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control" value="<?php echo $singleProduct->quantity; ?>">
        </div>
      
        <input type="submit" name="edit" value="Edit Product" class="btn btn-primary">
       
    </form>
</div>
</html>