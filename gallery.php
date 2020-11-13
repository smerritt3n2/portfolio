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

    <div class="content-container">
        <h1 class="colour-change-b oribitron">Project Galleries</h1>
        <p>These are the collections of projects/ Websites that I have coded on my own and within pairs. Acceptable HTML, CSS, SCSS and JAVA understanding!</p>
        <p>- Very interested in <strong class="indie-flower glow">front end Development</strong></p>
    </div>

    <?php include("inc/project-list.php") ?>

</body>
</html>