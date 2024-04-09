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
    <!-- code for the navagation pages -->
        <section style="background-color: bisques;">    
            <div class="container-fluid p-0" >
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"> <img width="40" height="40" src="https://img.icons8.com/external-filled-outline-icons-maxicons/40/external-agriculture-future-of-technology-filled-outline-icons-maxicons.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="product1.php"><b>Product</b></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="news&article_page.php"><b>Blog & info</b></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="agri_councling_page.php"><b>Agri Counselling</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus_page.php"><b>Contact-Us</b></a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart_page.php"><i class="fa-solid fa-cart-shopping">
                                <sup>
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

function get_cart_details()
{
    if (isset($_GET['add_to_cart'])) {
        global $con;
        $ip = getIPAddress();
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

function cart_item_number()
{
    global $con;
    $ip = getIPAddress();
    $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$ip'";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    echo $num_of_rows;
}    
// called the function
cart_item_number();

// function total_cart_price(){
//     global $con;
//     $get_ip_add = getIPAddress();
//     $total = strval(0);
//     $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
//     $result = mysqli_query($con, $cart_query);
//     while($row = mysqli_fetch_array($result)){
//         $product_id = $row['product_id'];
//         $select_products = "SELECT * FROM `products` WHERE product_id ='$product_id'";
//         $result_products = mysqli_query($con, $select_products);
//         while($row_product_price = mysqli_fetch_array($result_products)){
//             $product_price = $row_product_price['product_price'];
//             // $product_values = array_sum($product_price);
//             $total += $product_price;
//             strval($total);
//         }
//     }
//     echo $total;
// }

// alternative code if erro are ocuring then un-comment the above code
function total_cart_price(){
    global $con;
    $get_ip_add = getIPAddress();
    $total = 0;  // Initialize the total as a numeric value
    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
    $result = mysqli_query($con, $cart_query);
    while($row = mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $select_products = "SELECT * FROM `products` WHERE product_id ='$product_id'";
        $result_products = mysqli_query($con, $select_products);
        while($row_product_price = mysqli_fetch_array($result_products)){
            $product_price = $row_product_price['product_price'];
            $total += floatval($product_price);  // Convert and add the product price to the total
        }
    }
    echo strval($total);  // Convert and echo the total as a string
}
                                    ?>
                                </sup></i>
                            </a>
                        </li>
                        <!-- code for the total pritce -->
                        <li class="nav-item">
                        <a class="nav-link" href="#"><b>Total_Price:<span style="color:#F86F03;"><?php total_cart_price();?></span></b></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./users_area/login_page.php"><b>Login</b></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./users_area/signup_Page.php"><b>Register</b></a>
                        </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="get">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <input type="Submit" value="search" class="btn btn-secondary" name="search_data_product">
                    </form>
                    </div>
                </div>
                </nav>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>