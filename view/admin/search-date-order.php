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
                                
                                <span style="font-weight: bold; font-size: 30px;color: #FC9A11"> Order</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.show product -->

               <table border ='2px'>
                   

               <!-- serch-->

  <div class="row">
        <div class="col-md-6">
        <h4 class="txt-red bolds">Date create</h4>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                <form action="?action=search-date-order" method="post">
                    <input type="date" class="form-control input-lg" name="search-date-order" placeholder="" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <!-- <i class="glyphicon glyphicon-search"></i> -->
                            <input type="submit" class="btn btn-primary bg-red" size="5" value="Search">
                        </button>
                 </form>
                    </span>
                </div>
            </div>
        </div>
  </div>
  <div class="row">
        <div class="col-md-6">
        <h4 class="txt-red bolds">Id Order</h4>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                <form action="?action=search-id-order" method="post">
                    <input type="number" class="form-control input-lg" name="search-id-order" placeholder="0" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit">
                            <!-- <i class="glyphicon glyphicon-search"></i> -->
                            <input type="submit" class="btn btn-primary bg-red" size="5" value="Search">
                        </button>
                  </form>
                    </span>
                </div>
            </div>
        </div>
  </div> <br>

            <!-- serch-->
                
              
                   <table class="table table-striped custab">
    <thead>
    
        <tr>
            <th>OrderID</th>
            <th>ProductID</th>
            <th>DateCreate</th>
             <th>ProductPrice</th>
             <th>Quanlity</th>
             <th>Total</th>
             <th>UserID</th>
            
        </tr>
    </thead>
    <?php
       





foreach ($orders as $key => $set) { 
          
            
            ?>
            <tr>
                <td><?php echo $set[0];?></td>
                 <td><?php echo $set[1];?></td>
                  <td><?php echo $set[2];?></td>
                   <td><?php echo $set[3]." $";?></td>
                    <td><?php echo $set[4];?></td>
                     <td><?php echo $set[5]." $";?></td>
                      <td><?php echo $set[6];?></td>
                    
            </tr>
            <?php }; ?>
    </table>
                    
            

                    
                
                
              
                

            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include '../view/admin/footer.php'; ?> 