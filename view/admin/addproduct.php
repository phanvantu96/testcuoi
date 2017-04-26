<?php include '../view/admin/header.php'; ?> 
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
<!--                            <span style="color: red;font-size: 50px;font-weight: bold">
                                Hello Admin !
                            </span>-->
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                
                                <span style="font-weight: bold; font-size: 30px;color: #FC9A11"> Add Product</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.show product -->
               
               <div class="col-md-6">
  <form class="form-horizontal" role="form" action="?action=add_pro" method="post" enctype="multipart/form-data">
   
     
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Name Product</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required="" name="name" id="card-holder-name" >
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Describe product</label>
        <div class="col-sm-9">
          <textarea type="text" class="form-control" cols="50" rows="15" required="" name="desc" id="card-holder-name" ></textarea> 
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">Price Product</label>
        <div class="col-sm-9">
          <input type="number" class="form-control" required="" name="price" id="card-holder-name" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Image product</label>
        <div class="col-sm-9">
          <input type="file"  required="" name="img" id="card-number" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Image detail 1</label>
        <div class="col-sm-9">
          <input type="file"  required="" name="img1" id="card-number" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Image detail 2</label>
        <div class="col-sm-9">
          <input type="file"  required="" name="img2" id="card-number" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Image detail 3</label>
        <div class="col-sm-9">
          <input type="file"  required="" name="img3" id="card-number" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Image detail 4</label>
        <div class="col-sm-9">
          <input type="file"  required="" name="img4" id="card-number" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Image detail 5</label>
        <div class="col-sm-9">
          <input type="file"  required="" name="img5" id="card-number" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Image detail 6</label>
        <div class="col-sm-9">
          <input type="file"  required="" name="img6" id="card-number" >
        </div>
      </div>
     
      
      
 
  
  

     
      
      
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" name="add_pro" class="btn bg-red">Add Product</button>
        </div>
      </div>
   
  </form>
</div>
       


<?php include '../view/admin/footer.php'; ?> 