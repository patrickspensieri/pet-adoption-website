<header id="header">
        <header class = "site-header">
            <a href = "home.php"><img class = "logo"
                 src = "photos/logo.png"
                 alt = "(Adopt Cats & Dogs Logo)"/></a>
            <!-- PHP -->
            <?php
            session_id('session');  //without this, new session will, be created
            session_start();        //enables session variable
            if(isset($_SESSION['valid']))
                echo("<a href = \"logout.php\"><input class = \"button\" id = \"logout\" value = \"Log Out\"/></a>");
            else
                //optional peristent login button, can be removed
                echo("<a href = \"login.php\"><input class = \"button\" id = \"logout\" value = \"Log In\"/></a>");
            ?>
        </header> 
</header>