<!DOCTYPE html>
<?php include 'connectionInfo.php';?>
<html lang="en">

<head>
    <title>STL HEMA -- Confirmation Page</title>
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
<body class="registration" onload="validateForm();">

<?php include 'selectUserData.php'; ?>

<!--Registration Form-->
<div class="registration-box">

    <h3 class="registration-heading">Registration Confirmation</h3>
    <hr>

    <p>
    <label class="white">User Name:</label>
    <span class = "white">&nbsp <?php echo $inputName; ?> </span>
    </p>

    <p>
    <label class="white">First Name:</label>
    <span class = "white">&nbsp <?php echo $firstName; ?> </span>
    </p>

    <p>
    <label class="white">Last Name:</label>
    <span class = "white">&nbsp <?php echo $lastName; ?> </span>
    </p>

    <p>
    <label class="white">Address line one:</label>
    <span class = "white">&nbsp <?php echo $addressOne; ?> </span>
    </p>

    <p>
    <label class="white">Address line two:</label>
    <span class = "white">&nbsp <?php echo $addressTwo; ?> </span>
    </p>

    <p>
    <label class="white">City:</label>
    <span class = "white">&nbsp <?php echo $city; ?> </span>
    </p>

    <p>
    <label class="white">State:</label>
    <span class = "white">&nbsp <?php echo $state; ?> </span>
    </p>

    <p>
    <label class="white">Zip Code:</label>
    <span class = "white">&nbsp <?php echo $zip; ?> </span>
    </p>

    <p>
    <label class="white">Phone Number:</label>
    <span class = "white">&nbsp <?php echo $phone; ?> </span>
    </p>

    <p>
    <label class="white">Email:</label>
    <span class = "white">&nbsp<?php echo $email; ?> </span>
    </p>

    <p>
    <label class="white">Gender:</label>
    <span class = "white">&nbsp <?php echo $gender; ?> </span>
    </p>

    <p>
    <label class="white">Marital Status:</label>
    <span class = "white">&nbsp <?php echo $marital; ?> </span>
    </p>

    <p>
    <label class="white">Date of Birth:</label>
    <span class = "white">&nbsp <?php echo $dob; ?> </span>
    </p>

</div>


</body>
</html>