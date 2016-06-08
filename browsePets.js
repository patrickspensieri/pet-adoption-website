//  browsePets.js
//  Patrick Anthony Spensieri - 40006417
//  Displays pets and information according to user
//  selection. That is, Cats, Dogs, or All.

//  0.imageFileName, 1.petName, 2.petBreed, 3.petAge, 4.petGender, 5.child friendly, 6.pet friendly, 7.description
var petInfo = [["photos/browseCat1.jpg", "Leo", "Russian Blue", 11, "Male", true, true, "An interesting, independent and                         groovy cat."],
                ["photos/browseCat2.jpg", "Scotty", "Mixed", 3, "Female", true, true, "A curious and caring cat who loves to play." ],
                ["photos/browseCat3.jpg", "William", "Sphinx", 6, "Male", false, false, "Plays piano and hunts squirrels on his spare time. Does not like people and other animals." ],
                ["photos/browseDog1.jpg", "Bruce", "Labrador", 3, "Female", true, true, "A man's best friend, Bruce makes for the perfect companion."],
                ["photos/browseDog2.jpg", "Marcus", "Mixed", 2, "Male", true, false, "The most interesting dog in the world."]];
                
function displayPets()
{
    var filter = document.getElementById("browseSelect").value;  
    var div = document.getElementById("browsePets");
    
    //  string patterns used to determine which imageFile and corresponding info to display
    if(filter == "All")
        filter = /./;
    else if(filter == "Cats")
        filter = /Cat/;
    else
        filter = /Dog/;
    //clear the current code in the browsePets div
    div.innerHTML = "<!-- html here -->";
    
    for(var i = 0; i < petInfo.length; i++)
    {
        //if pet type matches filter
        if(petInfo[i][0].match(filter))
            buildPet(petInfo[i], div);
            
    }
}

//Generates the html code for the given pet in the form, returns as a string
function buildPet(petInfo, div)
{
    //here string is used to hold the code. Calling innerHTML automatically closes
    //unclosed tags that one may have intended to close later
    html = "";
    html += "<img class = \"polaroid\" src = \"" + petInfo[0] + "\"/>" +
    "<table class = \"description\">" + 
    "<tr><td><h2>" + petInfo[1] + "</h2></td>" + 
    "<td class = \"alignRight\"><input type = \"button\" class = \"interestedButton\" value = \"Interested\"/></td></tr>"+ 
    "<tr><td><h3>" + petInfo[3] + " years, " + petInfo[4] + "</h3></td>"; 
    if(petInfo[5])
        html += "<td rowspan = \"2\"><img class = \"friendlyIcon\" src = \"photos/childFriendly.png\" /></td>";
    if(petInfo[6])
        html += "<td rowspan = \"2\"><img class = \"friendlyIcon\" src = \"photos/petFriendly.png\" /></td>";
    else if(!petInfo[5] && !petInfo[6])
        html += "<td rowspan = \"2\"><img class = \"friendlyIcon\" src = \"photos/notFriendly.png\" /></td>";
    html += "</tr><tr><td><h3>" + petInfo[2] + "</h3></td></tr>" + 
    "<tr><td rowspan = \"2\"><h3>" + petInfo[7] + "</h3></td></tr></table>" + 
    "<hr />";
    div.innerHTML += html;
}

//Generates the html code for the each pet with unique id
//function buildInterestedButton()
//{
//    
//}
