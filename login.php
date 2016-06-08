<! DOCTYPE html>

<!--    login.php
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
                <li id = "active"> <a href = "login.php">Give Away a Pet</a></li>
                <li id = "unactive"> <a href = "createAccount.php">Create an Account</a></li>
                <li id = "unactive"> <a href = "contact.php">Contact</a></li>
            </ul>
        </div>
        
        <!-- CONTENT -->
        <div class = "content">

             <form id = "form" action = "" method="POST">
                 
                 <h2 class = "label">Log In</h2>
                 <input class = "site-text" name = "username" type = "text" placeholder = "User Name" size = "30"/>
                 <div class = "error" id = "username"></div>
                 <input class = "site-text" name = "password" type = "text" placeholder = "Password" size = "30"/>
                 <div class = "error" id = "password"></div>

                 <hr>
                    
                    <input class = "button" type = "submit" value = "Submit" name = "submit" id = "submit" onclick = "return validate()"/>
                    <input class = "button" type = "reset" value = "Reset" id = "reset"/>
<!--                 <div class = "error" id = "submit"></div> USED FOR JS-->
            </form>
            <!-- PHP -->
            <?php
            //Returns true and adds new entry if username is available, returns false otherwise.
            function validate($username, $password)
            {
                //open the file with read permissions only
                $accountDataFile = fopen('accountData.txt', 'r');
                if ($accountDataFile) 
                    while (($userData = fgets($accountDataFile)) !== false) 
                    {
                        $userData = explode(":", $userData);
                        //if specified username and password match the given login info
                        if(($username === trim($userData[0])) && ($password === trim($userData[1])))
                        {
                            fclose($accountDataFile);
                            return true;
                        }
 
                    }
                    //if entries do not match, return false
                    fclose($accountDataFile);
                    return false;
            }
            session_id('session');
            session_start();
            //if user is already logged in, redirect to giveAwayPets page
//            if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) 
            if ($_SESSION['valid'] === true)
                die("<script>location.href = 'giveAwayPets.php'</script>");

            //on submit
            if(isset($_POST['submit']))
            {
                $username = trim($_POST['username']);      //get and trim username and password
                $password = trim($_POST['password']);
                $usernamePat = "/[a-zA-Z0-9]+/";                                    //username regex
                $passwordPat = "/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){4}$/";    //password regex
                //if username incorrect format
                if(!preg_match($usernamePat, $username))
                    echo("<div class = \"error\" >Invalid User Name. May only contain letters and digits. </div>");
                //if username is available
                else if(validate($username, $password))
                {
                    $_SESSION['valid'] = true;
                    $_SESSION['username'] = $username;
//                    echo ("<div class = \"success\" >Login succesful!</br></div>"); 
                    //redirect the user to the following page
                    die("<script>location.href = 'giveAwayPets.php'</script>");
                }
                else
                {
                    $_SESSION['int'] = 0;
                    echo ("<div class = \"error\" >Incorrect credentials. Please try again.</br></div>");   
                }
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