//  givePets.js
//  Patrick Anthony Spensieri 40006417
//  Validation for the giveCat and giveDog pages.


select = ["breed", "age"];
radio = ["gender", "childFriendly", "petFriendly"];
text = ["about", "firstName", "lastName", "email"];
//all backslashes must have escape char '/' in front because its defined as a STRING
//all patterns must start and end with the specified chars, hence the ^ at beginning and $ at end
//pattern[0] = about = matches at least one char
//pattern[1] = firstName = matches at least one letter, followed by an optional . and space, followed by optional letters
//pattern[2] = lastName = matches at least one letter, followed by an optional . and space, followed by optional letters
//pattern[3] = email =  mathes at least one char amongst letters, underscores, periods, which must be followed by the @,
//                      then at least one char amongst letters and underscores, followed by a . and finally, at least two //                      but less than thirty letters

pattern = [".+", "^[A-Za-z]+\\.?\\s?[A-Za-z]*$", "^[A-Za-z]+\\.?\\s?[A-Za-z]*$", "^[a-zA-Z_\.]+@[a-zA-Z_]+\\.[a-zA-Z]{2,30}$"];

function validate()
{
    // SELECT 
    for(var i = 0; i < select.length; i++)
        if(document.getElementsByName(select[i])[0].value == "")
        {
            document.getElementById(select[i]).innerHTML = "Please select a value";
            document.getElementById("submit").innerHTML = "Incorrect Input";
            return false;
        }
    
    //  RADIO
    for(var j = 0; j < radio.length; j++)
        //if no radio buttons are checked
        if(!anyChecked(radio[j]))
        {
            document.getElementById(radio[j]).innerHTML = "Please select a value";
            document.getElementById("submit").innerHTML = "Incorrect Input";
            return false;
        }
    
    //  TEXT
    for(var k = 0; k < text.length; k++)
    {
        if(!(document.getElementsByName(text[k])[0].value.match(pattern[k])))
        {
            document.getElementById(text[k]).innerHTML = "Improper Format";
            document.getElementById("submit").innerHTML = "Incorrect Input";
            return false;
        } 
    }
    return true;
}
    
//  Returns true if there is a selected radio button, false otherwise.
//  radioName : the name of the radio button group
function anyChecked(radioName)
{
    radioArr = document.getElementsByName(radioName);
    for(var i = 0; i < radioArr.length; i++)
        if(radioArr[i].checked)
            return true;
    return false;
}

//  Removes the error message belonging to a particular element
function removeError(id)
{
    document.getElementById(id.name).innerHTML = "";
    document.getElementById("submit").innerHTML = "";
}