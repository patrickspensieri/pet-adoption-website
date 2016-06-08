<! DOCTYPE html>

<!--    browsePets.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Contact us page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Disclaimer : 40006417</title>
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
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
                <li id = "active"> <a href = "disclaimer.php">Disclaimer</a></li>
            </ul>
        </div>
        
        <!-- CONTENT -->
        <div class = "content">
            <h2 class = "label">Types of Information Collected</h2>
            <p class = "disclaimer">
            	We may collect and hold personal information about you, that is, information that can identify you, and is relevant to providing you with the services or products you are seeking. This personal information may include details such as your name, age, and gender. If you request services from us we may also request your permission for receiving further marketing or promotional material.</p>
            <hr>
            <h2 class = "label">Method of Collection</h2>
            <p class = "disclaimer">
            	Personal information will generally be collected directly from you through the use of any of our standard forms, over the internet or via email. We may also collect personal information about you from third parties acting on your behalf.

                We also collect information from our subscribers or website visitors for the purpose of improving our quality and effectiveness. We welcome feedback from you about all aspects of our website, as we store feedback that users send to us. This feedback is used to administer and refine our service. We may also use the information to improve or promote this site. We will not publish your name in connection with any information you provide without your permission.</p>
            <hr>
            
            <h2 class = "label">Purpose of Collection</h2>
            <p class = "disclaimer">
            The personal information that we collect and hold about you, depends on your interaction with us. Generally, we collect, use and hold your personal information for the purposes of finding a new home for as many pets as we can.</p>
            <hr>
        </div>
        <!-- FOOTER -->
       <?php include('footer.php'); ?>
    </body>
</html>