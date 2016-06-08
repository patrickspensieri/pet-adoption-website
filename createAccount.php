<! DOCTYPE html>

<!--    dogCare.html
        Patrick Anthony Spensieri - 40006417
        Assignment 2 : Question 4
            Dog care page.
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
                <li id = "active"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- CONTENT -->
        <div class = "content">

             <form id = "form" action = "" method="POST">
                 
                 <h2 class = "label">Create an Account</h2>
                 <input class = "site-text" name = "username" type = "text" placeholder = "User Name" size = "30"/>
                 <div class = "error" id = "username"></div>
                 <input class = "site-text" name = "password" type = "text" placeholder = "Password" size = "30"/>
                 <div class = "error" id = "password"></div>

                 <hr>
                    
                    <input class = "button" type = "submit" value = "Submit" name = "submit" id = "submit" onclick = "return validate()"/>
                    <input class = "button" type = "reset" value = "Reset" id = "reset"/>
<!--                 <div class = "error" id = "submit"></div>-->
            </form>
            <?php
            
            //Returns true and adds new entry if username is available, returns false otherwise.
            function validate($username, $password)
            {
                //open the file with read and write permissions
                $accountDataFile = fopen('accountData.txt', 'a+');
                if ($accountDataFile) 
                    while (($userData = fgets($accountDataFile)) !== false) 
                    {
                        $userData = explode(":", $userData, 2);
                        if($username === $userData[0])  //if specified username already exists
                            return false;
                    }
                    //if there are no more lines and no duplicates found, then add new entry
                    fwrite ($accountDataFile, $username . ":" . $password . "\n");
                    fclose($accountDataFile);
                    return true;
            }
            //on submit
            if(isset($_POST['submit']))
            {
                $username = $_POST['username'].trim();      //get and trim username and password
                $password = $_POST['password'].trim();
                $usernamePat = "/[a-zA-Z0-9]+/";                                    //username regex
                $passwordPat = "/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){4}$/";    //password regex
                //if username incorrect format
                if(!preg_match($usernamePat, $username))
                    echo("<div class = \"error\" >Invalid User Name : May only contain letters and digits. </div>");
                //if password incorrect format
                else if(!preg_match($passwordPat, $password))
                    echo("<div class = \"error\" >Invalid Password : May only contain letters and digits. Must contain at least four characters including one letter and one digit.</div>");
                //if username is available
                else if(validate($username, $password))
                    echo ("<div class = \"success\" >Account successfully created!</br></div>");
                else
                    echo ("<div class = \"error\" >User Name not available. Please try again.</br></div>");
            }
        ?>
        </div>
        <!-- FOOTER -->
        <?php include('footer.php'); ?>
<!--        To do client side validation first, call JS to validate username and password format. If valid,
            JS will trigger for submit, which will send validated data for server side validation.-->
<!--        <script type = "text/javascript" src = "createAccountR.js"></script>-->
    </body>
</html>