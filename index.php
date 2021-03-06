<!DOCTYPE html>
<head>
    <title>Personal Portfolio Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nmcss.css">
    <script src="js/sidebar.js"></script>
    <!-- Icon Variable Settings/ Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Font Families -->
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
    <!--========================== Header/ Nav Bar Section ==================================-->

        <?php include("inc/nav-bar.php") ?>
        <?php include("inc/slideMenu.php") ?>

    <!--=====================================================================================-->
    </nav>

    <!--================================ Content Layout =====================================-->
        <div class="introduction-container">
            <h1 class="colour-change-b oribitron">Hello, my name is "Samuel Merritt"</h1>
            <p>I am a Junior Website Programmer in HTML, CSS, SCSS, JAVA and WordPress.</p>
            <p class="colour-change-b">My dream goal is to expand my knowledge & skills of computer technology/ Web-Development. Feel free to take a look at my latest projects I have done on <strong class="indie-flower"><a href="gallery.php">web project page.</a></strong></p>
        </div>
    <!--=====================================================================================-->

    <!--================================ Navigation Options =================================-->
    <button type="button" class="btn-codingL"><i class="fas fa-arrow-left"></i><a href="coding.php"> Coding Languages</a></button>
    <button type="button" class="btn-projectG"><a href="gallery.php">Project Gallery </a><i class="fas fa-arrow-right"></i></button>
    <!--=====================================================================================-->

</body>
</html>