<?php
session_start();
include '../model/connect.php';
include '../model/products.php';
include '../model/users.php';
include '../model/cart.php';
include '../model/order.php';


if(isset($_POST['action'])){
    $action = $_POST['action'];
    
}
elseif (isset ($_GET['action'])) {
    $action = $_GET['action'];
}
 else {
     $action = "admintrator";
}

switch ($action) {
    case "admintrator":
        include '../view/admin/admincp.php';
    break;
    case "admincp":
     include '../view/admin/admincp.php';
    break;

    case "showproduct":
        include '../view/admin/showproduct.php';
        break;
    case "addproduct":
        include '../view/admin/addproduct.php';
        break;
    case "list_user":
        
        include '../view/admin/list_user.php';
        break;
    case "add_user":
        include '../view/admin/add_user.php';
        break;
    case "add_pro":
        if(isset($_POST['add_pro'])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        
      
        $path = "../view/admin/img/products/";
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name, $path.$img_name);
        
        $path = "../view/admin/img/products/";
        $img_name1 = $_FILES['img1']['name'];
        $tmp_name1 = $_FILES['img1']['tmp_name'];
        move_uploaded_file($tmp_name1, $path.$img_name1);
        
        $path = "../view/admin/img/products/";
        $img_name2 = $_FILES['img2']['name'];
        $tmp_name2 = $_FILES['img2']['tmp_name'];
        move_uploaded_file($tmp_name2, $path.$img_name2);
        
        $path = "../view/admin/img/products/";
        $img_name3 = $_FILES['img3']['name'];
        $tmp_name3 = $_FILES['img3']['tmp_name'];
        move_uploaded_file($tmp_name3, $path.$img_name3);
        
        $path = "../view/admin/img/products/";
        $img_name4 = $_FILES['img4']['name'];
        $tmp_name4 = $_FILES['img4']['tmp_name'];
        move_uploaded_file($tmp_name4, $path.$img_name4);
        
        $path = "../view/admin/img/products/";
        $img_name5 = $_FILES['img5']['name'];
        $tmp_name5 = $_FILES['img5']['tmp_name'];
        move_uploaded_file($tmp_name5, $path.$img_name5);
        
        $path = "../view/admin/img/products/";
        $img_name6 = $_FILES['img6']['name'];
        $tmp_name6 = $_FILES['img6']['tmp_name'];
        move_uploaded_file($tmp_name6, $path.$img_name6);
        
        
        $products = new products();
        $products->insertPro($name, $desc, $price, $img_name, $img_name1, $img_name2, $img_name3, $img_name4, $img_name5, $img_name6);
        echo "<script>alert('Add products success !')</script>";
        include '../view/admin/admincp.php';
        break;
        
        }     
        case "logout":
             if(isset($_SESSION['check'])){
                 $_SESSION = array();
                 session_destroy();
               
                 header("Location:index.php");
                
                 break;
             }
    case "order":
       
        include '../view/admin/order.php';
        break;

    case "search-date-order":
        $date = $_POST['search-date-order'];

        $order = new order();
        $orders = $order->getDateOrder($date);
       

        include '../view/admin/search-date-order.php';
        break;

     case "search-id-order":
        $id = $_POST['search-id-order'];

        $order = new order();
        $orders = $order->getIdOrder($id);
       

        include '../view/admin/search-id-order.php';
        break;

    //del user 
        case 'del_user':
            $id = $_GET['id'];

            $us = new users();
            $us->delUser($id);
            echo "<script>alert('Foreign key constraint fails !')</script>";
           
            include '../view/admin/list_user.php';
            break;
    // edit user
        case 'edit_user':
            include '../view/admin/edit_user.php';
            break;
        case 'update_pro_process':
            $id = $_POST['proid'];
            
            $proname = $_POST['proname'];
            $price = $_POST['price'];
            $desc = $_POST['desc'];
            $path = "../view/admin/img/products/";

            $img_name = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_name, $path.$img_name);

            $img_name1 = $_FILES['img1']['name'];
            $tmp_name1 = $_FILES['img1']['tmp_name'];
            move_uploaded_file($tmp_name1, $path.$img_name1);
            

            $img_name2 = $_FILES['img2']['name'];
            $tmp_name2 = $_FILES['img2']['tmp_name'];
            move_uploaded_file($tmp_name2, $path.$img_name2);

            $img_name3 = $_FILES['img3']['name'];
            $tmp_name3 = $_FILES['img3']['tmp_name'];
            move_uploaded_file($tmp_name3, $path.$img_name3);

            $img_name4 = $_FILES['img4']['name'];
            $tmp_name4 = $_FILES['img4']['tmp_name'];
            move_uploaded_file($tmp_name4, $path.$img_name4);

            $img_name5 = $_FILES['img5']['name'];
            $tmp_name5 = $_FILES['img5']['tmp_name'];
            move_uploaded_file($tmp_name5, $path.$img_name5);

            $img_name6 = $_FILES['img6']['name'];
            $tmp_name6 = $_FILES['img6']['tmp_name'];
            move_uploaded_file($tmp_name6, $path.$img_name6);

            $pro = new products();
            $pro->updatePro($id, $proname, $desc, $price, $img_name, $img_name1, $img_name2, $img_name3, $img_name4, $img_name5, $img_name6);
            include '../view/admin/list_pro.php';
            break;
    //update user process
        case 'update_user_process':
            $id = $_POST['userid'];

            $user = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $role= $_POST['role'];


            $us = new users();
            $us->updateUser($id,$user,$email,$pass,$role);
            include '../view/admin/list_user.php';
            break;
        //add user
        case "add_users":
            $user = $_POST['user'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
                
            $us = new users();
            $us->insertAdmin($user,$email,$pass);

            include '../view/admin/list_user.php';
            break;
        //show list product
        case 'list_product':
            include '../view/admin/list_pro.php';
            break;
        // edit product 
        case "edit_product":
            
            include '../view/admin/edit_product.php';
            break;
        
        // delete product
        case 'del_product':
            $id = $_GET['id'];
            $pro = new products();
            $pro->delPro($id);
            include '../view/admin/list_pro.php';
            break;

}

