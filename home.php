<! DOCTYPE html>

<!--    home.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            The project home page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Home : 40006417</title>
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
                <li id = "active"><a href = "home.php">Home</a></li>
                <li id = "unactive"> <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "unactive"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "unactive"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- CONTENT --> 
        <div class = "content-center">
            <h2 class = "label">We give Cats and Dogs a new home</h2>
            <img class = "polaroid" 
                        src = "photos/catDogHome.jpg"
                        alt = "courtesy of Tumblr"/>
            <hr>

        </div>
        <!-- FOOTER -->
        <?php include('footer.php'); ?>
<!--        <script type = "text/javascript" src = "registerEH.js"></script>-->
    </body>
</html>