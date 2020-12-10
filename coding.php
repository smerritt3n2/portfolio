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

    <!--===================================== Title Section =================================-->
    <div class="content-container centre width">
        <h1 class="colour-change-b oribitron">Coding Langauges</h1>
        <p>HTML! CSS! JAVA! and many more! These are the many languages I uses when building web-based projects.</p>
        <p>These are the skills and knowledge I have when it comes to each individual coding method in the <strong>present day!</strong></p>
    </div>
    <!--=====================================================================================-->

    <!--================================ Star Rate Display ==================================-->
    <div class="star-container">
        <h3>Star Rating Levels:</h3>
        <i class="fas fa-star star-colour"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><p>: Basic</p><br>
        <i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><p>: Intermediate</p><br>
        <i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><p>: Proficient</p><br>
        <i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star"></i><p>: Secured</p><br>
        <i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><i class="fas fa-star star-colour"></i><p>: Expert</p>
    </div>
    <!--=====================================================================================-->

    <!--======================== Coding Languages Section ===================================-->

    <?php include("inc/language-list.php") ?>

    <!--=====================================================================================-->

</body>
</html>