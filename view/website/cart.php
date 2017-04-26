<?php 
include '../view/website/header.php';  ?>
<?php 
if(isset($_SESSION['check']))
        {
             if(!isset($_SESSION['cartview']) || $_SESSION['cartview'] == null)
             {
                echo"<center class='txt-red'>";
                echo '<br/><br/>';
                echo"<h3 >";
                echo('You have not selected products');
                echo"</h3>";
                echo '<br/><br/>';
                echo('Cart is empty');
                echo"</center>";
                echo '<br/><br/>';
                echo '<br/><br/>';
                
             }
             else
             {  ?>


     
<div class="container">
		<div class="col-md-12 margin-top">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
                                                            <a href="?action=home"><button type="button" class="btn btn-block bg-red txt-white">
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                                                </button></a>
							</div>
						</div>
					</div>
				</div>
                             <form action="index.php" method="POST">
            <input type="hidden" name="action" value="update_cart"/>
				<div class="panel-body">
                                    <?php 
                        foreach ($_SESSION['cartview'] as $key =>$item){
                           
                            $cost = number_format($item['cost'],2);
                        $total = number_format($item['total'],2);
                      
                 ?>
                                    
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="../view/admin/img/products/<?php echo $item['img'] ?>">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Product name</strong></h4><h4><small><?php echo $item['name'] ?></small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-3 text-right">
                                                            <h4 class="product-name"><strong>Price</strong></h4><h4><small><?php echo $cost ?> <span class="text-muted">$</span></small></h4>
							</div>
                                                    <div class="col-xs-3 text-right"></div>
							<div class="col-xs-2">
                                                            <h4 class="product-name"><strong>Quantity</strong></h4><small><input type="text" class="form-control input-sm" name="newqty[<?php echo $key ?>]" value="<?php echo $item['qty'] ?>"></small>
							</div>
                                                        <div class="col-xs-4 text-right">
                                                            <h4 class="product-name"><strong>Total</strong></h4><h4><small><?php
                                                               
                                                                echo $total;
                                                            ?> <span class="text-muted">$</span></small></h4>
							</div>
							
						</div>
					</div>
					<hr>
                                     <?php } ?>
					
					
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
                                                            <button type="submit" name="btnupdate_cart" class="btn btn-default btn-sm btn-block">
									Update cart
                                                                </button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong><?php 
                                                           
                                                            echo get_subtotal()." $";
                                                        ?>  </strong></h4>
						</div>
						<div class="col-xs-3">
                                                    <a href="?action=checkout"> <button type="button" class="btn txt-white btn-block  bg-red">
								Checkout
                                                        </button></a>
						</div>
					</div>
				</div>
                            </form>
			</div>
		</div>
</div>

<?php }
    
}
else
          {
            echo '<center>';
            echo '<br/><br/>';
            
            echo '<h3>';
            echo('');
            echo '</h3>';
            echo '<br/>';
            echo ' <form action="#" method="post" ><input type="submit" name="go_to_register" value="Please log in to perform" 
                     style="cursor:pointer;color: #FFF; background:#cc3333; border:1px solid #663333; margin:5px; padding:5px;" /></form>';
            
            echo '</center>';
            echo '<br/><br/>';
            echo '<br/><br/>';
            echo '<br/><br/>';
          }?>

     
        <?php include '../view/website/footer.php'; ?>