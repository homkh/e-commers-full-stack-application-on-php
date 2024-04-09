<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome To News and article Section</title>
    <style>
        Ash:hover {
  color: black;
}
    </style>    
  </head>
  <body>
      <section style="background-color:#F9F5F6;">
          <div class="container-fluid p-0" >
          <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"> <img width="40" height="40" src="https://img.icons8.com/external-filled-outline-icons-maxicons/40/external-agriculture-future-of-technology-filled-outline-icons-maxicons.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-secondary" aria-current="page" href="index.php" id="Ash"><b>Home</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="product1.php" id="Ash"><b>Product</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="news&article_page.php" id="Ash"><b>Blog & info</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="agri_councling_page.php" id="Ash"><b>Agri Counselling</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-secondary" href="contactus_page.php" id="Ash"><b>Contact-Us</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="cart_page.php"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-secondary" href="./users_area/login_page.php" id="Ash"><b>Login</b></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-secondary" href="./users_area/signup_Page.php" id="Ash"><b>Register</b></a>
                  </li>
                </ul>
                <li class = "nav-item" style ="list-style-type: none;">
                  <a class="nav-link" href="./Soile_testing.html" id="Ash" target="_blank"><h5 style="color:#F86F03;"><i>What is soil testing?</i></h5></a>
                </li>
              </div>
            </div>
          </nav>
        </div>
      </section>

    <!-- code for the news and article section -->
<h3 class="text-center mt-5"><span style="color:#F94C10; font-size: 35px;"><i>Agro</i></span> Blog it better<span style="color:#F94C10;"><b>_</b></span> </h3>
<h5 class="text-center">"You can explore informative blogs and articles about seamless agriculture."</h5>
<section class="container mt-4">
<div class="row">
  <div class="col-md-6 mt-3 card-container"> 
      <?php
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'mystore';
        
        $con = mysqli_connect($host, $username, $password, $database);
        
        // Check if the connection was successful
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $select_data = "SELECT * FROM `blog`";
        $execute_data = mysqli_query($con,$select_data);
        // $row_data = mysqli_fetch_assoc($execute_data);
        while($row_data = mysqli_fetch_assoc($execute_data)){
          $blog_title = $row_data['blog_title'];
          $author_name = $row_data['author_name'];
          $blog_content = $row_data['blog_content'];
          $blog_image = $row_data['blog_image'];
          echo "
          <div class='card border-success shadow'>
              <div class='card-body'>
              <img src='./admin_Pannels/blog_image/$blog_image' class='card-img-top' alt='Blogs images'>
                <h5 class='card-title mt-3'>$blog_title</h5>
                <h6 class='sub-heading text-secondary'>$author_name </h6>
                <p class='card-text'>$blog_content.</p>
                <input type='button' id ='view_more' name='view_more' value='Read more &#x2192;' Required='required' class='btn btn-secondary btn-sm text-end'>
              </div>
            </div> </br>";
        } 
      ?>      
    </div>
    
        <div class="col-md-6 mt-3 card-container">
            <div class="card border-secondary shadow">
                <img src="data:image/jpeg;base64,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"
                     class="card-img-top" alt="Agriculture system in Nepal">
                <div class="card-body">
                    <h5 class="card-title">Is Nepal ready for organic farming?</h5>
                    <h6 class="sub-heading text-secondary">Officlially Publish by Nepal gov.</h6>
                    <p class="card-text" align="justify">Jumping into organic farming immediately without having sufficient inputs and resources, technical services and pest and disease management solutions will be like running into the darkness.
                        <span id="points">....</span>
                              <span id="moreText">
                              Although the modern production system has been found to solve food problem, it has created many other problems. The haphazard use of chemical fertilizers and pesticides has resulted in deleterious effects on the human health causing immune-suppression, skin cancer, hormone disruption, reproductive abnormalities, birth defects and liver and kidney problems.
                              Also the long term use of agro-chemicals has declined soil fertility and imbalanced natural ecosystem.  In order to address these problems, some people are promoting organic agriculture.
                              Organic farming can be our long term vision. At present, safe food production should be our first priority. It is because nutrition security and availability of safe food are the constitutional rights of the Nepali people. So we need to produce enough safe and healthy food to feed our growing population.
                              </span>
                    </p>
                    <button onclick="toggleText('points', 'moreText', 'textButton')" id="textButton" class="btn btn-secondary btn-sm">
                        Read more -->
                    </button>
                </div>
        </div>
      </div>
  </div>
</section>  

<!-- code for blog cart -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-secondary shadow">
                <img src="https://ipmil.cired.vt.edu/wp-content/uploads/2015/08/1-plowing-field1.jpg"
                     class="card-img-top" alt="Agriculture system in Nepal">
                <div class="card-body">
                    <h5 class="card-title">Agriculture in Nepal</h5>
                    <h6 class="sub-heading text-secondary">Officlially Publish by Nepal gov.</h6>
                    <p class="card-text" align="justify"> In Nepal, the economy is dominated by agriculture. In the late 1980s, it was
                        the livelihood for more than 90% of the population, although only approximately 20% of the total
                        land area was cultivable, it accounted for, on average, about 60% of the GDP and approximately
                        75% of exports.
                        <span id="points">....</span>
                              <span id="moreText">
                                Since the formulation of the Fifth Five-Year Plan, agriculture has been
                                the highest priority because economic growth was dependent on both increasing the productivity of
                                existing crops and diversifying the agricultural base for use as industrial inputs.
                                According to the World Bank, agriculture is the main source of food, income, and employment for the majority. It provides about 33% of the gross domestic product (GDP).In trying to increase agricultural production and diversify the agricultural base, the government focused on irrigation, the use of fertilizers and insecticides, the introduction of new implements and new seeds of high-yield varieties, and the provision of credit. The lack of distribution of these inputs, as well as problems in obtaining supplies, however, inhibited progress. Although land reclamation and settlement were occurring in the Terai Region, environmental degradation and ecological imbalance resulting from deforestation also prevented progress.
                                Although new agricultural taechnologies helped increase food production, there still was room for further growth. Past experience indicated bottlenecks, however, in using modern technology to achieve a healthy growth. The conflicting goals of producing cash crops both for food and for industrial inputs also were problematic.
                              </span>
                    </p>
                    <button onclick="toggleText('points', 'moreText', 'textButton')" id="textButton" class="btn btn-secondary btn-sm">
                        Read more -->
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-success shadow">
                <img src="https://myrepublica.nagariknetwork.com/uploads/media/b_20200606140106.jpg"
                     class="card-img-top" alt="women are working">
                <div class="card-body">
                    <h5 class="card-title">Five policies for agriculture In Nepal</h5>
                    <h6 class="sub-heading text-secondary">Publish by: Bhairab Raj Kaini</h6>
                    <p class="card-text" align="justify">Is the government well prepared to purchase the entire quantity of the produce
                        that farmers are unable to sell due to low prices? Will there be adequate budget and storage
                        facilities?
                        <span id="points1">....</span>
                              <span id="moreText1">
                                Agriculture in Nepal has slow growth over a protracted period despite a number of policies and strategic approaches being followed in the past. The Agriculture Perspective Plan (APP), unveiled in 1995 with a 20‐year vision, adopted a Green Revolution‐type approach based on massive investments on key inputs such as irrigation, fertilizers and rural roads to be focused on high potential areas. Based on it, the Government of Nepal (GoN) has formulated several broader policy frameworks since then. Of these, Agriculture Development Strategy (ADS) and National Agriculture Policy 2061 (NAP 2004) remain main policy documents to date. All these policies are judged to be sound in design but have suffered greatly in implementation. In many cases, they lacked the supporting legislation and resources for implementation.
                                Minister for Agriculture and Livestock Development (MOALD) Ghanashyam Bursal has come up with five policy guidelines to bring visible change in agriculture. Although these guidelines are not new, they may be helpful to bring anticipated change if implemented effectively. But the existing organizational set up and human resources are not supportive. The mechanism of institutional coordination is also lacking.
                              </span>
                    </p>
                    <button onclick="toggleText('points1', 'moreText1', 'textButton1')" id="textButton1"
                            class="btn btn-secondary btn-sm">
                        Read more -->
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleText(pointsId, moreTextId, buttonTextId) {

        // Get all the elements from the page
        let points = document.getElementById(pointsId);
        let showMoreText = document.getElementById(moreTextId);
        let buttonText = document.getElementById(buttonTextId);

        // condition to check button click
        if (points.style.display === "none") {

            // Hide the text between the span elements
            showMoreText.style.display = "none";

            // Show the dots after the text
            points.style.display = "inline";

            // Change the text on button to 'Read more -->'
            buttonText.innerHTML = "Read more -->";
        } else {

            // Show the text between the span elements
            showMoreText.style.display = "inline";

            // Hide the dots after the text
            points.style.display = "none";

            // Change the text on button to 'Show Less'
            buttonText.innerHTML = "Show Less";
        }
    }
</script>

<!-- code for the another section -->
<hr size="3px">
<div class="container">
<div class="mt-4 px-5">
  <article>
    <h2 class="text-center" style="color:#0B666A;"><span style="color:#F94C10;">How</span> to take care our crops?</h2>
    <h6 class="mt-3" style="color:#0B666A;">1.Soil Preparation:</h6>
    <li>Choose well-drained and fertile soil for planting your crops.</li>
    <li>Test the soil's pH and nutrient levels to ensure it's suitable for your chosen crops.</li>
    <li>Incorporate organic matter, such as compost or manure, to improve soil structure and nutrient content.</li>

    <h6 class="mt-3" style="color:#0B666A;">2.Proper Planting:</h6>
    <li>Follow recommended planting depths and spacing for each crop to allow proper root development.</li>
    <li>Plant at the appropriate time according to the local climate and growing season.</li>

    <h6 class="mt-3"style="color:#0B666A;">3.Watering:</h6>
    <li>Provide consistent and adequate watering, especially during critical growth stages.</li>
    <li>Use techniques like drip irrigation to minimize water wastage and prevent disease spread.</li>

    <h6 class="mt-3"style="color:#0B666A;">4.Weeding:</h6>
    <li>Regularly remove weeds that compete with your crops for nutrients, water, and sunlight.</li>
    <li>Use manual or mechanical methods to avoid damaging crop roots.</li>

    <h6 class="mt-3"style="color:#0B666A;">5.Fertilization:</h6>
    <li>Apply fertilizers based on soil test results and crop requirements.</li>
    <li>Consider using organic fertilizers to improve soil health over time.</li>
    
    <h6 class="mt-3"style="color:#0B666A;">6.Pest and Disease Management:</h6>
    <li>Monitor your crops for signs of pests and diseases regularly.</li>
    <li>Use integrated pest management techniques, including cultural, biological, and chemical methods when necessary.</li>

    <h6 class="mt-3"style="color:#0B666A;">7.Harvesting:</h6>
    <li>Harvest crops at their peak maturity to ensure the best flavor and nutritional value.</li>
    <li>Use proper tools and techniques to avoid damaging plants during harvesting.</li>

    <h6 class="mt-3"style="color:#0B666A;">8.Crop Rotation:</h6>
    <li>Rotate your crops annually to prevent soil-borne diseases and nutrient imbalances.</li>
  </article>
</div>
<article class="mt-4">
  <h2 style="color:#0B666A; text-align:center;"><span style="color:#F94C10;">Some</span> common pests and diseases that are harmful to crops:</h2>
  <div class="px-5">
    <h5>Pests/Insects:</h5>
    <li><b>Aphids:</b> These small insects feed on plant sap and can transmit viruses to crops.</li>
    <li><b>Caterpillars:</b> Various types of caterpillars, like armyworms and cutworms, can cause significant damage by chewing on leaves and stems.</li>
    <li><b>Whiteflies:</b> These tiny insects can weaken plants by feeding on sap and transmitting viruses.</li>
    <li><b>Thrips:</b> Thrips feed on leaves and can transmit diseases, causing damage to a wide range of crops</li>
    <li><b>Spider Mites:</b> These arachnids suck plant fluids, leading to yellowing and discoloration of leaves.</li>
    <li><b>Root Knot Nematodes:</b> These microscopic worms attack plant roots, leading to stunted growth and reduced yield.</li>
  
      <h5 class="mt-3">Diseases:</h5>
      <li><b>Fungal Diseases:</b> Examples include powdery mildew, downy mildew, and various types of rusts that can affect leaves and stems.</li>
      <li><b>Bacterial Diseases:</b> Bacteria can cause diseases like bacterial blight, which leads to lesions on leaves and fruit.</li>
      <li><b>Viral Diseases:</b>  Viruses can be transmitted by insects and affect plant growth, fruit development, and overall health.</li>
      <li><b>Wilts:</b> Fusarium and Verticillium wilts, for instance, cause plants to wilt and die.</li>
      <li><b>Rice Blast:</b> A devastating fungal disease that affects rice crops, leading to yield losses.</li>
      <li><b>Late Blight:</b> A notorious disease affecting potatoes and tomatoes, causing dark lesions on leaves and tubers/fruit.</li> 
  </div>
  </article>
</div>

<!-- <div class="container mt-4">
  <h3 class="d-flex">Tranding&nbsp;<span style="color:#F94C10;">Business</span> &nbsp;Ideas &nbsp;<hr width="80%" size="13" style="color:#252B48;"></h3>
  <div class="px-5 text-success">
    <h5>Vertical Farming Services</h5>
    <h5>Apiary and Honey Production</h5>
    <h5>Herb and Microgreens Farming</h5>
    <h5>Organic Fertilizer Production</h5>
    <h5>Indoor Plant Rental for Offices</h5>
    <h5>Agricultural E-Commerce Platform</h5>
  </div>
  <div class="container">
    <img src="./image/idea_businsess.jpg" alt="business_image" style = "max-width: 100%; height: auto;">
  </div>
</div> -->
<div class="container mt-5">
<style>
        .header {
            display: flex;
            align-items: center;
        }

        .header h3 {
            margin: 0;
            font-size: 24px;
            color: #252B48;
        }

        .header span {
            color: #F94C10;
        }

        .divider {
            border: none;
            border-top: 2px solid #252B48;
            width: 80%;
            margin-top: 10px;
        }

        .business-list {
            margin-top: 20px;
        }

        .business-list h5 {
            margin: 0;
            font-size: 18px;
            color: #00b894;
        }

        .image-container {
            margin-top: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <div class="container">
        <div class="header">
            <h3>Trending <span style="color:#F94C10;">Business</span> Ideas</h3>
            <hr class="divider">
        </div>
        <div class="business-list">
            <h5>Vertical Farming Services</h5>
            <h5>Apiary and Honey Production</h5>
            <h5>Herb and Microgreens Farming</h5>
            <h5>Organic Fertilizer Production</h5>
            <h5>Indoor Plant Rental for Offices</h5>
            <h5>Agricultural E-Commerce Platform</h5>
        </div>
        <div class="image-container">
            <img src="./image/idea_businsess.jpg" alt="Business Idea Image">
        </div>
    </div>
</div>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- code for fotter of web-pages -->
   <footer class="bg-dark text-light py-4 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4 style="color:#F94C10;">About-us</h4>
          <p>At Nepal Agro Seeds Platforms, we are dedicated to providing high-quality agricultural seeds for farmers and gardeners. Our seeds are carefully selected and tested for optimal growth and productivity, ensuring the success of your crops.</p>
        </div>
        <div class="col-md-6">
          <h4 style="color:#F94C10;">Contact-us</h4>
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
.body{
  overflow-x: hidden;
}
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