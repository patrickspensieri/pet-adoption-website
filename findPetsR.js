//  findPetsR.js
//  Patrick Anthony Spensieri 40006417
//  Register event handlers for the findCat and findDog page.

document.getElementById("form").onsubmit = validate;
var radio = ["gender", "childFriendly", "petFriendly"];
var select = ["breed", "age"];

//  to pass parameters, create an anonymous function that calls the removeError()
for(var i = 0; i < radio.length; i++)
    for(var j = 0; j < document.getElementsByName(radio[i]).length; j++)
        document.getElementsByName(radio[i]).item(j).onchange = function(){removeError(this);};

//  to pass parameters, create an anonymous function that calls the removeError()
for(var k = 0; k < select.length; k++)
    document.getElementsByName(select[k])[0].onchange = function(){removeError(this);};   

//experimental
//for(var i = 0; i < select.length; i++)
//    document.getElementsByName(select[i])[0].onchange = function(){document.getElementById("submit").disabled = !(validate());};

