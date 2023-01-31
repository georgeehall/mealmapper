   <html>

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Meal Mapper</title>
       <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
           integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
       <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
       <style>
       @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');

       <style>body {
           background-color: #ffffff;
           font-family: 'Rubik', sans-serif;
       }

       .dropdown:hover .dropdown-menu {
           display: block;
       }

       .dropdown-menu {
           margin-top: 0;
       }
       </style>
       <script>
       $(document).ready(function() {
           $(".dropdown").hover(function() {
               var dropdownMenu = $(this).children(".dropdown-menu");
               if (dropdownMenu.is(":visible")) {
                   dropdownMenu.parent().toggleClass("open");
               }
           });
       });
       </script>
   </head>

   <body>
       <!-- centred logo start -->
       <ul class="nav justify-content-center" style="padding-top: 10px;">
           <a href="index.php"> <img src="images/logo.png" alt="logo" style="height:150px;"></a>
       </ul>
       <!-- centred logo end -->
       <!-- socials top right start -->
       <div class="d-flex justify-content-center" style="padding-top:20px;">
           <a href="https://www.w3schools.com"> <i class="fa-brands fa-facebook fa-2xl "
                   style="padding-right: 5px; color: black;"></i></a>
           <a href="https://www.w3schools.com"> <i class="fa-brands fa-twitter fa-2xl"
                   style="padding-right: 5px; color: black;"></i></a>
           <a href="https://www.w3schools.com"> <i class="fa-brands fa-instagram fa-2xl"
                   style="padding-right: 15px; color: black;"></i></a>
       </div>
       <!-- socials top right end -->
       <!-- Navbar start -->
       <div class="d-flex justify-content-center">
           <nav class="navbar navbar-expand-lg justify-content-center" style="padding-top: 20px;">

               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                   data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                   aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                   <div class="d-flex justify-content-center">
                       <ul class="navbar-nav justify-content-evenly">
                           <li class="nav-item">
                               <a class="nav-link" aria-current="page" href="orderfb.php"
                                   style="text-align: center">About</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="dutyfree.php" style="text-align: center">How It Works</a>
                           </li>
                       </ul>
                   </div>
               </div>
       </div>
       </nav>
       </div>
       <!-- navbar end -->

       <!-- start of container-->
       <div class="container">
           <div class="jumbotron" style="padding-bottom: 15px;">
               <div class="row flex align-items-center">

                   <div class="col-md-6">
                       <h2 style="text-align: center;">The future of food shopping, saving time and money</h2>
                       <div class="row">
                           <div class="col-md-12">
                               <h5 style="text-align: center;">Supplying you with receipes and cheapest food at the
                                   click of a button</h5></br>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <img src="images/banner1.png" class="img-fluid" alt="Responsive image">
                   </div>
               </div>
           </div>

           <form action="insert.php" method="post">
               <p>
               <div class="form-group">

                   <div class="input-group mb-3">
                       <label class="input-group-text" for="inputGroupSelect01" style="width: 250px;">How many people to
                           feed?</label>
                       <select class="form-select" name="people" id="people">
                           <option selected>Choose...</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                       </select>
                   </div>
                   <div class="input-group mb-3">
                       <label class="input-group-text" for="inputGroupSelect01" style="width: 250px;">Do you want
                           breakfast?</label>
                       <select class="form-select" name="breakfast" id="breakfast">
                           <option selected>Choose...</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                       </select>
                   </div>
                   <div class="input-group mb-3">
                       <label class="input-group-text" for="inputGroupSelect01" style="width: 250px;">Do you want
                           lunch?</label>
                       <select class="form-select" name="lunch" id="lunch">
                           <option selected>Choose...</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                       </select>
                   </div>
                   <div class="input-group mb-3">
                       <label class="input-group-text" for="inputGroupSelect01" style="width: 250px;">Do you want
                           dinner?</label>
                       <select class="form-select" name="dinner" id="dinner">
                           <option selected>Choose...</option>
                           <option value="Yes">Yes</option>
                           <option value="No">No</option>
                       </select>
                   </div>
                   <div class="input-group mb-3">
                       <label class="input-group-text" for="inputGroupSelect01" style="width: 250px;">Diet style</label>
                       <select class="form-select" name="diet" id="diet">
                           <option selected>Choose...</option>
                           <option value="Meaty">Meaty</option>
                           <option value="Fishy">Fishy</option>
                           <option value="Veggie">Veggie</option>
                           <option value="Meaty & Fishy">Meaty and Fishy</option>
                           <option value="Vegan">Vegan</option>
                       </select>
                   </div>
                   <div class="input-group mb-3">
                       <span class="input-group-text" style="width: 250px;">Email</span>
                       <input type="text" aria-label="email" name="email" id="email" class="form-control">
                   </div>
                   <small>By entering your email address we will send you the receipes for your meal plan. You can also
                       accept to receive marketing from us</small>
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                       <label class="form-check-label" for="flexCheckDefault">
                           Agree to Marketing
                       </label>
                   </div>
                   <button class="btn btn-primary" input type="submit" type="button" value="Submit">Submit</button>
           </form>


       </div>
       </div><!-- end of container-->

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
           integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
       </script>
   </body>

   </html>