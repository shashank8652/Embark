<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embarkk</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
    .sticky {
        position: fixed !important;
        top: 0;
        width: 100%;
        background-color: #fff;
        z-index: 999;
        padding: 0;
    }

    .header {
        transition: 0.6s !important;
    }
    /* .active, .btn:hover {
  background-color: #666;
  color: white;
} */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light plr header" id="myHeader">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.svg" class="logo" alt="Embarkk Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-0-auto mb-2 mb-lg-0 gap-5 fw600">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="why-us.php">Why Us</a></li>
                            <li><a class="dropdown-item" href="our-processes.php">Our Processes</a></li>
                            <li><a class="dropdown-item" href="uvp.php">Unique Value Proposition (UVP)</a></li>
                            <li><a class="dropdown-item" href="industry-recognitions.php">Industry Recognitions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Jobs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="global-jobs.php">Global Jobs</a></li>
                            <li><a class="dropdown-item" href="career.php">Career’s at Embarkk </a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Resources
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="services.php">Services</a></li>
            <li><a class="dropdown-item" href="blog-list.php">Blogs  </a></li>
            </ul>
        </li> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="services.php" aria-expanded="false">
                            Services
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="blog-list.php" aria-expanded="false">
                            Blogs
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            FAQ's
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="faq.php">General FAQs</a></li>
                            <li><a class="dropdown-item" href="us-faq.php">USA NON-IT WORKERS IMMIGRATION</a></li>
                            <li><a class="dropdown-item" href="canada-faq.php">CANADA NON-IT WORKERS IMMIGRATION</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="cta-btn text-center"> <a href="contact.php" class="text-center cta-bg">Contact Us <img
                                src="images/contact-icon.png"></a></div>
                </div>
            </div>
        </div>
    </nav>


    <script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
    </script>


