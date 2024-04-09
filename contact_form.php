<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- Code for the contact us formes -->
    <section class="mb-4 border border-primary rounded shadow p-3 mb-5 bg-body rounded w-responsive">
    <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4" style="color:#F86F03;">Contact Us <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAAAsTAAALEwEAmpwYAAABvklEQVR4nGNgGAWjYBQQB5LUj0jFKx82Hgw4Sf2IFIYDY5UPN8SpHP4/GHCs8uGGUQfGjYagymga/E+1TBKvevh/durV/xVLnv6vXPnsf17xjf/xGkcGTy4un/P4f/ubHyi4dvsrnI70lln4X4U3mmRMlgMzIi9iOA6G88tvYnWgk2T/fw4mDZIxWQ4s6b+P04FVa59jdaCb9Iz/YhyOJGOyHFix9ClOB9YdejvwabDp4kecDmx79v1/vPqRgXVgqtdZnA7Mybg28JkEHM1LMKO5dt+b//GaRwYwk6gd/O+f1/bfaUPgf7uTjv/jbk78X/70wv/KZ1f+p9xZ8N/htNt/h60+/73rqv7H6Oyhfybx7Cj8b3PKmijsuiDuf6z6AfqlwQi7tUQ7zgaKgyNn0M+BfoUtJDvQozeHfpnEbUYKyQ503OxHv0ziOifxv/PKMJJxjO5u+mWSgcSxow5UGQ3Bw0MzDcYqH3oap3Joa5zy4WekW3qIaL3kOnBDqMwxTpBaEB2rcmgjCQ4kSS9ZDoxRPqaCrD5B6YAqsQ4kVS9WBxIaPGJg+M+IquM/I7GDQaTqxTp4NApGwShgwAoAzP/g5M+DuEUAAAAASUVORK5CYII="></h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5"><b>Do you have any inquiries or concerns? Please do not hesitate to contact us directly. We will be reponse as soon as possible.</b></p>
        <div class="row" style="margin-left: 60px; margin-right: 60px;">

            <!--Grid column-->
            <div class="col-md-12 mb-md-5 mb-5">
                <form id="contact-form" name="contact-form" action="formeConn.php" method="POST">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control" required autocomplete="off">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control" required autocomplete="off">
                                <label for="email" class="" >Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" required autocomplete="off">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" style="height: 30vh;" autocomplete="off"></textarea>
                                <label for="message" required>Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-warning" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>

        </div>
            <!-- next lines -->
            <div class="col-md-12 text-center">
                <ul class="list-unstyled mb-0">
                    <!-- <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Old <span>- Baneshwor Kathmandu,</span> Nepal</p>
                    </li> -->

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+977-9843294319</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>AgroNepal.com@gmail.com</p>
                    </li>
                </ul>
            </div>
  </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>