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
                                
                                <span style="font-weight: bold; font-size: 30px;color: #FC9A11"> Edit Products</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.show product -->
                <?php 
                $id = $_GET['id'];
                $pro = new products();
        $pros=$pro->getListProById($id);
        $set = $pros->fetch();
    
     ?>
               <div class="col-md-6">
  <form class="form-horizontal" role="form" action="?action=update_pro_process" method="post" enctype="multipart/form-data">
   
     
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">ProId</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="proid" id="card-holder-name" value="<?php echo $set[0] ?>" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProName</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="proname" id="card-number" value="<?php echo $set[1] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProDesc</label>
        <div class="col-sm-9">
          <textarea  class="form-control" name="desc" id="card-number" rows="20" ><?php echo $set[2] ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProPrice</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="price" id="card-number" value="<?php echo $set[3] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProImage</label>
        <div class="col-sm-9">
          <input type="file" name="img" id="card-number" value="<?php echo $set[4] ;?>">
          <img width="200px" src="../view/admin/img/products/<?php echo $set[4] ;?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProImage 1</label>
        <div class="col-sm-9">
          <input type="file" name="img1" id="card-number" value="<?php echo $set[5] ;?>">
          <img width="100px" src="../view/admin/img/products/<?php echo $set[5] ;?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProImage 2</label>
        <div class="col-sm-9">
          <input type="file" name="img2" id="card-number" value="<?php echo $set[6] ;?>">
          <img width="100px" src="../view/admin/img/products/<?php echo $set[6] ;?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProImage 3</label>
        <div class="col-sm-9">
          <input type="file" name="img3" id="card-number" value="<?php echo $set[7] ;?>">
          <img width="100px" src="../view/admin/img/products/<?php echo $set[7] ;?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProImage 4</label>
        <div class="col-sm-9">
          <input type="file" name="img4" id="card-number" value="<?php echo $set[8] ;?>">
          <img width="100px" src="../view/admin/img/products/<?php echo $set[8] ;?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProImage 5</label>
        <div class="col-sm-9">
          <input type="file" name="img5" id="card-number" value="<?php echo $set[9] ;?>">
          <img width="100px" src="../view/admin/img/products/<?php echo $set[9] ;?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">ProImage 6</label>
        <div class="col-sm-9">
          <input type="file" name="img6" id="card-number" value="<?php echo $set[10] ;?>">
          <img width="100px" src="../view/admin/img/products/<?php echo $set[10] ;?>">
        </div>
      </div>
     
     

 
  
  

     
      
      
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn bg-red">Update</button>
        </div>
      </div>
   
  </form>
</div>
       


<?php include '../view/admin/footer.php'; ?> 