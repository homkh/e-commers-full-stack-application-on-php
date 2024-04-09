<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>

        <!-- <h1 class="faq-heading">FAQ'S</h1> -->
        <h4 style = "color:#E55604;"><b>_<i>Friquently</i> Asked Question?</b></h4>
        <section class="faq-container">
            <div class="faq-one">

                <!-- faq question -->
                <h5 class="faq-page">How can I place an order for agricultural products on your website?</h5>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>
                    To place an order, simply browse our product catalog, select the items you need, and add them to your cart. Then, proceed to checkout,
                     where you can provide your shipping and payment information to complete the purchase.
                    </p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

                <!-- faq question -->
                <h5 class="faq-page">What payment methods do you accept for online orders?</h5>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>
                    We accept a variety of payment methods, including  online payment gateways likes eSewa and khalti. Also, cash on delivery (COD).
                    You can choose the option that is most convenient for you during the checkout process.
                    </p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-three">

                <!-- faq question -->
            <h5 class="faq-page">Do you offer any guarantees or warranties on agricultural products sold on your website?</h4>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>
                    Yes, we often offer guarantees or warranties on certain products. The specific terms and conditions vary depending on the product and the manufacturer. You can find information about warranties 
                    and guarantees on the product page or by contacting our customer support team.
                    </p>
                </div>
            </div>

            <hr class="hr-line">

            <div class="faq-three">

                <!-- faq question -->
            <h5 class="faq-page">What is your return and refund policy for agricultural products?</h5>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>
                    We have a customer-friendly return and refund policy. If you receive a product that is damaged or not as described, you can initiate a return within a specified timeframe. Please refer to our "Returns and Refunds" 
                    page on our website for detailed instructions on the return process and refund eligibility criteria.
                    </p>
                </div>
            </div>

        </section>
    </main>
<style>
body{
    font-family: 'Work Sans', sans-serif;
}
.faq-heading{
    border-bottom: #777;
    padding: 20px 60px;
}
.faq-container{
display: flex;
justify-content: center;
flex-direction: column;

}
.hr-line{
  width: 60%;
  margin: auto;
  
}
/* Style the buttons that are used to open and close the faq-page body */
.faq-page {
    /* background-color: #eee; */
    color: #444;
    cursor: pointer;
    padding: 30px 20px;
    width: 60%;
    border: none;
    outline: none;
    transition: 0.4s;
    margin: auto;

}
.faq-body{
    margin: auto;
    /* text-align: center; */
   width: 50%; 
   padding: auto;
   
}
.active,
.faq-page:hover {
    background-color: #F9F9F9;
}

.faq-body {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
}

.faq-page:after {
    content: '\02795';
    /* Unicode character for "plus" sign (+) */
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2796";
    /* Unicode character for "minus" sign (-) */
}
</style>

<!-- code for the java script and mae it more responsives -->
<script>
var faq = document.getElementsByClassName("faq-page");
var i;

for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}

</script>   
</body>
</html>