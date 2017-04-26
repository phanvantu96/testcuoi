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
                                
                                <span style="font-weight: bold; font-size: 30px;color: #FC9A11"> Users</span>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.show product -->

               
    <table class="table table-striped custab">
    <thead>
    
        <tr>
            <th>UserID</th>
            <th>UserName</th>
            <th>Email</th>
             <th>Role</th>
             <th>PassWord</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
$user = new users();
        $users=$user->getListUser();
    while ($set = $users->fetch()):
      # code...
     ?>
            <tr>
                <td><?php echo $set[0];?></td>
                 <td><?php echo $set[1];?></td>
                  <td><?php echo $set[2];?></td>
                   <td><?php echo $set[3];?></td>
                    <td><?php echo $set[4];?></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="?action=edit_user&id=<?php echo $set[0];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="?action=del_user&id=<?php echo $set[0];?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
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