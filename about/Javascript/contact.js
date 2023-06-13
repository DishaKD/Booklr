function checkforblank(){
    if(document.getElementById('fname').value == ""){
    alert("Please enter first name.");
    document.getElementById('fname').style.bordercolor="red";
    return false;

    }else if(document.getElementById('lname').value == ""){
    alert("Please enter last name.");
    document.getElementById('lname').style.bordercolor="red";
    return false;

    }else if(document.getElementById('email').value == ""){
    alert("Please enter email.");
    document.getElementById('email').style.bordercolor="red";
    return false;

    } else if(document.getElementById('msg').value == ""){
    alert("Please enter massage.");
    document.getElementById('msg').style.bordercolor="red";
    return false;
    }

}