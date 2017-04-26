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
                                
                                <span style="font-weight: bold; font-size: 30px;color: #FC9A11"> List Products</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.show product -->

               
    <table class="table table-striped custab">
    <thead>
    
        <tr>
            <th>ProId</th>
            <th>ProName</th>
            <th>ProDesc</th>
             <th>ProPrice</th>
             <th>ProImages</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
$pro = new products();
        $pros=$pro->getListPro();
    while ($set = $pros->fetch()):
      # code...
     ?>
            <tr>
                <td><?php echo $set[0];?></td>
                 <td><?php echo $set[1];?></td>
                  <td><?php echo substr($set[2], 0,200)." ..." ;?></td>
                   <td><?php echo $set[3];?></td>
                    <td><img width="150px" src="../view/admin/img/products/<?php echo $set[4];?>"></td>
                <td width="150px" class="text-center"><a class='btn btn-info btn-xs' href="?action=edit_product&id=<?php echo $set[0];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="?action=del_product&id=<?php echo $set[0];?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <?php endwhile; ?>
    </table>
    
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include '../view/admin/footer.php'; ?> 