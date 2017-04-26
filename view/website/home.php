<?php include '../view/website/header.php' ?>

<div class="col-md-12 bg-black">
  <div class="col-md-2">
    <div class="content-left">
      <p class="bold txt-slover">LIMITED EDITION</p>
      <div class="boder bg-slover"></div>
      <p class="list-menu-pro txt-slover">Lightning</p>
      <p class="list-menu-pro txt-slover">Playoffs</p>
      <p class="bold txt-slover title-left">CLASSICS</p>
      <div class="boder bg-slover"></div>
      <p class="list-menu-pro txt-slover">All classics</p>
      <p class="list-menu-pro txt-slover">Challengers</p>
      <p class="list-menu-pro txt-slover">Boston</p>
      <p class="list-menu-pro txt-slover">F'LITES</p>
      <p class="list-menu-pro txt-slover">Georgetown</p>
      <p class="list-menu-pro txt-slover">Glenrock</p>
      <p class="list-menu-pro txt-slover">Michigan</p>
      <p class="list-menu-pro txt-slover">NBA</p>
      <p class="list-menu-pro txt-slover">Notre Dame</p>
      <p class="list-menu-pro txt-slover">Ripples</p>
      <p class="list-menu-pro txt-slover">Strides</p>
      <p class="bold txt-slover title-left">ACCESSORIES</p>
      <div class="boder bg-slover"></div>
      <p class="list-menu-pro txt-slover">Socks</p>
    </div>
  </div>
  <div class="col-md-10">
      
      
    <div class="content-right">
        
        
        
      <div class="slide-show bg-slover"> 
        <!-- Start WOWSlider.com BODY section -->
        <div id="wowslider-container1">
          <div class="ws_images">
            <ul>
              <li><img src="../view/website/data1/images/challengers_red_angle_large.png" alt="" title="" id="wows1_0"/></li>
              <li><a href="http://wowslider.com"><img src="../view/website/data1/images/flite_melon_dfb087b48cda4d1db95073d16292f3fb_large.png" alt="bootstrap slider" title="" id="wows1_1"/></a></li>
              <li><img src="../view/website/data1/images/glenrock1_orange_r1111_31cc12f093264ce2893088d571394d4c_large.png" alt="" title="" id="wows1_2"/></li>
            </ul>
          </div>
          <div class="ws_bullets">
            <div> <a href="#" title=""><span><img src="../view/website/data1/tooltips/challengers_red_angle_large.png" alt=""/>1</span></a> <a href="#" title=""><span><img src="../view/website/data1/tooltips/flite_melon_dfb087b48cda4d1db95073d16292f3fb_large.png" alt=""/>2</span></a> <a href="#" title=""><span><img src="../view/website/data1/tooltips/glenrock1_orange_r1111_31cc12f093264ce2893088d571394d4c_large.png" alt=""/>3</span></a> </div>
          </div>
          <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.6</div>
          <div class="ws_shadow"></div>
        </div>
        <script type="text/javascript" src="../view/website/engine1/wowslider.js"></script> 
        <script type="text/javascript" src="../view/website/engine1/script.js"></script> 
        <!-- End WOWSlider.com BODY section --> 

        
      </div>
      <!--<div class="col-md-12 tittle-view">
        <div class="col-md-6">
          <p class="title-cont-right txt-slover bold">FEATURED RUNNERS</p>
        </div>
        <div class="col-md-6">
          <p class="view-more-r txt-red">View all Items</p>
        </div>
      </div>
      <div class="col-md-12 boder-ct-r bg-slover"></div>-->
      
      <!--gridview-->
      <div class="col-md-12">
        
           
                <div id="cbp-vm" class="cbp-vm-view-grid">
                        
                    <div class="cbp-vm-options">

                        <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">Grid View</a>
                        <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">List View</a>
                    </div>
                    <ul>

<?php 

$db = new connect();
$record_on_page = 6;
$number_page =  isset($_GET['page']) ? $_GET['page'] : 1;


$Start = ($number_page - 1) * $record_on_page;

$total_record = "SELECT COUNT(*) FROM products ORDER BY `ProID` DESC";
$total_records = $db->getInstance($total_record);

$total_page = ($total_records[0]/$record_on_page);

$select_record = "SELECT * FROM products LIMIT $Start,$record_on_page";

$result = $db->getList($select_record);
$results = $result->fetchAll();




foreach ($results as $key => $item) {

    // echo <<<EOT ?>
   <li>
                            <a class="cbp-vm-image txt-proname" href="?action=products-detail&id=<?php echo $item[0]; ?>"><img src="../view/admin/img/products/<?php echo $item[4];?>"></a>
                            <h3 class="cbp-vm-title txt-red"><?php echo $item[1];?></h3>
                            <div class="cbp-vm-price">$<?php echo $item[3];?></div>
                            <div class="cbp-vm-details txt-slover">
                                <p><?php echo substr($item[2], 0,90)." ... ";?></p>
                            </div>
                            <a class="myButton" href="?action=products-detail&id=<?php echo $item[0]; ?>">Product Detail</a>
                        </li>
<!-- EOT; -->
<?php }

// Bây giờ tạo nút bấm để chuyển trang. 
// Hồi nảy ta tính dc cái $sotrang rùi á
// Bây giờ ta dùng hàm for để tạo vòng lập. hiện từ trang số 0 đến <= $sotrang
for ( $number_page = 1; $number_page <= $total_page; $number_page ++ )
{
echo "<a href='index.php?action=home&page={$number_page}'>{$number_page}</a>";

} ?>

       
           
               
           
      
   


            
        
        <script src="../view/website/js/classie.js"></script>
        <script src="../view/website/js/cbpViewModeSwitch.js"></script>

    </div>
<!--gridview--></div>
    </div>
  </div>
</div>
<?php include '../view/website/footer.php';

