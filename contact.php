<! DOCTYPE html>

<!--    browsePets.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Contact us page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Contact Us : 40006417</title>
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
                <li id = "unactive"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "unactive"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "active"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        <!-- CONTENT -->
        <div class = "content-center">
            <h2 class = "label"><br/><br/>Patrick Spensieri</h2>
            <h3 class = "label">40006417</h3>
            <h2 class = "label">Interested in working together?</h2>
            <h3 class = "label">patrick.spensieri@gmail.com</h3>
            <hr>
            
        </div>
        <!-- FOOTER -->
    <?php include('footer.php'); ?>
    </body>
</html>