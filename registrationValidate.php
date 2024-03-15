<?php
//Defining field variables
$inputName = $userPassword = $verifyPassword = $firstName = $lastName = $addressOne = $addressTwo =
$state = $city = $zip = $phone = $email = $gender = $marital = $dob = "";

//Defining error variables
$userNameErr = $passwordErr = $verifyPasswordErr = $firstNameErr = $lastNameErr = $addressOneErr = $addressTwoErr =
$stateErr = $cityErr = $zipErr = $phoneErr = $emailErr = $genderErr = $maritalErr = $dobErr = "";

//Defining border color variables for input fields
$userNameColor = $passwordColor = $verifyPasswordColor = $firstNameColor = $lastNameColor = $addressOneColor = $addressTwoColor =
$stateColor = $cityColor = $zipColor = $phoneColor = $emailColor = $genderColor = $maritalColor = $dobColor = "";

//Defining icon variables
$userNameIcon = $passwordIcon = $verifyPasswordIcon = $firstNameIcon = $lastNameIcon = $addressOneIcon = $addressTwoIcon =
$stateIcon = $cityIcon = $zipIcon = $phoneIcon = $emailIcon =  $genderIcon = $maritalIcon = $dobIcon = "";

//$isValid variable
$isValid = false;

//Functions
function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Begin verification code
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $isValid = true;

    //User Name
    $inputName = clean_input($_POST["userName"]);
    if (empty($inputName))
    {
        $userNameColor = "red";
        $userNameErr = "Required field!";
        $userNameIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (strlen($inputName) < 6)
    {
        $userNameColor = "red";
        $userNameErr = "User name must be a minimum of six characters!";
        $userNameIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $userNameColor = "green";
    }

    //Password
    $userPassword = clean_input($_POST["password"]);
    if (empty($userPassword))
    {
        $passwordColor = "red";
        $passwordErr = "Required field!";
        $passwordIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (strlen($userPassword) < 8)
    {
        $passwordColor = "red";
        $passwordErr = "Password must be a minimum of eight characters!";
        $passwordIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (preg_match("/[A-Z]/", $userPassword) &&
             preg_match("/[a-z]/", $userPassword) &&
             preg_match("/[\W]/", $userPassword))
    {
        $passwordColor = "green";
    }
    else
    {
        $passwordColor = "red";
        $passwordErr = "You need a special, uppercase and lowercase character!";
        $passwordIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }

    //Password verify
    $verifyPassword = clean_input($_POST["verifyPassword"]);
    if (empty($verifyPassword))
    {
        $verifyPasswordColor = "red";
        $verifyPasswordErr = "Required field!";
        $verifyPasswordIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (!($userPassword == $verifyPassword))
    {
        $verifyPasswordColor = "red";
        $verifyPasswordErr = "Fields must match!";
        $verifyPasswordIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $verifyPasswordColor = "green";
    }

    //First name
    $firstName = clean_input($_POST["firstName"]);
    if (empty($firstName))
    {
        $firstNameColor = "red";
        $firstNameErr = "Required field!";
        $firstNameIcon = "fa fa-exclamation-triangle";
        $firstName = false;
    }
    else
    {
        $firstNameColor = "green";
    }

    //Last name
    $lastName = clean_input($_POST["lastName"]);
    if (empty($lastName))
    {
        $lastNameColor = "red";
        $lastNameErr = "Required field!";
        $lastNameIcon = "fa fa-exclamation-triangle";
        $lastName = false;
    }
    else
    {
        $lastNameColor = "green";
    }


    //Address line one
    $addressOne = clean_input($_POST["addressOne"]);
    if (empty($addressOne))
    {
        $addressOneColor = "red";
        $addressOneErr = "Required field!";
        $addressOneIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $addressOneColor = "green";
    }

    //Address line two
    $addressTwo = clean_input($_POST["addressTwo"]);

    //City
    $city = clean_input($_POST["city"]);
    if (empty($city))
    {
        $cityColor = "red";
        $cityErr = "Required field!";
        $cityIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $cityColor = "green";
    }

    //State
    $state = clean_input($_POST["state"]);
    if (empty($state))
    {
        $stateColor = "red";
        $stateErr = "Required field!";
        $stateIcon = "fa fa-exclamation-triangle";
        $isValid = false;

    }
    else
    {
        $stateColor = "green";
    }

    //Zip code
    $zip = clean_input($_POST["zip"]);
    if (empty($zip))
    {
        $zipColor = "red";
        $zipErr = "Required field!";
        $zipIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (strlen($zip) < 5)
    {
        $zipColor = "red";
        $zipErr = "Must be at least five digits!";
        $zipIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (!preg_match("/^\d{5}[-]\d{4}$/", $zip) && !preg_match("/^\d{5}$/", $zip))
    {
        $zipColor = "red";
        $zipErr = "Must be a valid five-digit format or hyphenated-ten digit format!";
        $zipIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $zipColor = "green";
    }

    //Phone number
    $phone = clean_input($_POST["phone"]);
    if (empty($phone))
    {
        $phoneColor = "red";
        $phoneErr = "Required field!";
        $phoneIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone))
    {
        $phoneColor = "red";
        $phoneErr = "Phone number must be entered as a \"xxx-xxx-xxxx\" format!";
        $phoneIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $phoneColor = "green";
    }

    //Email address
    $email = clean_input($_POST["email"]);
    if (empty($email))
    {
        $emailColor = "red";
        $emailErr = "Required field!";
        $emailIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $emailColor = "red";
        $emailErr = "Field must have \"email@someorganization.xxx\" format!";
        $emailIcon = "fa fa-exclamation-triangle";
        $isValid = false;

    }
    else
    {
        $emailColor = "green";
    }

    //Gender
    $gender = clean_input(@$_POST["gender"]);
    if (!array_key_exists("gender", $_POST))
    {
        $genderErr = "Required field!";
        $genderIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $genderErr = "Validated";
        $genderIcon = "fa fa-check";
    }


    //Marital status
    $marital = clean_input(@$_POST["marital"]);
    if (!array_key_exists("marital", $_POST))
    {
        $maritalErr = "Required field!";
        $maritalIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $maritalErr = "Validated";
        $maritalIcon = "fa fa-check";
    }

    //Date of birth
    $dob = clean_input($_POST["dob"]);
    if (empty($dob))
    {
        $dobColor = "red";
        $dobErr = "Required field!";
        $dobIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else if (strlen($dob) > 10)
    {
        $dobColor = "red";
        $dobErr = "Must be mm/dd/yyyy format!";
        $dobIcon = "fa fa-exclamation-triangle";
        $isValid = false;
    }
    else
    {
        $dobColor = "green";
    }

}
?>

