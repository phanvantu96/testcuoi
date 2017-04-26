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
                                
                                <span style="font-weight: bold; font-size: 30px;color: #FC9A11"> Add user</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.show product -->
               
               <div class="col-md-6">
  <form class="form-horizontal" role="form" action="?action=add_users" method="post">
   
     
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name">UserName</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required="" name="user" id="card-holder-name" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label"  for="card-number">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" required="" name="email" id="card-number" >
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="card-number">PassWord</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" required="" name="pass" id="card-number" >
        </div>
      </div>
  <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn bg-red">Add</button>
        </div>
      </div>
   
  </form>
</div>
       


<?php include '../view/admin/footer.php'; ?> 