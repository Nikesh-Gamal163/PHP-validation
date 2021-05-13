var info = [];

info = ["Enter you full name<br>First name<br>Last name", "Select one button"
    , "Enter you valid email address", "Enter you roll", "Select you program you are in"
    , "Enter your phone number", "Enter your password"
    , "Confirm your password before submitting","Hover over input boxes"];

function information(value) {
    document.getElementById("displayInfo").innerHTML = info[value];
}