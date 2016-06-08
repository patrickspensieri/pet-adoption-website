<! DOCTYPE html>

<!--    giveAway.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Put a pet up for adoption.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Give Away a Pet : 40006417</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
        <script type = "text/javascript" src = "date.js"></script>
    </head>
    <!-- BODY -->
    <body onload = "refreshDate();">
        <!-- HEADER -->
        <?php include('header.php'); ?> 
        <!-- SIDE MENU -->
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "unactive">   <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "active"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "unactive"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        <!-- CONTENT -->
        <div class = "content-center">
            <h2 class = "label">Put a Dog up for Adoption</h2>
            <a href = "giveDog.php">
                <img class = "polaroidShrink50" src = "photos/adoptDog.jpg"alt = " (Put a Dog up for Adoption) "/></a>
            <hr>
            <h2 class = "label">Put a Cat up for Adoption</h2>
            <a href = "giveCat.php"> 
                <img class = "polaroidShrink50" src = "photos/adoptCat.jpg" alt = " (Put a Cat up for Adoption) " size = "50%"/></a>
            <hr>
        </div>
        <!-- FOOTER -->
        <?php include('footer.php'); ?>
    </body>
</html>