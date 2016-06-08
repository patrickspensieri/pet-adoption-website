<! DOCTYPE html>

<!--    catCare.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Cat care page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Cat Care : 40006417</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
        <script type = "text/javascript" src = "date.js"></script>
    </head>
    <!-- BODY -->
    <body onload = "refreshDate();">
    <?php include('header.php'); ?>
        <!-- SIDE MENU -->
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "unactive">   <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "active"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "unactive"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "unactive"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- CONTENT -->
        <div class = "content-center">
            <h2 class = "label">Cat Care</h2>
            <h3 class = "label">courtesy of <i>Monkey See</i></h3>
            <hr>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8NTvNIWgHBc" frameborder="0" allowfullscreen>
            </iframe>
        </div>
        <?php include('footer.php'); ?>
        
    </body>
</html>