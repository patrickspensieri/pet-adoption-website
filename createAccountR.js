//  createAccountR.js
//  Patrick Anthony Spensieri 40006417
//  Register event handlers for the createAccount.php page. 
//  Javascript provides client side validation prior to sending data to server.

document.getElementById("form").onsubmit = return validate;

document.getElementsByName("username").onchange = function(){removeError(this);};
document.getElementsByName("password").onchange = function(){removeError(this);};
//document.getElementsByName("reset").onchange = function(){removeError(this);};