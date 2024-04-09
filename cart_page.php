<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link The font awsome pages -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome to cart pages!</title>
  </head>
  <body>
  <section>    
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg" style="color:#AEC3AE;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"> <img width="40" height="40" src="https://img.icons8.com/external-filled-outline-icons-maxicons/40/external-agriculture-future-of-technology-filled-outline-icons-maxicons.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-secondary" aria-current="page" href="index.php"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="product1.php"><b>Product</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="./news&article_page.php"><b>News & Article</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="./agri_councling_page.php"><b>Agro Councling</b></a>
           </li>
           <li class="nav-item">
             <a class="nav-link text-secondary" href="contactus_page.php"><b>Contact-Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart_page.php"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="./users_area/login_page.php"><b>Login</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="./users_area/signup_Page.php"><b>Register</b></a>
            </li>
          </ul>
          <li class = "nav-item" style ="list-style-type: none; color:#F86F03;">
            <h6><i>Welcome to you cart Section.</i></h6>
          </li>
        </div>
      </div>
    </nav>
    <hr>
  </div>
</section>
<!-- <div style="background-color: #FAF3F0; margin:0%; padding:0%;">
    <h4 class="text-center" style="color:#FD8D14;">Welcome!</h4>
</div> -->
<div class="container" style="margin-top:2%; padding:0%;">
    <h4 class="text-center" style="color:#FD8D14;"><i>_Your</i> Cart details are below.</h4>
    <h6 class="text-center">Feel free to modify it as per your specific needs and branding preferences.</h6>
</div>

<div class="container mt-5">
  <div class="row">
    <form action="" method="post">

    <table class="table table-bordered text-center">
      <!-- <thead>
        <tr>
          <th>Product Title</th>
          <th>Product Image</th>
          <th>Quantity</th>
          <th>Total Price</th>
          <th>Remove</th>
          <th colspan="2">Oprations</th>
        </tr>
      </thead> -->
      <tbody>
        <!-- php code for the display the dynamic data from databse -->
        <?php
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'mystore';
        $con = new mysqli($host, $username, $password, $database);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        function getIPAddress()
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
        // function for the fetching the product price
        
        global $con;
        $get_ip_add = getIPAddress();
        $total = 0;
        $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
        $result = mysqli_query($con, $cart_query);
        $result_count = mysqli_num_rows($result);
        if($result_count>0){
          echo"
          <thead>
            <tr>
              <th>Product Title</th>
              <th>Product Image</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <th>Remove</th>
              <th colspan='2'>Oprations</th>
            </tr>
         </thead>";
        while($row = mysqli_fetch_array($result)){
            $product_id = $row['product_id'];
            $select_products = "SELECT * FROM `products` WHERE product_id ='$product_id'";
            $result_products = mysqli_query($con, $select_products);
            while($row_product_price = mysqli_fetch_array($result_products)){
                $product_price = $row_product_price['product_price']; // array for the to store the product price
                $price_table = $row_product_price['product_price'];
                $product_title = $row_product_price['product_title'];
                $product_image1 = $row_product_price['product_image1'];
                $total += $product_price
            
        ?>
        <tr>
          <td><?php echo $product_title;?></td>
          <td><img src="./admin_Pannels/product_images/<?php echo $product_image1;?>" alt="Seeds_photo" style="height: 67px; width: 67px; object-fit:contain;"></td>
          <td><input type="text" name="qty" class="form-input w-20"></td>
          <?php
          // $get_ip_add = gethostbyname($_SERVER['SERVER_NAME']);
          // if(isset($_POST['update_cart']))
          //     {
          //       $quantity = $_POST['qty'];
          //       $update_cart_details = "UPDATE `cart_details` SET quantity=$quantity WHERE ip_address='$get_ip_add' ";
          //       $result_products_quentity = mysqli_query($con, $update_cart_details);
          //       $total= $total*$quantity;
          //     }
              $get_ip_add = gethostbyname($_SERVER['SERVER_NAME']);
              if (isset($_POST['update_cart'])) {
                $quantity = $_POST['qty'];
                $update_cart1 = "UPDATE `cart_details` SET quantity=? WHERE ip_address=?";
                $stmt = mysqli_prepare($con, $update_cart1);
                mysqli_stmt_bind_param($stmt, "is", $quantity, $get_ip_add);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            }
          ?>
          <td><?php echo 'Rs.'. $price_table.'-/'; ?></td>
          <td><input type="checkbox" name="removeitem[]" class="form-input w-40" value="<?php echo $product_id;?>"></td>
          <td>
            <!-- <button class="btn btn-info btn-sm">Update</button> &nbsp; -->
            <input type="submit" value="Update Cart" class="btn btn-info btn-sm" name="update_cart">
            <!-- <button class="btn btn-info btn-sm">Remove</button> -->
            <input type="submit" value="Remove Cart" class="btn btn-info btn-sm" name="remove_cart">

          </td>
        </tr>       
<!-- closing statement for the while loops -->
<?php
}
}
// closing for the if statement
        }

        else{
          echo "<h3 style='color:#0B666A;' class='text-center'>The Cart Is Empty! </h3>";
        }
?>

  </tbody>
</table>
    <div class="d-flex mt-4">
      <?php
        global $con;
        $get_ip_add = getIPAddress();
        $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
        $result = mysqli_query($con, $cart_query);
        $result_count = mysqli_num_rows($result);
        if($result_count>0){
          echo "<h4 class='px-4'> SubTotal:<strong class='text-success'> $total/-</strong></h4>
          <a href='product1.php'><button type='button' class='btn btn-warning mx-4'>Continue Shopping</button></a>
          <a href='./users_area/checkout.php'><button type='button' class='btn btn-success'>Checkout</button></a>";
        }
        else{
          echo "<a href='product1.php'><button type='button' class='btn btn-warning mx-4'>Continue Shopping</button></a>";

        }
      ?>
      
    </div>
  </div>
</div>
</form>
<!-- function for remove the item from cart -->
<?php
function cart_remove(){
    global $con;
    if(isset($_POST['remove_cart'])){
        foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query = "DELETE FROM `cart_details` WHERE product_id=$remove_id";
            // executed the query 
            $run_delete = mysqli_query($con, $delete_query);
            if($run_delete){
                echo "<script>window.open('cart_page.php','_self')</script>";
            }
        }
    }
}

// call the function 
echo cart_remove();

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- fotter for the web-sites -->
   <footer class="bg-dark text-light py-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>About Us</h3>
          <p>At Nepal Agro Seeds Platforms, we are dedicated to providing high-quality agricultural seeds for farmers and gardeners. Our seeds are carefully selected and tested for optimal growth and productivity, ensuring the success of your crops.</p>
        </div>
        <div class="col-md-6">
          <h3>Contact</h3>
          <ul class="list-unstyled">
            <li>Email: Agro@nepal.com</li>
            <li>Phone: +977-9843294319</li>
            <li>Address: Old-Baneswor, Kathmandu, Nepal.</li>
          </ul>
        </div>
      </div>
      <hr size="3px">
      <!-- Footer Bottom Area Start -->
      <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
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
  </footer>
  <style>
footer h3 {
  font-weight: bold;
}

footer p {
  margin-bottom: 20px;
}

footer ul {
  list-style: none;
  padding-left: 0;
}

footer li {
  margin-bottom: 5px;
}
  </style>
  </body>
</html>