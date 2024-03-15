<!DOCTYPE html>
<?php include 'connectionInfo.php'; ?>
<html lang="en">
<head>
    <title>STL HEMA -- Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
          crossorigin="anonymous"/>
    <link href="./css/registration-styles.css" rel="stylesheet" type="text/css"/>
    <script src="./js/validationScript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="registration" onload="validateForm()">

<?php include 'registrationValidate.php'; ?>
<?php include 'insertValidData.php';?>

    <div class="container-fluid">
        <div class="row">

            <!--Registration Form-->
            <div class="registration-box" >
                <h3 class="registration-heading">Registration Form</h3><hr>
                <form id="registrationForm" method="POST" novalidate
                      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <!--User Name Input-->
                    <p>
                        <label class="white">User Name</label><br>
                        <input type="text" id="user-name" name="userName" maxlength="50" size="25"
                        class="<?php echo $userNameColor;?>" value="<?php echo $inputName;?>"/>
                        <br>
                        <i id="user-name-icon" class="white <?php echo $userNameIcon?>"></i>
                        <span id="user-name-warning" class ="small-unbold-white"><?php echo $userNameErr;?></span>
                    </p>

                    <!--Password Input-->
                    <p>
                        <label class="white">Password</label>
                        <br>
                        <input type="password" id="password" name ="password" maxlength="50" size="25"
                               class="<?php echo $passwordColor;?>" value="<?php echo $userPassword;?>"/>
                        <br>
                        <i id = "password-icon" class="white <?php echo $passwordIcon?>"></i>
                        <span id="password-warning" class ="small-unbold-white"><?php echo $passwordErr;?></span>
                    </p>

                    <!--Password Verify Input-->
                    <p>
                        <label class="white">Verify Password</label>
                        <br>
                        <input type="password" id="verify-password" name ="verifyPassword" maxlength="50" size="25"
                               class="<?php echo $verifyPasswordColor;?> " value="<?php echo $verifyPassword;?>"/>
                        <br>
                        <i id="verify-password-icon" class="white <?php echo $verifyPasswordIcon?>"></i>
                        <span id="verify-password-warning" class ="small-unbold-white"> <?php echo $verifyPasswordErr;?></span>
                    </p>

                    <!--First Name Input-->
                    <p>
                        <label class="white"> First Name</label> <br>
                        <input type="text" id="first-name" name ="firstName" maxlength="50" size="25"
                               class="<?php echo $firstNameColor;?>" value="<?php echo $firstName;?>"/>
                        <br>
                        <i id="first-name-icon" class="white <?php echo $firstNameIcon?>"></i>
                        <span id="first-name-warning" class ="small-unbold-white"> <?php echo $firstNameErr;?></span>
                    </p>

                    <!--Last Name Input-->
                    <p>
                        <label class="white">Last Name</label><br>
                        <input type="text" id="last-name" name ="lastName" maxlength="50" size="25"
                               class="<?php echo $lastNameColor;?>" value="<?php echo $lastName;?>"/>
                        <br>
                        <i id="last-name-icon" class="white <?php echo $lastNameIcon?>"></i>
                        <span id="last-name-warning" class ="small-unbold-white"> <?php echo $lastNameErr;?></span>
                    </p>

                    <!--Address One Input-->
                    <p>
                        <label class="white">Address Line 1</label><br>
                        <input type="text" id="address-one" name="addressOne" maxlength="100" size="25"
                               class="<?php echo $addressOneColor;?>" value="<?php echo $addressOne;?>"/>
                        <br>
                        <i id="address-one-icon" class="white <?php echo $addressOneIcon?>"></i>
                        <span id="address-one-warning" class ="small-unbold-white"> <?php echo $addressOneErr;?></span>
                    </p>

                    <!--Address Two Input-->
                    <p>
                        <label class="white"> Address Line 2</label><br>
                        <input type="text" id="address-two" name="addressTwo" maxlength="100" size="25"
                               value="<?php echo $addressTwo;?>"/>
                    </p>

                    <!--City Input-->
                    <p>
                        <label class="white"> City</label> <br>
                        <input type="text" id="city" name="city" maxlength="50" size="25"
                               class="<?php echo $cityColor;?>" value="<?php echo $city;?>"/>
                        <br>
                        <i id="city-icon" class="white <?php echo $cityIcon?>"></i>
                        <span id="city-warning" class ="small-unbold-white"> <?php echo $cityErr;?></span>
                    </p>

                    <!--State Input-->
                    <p>
                        <label class="white" for="state"> State</label>
                        <br>
                        <select id="state" name="state"
                                class="<?php echo $stateColor;?>"/>
                        <option value=""></option>
                        <option value="AL" <?php if($state == "AL") echo "selected"?> > Alabama </option>
                        <option value="AK" <?php if($state == "AK") echo "selected"?> > Alaska </option>
                        <option value="AZ" <?php if($state == "AZ") echo "selected"?> > Arizona </option>
                        <option value="AR" <?php if($state == "AR") echo "selected"?> > Arkansas </option>
                        <option value="CA" <?php if($state == "CA") echo "selected"?> > California </option>
                        <option value="CO" <?php if($state == "CO") echo "selected"?> > Colorado </option>
                        <option value="CT" <?php if($state == "CT") echo "selected"?> > Connecticut </option>
                        <option value="DE" <?php if($state == "DE") echo "selected"?> > Delaware </option>
                        <option value="DC" <?php if($state == "DC") echo "selected"?> > District Of Columbia </option>
                        <option value="FL" <?php if($state == "FL") echo "selected"?> > Florida </option>
                        <option value="GA" <?php if($state == "GA") echo "selected"?> > Georgia </option>
                        <option value="HI" <?php if($state == "HI") echo "selected"?> > Hawaii </option>
                        <option value="ID" <?php if($state == "ID") echo "selected"?> > Idaho </option>
                        <option value="IL" <?php if($state == "IL") echo "selected"?> > Illinois </option>
                        <option value="IN" <?php if($state == "IN") echo "selected"?> > Indiana </option>
                        <option value="IA" <?php if($state == "IA") echo "selected"?> > Iowa </option>
                        <option value="KS" <?php if($state == "KS") echo "selected"?> > Kansas </option>
                        <option value="KY" <?php if($state == "KY") echo "selected"?> > Kentucky </option>
                        <option value="LA" <?php if($state == "LA") echo "selected"?> > Louisiana </option>
                        <option value="ME" <?php if($state == "ME") echo "selected"?> > Maine </option>
                        <option value="MD" <?php if($state == "MD") echo "selected"?> > Maryland </option>
                        <option value="MA" <?php if($state == "MA") echo "selected"?> > Massachusetts </option>
                        <option value="MI" <?php if($state == "MI") echo "selected"?> > Michigan </option>
                        <option value="MN" <?php if($state == "MN") echo "selected"?> > Minnesota </option>
                        <option value="MS" <?php if($state == "MS") echo "selected"?> > Mississippi </option>
                        <option value="MO" <?php if($state == "MO") echo "selected"?> > Missouri </option>
                        <option value="MT" <?php if($state == "MT") echo "selected"?> > Montana </option>
                        <option value="NE" <?php if($state == "NE") echo "selected"?> > Nebraska </option>
                        <option value="NV" <?php if($state == "NV") echo "selected"?> > Nevada </option>
                        <option value="NH" <?php if($state == "NH") echo "selected"?> > New Hampshire </option>
                        <option value="NJ" <?php if($state == "NJ") echo "selected"?> > New Jersey </option>
                        <option value="NM" <?php if($state == "NM") echo "selected"?> > New Mexico </option>
                        <option value="NY" <?php if($state == "NY") echo "selected"?> > New York </option>
                        <option value="NC" <?php if($state == "NC") echo "selected"?> > North Carolina </option>
                        <option value="ND" <?php if($state == "ND") echo "selected"?> > North Dakota </option>
                        <option value="OH" <?php if($state == "OH") echo "selected"?> > Ohio </option>
                        <option value="OK" <?php if($state == "OK") echo "selected"?> > Oklahoma </option>
                        <option value="OR" <?php if($state == "OR") echo "selected"?> > Oregon </option>
                        <option value="PA" <?php if($state == "PA") echo "selected"?> > Pennsylvania </option>
                        <option value="RI" <?php if($state == "RI") echo "selected"?> > Rhode Island </option>
                        <option value="SC" <?php if($state == "SC") echo "selected"?> > South Carolina </option>
                        <option value="SD" <?php if($state == "SD") echo "selected"?> > South Dakota </option>
                        <option value="TN" <?php if($state == "TN") echo "selected"?> > Tennessee </option>
                        <option value="TX" <?php if($state == "TX") echo "selected"?> > Texas </option>
                        <option value="UT" <?php if($state == "UT") echo "selected"?> > Utah </option>
                        <option value="VT" <?php if($state == "VT") echo "selected"?> > Vermont </option>
                        <option value="VA" <?php if($state == "VA") echo "selected"?> > Virginia </option>
                        <option value="WA" <?php if($state == "WA") echo "selected"?> > Washington </option>
                        <option value="WV" <?php if($state == "WV") echo "selected"?> > West Virginia </option>
                        <option value="WI" <?php if($state == "WI") echo "selected"?> > Wisconsin </option>
                        <option value="WY" <?php if($state == "WY") echo "selected"?> > Wyoming </option>
                        </select>
                        <br>
                        <i id="state-icon" class="white <?php echo $stateIcon?>"></i>
                        <span id="state-warning" class ="small-unbold-white"> <?php echo $stateErr;?></span>
                    </p>

                    <!--Zip Input-->
                    <p>
                        <label class="white">Zip Code</label>
                        <br>
                        <input type="text" id="zip" name="zip" maxlength="10" size="25"
                               class="<?php echo $zipColor;?>" value="<?php echo $zip;?>"/>
                        <br>
                        <i id="zip-icon" class="white <?php echo $zipIcon?>"></i>
                        <span id="zip-warning" class ="small-unbold-white"> <?php echo $zipErr;?></span>
                    </p>

                    <!--Phone Input-->
                    <p><label class="white"> Phone Number</label>
                        <br>
                        <input type="text" id="phone" name="phone" maxlength="12" size="25"
                               class="<?php echo $phoneColor;?>" value="<?php echo $phone;?>"/>
                        <br>
                        <i id="phone-icon" class="white <?php echo $phoneIcon?>"></i>
                        <span id="phone-warning" class ="small-unbold-white"> <?php echo $phoneErr;?></span>
                    </p>

                    <!--email Input-->
                    <p>
                        <label class ="white"> Email </label>
                        <br>
                        <input type="text" id="email" name="email" size="25"size="25"
                               class="<?php echo $emailColor;?>" value="<?php echo $email;?>"/>
                        <br>
                        <i id="email-icon" class="white <?php echo $emailIcon?>"></i>
                        <span id="email-warning" class ="small-unbold-white"> <?php echo $emailErr;?></span>
                    </p>

                    <!--Gender Radio Buttons-->
                    <p>
                        <label class="white">Gender</label>
                        <br>
                        <label class ="lighter-white"> <input type="radio" id="gender-m" name="gender" value="male" <?php if($gender == "male") echo "checked"?> /> Male </label><br>
                        <label class="lighter-white"> <input type="radio" id="gender-f" name="gender" value="female" <?php if($gender == "female") echo "checked"?> /> Female </label><br>
                        <label class="lighter-white"> <input type="radio" id="gender-x" name="gender"  value="other" <?php if($gender == "other") echo "checked"?> /> Other </label>
                        <br>
                        <i id="gender-icon" class="white <?php echo $genderIcon?>"></i>
                        <span id="gender-warning" class ="small-unbold-white"> <?php echo $genderErr;?></span>
                    </p>
                    <hr>

                    <!--Marital Status Radio Buttons-->
                    <p>
                        <label class="white">Marital Status</label><br>
                        <label class="lighter-white"> <input type="radio" id="married" name="marital"  value="married" <?php if($marital == "married") echo "checked"?> /> Married </label><br>
                        <label class="lighter-white"> <input type="radio" id="unmarried" name="marital"  value="unmarried" <?php if($marital == "unmarried") echo "checked"?> /> Unmarried </label>
                    <br>
                    <i id="marital-valid-icon" class="fa fa-check warning-icon"></i>
                    <span id ="marital-valid-msg" class ="small-unbold-white" style="display:none">
                            Validated.</span>
                        <i id="marital-icon" class="white <?php echo $maritalIcon?>"></i>
                        <span id="marital-warning" class ="small-unbold-white"> <?php echo $maritalErr;?></span>
                    </p>
                    <hr>

                    <!--Date of Birth-->
                    <p>
                        <label class="lighter-white" for="dob"> Date of Birth</label>
                        <br>
                        <input type="date" id="dob" name="dob" class="<?php echo $dobColor;?>" value="<?php echo $dob;?>"/>
                        <br>
                        <i id="dob-icon" class="white <?php echo $dobIcon?>"></i>
                        <span id="dob-warning" class ="small-unbold-white"> <?php echo $dobErr;?></span>
                    </p>
                    <hr>

                    <!--Submit Buttons-->
                    <p>
                        <input type="submit" id="true-button" value="Submit" style="display:inline"/>
                        <input type="button" id="decoy-button" value="Validate" style="display:none"/>
                        <input type="button" id="reset" value="Reset" onclick="location.href = 'registration.php';"/>
                        <br>
                        <i id="required-field-icon" class="fa fa-exclamation-triangle" style="color:white; display:none"></i>
                        <span id ="required-field-msg" class ="small-unbold-white" style="display:none">Fill out all required fields!</span>
                    </p>
                </form>



            </div>
        </div>
    </div>
</body>

</html>