//  givePetsR.js
//  Patrick Anthony Spensieri 40006417
//  Register event handlers for the giveCat and giveDog pages.

document.getElementById("form").onsubmit = return validate;
var select = ["breed", "age"];
var radio = ["gender", "childFriendly", "petFriendly"];
var text = ["about", "firstName", "lastName", "email"];

//  to pass parameters, create an anonymous function that calls the removeError()
for(var i = 0; i < radio.length; i++)
    for(var j = 0; j < document.getElementsByName(radio[i]).length; j++)
        document.getElementsByName(radio[i]).item(j).onchange = function(){removeError(this);};

//  to pass parameters, create an anonymous function that calls the removeError()
for(var k = 0; k < select.length; k++)
    document.getElementsByName(select[k])[0].onchange = function(){removeError(this);};

//  to pass parameters, create an anonymous function that calls the removeError()
for(var l = 0; l < text.length; l++)
    document.getElementsByName(text[l])[0].onchange = function(){removeError(this);};