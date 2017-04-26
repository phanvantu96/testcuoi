<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" >
	<title>Thêm sinh viên</title>
	<link rel="stylesheet" type="text/css" href="../view/admin/css/bootstrap.min.css">
	<script type="text/javascript" src="../view/admin/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../view/admin/js/validate.js"></script>
</head>
<body>
<div class="wrapper">
<H1 style="font-weight:bold;">Add Products </H1><br>

<form action="?action=add_product" method="post" name="form_lh" enctype="multipart/form-data" onsubmit="return kiemtra()">
  <fieldset class="form-group">
    <label for="exampleInputEmail1"><h4>Product Name</h4></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  >
    
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1"><h4>Product Descreption</h4></label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="desc"  >
    
  </fieldset>
  

  <fieldset class="form-group">
    <label for="exampleInputEmail1"><h4>Product Price</h4></label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="price"  >
    
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputFile"><h4>Product Images</h4><br>
    

    <input type="file" class="form-control-file" id="exampleInputFile"  name="file">
    
  </fieldset>
  
    <button type="submit" name="sm-addpro" class="btn btn-primary">Add</button>
</form>
</div>
</body>
</html>