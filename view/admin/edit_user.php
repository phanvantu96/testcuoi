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
                                
                                <span style="font-weight: bold; font-size: 30px;color: #FC9A11"> Edit user</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.show product -->
                <?php 
                $id = $_GET['id'];
                $user = new users();
        $users=$user->getListById($id);
        $set = $users->fetch();
    
     ?>
               <div class="col-md-6">
  <form class="form-horizontal" role="form" action="?action=update_user_process" method="post">
   
     
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">UserId</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="userid" id="card-holder-name" value="<?php echo $set[0] ?>" readonly="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">UserName</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="username" id="card-number" value="<?php echo $set[1] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Email</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="email" id="card-number" value="<?php echo $set[2] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">PassWord</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="pass" id="card-number" value="<?php echo $set[4] ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">Role <span style="color: red;font-size:12px;">(0=User,1=Admin)</span></label>
        <div class="col-sm-9">
          <input type="number" class="form-control" name="role" id="card-number" value="<?php echo $set[3] ?>">
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