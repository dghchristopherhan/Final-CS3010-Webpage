function validateForm() {
    document.getElementById("user-name").onblur = checkUserName;
    document.getElementById("password").onblur = checkPassword;
    document.getElementById("verify-password").onblur = checkPasswordVerify;
    document.getElementById("first-name").onblur = checkFirstName;
    document.getElementById("last-name").onblur = checkLastName;
    document.getElementById("address-one").onblur = checkAddressOne;
    document.getElementById("city").onblur = checkCity;
    document.getElementById("state").onblur = checkState;
    document.getElementById("zip").onblur = checkZip;
    document.getElementById("phone").onblur = checkPhone;
    document.getElementById("email").onblur = checkEmail;
    document.getElementById("gender-m").onclick = checkGender;
    document.getElementById("gender-f").onclick = checkGender;
    document.getElementById("gender-x").onclick = checkGender;
    document.getElementById("married").onclick = checkMarital;
    document.getElementById("unmarried").onclick = checkMarital;
    document.getElementById("dob").onblur = checkDOB;
}


function checkUserName()
{
   if (document.getElementById("user-name").value.trim().length < 6)
    {
        document.getElementById("user-name-warning").innerHTML = "User name must be a minimum of six characters!";
        document.getElementById("user-name").style.borderColor = "red";
        document.getElementById("user-name-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("user-name-warning").innerHTML = "";
        document.getElementById("user-name").style.borderColor = "green";
        document.getElementById("user-name-icon").style.display = "none";
    }
}

function checkPassword()
{
    if (document.getElementById("password").value.trim().length < 8)
    {
        document.getElementById("password-warning").innerHTML = "Password must be a minimum of eight characters!";
        document.getElementById("password").style.borderColor = "red";
        document.getElementById("password-icon").setAttribute("class","white fa fa-exclamation-triangle");
    }
    else if (!(document.getElementById("password").value.trim().search(/[A-Z]/) === -1) &&
             !(document.getElementById("password").value.trim().search(/[a-z]/) === -1) &&
             !(document.getElementById("password").value.trim().search(/\W/) === -1))
    {
        document.getElementById("password-warning").innerHTML = "";
        document.getElementById("password").style.borderColor = "green";
        document.getElementById("password-icon").style.display = "none";
    }
    else
    {
        document.getElementById("password-warning").innerHTML = "You need a special, uppercase and lowercase character!";
        document.getElementById("password").style.borderColor = "red";
        document.getElementById("password-icon").setAttribute("class","white fa fa-exclamation-triangle");
    }

}

function checkPasswordVerify()
{
    if (!(document.getElementById("password").value === document.getElementById("verify-password").value))
    {
        document.getElementById("verify-password-warning").innerHTML = "Fields must match!";
        document.getElementById("verify-password").style.borderColor = "red";
        document.getElementById("verify-password-icon").setAttribute("class","white fa fa-exclamation-triangle");
    }
    else
    {
        document.getElementById("verify-password-warning").innerHTML = "";
        document.getElementById("verify-password").style.borderColor = "green";
        document.getElementById("verify-password-icon").style.display = "none";
    }
}

function checkFirstName()
{
    if (document.getElementById("first-name").value.trim().length < 1)
    {
        document.getElementById("first-name-warning").innerHTML = "Required field!";
        document.getElementById("first-name").style.borderColor = "red";
        document.getElementById("first-name-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("first-name-warning").innerHTML = "";
        document.getElementById("first-name").style.borderColor = "green";
        document.getElementById("first-name-icon").style.display = "none";
    }
}

function checkLastName()
{
    if (document.getElementById("last-name").value.trim().length < 1)
    {
        document.getElementById("last-name-warning").innerHTML = "Required field!";
        document.getElementById("last-name").style.borderColor = "red";
        document.getElementById("last-name-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("last-name-warning").innerHTML = "";
        document.getElementById("last-name").style.borderColor = "green";
        document.getElementById("last-name-icon").style.display = "none";
    }
}

function checkAddressOne()
{
    if ( document.getElementById("address-one").value.trim().length < 1)
    {
        document.getElementById("address-one-warning").innerHTML = "Required field!";
        document.getElementById("address-one").style.borderColor = "red";
        document.getElementById("address-one-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("address-one-warning").innerHTML = "";
        document.getElementById("address-one").style.borderColor = "green";
        document.getElementById("address-one-icon").style.display = "none";
    }
}

function checkCity()
{
    if (document.getElementById("city").value.trim().length < 1)
    {
        document.getElementById("city-warning").innerHTML = "Required field!";
        document.getElementById("city").style.borderColor = "red";
        document.getElementById("city-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("city-warning").innerHTML = "";
        document.getElementById("city").style.borderColor = "green";
        document.getElementById("city-icon").style.display = "none";
    }
}

function checkState()
{
    if (document.getElementById("state").value === "")
    {
        document.getElementById("state-warning").innerHTML = "Required field!";
        document.getElementById("state").style.borderColor = "red";
        document.getElementById("state-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("state-warning").innerHTML = "";
        document.getElementById("state").style.borderColor = "green";
        document.getElementById("state-icon").style.display = "none";
    }
}

function checkZip()
{
    let zip = String(document.getElementById("zip").value).trim();

    //Reformat otherwise correct input
    if(zip.search(/^\d{9}$/) > -1)
    {
        let subZero = zip.substr(0, 5);
        let subOne = zip.substr(5);
        document.getElementById("zip").value = subZero + "-" + subOne;
    }

    //Test for validation
    if ((zip.search(/^\d{5}$/) > -1) || (zip.search(/^\d{5}[-]?\d{4}$/) > -1))
    {
        document.getElementById("zip-warning").innerHTML = "";
        document.getElementById("zip").style.borderColor = "green";
        document.getElementById("zip-icon").style.display = "none";
    }
    else
    {
        document.getElementById("zip-warning").innerHTML = "Must be a valid five-digit format or hyphenated-ten digit format!";
        document.getElementById("zip").style.borderColor = "red";
        document.getElementById("zip-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
}

function checkPhone()
{
    let phoneNum = String(document.getElementById("phone").value).trim();

    //Regular Expression tests
    //console.log(phoneNum.search(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/));
    //console.log(phoneNum.search(/^\d{10}$/));
    //console.log(phoneNum.search(/^\d{3}-\d{3}-\d{4}$/));
    //console.log(phoneNum.search(/^\d{3}[-]?\d{3}[-]?\d{4}$/));

    //Reformat otherwise correct input
    if (phoneNum.search(/^\d{10}$/) > -1)
    {
        let areaCode = phoneNum.substr(0,3);
        let x = phoneNum.substr(3, 3);
        let y = phoneNum.substr(6,4);

        document.getElementById("phone").value = areaCode + "-" + x + "-" + y;
    }

    //Test for validation
    if (phoneNum.search(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/) == -1)
    {
        document.getElementById("phone-warning").innerHTML = "Phone number must be entered as a \"xxx-xxx-xxxx\" format!";
        document.getElementById("phone").style.borderColor = "red";
        document.getElementById("phone-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("phone-warning").innerHTML = "";
        document.getElementById("phone").style.borderColor = "green";
        document.getElementById("phone-icon").style.display = "none";
    }
}

function checkEmail()
{
    let address = String(document.getElementById("email").value).trim();

    if(address.search(/[^@ \t\r\n]+@[^@\t\r\n]+\.[^@ \t\r\n]+/) == -1)
    {
        document.getElementById("email-warning").innerHTML = "Must be a proper email format!";
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("email-icon").setAttribute("class","white fa fa-exclamation-triangle");
    }
    else
    {
        document.getElementById("email-warning").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
        document.getElementById("email-icon").style.display = "none";
    }
}

function checkGender()
{
    if (document.getElementById("gender-m").checked ||
        document.getElementById("gender-f").checked ||
        document.getElementById("gender-x").checked)
    {
        document.getElementById("gender-warning").innerHTML = "Validated!";
        document.getElementById("gender-icon").setAttribute("class","white fa fa-check");

    }
}

function checkMarital()
{
    if (!document.getElementById("married").checked ||
        !document.getElementById("unmarried").checked)
    {
        document.getElementById("marital-warning").innerHTML = "Validated!";
        document.getElementById("marital-icon").setAttribute("class","white fa fa-check");

    }
}

function checkDOB()
{
    let dateInput = String(document.getElementById("dob").value);
    console.log("date picker input: " + dateInput);

    if(dateInput.search(/^[\d]{4}[-]?[\d]{2}[-]?[\d]{2}$/) == -1)
    {
        document.getElementById("dob-warning").innerHTML = "Must be mm/dd/yyyy format!";
        document.getElementById("dob").style.borderColor = "red";
        document.getElementById("dob-icon").setAttribute("class","white fa fa-exclamation-triangle");

    }
    else
    {
        document.getElementById("dob-warning").innerHTML = "";
        document.getElementById("dob").style.borderColor = "green";
        document.getElementById("dob-icon").style.display = "none";
    }
}
