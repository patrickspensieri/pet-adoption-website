<! DOCTYPE html>

<!--    giveCat.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Give away a cat page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Give Away a Cat : 40006417</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
        <script type = "text/javascript" src = "givePets.js"></script>
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
                <li id = "unactive">  <a href = "browsePets.php">Browse Pets</a></li>
                <li id = "unactive"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "active"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "unactive"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- CONTENT -->
        <div class = "content">
            <!-- PHP -->
            <?php
            //this code is same for cat/dog, should be moved into lone php file to avoid code redundancy
            session_id("session");      //needed to keep sessions across multiple pages
            session_start();            //get access to global session variables
            if(isset($_POST['submitBtn']))
            {
                $_SESSION['int'] = $_SESSION['int']+1;      //increment
                $filename = "petData.txt";                  //file to which available pet data is written to
                $file = fopen($filename, 'a+');               //open file in read and append format

                $entry = $_SESSION['int'] .":". $_SESSION['username'] .':cat:'. $_POST['age'].":". $_POST['gender'].":" . $_POST['petFriendly'].':'. $_POST['about'] .':'. $_POST['firstName'].':'. $_POST['lastName'].':'. $_POST['email']. "\n";
                fwrite ($file, $entry);
                fclose ($file);
                echo("<h2 class = \"success\">Thank you!</h2>");
            }
            ?>
             <form id = "form" method = "post">
                 <h1 class = "label">Give Away a Cat</h1>
                 <hr>
                    <h2 class = "label">Breed </h2>
                    <select class = "single" name = "breed">
                                <option> Persian </option>
                                <option> Ragdoll </option>
                                <option> Sphinx </option>
                                <option> Russian Blue </option>
                             <option> Scottish Fold </option> 
                            <option > Mixed </option></select>
                 <div class = "error" id = "breed"></div>
                 <hr>
                    <h2 class = "label">Age Category </h2>
                    <select class = "single" name = "age">
                                <option> Less than 1 year</option>
                                <option> 1-2 </option>
                                <option> 3-5 </option>
                                <option> 6-10 </option>
                            <option> More than 10 years</option> </select>
                 <div class = "error" id = "age"></div>
                 <hr>
        
                    <h2 class = "label">Gender</h2>
                    <label> <input type = "radio" name = "gender" value = "male"/> Male </label>
                    <label> <input type = "radio" name = "gender" value = "female" /> Female </label>
                 <div class = "error" id = "gender"></div>
                 <hr>
                 
                    <h2 class = "label">Child Friendly</h2> 
                    <label> <input type = "radio" name = "childFriendly" value = "yes"/> Yes </label>
                    <label> <input type = "radio" name = "childFriendly" value = "no" /> No </label>
                 <div class = "error" id = "childFriendly"></div>
                 <hr>
                 
                    <h2 class = "label">Pet Friendly</h2> 
                    <label> <input type = "radio" name = "petFriendly" value = "yes"/> Yes </label>
                    <label> <input type = "radio" name = "petFriendly" value = "no" /> No </label>
                 <div class = "error" id = "petFriendly"></div>
                 <hr>
                 
                 
                 <h2 class = "label">Tell Us About Your Cat</h2>
                 <textarea name = "about" placeholder = "Why are you putting your Cat up for adoption?"></textarea>
                 <div class = "error" id = "about"></div>
                 <hr>
                 
                 <h2 class = "label">Personal Information</h2>
                 <input class = "site-text" name = "firstName" type = "text" placeholder = "First Name" size = "30"/>
                 <div class = "error" id = "firstName"></div>
                 <input class = "site-text" name = "lastName" type = "text" placeholder = "Last Name" size = "30"/>
                 <div class = "error" id = "lastName"></div>
                 <input class = "site-text" name = "email" type = "text" placeholder = "Email Address" size = "30"/>
                 <div class = "error" id = "email"></div>
                 <hr>
                 <label><h2 class = "label">Your cat will find a great new home!</h2>
                    <input class = "button" type = "submit" name = "submitBtn" value = "Submit Form" />
                    <input class = "button" type = "reset" value = "Reset Form" /></label>
                 <div class = "error" id = "submit"></div>
                 <hr>
            </form>
        </div>
        <!-- FOOTER -->
        <?php include('footer.php'); ?>
        <script type = "text/javascript" src = "givePetsR.js"></script>
    </body>
</html>