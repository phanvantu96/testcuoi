<?php include '../view/website/header.php' ?>
<div class="col-md-12 bg-black">
<div class="container">
    <div class="col-md-12">
        
        <div class="products-detail">
            <p class="bold txt-slover">Home <span class="txt-red "> > <?php echo $pros[1] ?></span></p>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="col-md-12">
                <img class="img-pro" src="../view/admin/img/products/<?php echo $pros[4] ?>">
            </div>
            <div class="col-md-12">
                <div class="col-md-4"><img class="img-details" src="../view/admin/img/products/<?php echo $pros[5] ?>"></div>
                <div class="col-md-4"><img class="img-details" src="../view/admin/img/products/<?php echo $pros[6] ?>"></div>
                <div class="col-md-4"><img class="img-details" src="../view/admin/img/products/<?php echo $pros[7] ?>"></div>
                <div class="col-md-4"><img class="img-details" src="../view/admin/img/products/<?php echo $pros[8] ?>"></div>
                <div class="col-md-4"><img class="img-details" src="../view/admin/img/products/<?php echo $pros[9] ?>"></div>
                <div class="col-md-4"><img class="img-details" src="../view/admin/img/products/<?php echo $pros[10] ?>"></div>
                
            </div>
        </div>
        <div class="col-md-6 txt-black">
            <p class="bold txt-red font-twenty-two"><?php echo $pros[1] ?></p>
            <label class="info-pro txt-slover font-twenty-two">Size</label><br>
            <input type="number" class="info-pro txt-black" value="38">
            <p class="info-pro font-twenty-two txt-slover bold">$<?php echo $pros[3] ?></p>
            <p class="txt-slover bold">Quantity</p>
            
           <form action="../Controller/index.php" method="post">
                  <input type="hidden" name="action" value="addcart"/>
                  <input type="hidden" name ="key" value ="<?php echo $pros[0]; ?>"/>
            <select name="qty">
                <?php 
                    for($i = 1;$i < 15;$i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select><br><br>
            <button type="submit" class="myButton">Add to cart</button>
            </form>
        </div>
    </div>
    <div class="col-md-12">
        <div class="products-detail">
            <p class="bold txt-slover">DESCRIPTION</p>
        </div>
    </div>
    <div class="col-md-12">
        <p class="description txt-slover"><?php echo $pros[2] ?></p>
    </div>
</div>
    </div>
<?php include '../view/website/footer.php' ?>