<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mystore';

$con = new mysqli($host, $username, $password, $database);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// function productsDetalis_Items()
// {
//     if (!isset($_GET['category']) && !isset($_GET['brand'])) {
//         global $con;
//         $select_query = "SELECT * FROM `products` ORDER BY rand()";
//         $result_query = mysqli_query($con, $select_query);

//         while ($row = mysqli_fetch_assoc($result_query)) {
//             $product_id = $row['product_id'];
//             $product_title = $row['product_title'];
//             $product_desc = $row['product_description'];
//             $product_key = $row['product_keywords'];
//             $category_id = $row['category_id'];
//             $brand_id = $row['brand_id'];
//             $product_image1 = $row['product_image1'];
//             $product_image2 = $row['product_image2'];
//             $product_price = $row['product_price'];

//             echo "<div class='col-md-4 mb-3'>
//                     <div class='card'>
//                       <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
//                       <div class='card-body'>
//                         <h5 class='card-title'>$product_title</h5>
//                         <p class='card-text'>$product_desc. .</p>
//                         <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
//                         <a href='product_details.php?product_id=$product_id' class='btn btn-info'>View-More</a>
//                       </div>
//                     </div>
//                   </div>";
//         }
//     }
// }

// function search_product()
// {
//     global $con;
//     if (isset($_GET['search_data_product'])) {
//         $search_data_value = $_GET['search_data_product'];
//         $search_query = "SELECT * FROM `products` WHERE product_keywords like '%$search_data_value%'";
//         $result_query = mysqli_query($con, $search_query);
//         while($row = mysqli_fetch_assoc($result_query)){
//             $product_id = $row['product_id'];
//             $product_title = $row['product_title'];
//             $product_desc = $row['product_description'];
//             $product_key = $row['product_keywords'];
//             $category_id = $row['category_id'];
//             $brand_id = $row['brand_id'];
//             $product_image1 = $row['product_image1'];
//             $product_price = $row['product_price'];
//             echo "<div class='col-md-4 mb-3'>
//                     <div class='card'>
//                       <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
//                       <div class='card-body'>
//                         <h5 class='card-title'>$product_title</h5>
//                         <p class='card-text'>$product_desc. .</p>
//                         <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
//                         <a href='product_details.php?product_id = $product_id' class='btn btn-info'>View-More</a>
//                       </div>
//                     </div>
//                   </div>";
//         }
//     }
// }

// function display_product_Hompepages()
// {
//     // condition to check the is set function
//     if(!isset($_GET['category'])){
//         if(!isset($_GET['brand'])){
//               global $con;
//               $select_query = "SELECT * FROM `products`order by rand() LIMIT 0,4";
//               $result_query = mysqli_query($con,$select_query);
//               // $row = mysqli_fetch_assoc($result_query);
//               while($row = mysqli_fetch_assoc($result_query)){
//                   $product_id = $row['product_id'];
//                   $product_title = $row['product_title'];
//                   $product_desc = $row['product_description'];
//                   $product_key = $row['product_keywords'];
//                   $category_id = $row['category_id'];
//                   $brand_id = $row['brand_id'];
//                   $product_image1 = $row['product_image1'];
//                   $product_price = $row['product_price'];
//                   echo "<div class='col-md-4 mb-3'>
//                           <div class='card'>
//                             <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
//                             <div class='card-body'>
//                               <h5 class='card-title'>$product_title</h5>
//                               <p class='card-text'>$product_desc. .</p>
//                               <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
//                               <a href='product_details.php?product_id = $product_id' class='btn btn-info'>View-More</a>                          </div>
//                           </div>
//                         </div>";
//               }
//         }
//       }
// }

// function view_details()
// {
//     global $con;
//         if (isset($_GET['product_id'])){
//         if(!isset($_GET['category'])){
//             if(!isset($_GET['brand'])){
//                 $product_id = $_GET['product_id'];
//                 $select_query = "SELECT * FROM `products` WHERE product_id = $product_id";
//                 $result_query = mysqli_query($con,$select_query);
//                 // $row = mysqli_fetch_assoc($result_query);
//                 while($row = mysqli_fetch_assoc($result_query)){
//                     $product_id = $row['product_id'];
//                     $product_title = $row['product_title'];
//                     $product_desc = $row['product_description'];
//                     $product_key = $row['product_keywords'];
//                     $category_id = $row['category_id'];
//                     $brand_id = $row['brand_id'];
//                     $product_image1 = $row['product_image1'];
//                     $product_image2 = $row['product_image2'];
//                     $product_price = $row['product_price'];
//                     echo "<div class='col-md-4 mb-3'>
//                             <div class='card'>
//                                 <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
//                                 <div class='card-body'>
//                                 <h5 class='card-title'>$product_title</h5>
//                                 <p class='card-text'>$product_desc. .</p>
//                                 <a href='product1.php?add_to_cart=$product_id' class='btn btn-warning'>Add to Cart</a>
//                                 <a href='product_details.php?product_id = $product_id' class='btn btn-info'>View-More</a>
//                                 </div>
//                             </div>
//                             </div>
//                             <div class='col-md-8'>
//                         <div class='row'>
//                             <div class='col-md-12'>
//                                 <h4 class='text text-center text-info mb-5'>Relaed Product Information</h4>
//                                 <div class='col-md-6'>
//                                 <img src='./admin_Pannels/product_images/$product_image2' class='card-img-top' alt='$product_title'>
//                                 </div>
//                                 <div class='col-md-6' style='color:#F86F03; text-align: justify;'>
//                                     <p>Alongside our exceptional seed collection, we present a comprehensive assortment of effective pesticides that safeguard your crops from harmful insects and diseases. Our pesticides are rigorously tested, approved,
//                                     and safe for use, providing you with peace of mind as you nurture your green paradise.
//                                     At our online store, we prioritize customer satisfaction, and our prompt delivery service ensures your products reach your doorstep with utmost care and efficiency
//                                     </p>
//                                 </div>
//                             </div>
//                         </div>
//                     </div> ";

//                 }
//             }
//         }
//         }
// }

// function getIPAddress()
// {
//     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  
//         $ip = $_SERVER['HTTP_CLIENT_IP'];  
//     }  
//     // whether ip is from the proxy  
//     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
//         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
//         // Get the first IP (the client's IP) from the list of IPs in the header
//         $ip = explode(',', $ip)[0];
//     }  
//     // whether ip is from the remote address  
//     else {  
//         $ip = $_SERVER['REMOTE_ADDR'];  
//     }  
//     return $ip;  
// }

// function get_cart_details()
// {
//     if (isset($_GET['add_to_cart'])) {
//         global $con;
//         $ip = getIPAddress();
//         $get_product_id = $_GET['add_to_cart'];

//         // Use prepared statements to prevent SQL injection.
//         $select_query = "SELECT * FROM `cart_details` WHERE ip_address = ? AND product_id = ?";
//         $stmt = mysqli_prepare($con, $select_query);
//         mysqli_stmt_bind_param($stmt, "si", $ip, $get_product_id);
//         mysqli_stmt_execute($stmt);
//         $result_query = mysqli_stmt_get_result($stmt);

//         $num_of_rows = mysqli_num_rows($result_query);

//         if ($num_of_rows > 0) {
//             echo "<script>alert('This item is already present in the cart')</script>";
//             echo "<script>window.open('product1.php','_self')</script>";
//         } else {
//             // Assuming the initial quantity should be set to 1 when adding a new product
//             $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES (?, ?, 1)";
//             $stmt = mysqli_prepare($con, $insert_query);
//             mysqli_stmt_bind_param($stmt, "is", $get_product_id, $ip);
//             mysqli_stmt_execute($stmt);
//             echo "<script>alert('Item is added to cart!')</script>";
//             echo "<script>window.open('product1.php','_self')</script>";
//         }

//         mysqli_stmt_close($stmt);
//     }
// }

// function cart_item_number()
// {
//     global $con;
//     $ip = getIPAddress();
//     $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
//     $result_query = mysqli_query($con, $select_query);
//     $num_of_rows = mysqli_num_rows($result_query);
//     echo $num_of_rows;
// }
?>
