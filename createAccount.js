//  createAccount.js
//  Patrick Anthony Spensieri 40006417
//  Client side validation for createAccount.php input.

//usernamePat = "^[0-9a-zA-Z]+";
usernamePat = ".+";
passwordPat = "^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+){4}$";

function validate()
{
    window.alert("validate() called");
    if(!(document.getElementsByName("username").value.match(usernamePat)))
        {
            window.alert("no good username");
            return false;
        }

//    if(!(document.getElementsByName("username").value.match(usernamePat)))
//    {
//        window.alert("no good username");
//        document.getElementById("username").innerHTML = "Incorrect format";
//        return false;
//    }
//    if(!(document.getElementsByName("password").value.match(passwordPat)))
//    {
//        window.alert("no good password");
//        document.getElementById("password").innerHTML = "Incorrect format";
//        return false;
//    }
    return true;
}

//  Removes the error message belonging to a particular element
function removeError(id)
{
    document.getElementById(id.name).innerHTML = "";
//    document.getElementById("submit").innerHTML = "";
}