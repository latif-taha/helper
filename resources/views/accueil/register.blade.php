<!DOCTYPE html>
<html lang="en">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .form-container {
        background-color: #ffffff;
        margin: 2rem auto;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 400px;
    }
    h2 {
        color: #333;
    }
    .button-group {
        text-align: center;
        margin-bottom: 1rem;
    }
    .form-button {
        padding: 10px 20px;
        margin: 0 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #008CBA;
        color: white;
    }
    .form-button.active {
        background-color: #4CAF50;
    }
    form {
        display: none;
    }
    form.active {
        display: block;
    }
    label, input {
        display: block;
        width: 100%;
        margin-bottom: 10px;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 8px;
        font-size: 14px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>



<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Favicons -->
    <link href="{{ asset('accueil/Helper/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('accueil/Helper/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('accueil/Helper/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('accueil/Helper/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('accueil/Helper/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Logis
    * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>Helper</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/index" >Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/pricing">Pricing</a></li>

                <li><a href="/contact">Contact</a></li>

                <li><a class="get-a-quote" href="/login">Login </a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Register</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Register</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ... Existing HTML and links ... -->

    <!-- ======= Helper Registration Section ======= -->
    <!-- ======= Registration Section ======= -->
    <section id="registration" class="get-a-quote">
        <div class="page-link">
        <div class="button-group">
            <button type="button" class="form-button  active" onclick="toggleForm('client')">Client Registration</button>
            <button type="button" class="form-button" onclick="toggleForm('expert')">Expert Registration</button>
        </div>
        <div class="container" data-aos="fade-up">

            <div class="row g-0">
                <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

                <div class="col-lg-7">


                    <form action="/registerclient" method="POST" class="php-email-form active" id="client-form" >
                        @csrf
                    <h3>Client</h3>
                        <p>Join our community and start offering or receiving top-notch home services. Connect with professionals and homeowners alike.</p>
 @if ($errors->any())
    
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif

                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <h4>Your Account Details</h4>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{old('firstname')}}" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{old('lastname')}}" required>
                            </div>

                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="Email"  value="{{old('email')}}" required>
                            </div>

                            <div class="col-md-12">
                                <input type="tel" class="form-control" name="tel" placeholder="Phone number"  value="{{old('tel')}}" required>
                            </div>


                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>





                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                             <div class="error-message"></div> 
                            
                                <div class="sent-message">   dhfze dzd cdggds sdtfstd sdsihds </div> 
                           

                           

                                <button type="submit">Register</button>
                            </div>

                        </div>
                    </form>


        <form action="/registerpartenaire" method="POST" class="php-email-form" id="expert-form">
         
        @csrf
    <h3>Expert Registration</h3>

    @if ($errors->any())
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    
@endif
    <div class="row gy-4">
        <div class="col-lg-12">
            <h4>Your Account Details</h4>
        </div>

        <div class="col-md-6">
            <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{old('firstname')}}" required>
        </div>

        <div class="col-md-6">
            <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{old('lastname')}}" required>
        </div>

        <div class="col-md-12">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" required>
        </div>

        <div class="col-md-12">
            <input type="tel" class="form-control" name="tel" placeholder="Phone number" value="{{old('tel')}}" required>
        </div>

        <div class="col-md-12">
            <input type="text" class="form-control" name="adresse" placeholder="Address"  value="{{old('adresse')}}" required>
        </div>

        <div class="col-md-12">
            <input type="text" class="form-control" name="ville" placeholder="City" value="{{old('ville')}}" required>
        </div>

        <div class="col-md-12">
            <select name="categorie" value="{{old('categorie')}}" class="form-control" id="categorie-select" required onchange="updateServices()">
            <option value="" disabled>Select a Category</option>
    <option value="1">Bricolage</option>
    <option value="2">Jardinage</option>
    <option value="3">Livraison</option>
            </select>
        </div>

        <div class="col-md-12">
    <label>Select your services (up to 3):</label>
    <div id="services-checkboxes">
        <!-- Les cases à cocher des services seront ajoutées ici par JavaScript -->
    </div>
</div>
        <div class="col-md-12">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit">Register</button>
        </div>
    </div>
</form>
                </div><!-- End Registration Form -->

            </div>

        </div>
    </section><!-- End Registration Section -->
    <!-- End Helper Registration Section -->

    <!-- ... Existing HTML and scripts ... -->

    <script>
        function toggleForm(role) {
            var clientForm = document.getElementById('client-form');
            var expertForm = document.getElementById('expert-form');
            var clientButton = document.querySelector('.form-button:nth-child(1)');
            var expertButton = document.querySelector('.form-button:nth-child(2)');

            if (role === 'client') {
                clientForm.classList.add('active');
                expertForm.classList.remove('active');
                clientButton.classList.add('active');
                expertButton.classList.remove('active');
            } else {
                expertForm.classList.add('active');
                clientForm.classList.remove('active');
                expertButton.classList.add('active');
                clientButton.classList.remove('active');
            }
        }
    </script>

<script>
document.getElementById('categorie-select').addEventListener('change', function() {
    var category = this.value;
    var servicesContainer = document.getElementById('services-checkboxes');
    servicesContainer.innerHTML = ''; // Clear existing checkboxes

    // Simulated service options based on category
    var servicesOptions = {
        '1': ['Installation de meubles', 'Petite plomberie', 'Électricité de base', 'Peinture et décoration'],
        '2': ['Entretien de pelouse', 'Plantation', 'Taille des haies', 'Création de potager'],
        '3': ['Livraison de courses', 'Livraison de repas', 'Livraison express de documents', 'Transport de petits meubles']
    };

    if (servicesOptions[category]) {
        servicesOptions[category].forEach(function(service) {
            var checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.id = service;
            checkbox.name = 'services[]';
            checkbox.value = service;

            var label = document.createElement('label');
            label.htmlFor = service;
            label.appendChild(document.createTextNode(service));

            var div = document.createElement('div');
            div.appendChild(checkbox);
            div.appendChild(label);

            servicesContainer.appendChild(div);
        });
    }

    // Limit checkbox checks
    $('#services-checkboxes').on('change', 'input[type="checkbox"]', function() {
        var maxAllowed = 3;
        var countCheckedCheckboxes = $('#services-checkboxes input[type="checkbox"]:checked').length;
        if (countCheckedCheckboxes > maxAllowed) {
            this.checked = false;
            alert('You can select up to ' + maxAllowed + ' services only.');
        }
    });
});
</script>
    <!-- End Get a Quote Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>Helper</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Product Management</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
            A108 Adam Street <br>
            Tétouan, 35022<br>
            Maroc <br><br>
            <strong>Phone:</strong> +212 780 456 896<br>
            <strong>Email:</strong> Helper@gmail.com<br>
                </p>

            </div>

        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Helper</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('accueil/Helper/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('accueil/Helper/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('accueil/Helper/assets/js/main.js') }}"></script>

</body>

</html>
