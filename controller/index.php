<?php 
session_start();
include '../model/connect.php';
include '../model/products.php';
include '../model/users.php';
include '../model/cart.php';
include '../model/order.php';


// Tạo mảng thông tin về giỏ hàng
//     if(!isset($_SESSION['cartview']))
//         $_SESSION['cartview'] = array();

     
if(isset($_GET['action'])){
	$action = $_GET['action'];
}
elseif (isset($_POST['action'])) {
	$action = $_POST['action'];
}
else {
	$action = "home";
}

switch ($action) {
	case 'home':

               
		include '../view/website/home.php';
		break;
	
	case 'register':
		if(isset($_POST['register-submit'])){
			$user = $_POST['username'];
			$email = $_POST['email'];
			$pass = $_POST['password'];

			$register = new users();
                        $register->insertUser($user, $email, $pass);
                        echo "<script>alert('Sign Up Success !')</script>";
                        include "../view/website/home.php";
                       
			break;

		}
        case 'login':
            if(isset($_POST['login-submit'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                
                $login = new users();
                $result = $login->getPass($user);
                
                
                if($pass == $result[0]){
                    
                    $_SESSION['user'] =  $result;
                    $_SESSION['check'] = $user;
//                    if($user == "admin"){
//                        echo "<script>alert('Login is successfully !')</script>";
//                        include "../view/admin/add_pro.php";
//                       
//			break;
//                    }
//                    else {
//                        echo "<script>alert('Login is successfully !')</script>";
//                        include "../view/website/home.php";
//                       
//			break;
//                    }
                    $getRole = $login->getRole($user);
                   
                    if ($getRole['Role'] == 0){
                        header("Location:index.php");
                        break;
                    }
                    else {
                        header("Location:../controller/admintrator.php");
                        break;
                    }
                }
                else {
                     echo "<script>alert('Account is not exactly !')</script>";
                        include "../view/website/home.php";
                       
			break;
                }
            }
            
            break;
            
           case "logout":
             if(isset($_SESSION['cartview'])){
                 unset($_SESSION['cartview']);
             }
             if(isset($_SESSION['check'])){
                 $_SESSION = array();
                 session_destroy();
               echo "<script>alert('LogOut Success !')</script>";
                 header("Location:../controller/index.php");
                }

            else {
                header("Location:index.php");
                break;
            } 
            break;
        case 'add_product':
            if(isset($_POST['sm-addpro'])){
                $name = $_POST['name'];
                $desc = $_POST['desc'];
                $price = $_POST['price'];
                
                $tmp_name = $_FILES['file']['tmp_name'];
                $img_name = $_FILES['file']['name'];


                move_uploaded_file($tmp_name, "../view/admin/img/".$img_name);
                
                $addpro = new products();
                $addpro->insertPro($name, $desc, $price, $img_name);
                echo "<script>alert('Add products is successfully !')</script>";
                header("Location:index.php");
                
                       
			break;
                
            }
            break;
        
        case 'products-detail':
            
            $id = $_GET['id'];
            $pro = new products();
            $pros = $pro->getProductById($id);
            
            
            include '../view/website/products-detail.php';
            break;
        case "cart":
            include '../view/website/cart.php';
            break;
        // Gọi trang cartview
        case "addcart":
            add_item($_POST['key'], $_POST['qty']);
            header("Location:index.php?action=cartview");
             break;
            

        case "cartview":
            include '../view/website/cart.php';
            break;
        case "update_cart":
            
           
          
           
            $new_list = $_POST['newqty']; // array
            foreach ($new_list as $key => $qty) { // $key = id ( [?] ) 
            if ($_SESSION['cartview'][$key] != $qty) {
                update_item($key, $qty);
            }
            }
        
        include '../view/website/cart.php';
        break;
        
        case 'checkout':
            $o = new Order();
            $cus_id = $_SESSION['user']['UserId'];
            $orderId = $o->CreateOder($cus_id);
            
          
            $_SESSION['oder_id'] = $orderId;
           
            $total = 0;
            foreach ($_SESSION['cartview'] as $key => $item) {
                $o->insertOderDetail($orderId, $key, $item['cost'], $item['qty'], $item['total']);
                $total+=$item['total'];
            }
            $o->updateOderTotal($orderId, $total);
            include '../view/website/carts.php';
       
        break;
        case "del_cart":
            $name = $_GET['img'];
            unset($_SESSION['cartview'][$name]);
            
            include '../view/website/cart.php';
            break;
}

?>