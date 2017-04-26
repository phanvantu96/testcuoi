<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shoe's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--dialog box -->

  
  <script type="text/javascript" src="../view/website/js/jquery-1.12.0.min.js"></script>
        
 <link rel="stylesheet" href="../view/website/css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="../view/website/css/backtotop.css"> <!-- Gem style -->
  <script src="../view/website/js/modernizr.js"></script> <!-- Modernizr -->       

<link rel="stylesheet" type="text/css" href="../view/website/css/style.css">
<link href="../view/website/css/products-detail.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../view/website/css/bootstrap.min.css">

<!--- show cart -->



<!-- grid view -->
<link rel="stylesheet" type="text/css" href="../view/website/css/default.css" />
    <link rel="stylesheet" type="text/css" href="../view/website/css/component.css" />
    <script src="../view/website/js/modernizr.custom.js"></script>


<script src="../view/website/js/bootstrap.min.js"></script>


<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="../view/website/engine1/style.css" />
<script type="text/javascript" src="../view/website/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>

<div class="col-md-12 bg-red">
  <div class="col-md-6 txt-header txt-white">
    <p>Free shipping on all orders — worldwide</p>
  </div>
  <div class="col-md-6">
    <div class="col-md-12">
        <div class="col-md-1 icon-txt-header"></div>
      <div class="col-md-3 icon-txt-header"> <?php 
                                                                        if(isset($_SESSION['check'])){
                                                                            $user = $_SESSION['check'];
                                                                            echo " <p style='color:white;'>Hi <span style='color: white;font-weight:bold;font-size:15px'>$user</span>";
                                                                            echo "(<a style='color: black;' href='?action=logout'>Logout</a>)";
                                                                        }
                                                                         else {                
                                                                                echo '<p style="color:white;" > Hi  <span style="font-weight:bold;font-size:15px">Guest !</span>';
                                                                             }
                                                                    ?></div>
      <div class="col-md-2 icon-txt-header"> <img src="../view/website/img/1453315564_user.png">
          <a href="#"><p class="txt-black">Account</p></a>
      </div>
      <div class="col-md-2 icon-txt-header"> <img src="../view/website/img/1453315995_89.png">
        <p class="txt-black">Wishlist</p>
      </div>
      
      <div class="col-md-2 icon-txt-header"> <img src="../view/website/img/1453317303_cart4.png">
          <a href="?action=cart"><p class="txt-black">Cart</p></a>
      </div>
      <div class="col-md-2 icon-txt-header"> <img src="../view/website/img/icon-login.png">
        <a href="#"><p class="txt-black" data-toggle="modal" data-target="#myModal">Login</p></a>

        <!-- dialogbox -->
<div class="container">
  
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      
        <!--model -->
        
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active txt-red" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="?action=login" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="?action=register" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
          
            </div>
          
          </div>
             <div class="modal-footer">
          <button type="button" class="btn txt-white bg-red" data-dismiss="modal">Close</button>
        </div>
        </div>
      
   
        <!--model -->
        
      </div>
    </div>
  </div>
</div>
<!-- dialogbox-->

        
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-12 bg-slover">
  <div class="col-md-2">
    <p class="logo">Shoe's</p>
  </div>
  <div class="col-md-10 menu font-menu bold">
    <ul>
        <a href="?action=home"><li>Home</li></a>
      <li>Catalog</li>
      <li> Blog</li>
      <li>About Us</li>
    </ul>
  </div>
</div>



