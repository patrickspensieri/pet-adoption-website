//  browsePetsR.js
//  Patrick Anthony Spensieri 40006417
//  Register event handlers for the browsePets page.

//window.onload = displayPets;
document.getElementById("browseSelect").onchange = displayPets;

//to call two different functions for onload, make a single function that calls both
window.onload = function(){
        displayPets();
        refreshDate();
 };