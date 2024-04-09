<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- link for the font awsome items -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>welcome to home pages of Nepal Agro pvt.Ltd. Nepal</title>
  </head>
<body>
<!-- code for the nav gation pages -->
<section style="background-color:#F9F5F6;">    
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
              <a class="nav-link active text-secondary" aria-current="page" href="index.php"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="product1.php"><b>Product</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="news&article_page.php"><b>Blog & info</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary" href="agri_councling_page.php"><b>Agri Counselling</b></a>
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
            <!-- <li class="nav-item">
              <a class="nav-link disabled">Agro Councling</a>
            </li> -->
          </ul>
          <li class = "nav-item" style ="list-style-type: none; color:#F86F03;">
            <h6><i>Welcome to conact us page!</i></h6>
          </li>
        </div>
      </div>
    </nav>
  </div>
</section>
<div class="p-2 mb-2 bg-secondary text-white">
  <p class="px-4"><b>Do you need any help?</b></p>
</div> 

  <section class="">
    <h3 class="text-center mt-4" style="font-family: system-ui;color: #025464;">We'd Love To <span style="color:#F86F03;">Hear You!</span></h3>
    <p class="text-center w-responsive">If you have any questions regarding features, a free trial, or any press-related inquiries, we are here are ready to answers and address your curiosity.</p>
  </section>
  
<div class="container px-0">
  <div class="row">
    <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
              <h5 class="card-title text-danger text-center"><i>Contact a specialist</i></h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
              <p class="card-text" style="text-align: justify;">If you are experiencing any technical problems, do not hesitate to contact us. Our team of technicians and specialists is ready to assist you promptly. We understand the importance of resolving technical issues quickly, and we strive to provide a swift response to your concerns.</p>
              </div>
           </div>
    </div>
    <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
              <h5 class="card-title text-danger text-center"><i>Get support</i></h5>
              <p class="card-text" style="text-align: justify;">We are here to provide support through various channels. Our team is available to assist you through phone calls, email, online contact forms, and live chat. Choose the method that is most convenient for you, and we'll be ready to help. Feel free to choose the method that suits you best.</p>
              </div>
             </div>
    </div>
     <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
              <h5 class="card-title text-danger text-center"><i>Media inquiries</i></h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
              <p class="card-text" style="text-align: justify;">For media inquiries, we appreciate your interest and would be happy to provide the information you need. Please contact our dedicated media relations team using the following contact us forms. Thank you for considering us for your media coverage and we look forward to working with you.</p>
              </div>
             </div>
    </div>
</div> 
</br></br>
<div class="text text-center" style="color: #025464;">
  <h4>If you are experiencing any problems, Please follow the steps below to fill out the form!</h4>
</div>
</br></br>
<!-- code for contact us form includes -->
<?php
    include"contact_form.php";
?>

<section id = "yourDivId">
<div class="container mt-3 text-danger text-center" >
  <h3><i>_Please</i> provide us with your feedback by filling out this form regarding<br><span style="color: black">Our service <i>Request.</i></span></h3>
  <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSf7XWfIiPQcSLjWuozLaAgCAP50jLRqTLT4VaUWpYyE9KlV1A/viewform?usp=sf_link"><button class="btn btn-success">Provide feedback</button></a> -->
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf7XWfIiPQcSLjWuozLaAgCAP50jLRqTLT4VaUWpYyE9KlV1A/viewform?embedded=true" width="650" height="950" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
</div>
</section>

<!-- Code for the fotter -->
<section style="background-color:#E6FFFD; margin:0%; padding: 0%;">
  <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h4 style="color: #025464;">About Us</h4>
        <p style="text-align: justify;">At Nepal Agro Seeds Platforms, we are dedicated to providing high-quality agricultural seeds for farmers and gardeners. Our seeds are carefully selected and tested for optimal growth and productivity, ensuring the success of your crops.</p>
      </div>
      <div class="col-md-4 col-sm-6">
        <h4 style="color: #025464;">Contact Us</h4>
        <p>Kathmandu Mid-Baneshwor</p>
        <p>Bagamati, Nepal</p>
        <p>Email: info@abcseeds.com</p>
        <p>Phone: +977-9843294319</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <h4 style="color: #025464;">Follow Us</h4>
        <div class="social-media">
          <p><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i>NepalAgroPvt.ltd</a></br>
          <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i>SeedsNepal@</a></br>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i>SeedsNepal</a></p>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2023 Nepal Agro Seeds. All rights reserved.</p>
        <p><a href="policy/privicy_policy.php">Privacy Policy</a> | <a href="policy/termsOfservices.php">Terms of Service</a></p>
      </div>
    </div>
  </div>
</footer>
</section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
<style>
*body{
  margin: 0%;
  padding: 0%;
  width: 400px; 
  height: 300px;
  background-image: url('https://img.freepik.com/free-vector/reviews-concept-landing-page_52683-12186.jpg?w=740&t=st=1694581961~exp=1694582561~hmac=28abf7507a5a5f93d0d3821e2ab8ea07fa0e1f6861c22078152fdd166b9bcc1a'); 
  background-size: cover; 
  background-repeat: no-repeat; 
  background-position: center;
}
</style>
</html>