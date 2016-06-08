<! DOCTYPE html>

<!--    findDog.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Find Dogs page.
     -->

<html xlms = "http://www.w3.org/1999/xhtml" lang = "en">
    <head>
        <meta charset = "utf-8" />
        <title>Find a Dog : 40006417</title>
        <link rel = "stylesheet" type = "text/css"
              href = "main.css" />
        <script type = "text/javascript" src = "findPets.js"></script>
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
                <li id = "active"> <a href = "findPets.php">Find a Pet</a></li>
                <li id = "unactive"> <a href = "dogCare.php">Dog Care</a></li>
                <li id = "unactive"> <a href = "catCare.php">Cat Care</a></li>
                <li id = "unactive"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "unactive"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- CONTENT -->
        <div class = "content">
             <form id = "form">
                 <h1 class = "label">Find a Dog</h1>
                 <hr>
                    <h2 class = "label">Breed </h2>
                    <select name = "breed" multiple = "multiple" size = "1">
                                <option selected = "selected"> Any </option>
                                <option> Great Dane </option>
                                <option> Beagle </option>
                                <option> Golden Retriever </option>
                                <option> Miniature Schnauzer </option>
                             <option> Border Collie </option> </select>
                 <div class = "error" id = "breed"></div>
                 <hr>
                    <h2 class = "label">Age Category </h2>
                    <select name = "age" multiple = "multiple" >
                                <option selected = "selected"> Any </option>
                                <option> Less than 1</option>
                                <option> 1-2 </option>
                                <option> 3-5 </option>
                                <option> 6-10 </option>
                            <option> More than 10 </option> </select>
                 <div class = "error" id = "age"></div>
                 <hr>
        
                    <h2 class = "label">Gender</h2>
                    <label> <input type = "radio" name = "gender" value = "any"/> Any </label>
                    <label> <input type = "radio" name = "gender" value = "male" /> Male </label>
                    <label> <input type = "radio" name = "gender" value = "female" /> Female </label>
                    <div class = "error" id = "gender"></div><hr>
                 
                    <h2 class = "label">Child Friendly</h2> 
                    <label> <input type = "radio" name = "childFriendly" value = "any" /> Any </label>
                    <label> <input type = "radio" name = "childFriendly" value = "yes"/> Yes </label>
                    <label> <input type = "radio" name = "childFriendly" value = "no" /> No </label>
                    <div class = "error" id = "childFriendly"></div><hr>
                 
                    <h2 class = "label">Pet Friendly</h2> 
                    <label> <input type = "radio" name = "petFriendly" value = "any" /> Any </label>
                    <label> <input type = "radio" name = "petFriendly" value = "yes" /> Yes </label>
                    <label> <input type = "radio" name = "petFriendly" value = "no" /> No </label>
                    <div class = "error" id = "petFriendly"></div><hr>
                    
                 <label><h2 class = "label">Thank you for taking the time to fill out our survey!</h2>
                    <input class = "button" type = "submit" value = "Submit Form"/>
                    <input class = "button" type = "reset" value = "Reset Form" /></label>
                 <div class = "error" id = "submit"></div>
                 <hr>
            </form>
        </div>
        <!-- FOOTER -->
        <?php include('footer.php'); ?>
        <script type = "text/javascript" src = "findPetsR.js"></script>
    </body>
</html>