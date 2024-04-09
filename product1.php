<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>&#128304;Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- code for the link the font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style_Prod.css">
  </head>
  <body>
    <?php
      include('navbar_page.php');
    ?>
<section id="ashish">
    <nav class = "navbar navbar-expand-lg navbar-dark bg-secondary mt-3">
        <ul class="navbar-nav me-auto">
          <?php
              if(!isset($_SESSION['username'])){
                echo"<li class='nav-item'>
                <a class='nav-link active' aria-current='page' href=''><b>Welcome Guest</b></a>
                </li>";
              }else {
                echo "<li class='nav-item'>
                          <a class='nav-link active' aria-current='page' href='#'><b>Welcome! " . $_SESSION['username'] . "</b></a>
                      </li>";
              }
          
              if(!isset($_SESSION['username'])){
                echo"<li class='nav-item'>
                  <a class='nav-link active' aria-current='page' href='./users_area/login_page.php'><b>login</b></a>
                </li>";
              }else{
                echo"<li class='nav-item'>
                    <a class='nav-link active' aria-current='page' href='./users_area/logout.php'><b>logout</b></a>
                </li>";
              }
          ?>
        </ul>
    </nav>    
    <!-- second child bar -->
    <nav>
      <div class="bg-light">
        <h2 class="text-center mt-3"><i>_Agro</i> Store <span style="color:#00587A;">Nepal</span></h2>
        <p class="text-center"><b><span style="color:#206A5D;">"Seamless Access to Organic and Hybrid Seeds: Your Online Destination for Agro Solutions & Expert Counselling.</span>"</b></p>
      </div>
    </nav>
  <!-- third chield -->
  <section>
    <div class="row px-1">
      <div class="col-md-10">
        <!-- code for the product section -->
        <div class="row">
          <!-- fetching the product data from the databse -->
          <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'mystore';
            // Create a new mysqli object and store it in $con
            $con = new mysqli($host, $username, $password, $database);
          //   if (!isset($_GET['category']) && !isset($_GET['brand'])) {
          //     global $con;
          //     $select_query = "SELECT * FROM `products` ORDER BY rand()";
          //     $result_query = mysqli_query($con, $select_query);
          
          //     while ($row = mysqli_fetch_assoc($result_query)) {
          //         $product_id = $row['product_id'];
          //         $product_title = $row['product_title'];
          //         $product_desc = $row['product_description'];
          //         $product_key = $row['product_keywords'];
          //         $category_id = $row['category_id'];
          //         $brand_id = $row['brand_id'];
          //         $product_image1 = $row['product_image1'];
          //         $product_image2 = $row['product_image2'];
          //         $product_price = $row['product_price'];
          
          //         echo "<div class='col-md-4 mb-3'>
          //                 <div class='card'>
          //                   <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
          //                   <div class='card-body'>
          //                     <h5 class='card-title'>$product_title</h5>
          //                     <p class='card-text'>$product_desc. .</p>
          //                     <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
          //                     <a href='product_details.php?product_id=$product_id' class='btn btn-info'>View-More</a>
          //                   </div>
          //                 </div>
          //               </div>";
          //     }
          // }          
function productsDetalis_Items()
{
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {
        global $con;
        $select_query = "SELECT * FROM `products` ORDER BY rand()";
        $result_query = mysqli_query($con, $select_query);

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_desc = $row['product_description'];
            $product_key = $row['product_keywords'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_price = $row['product_price'];

            echo "<div class='col-md-4 mb-3'>
                    <div class='card'>
                      <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                      <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_desc. .</p>
                        <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price:Rs.$product_price/-</p>
                        <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-info'>View-More</a>
                      </div>
                    </div>
                  </div>";
        }
    }
}

// called the function
productsDetalis_Items(); 

// Function For the category details
function get_category_details()
{
    global $con;
    if (isset($_GET['categories'])) {
        $category_id = $_GET['categories'];
        $select_query = "SELECT * FROM `products` WHERE category_id = $category_id";
        $result_query = mysqli_query($con, $select_query);
        $num_of_row = mysqli_num_rows($result_query);
        if ($num_of_row == 0) {
            echo "<h2 class='text-center text-danger'>This Product is not available!</h2>";
        } else {
            // $row = mysqli_fetch_assoc($result_query);
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_desc = $row['product_description'];
                $product_key = $row['product_keywords'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                // displaying the product values from the databases
                echo "<div class='col-md-4 mb-3'>
                          <div class='card'>
                            <img src='./admin_Panels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                              <h5 class='card-title'>$product_title</h5>
                              <p class='card-text'>$product_desc</p>
                              <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price:Rs.$product_price/-</p>
                              <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
                              <a href='product_details.php?product_id = $product_id' class='btn btn-info'>View-More</a>
                            </div>
                          </div>
                        </div>";
            }
        }
    }
}
//called the function details
get_category_details();

// function for veiew more button
function view_details()
{
    global $con;
        if (isset($_GET['product_id'])){
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $product_id = $_GET['product_id'];
                $select_query = "SELECT * FROM `products` WHERE product_id = $product_id";
                $result_query = mysqli_query($con,$select_query);
                // $row = mysqli_fetch_assoc($result_query);
                while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_desc = $row['product_description'];
                    $product_key = $row['product_keywords'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    $product_image1 = $row['product_image1'];
                    $product_image2 = $row['product_image2'];
                    $product_price = $row['product_price'];
                    // echo "<div class='col-md-4 mb-3'>
                    //         <div class='card'>
                    //             <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                    //             <div class='card-body'>
                    //               <h5 class='card-title'>$product_title</h5>
                    //               <p class='card-text'>$product_desc. .</p>
                    //               <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price:Rs.$product_price/-</p>
                    //               <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
                    //               <a href='product_details.php?product_id = $product_id' class='btn btn-info'>View-More</a>
                    //             </div>
                    //         </div>
                    //         </div>
                    //         <div class='col-md-8'>
                    //     <div class='row'>
                    //         <div class='col-md-12'>
                    //             <h4 class='text text-center text-info mb-5'>Relaed Product Information</h4>
                    //             <div class='col-md-6'>
                    //             <img src='./admin_Pannels/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                    //             </div>
                    //             <div class='col-md-6' style='color:#F86F03; text-align: justify;'>
                    //                 <p>Alongside our exceptional seed collection, we present a comprehensive assortment of effective pesticides that safeguard your crops from harmful insects and diseases. Our pesticides are rigorously tested, approved,
                    //                 and safe for use, providing you with peace of mind as you nurture your green paradise.
                    //                 At our online store, we prioritize customer satisfaction, and our prompt delivery service ensures your products reach your doorstep with utmost care and efficiency
                    //                 </p>
                    //             </div>
                    //         </div>
                    //     </div>
                    // </div> ";
              echo"<div class='container'>
                    <div class='row'>
                      <div class='col-md-4 mb-3'>
                        <div class='card'>
                          <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                          <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_desc.</p>
                            <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price: Rs.$product_price/-</p>
                            <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-info'>View-More</a>
                          </div>
                        </div>
                      </div>
                      <div class='col-md-8'>
                        <div class='row'>
                          <div class='col-md-12'>
                            <h4 class='text text-center text-info mb-5'>Related Product Information</h4>
                          </div>
                          <div class='col-md-6'>
                            <img src='./admin_Pannels/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                          </div>
                          <div class='col-md-6' style='color:#F86F03; text-align: justify;'>
                            <p>Alongside our exceptional seed collection, we present a comprehensive assortment of effective pesticides that safeguard your crops from harmful insects and diseases. Our pesticides are rigorously tested, approved, and safe for use, providing you with peace of mind as you nurture your green paradise. At our online store, we prioritize customer satisfaction, and our prompt delivery service ensures your products reach your doorstep with utmost care and efficiency.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>";

                }
            }
        }
        }
}
// code for the cart and add items details
function getIPAddress_my()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    // whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        // Get the first IP (the client's IP) from the list of IPs in the header
        $ip = explode(',', $ip)[0];
    }  
    // whether ip is from the remote address  
    else {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}

function get_cart_details_cart()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $ip = getIPAddress_my();
        $get_product_id = $_GET['add_to_cart'];

        // Use prepared statements to prevent SQL injection.
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = ? AND product_id = ?";
        $stmt = mysqli_prepare($con, $select_query);
        mysqli_stmt_bind_param($stmt, "si", $ip, $get_product_id);
        mysqli_stmt_execute($stmt);
        $result_query = mysqli_stmt_get_result($stmt);

        $num_of_rows = mysqli_num_rows($result_query);

        if ($num_of_rows > 0) {
            echo "<script>alert('This item is already present in the cart')</script>";
            echo "<script>window.open('product1.php','_self')</script>";
        } else {
            // Assuming the initial quantity should be set to 1 when adding a new product
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES (?, ?, 1)";
            $stmt = mysqli_prepare($con, $insert_query);
            mysqli_stmt_bind_param($stmt, "is", $get_product_id, $ip);
            mysqli_stmt_execute($stmt);
            echo "<script>alert('Item is added to cart!')</script>";
            echo "<script>window.open('product1.php','_self')</script>";
        }

        mysqli_stmt_close($stmt);
    }
}

get_cart_details_cart();

?>

          <div class="col-md-4 mb-3">
              <div class="card">
                <img src="https://post.greatist.com/wp-content/uploads/sites/2/2021/05/GRT-sunflower-seeds-1200x628-facebook.jpg" class="card-img-top" alt="Sunflower_seeds.">
                <div class="card-body">
                  <h5 class="card-title">Sunflower Seeds</h5>
                  <p class="card-text">This is the premimum qulaity of the sunflower seeds on affortbale prices with 25% discount.</p>
                  <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price:Rs.450/-</p>
                  <a href='index.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
                  <a href="#" class="btn btn-info">Vew-More</a>
                </div>
              </div>
          </div>
          
     <!--code for teh static data in pesticed items  -->
      </div>
        <h4 style="text-align: center; color:#0B666A; margin-top:5px;">Pesticide Items</h4>
        <hr size="2px">
        <!-- second row -->
        <div class="row">
          <div class="col-md-4 mb-3">
              <div class="card">
                <img src="https://s.alicdn.com/@sc04/kf/A4af2bdc9e9a74cc3830ab83bbd20e0c42.jpg_960x960.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Defoamer 70131-67-8 Water Treatment Chemicals</h5>
                  <p class="card-text">Defoamer 70131-67-8 Water Treatment Chemicals with 33% discount, as a kilogram 600 kilograms(Min. order).</p>
                  <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price:Rs.550/-</p>
                  <a href="#" class="btn btn-warning">Add to Cart</a>
                  <!-- <a href="#" class="btn btn-info">Vew-More</a> -->
                  <input type="submit" value="View-more" class="btn btn-info" name="pest_view_more">
                </div>
              </div>
          </div>
          <div class="col-md-4 mb-3">
              <div class="card">
                    <img src="https://s.alicdn.com/@sc04/kf/Hfd93f14a20224c40ae3b2923f329807dv.jpg_960x960.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pesticide Chemicals 6026 products</h5>
                      <p class="card-text">Hpmc supplier chemical manufacturer construction trade tile adhesive hydroxypropyl methyl cellulose 200000 hpmc powder for paint.</p>
                      <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price:Rs.1,000/-</p>
                      <a href="#" class="btn btn-warning">Add to Cart</a>
                      <input type="submit" value="View-more" class="btn btn-info" name="pest_view_more">
                    </div>
              </div>
          </div>
          <div class="col-md-4 mb-3">
              <div class="card">
                    <img src="https://s.alicdn.com/@sc04/kf/H1aa22e74641340aebc77dc92ad187aaew.jpg_960x960.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">WELLDONE Chemical Msds Anionic Polyelectrolyte</h5>
                      <p class="card-text">WELLDONE Chemical Msds Anionic Polyelectrolyte Flocculant Polymer APAM Polyacrylamide industrial grade 99-100% kilogram.</p>
                      <p class='card-text' style='color:#0B666A; font-weight: bold;'>Price:Rs.790/-</p>
                      <a href="#" class="btn btn-warning">Add to Cart</a>
                      <input type="submit" value="View-more" class="btn btn-info" name="pest_view_more">
                    </div>
              </div>
          </div> 
        </div>
    </div>
      <!-- second side bar code -->
      <div class="col-md-2 bg-secondary p-0">
        <!-- code for the side nav bar -->
        <ul class="navbar-nav me-auto text-center">
          <li class = "nav-item " style = "background-color:#F2BE22;">
            <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
          </li>
           <?php
              $host = 'localhost';
              $username = 'root';
              $password = '';
              $database = 'mystore';
              // Create a new mysqli object and store it in $con
              $con = new mysqli($host, $username, $password, $database);
              // Check if the connection was successful
              if ($con->connect_error) {
                  die('Connection Failed! ' . $con->connect_error);
              } 
              else{
              $select_brands = "SELECT * FROM brands";
              $result_brands = mysqli_query($con, $select_brands);
              while($row_data = mysqli_fetch_assoc($result_brands)){
                  $brand_title = $row_data['brand_title'];
                  $brand_id = $row_data['brand_id'];
                  echo "<li class='nav-item'>
                            <a href='product1.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                        </li>";
              }
            }
            $con->close();
            ?>
        </ul>
        <!-- code for the product items -->
        <ul class="navbar-nav me-auto text-center">
          <li class = "nav-item " style="background-color: #F29727;">
              <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
          </li>
            <?php
              $host = 'localhost';
              $username = 'root';
              $password = '';
              $database = 'mystore';
              // Create a new mysqli object and store it in $con
              $con = new mysqli($host, $username, $password, $database);
              // Check if the connection was successful
              if ($con->connect_error) {
                  die('Connection Failed! ' . $con->connect_error);
              }
              else{
              $select_cat = "SELECT * FROM categories";
              $result_cat = mysqli_query($con, $select_cat);
              while($row_data = mysqli_fetch_assoc($result_cat)){
                  $cat_title = $row_data['category_title'];
                  $cat_id = $row_data['category_id'];
                  echo "<li class='nav-item'>
                            <a href='product1.php?categories=$cat_id' class='nav-link text-light'>$cat_title</a>
                        </li>";
              }
            }
              $con->close();

            ?>
        </ul>        
      </div>
    </div>
  </section>
</section> 
<hr size = 1px>
  <!-- Production Section Footer -->
  <footer class="footer shadow-lg">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4>Our Production Partners</h4>
          <p>We collaborate with local farmers and growers to provide the freshest and highest-quality produce to our customers.</p>
          <h4>Our Mission</h4>
          <p>To deliver healthy and sustainable agricultural products while supporting local farming communities.</p>
        </div>
        <div class="col-md-6">
          <h4>Contact Us</h4>
          <p>Email: contact@agroshop.com</p>
          <p>Phone: +977-9843294319</p>
          <h4>Subscribe to Our Newsletter</h4>
          <form class="newsletter-form">
            <input type="email" placeholder="Enter your email address" required>
            <button type="submit" class="btn btn-sm mt-3">Subscribe</button>
          </form>
          <div class="social-icons">
            <a href="https://www.facebook.com/" target="_blank" title="Facebook"><img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png" /></a>
            <a href="https://twitter.com/" target="_blank" title="Twitter"><img width="48" height="48" src="https://img.icons8.com/fluency/48/twitter.png"/></a>
            <a href="https://www.instagram.com/" target="_blank" title="Instagram"><img width="48" height="48" src="https://img.icons8.com/fluency/48/instagram-new.png"/></a>
          </div>
        </div>
      </div>
      <hr size="30">
      <!-- Footer Bottom Area Start -->
      <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>© All Rights Reserved by <a href="#">Agro Export Nepal & Hom Bahadur Khadka<i class="fa fa-love"></i></a></p>
                        <p><a href="policy/privicy_policy.php">Privacy Policy</a> || <a href="policy/termsOfservices.php">Terms of Service</a></p>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Code for the stsyles sheets -->
    <style>
      body{
        overflow-x: hidden;
      }
      .ashish{
        background-color: #F7FFE5;
      }
      .footer {
      background-color: #B3C890;
      padding: 30px 0;
      color: #333;
      text-align: center;
    }

    .footer p {
      margin-bottom: 0;
    }

    .footer .social-icons {
      margin-top: 15px;
    }

    .footer .social-icons a {
      display: inline-block;
      margin-right: 10px;
    }

    .footer .newsletter-form {
      margin-top: 20px;
      max-width: 400px;
      margin: 0 auto;
    }

    .footer .newsletter-form input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .footer .newsletter-form button {
      background-color: #35A29F;
      color: #FFF;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    </style>
  </footer>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>