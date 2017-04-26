<?php 
include '../view/website/header.php';  ?>
 <?php
            $order_id = $_SESSION['oder_id'];
            $o = new Order();
            $result=$o->getOrder($order_id);
           
           
           
            $odi=$result[0]['OrderID'];
            $user=$result[0]['UserID'];
            $date=$result[0]['DateCreate'];
            
            
            
            ?>
     
<div class="container">
		<div class="col-md-12 margin-top">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class=""></span> 
                                                                    <h2 class="txt-red">Bill number: <?php echo $odi ?></h2>
                                                                    <h5 class="txt-red">Customer: <?php echo $user ?></h5>
                                                                    <h5 class="txt-red">Date Create: <?php echo $date ?></h5>
                                                                </h5>
							</div>
							<div class="col-xs-6">
                                                           
							</div>
						</div>
					</div>
				</div>
                             <?php 
                
                $result1=$o->getOderDetail($_SESSION['oder_id']);
               
//                
//                print_r($result1);
//               
//                while($set=$result1->fetch()):
                foreach ($result1 as $key => $set){
                   
                ?>
                                    
					<div class="row">
						
						<div class="col-xs-12">
                                                    
							<div class="col-xs-2 text-right">
                                                            <h4 class="product-name"><strong>Product Id</strong></h4><h4><center><small><?php echo  $set[0]; ?> <span class="text-muted"></span></small></center></h4>
							</div>
                                                        <div class="col-xs-2 text-right">
                                                            <center><h4 class="product-name"><strong>Product Name</strong></h4></center><h4><center><small><?php echo  $set[1]; ?> <span class="text-muted"></span></small></center></h4>
							</div>
                                                    <div class="col-xs-2 text-right">
                                                            <h4 class="product-name"><strong>Product Quanlity</strong></h4><h4><center><small><?php echo  $set[2]; ?> <span class="text-muted"></span></small></center></h4>
							</div>
                                                    <div class="col-xs-2 text-right">
                                                            <h4 class="product-name"><strong>Product Price</strong></h4><h4><center><small><?php echo  $set[3]; ?> <span class="text-muted"></span></small></center></h4>
							</div>
                                                    <div class="col-xs-2 text-right">
                                                            <h4 class="product-name"><strong>Product Total</strong></h4><h4><center><small><?php echo  $set[4].' '; ?> <span class="text-muted">$</span></small></center></h4>
							</div>
							
						</div>
					</div>
					<hr>
                                    
					<?php } ?>
					<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>
						</div>
						<div class="col-xs-3">
                                                    <div style="font-weight: bold;"  class="btn txt-white btn-block  bg-red">
								<?php echo $result[0]['Total'].' $'; ?>
                                                    </div>
						</div>
					</div>
				</div>
					
				</div>
				
                           
			</div>
		</div>
</div>

     
        <?php include '../view/website/footer.php'; ?>