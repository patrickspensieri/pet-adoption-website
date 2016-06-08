<! DOCTYPE html>

<!--    logout.php
        Patrick Anthony Spensieri - 40006417
            Login page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Create an Account : 40006417</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
<!--        <script type = "text/javascript" src = "createAccount.js"></script>-->
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
                <li id = "active"> <a href = "logout.php">Log Out</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- CONTENT -->
        <div class = "content">

             <h2 class = "label">Logout</h2>

             <hr>
                    
            <!-- PHP -->
            <?php
            session_id('session');  //without this, new session will, be created
            session_start();        //enables session variable
            //check to see if user is logged in
//            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
            if(isset($_SESSION['valid']))
            {
                session_destroy();
                $_SESSION['valid'] = false;
                unset($_SESSION["username"]);
                unset($_SESSION["password"]);
                echo "<h3>See you next time!</h3>";
            } 
            else 
                //redirect the user to the following page
                die("<script>location.href = 'login.php'</script>");
            ?>
        </div>
        <!-- FOOTER -->
        <?php include('footer.php'); ?>
<!--        To do client side validation first, call JS to validate username and password format. If valid,
            JS will trigger for submit, which will send validated data for server side validation.-->
<!--        <script type = "text/javascript" src = "createAccountR.js"></script>-->
    </body>
</html>