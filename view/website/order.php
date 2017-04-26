<?php include '../view/website/header.php'; ?>
        <div style="margin-left: 10px;">
            <?php
            $order_id = $_SESSION['oder_id'];
            $o = new Order();
            $result=$o->getOrder($order_id);
           
           
           
            $odi=$result[0]['OrderID'];
            $date=$result[0]['UserID'];
            $user=$result[0]['DateCreate'];
            
            
            echo '<h1>Hoa don:'.$odi.'</h1>';
            echo '<h5>Khac hang:['.$user.']</h5>';
            echo '<h5>Ngay lap:'.$date.'</h5>';
            ?>
            
            
            
            <table width="100%" border="1">
                <tr>
                    <td>Ma hang</td>
                    <td>Ten</td>
                    <td>So luong</td>
                    <td>Don gia</td>
                    <td>Thanh tien</td>
                </tr>
                <?php 
                
                $result1=$o->getOderDetail($_SESSION['oder_id']);
                print_r($result1);
//                
//                print_r($result1);
//               
//                while($set=$result1->fetch()):
                foreach ($result1 as $key => $set){
                   
                ?>
                <tr>
                    <td><?php echo  $set[0]; ?></td> 
                    <td><?php echo  $set[1]; ?></td> 
                    <td><?php echo  $set [2]; ?></td> 
                    <td><?php echo  $set[3]; ?></td> 
                    <td><?php echo  $set[4]; ?></td> 
                </tr>
                <?php } ?>
                <tr>
                    <td colspan='4' style="text-align: right; font-weight: bold;"> Tong hoa don:</td>
                    <td style="color: red; font-weight: bold;"><?php 
                    
                    echo $result[0]['Total']; ?></td>
                </tr>
            </table>
        </div>

</div>
  <?php include '../view/website/footer.php'; ?>