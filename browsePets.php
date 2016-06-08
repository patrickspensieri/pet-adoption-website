<! DOCTYPE html>

<!--    browsePets.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Browse pets page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Browse Pets : 40006417</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
        <script type = "text/javascript" src = "date.js"></script>
        <script type = "text/javascript" src = "browsePets.js"></script>
    </head>
    <!-- BODY -->
    <body>
    <!-- HEADER -->
    <?php include('header.php'); ?> 
        <!-- SIDE MENU -->
        <div class = "sideMenu">
            <ul>
                <li id = "unactive"> <a href = "home.php">Home</a></li>
                <li id = "active">   <a href = "browsePets.php">Browse Pets</a></li>
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
            <select class = "single" id = "browseSelect" size = "1">
                <option>Cats</option>
                <option>Dogs</option>
                <option selected = "selected">All</option>
            </select>
            <hr />
            <div id = "browsePets">
                <!-- browsePets.js inserts HTML here -->
<!--
                <img class = "polaroid" src = "photos/browseCat1.jpg" />
                <table class = "description">
                    <tr>
                        <td><h2>Leo</h2></td>
                        <td><input type = "button" class = "button" value = "Interested" /></td>
                    </tr>
                    <tr>
                        <td><h3>11 years, Male</h3></td>
                        <td rowspan = "2"><img class = "friendlyIcon" src = "photos/friendly.png"/></td>
                    </tr>
                    <tr>
                        <td><h3>Russian Blue</h3></td>
                    </tr>
                    <tr>
                        <td rowspan = "2"><h3>Animal description</h3></td>
                    </tr>
                </table>
-->
            </div>
        </div>
        
        <?php include('footer.php'); ?>
        <script type = "text/javascript" src = "browsePetsR.js"></script>
    </body>
</html>