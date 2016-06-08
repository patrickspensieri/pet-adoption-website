//  findPets.js
//  Patrick Anthony Spensieri - 40006417
//  Validates the user input for the findCat and findDog page.

//  Returns true if user input is valid, that is, if there are no empty fields.
function validate()
{
    select = ["breed", "age"];
    radio = ["gender", "childFriendly", "petFriendly"];
    
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
    {
        //if no radio buttons are checked
        if(!anyChecked(radio[j]))
        {
            document.getElementById(radio[j]).innerHTML = "Please select a value";
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
