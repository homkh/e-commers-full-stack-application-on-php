<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
<?php
  include('navbar_page.php');
?>

<!-- code form the products pages -->
<nav class = "navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><b>Welcome Guest</b></a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><b>login</b></a>
          </li>
        </ul>
    </nav>    
    <!-- second child bar -->
    <nav>
      <div class="bg-light">
        <h2 class="text-center">Agro Store Nepal</h2>
        <p class="text-center"><b>"Seamless Access to Organic and Hybrid Seeds: Your Online Destination for Agro Solutions and Expert Counselling."</b></p>
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
            // include('./function/common_function.php');
            // create a function for the search prooduct
            function search_product1(){
                global $con;
                if(isset($_GET['search_data_product'])){
                $search_data_value = $_GET['search_data'];
                $search_query = "SELECT* FROM `products` WHERE product_keywords like '%$search_data_value%'";
                $result_query = mysqli_query($con,$search_query);
                // $row = mysqli_fetch_assoc($result_query);
                while($row = mysqli_fetch_assoc($result_query)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_desc = $row['product_description'];
                    $product_key = $row['product_keywords'];
                    $category_id = $row['category_id'];
                    $brand_id = $row['brand_id'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    echo "<div class='col-md-4 mb-3'>
                            <div class='card'>
                              <img src='./admin_Pannels/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                              <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text'>$product_desc. .</p>
                                <a href='#' class='btn btn-warning'>Add to Cart</a>
                                <a href='#' class='btn btn-info'>View-More</a>
                              </div>
                            </div>
                          </div>";
                }
               }
              }
            // call the function
            search_product1();

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
                              <a href='#' class='btn btn-warning'>Add to Cart</a>
                              <a href='#' class='btn btn-info'>View-More</a>
                            </div>
                          </div>
                        </div>";
            }
        }
    }
}
//called the function details
get_category_details();
?>

          <div class="col-md-4 mb-3">
              <div class="card">
                <img src="https://images.unsplash.com/photo-1600841784377-45b805f54d34?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c3VuZmxvd2VyJTIwc2VlZHN8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sunflower Seeds</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-warning">Add to Cart</a>
                  <a href="#" class="btn btn-info">Vew-More</a>
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
  <!-- Production Section Footer -->
  <footer class="footer mt-5">
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
            <a href="#" target="_blank" title="Facebook"><img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png" /></a>
            <a href="#" target="_blank" title="Twitter"><img width="48" height="48" src="https://img.icons8.com/fluency/48/twitter.png"/></a>
            <a href="#" target="_blank" title="Instagram"><img width="48" height="48" src="https://img.icons8.com/fluency/48/instagram-new.png"/></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Code for the stsyles sheets -->
    <style>
      .footer {
      background-color: #f8f9fa;
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