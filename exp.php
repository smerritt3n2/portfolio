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
    <div class="content-container">
        <h1 class="colour-change-b oribitron">Work Experiences!</h1>
        <p>This article will talk about the many forms of work experience I've had through the years...</p>
        <p>This will also include deatils and purpose of the role I was given for the work experience.</p>
    </div>
    <!--=====================================================================================-->

    <!--=================================== Article Section =================================-->
    <article class="article-container">
        <h1>List of Work Experiences</h1>
        <article class="article-content">
            <div class="expText"> <!-- Basic Website Testing -->
                <h2>Testing Websites/ Projects (Basics)</h2>
                <p>Duirng this experience I was working within a Team where if anyone has a website they need testing. They can contact me and I will carry out the Testing they need on the website they have been working on following company guidelines.</p>
                <p>This is a list of tests I have currently carried out;</p>
                    <ul>
                        <li>Checking 404 Protocols</li>
                        <li>Checking Hyperlinks</li>
                        <li>Checking Adaptability of Elements</li>
                    </ul>
            </div>
            <img src="img/Exp images/role1.png" alt="Testing Websites Role">
        </article>
        <article class="article-content">
            <div>
                <h2>Greetings!</h2>
                <p>Information and details about the web-page will be placed here.</p>
            </div>
            <img src="img/Exp images/role1.png" alt="Testing Websites Role">
        </article>
    </article>
    <!--=====================================================================================-->

    <!--================================ Star Rate Display ==================================-->
    <aside>
        This area will contain information about side Roles I have done relating to web-development/ technology.
    </aside>
    <!--=====================================================================================-->

</body>
</html>