<!DOCTYPE html>
<?php
include 'connectionInfo.php';
?>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Mountain Man Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/passwordMessage.css">
</head>
<body>
<div class="w3-blue-gray">
    <!-- Header -->
    <header class="w3-display-container w3-content w3-center" style="max-width:1500px">
        <img class="w3-image" src="/images/bannerpic.jpg" alt="Mountain" width="1500" height="600">
        <div class="w3-display-middle w3-padding-large w3-wide w3-text-deep-orange w3-center">
            <h1 class="w3-hide-medium w3-hide-small w3-jumbo"><strong>Mountain Man</strong></h1>
            <h5 class="w3-hide-large" style="white-space:nowrap">Mountain Man</h5>
            <h3 class="w3-hide-medium w3-hide-small w3-xxlarge" ><b>PHOTOGRAPHY</b></h3>
        </div>

        <!-- Navbar (placed at the bottom of the header image) -->
        <div class="w3-bar w3-deep-orange w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
            <a href="homePage.html" class="w3-bar-item w3-button">Home</a>
            <a href="registration.php" class="w3-bar-item w3-button">Registration</a>
            <a href="animation.html" class="w3-bar-item w3-button">Animation</a>
        </div>
    </header>

    <!-- Navbar on small screens -->
    <div class="w3-center w3-deep-orange w3-padding-16 w3-hide-large w3-hide-medium">
        <div class="w3-bar w3-deep-orange">
            <a href="homePage.html" class="w3-bar-item w3-button">Home</a>
            <a href="registration.php" class="w3-bar-item w3-button">Registration</a>
            <a href="animation.html" class="w3-bar-item w3-button">Animation</a>
        </div>
    </div>

    <?php
        include 'selectUserData.php';
    ?>

    <!-- Form details   -->
    <div class="w3-content w3-light-gray w3-padding-large w3-margin-top w3-border w3-border-deep-orange" id="confirmation">
         <h3 class="w3-center w3-text-deep-orange"><strong>Mountain Man - Confirmation Page</strong></h3>
            <h6 class="w3-center w3-text-black"><strong>We will contact you as soon as possible!</strong></h6>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!-- UserName -->
            <div class="w3-section">
                <label for="userName"><strong>User Name:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="userName" type="text"
                       required size="50" maxlength="50" minlength="6" name="userName" placeholder="jsmith123"
                       value="<?php echo $userName; ?>"/>
            </div>

            <!-- Password -->
            <div class="w3-section">
                <label for="password"><strong>Password:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="password" type="password"
                       required size="50" maxlength="50" minlength="8" name="password"
                       pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{8,50}$"
                       value="<?php echo $password; ?>"/>

            </div>

            <!-- First Name -->
            <div class="w3-section">
                <label for="firstName"><strong>First Name:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="firstName" type="text"
                       required size="50" maxlength="50" name="firstName" placeholder="John"
                       value="<?php echo $firstName; ?>"/>
            </div>

            <!-- Last Name -->
            <div class="w3-section">
                <label for="lastName"><strong>Last Name:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="lastName" type="text"
                       required size="50" maxlength="50" name="lastName" placeholder="Smith"
                       value="<?php echo $lastName; ?>"/>
            </div>

            <!-- Address line 1 -->
            <div class="w3-section">
                <label for="addressLine1"><strong>Address Line #1:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="addressLine1" type="text"
                       required size="100" maxlength="100" name="addressLine1" placeholder="123 1st Street"
                       value="<?php echo $addy1; ?>"/>
            </div>

            <!-- Address line 2 -->
            <div class="w3-section">
                <label for="addressLine2"><strong>Address Line #2:</strong><h6 class="w3-right">(Optional)</h6></label><br/>
                <input class="w3-input w3-border w3-border-black valid" disabled id="addressLine2" type="text"
                       size="100" maxlength="100" name="addressLine2"
                       value="<?php echo $addy2; ?>"/>
            </div>

            <!-- City -->
            <div class="w3-section">
                <label for="city"><strong>City:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="city" type="text"
                       required size="50" maxlength="50" name="city" placeholder="OFallon"
                       value="<?php echo $city; ?>"/>
            </div>

            <!-- State Drop down box -->
            <div class="w3-section">
                <label for="state"><strong>State:</strong></label><br/>
                <select class="w3-input w3-border w3-border-black" disabled id="state"
                        required name="state" value="<?php echo isset($state)? $state: '';?>">
                    <option hidden value="">Please Select Here</option>
                    <option value="AL" <?php echo $state === 'AL' ? 'selected' : ''; ?>>Alabama </option>
                    <option value="AK" <?php echo $state === 'AK' ? 'selected' : ''; ?>>Alaska</option>
                    <option value="AZ" <?php echo $state === 'AZ' ? 'selected' : ''; ?>>Arizona</option>
                    <option value="AR" <?php echo $state === 'AR' ? 'selected' : ''; ?>>Arkansas</option>
                    <option value="CA" <?php echo $state === 'CA' ? 'selected' : ''; ?>>California</option>
                    <option value="CO" <?php echo $state === 'CO' ? 'selected' : ''; ?>>Colorado</option>
                    <option value="CT" <?php echo $state === 'CT' ? 'selected' : ''; ?>>Connecticut</option>
                    <option value="DE" <?php echo $state === 'DE' ? 'selected' : ''; ?>>Delaware</option>
                    <option value="FL" <?php echo $state === 'FL' ? 'selected' : ''; ?>>Florida</option>
                    <option value="GA" <?php echo $state === 'GA' ? 'selected' : ''; ?>>Georgia</option>
                    <option value="HI" <?php echo $state === 'HI' ? 'selected' : ''; ?>>Hawaii</option>
                    <option value="ID" <?php echo $state === 'ID' ? 'selected' : ''; ?>>Idaho</option>
                    <option value="IL" <?php echo $state === 'IL' ? 'selected' : ''; ?>>Illinois</option>
                    <option value="IN" <?php echo $state === 'IN' ? 'selected' : ''; ?>>Indiana</option>
                    <option value="IA" <?php echo $state === 'IA' ? 'selected' : ''; ?>>Iowa</option>
                    <option value="KS" <?php echo $state === 'KS' ? 'selected' : ''; ?>>Kansas</option>
                    <option value="KY" <?php echo $state === 'KY' ? 'selected' : ''; ?>>Kentucky</option>
                    <option value="LA" <?php echo $state === 'LA' ? 'selected' : ''; ?>>Louisiana</option>
                    <option value="ME" <?php echo $state === 'ME' ? 'selected' : ''; ?>>Maine</option>
                    <option value="MD" <?php echo $state === 'MD' ? 'selected' : ''; ?>>Maryland</option>
                    <option value="MA" <?php echo $state === 'MA' ? 'selected' : ''; ?>>Massachusetts</option>
                    <option value="MI" <?php echo $state === 'MI' ? 'selected' : ''; ?>>Michigan</option>
                    <option value="MN" <?php echo $state === 'MN' ? 'selected' : ''; ?>>Minnesota</option>
                    <option value="MS" <?php echo $state === 'MS' ? 'selected' : ''; ?>>Mississippi</option>
                    <option value="MO" <?php echo $state === 'MO' ? 'selected' : ''; ?>>Missouri</option>
                    <option value="MT" <?php echo $state === 'MT' ? 'selected' : ''; ?>>Montana</option>
                    <option value="NE" <?php echo $state === 'NE' ? 'selected' : ''; ?>>Nebraska</option>
                    <option value="NV" <?php echo $state === 'NV' ? 'selected' : ''; ?>>Nevada</option>
                    <option value="NH" <?php echo $state === 'NH' ? 'selected' : ''; ?>>New Hampshire</option>
                    <option value="NJ" <?php echo $state === 'NJ' ? 'selected' : ''; ?>>New Jersey</option>
                    <option value="NM" <?php echo $state === 'NM' ? 'selected' : ''; ?>>New Mexico</option>
                    <option value="NY" <?php echo $state === 'NY' ? 'selected' : ''; ?>>New York</option>
                    <option value="NC" <?php echo $state === 'NC' ? 'selected' : ''; ?>>North Carolina</option>
                    <option value="ND" <?php echo $state === 'ND' ? 'selected' : ''; ?>>North Dakota</option>
                    <option value="OH" <?php echo $state === 'OH' ? 'selected' : ''; ?>>Ohio</option>
                    <option value="OK" <?php echo $state === 'OK' ? 'selected' : ''; ?>>Oklahoma</option>
                    <option value="OR" <?php echo $state === 'OR' ? 'selected' : ''; ?>>Oregon</option>
                    <option value="PA" <?php echo $state === 'PA' ? 'selected' : ''; ?>>Pennsylvania</option>
                    <option value="RI" <?php echo $state === 'RI' ? 'selected' : ''; ?>>Rhode Island</option>
                    <option value="SC" <?php echo $state === 'SC' ? 'selected' : ''; ?>>South Carolina</option>
                    <option value="SD" <?php echo $state === 'SD' ? 'selected' : ''; ?>>South Dakota</option>
                    <option value="TN" <?php echo $state === 'TN' ? 'selected' : ''; ?>>Tennessee</option>
                    <option value="TX" <?php echo $state === 'TX' ? 'selected' : ''; ?>>Texas</option>
                    <option value="UT" <?php echo $state === 'UT' ? 'selected' : ''; ?>>Utah</option>
                    <option value="VT" <?php echo $state === 'VT' ? 'selected' : ''; ?>>Vermont</option>
                    <option value="VA" <?php echo $state === 'VA' ? 'selected' : ''; ?>>Virginia</option>
                    <option value="WA" <?php echo $state === 'WA' ? 'selected' : ''; ?>>Washington</option>
                    <option value="WV" <?php echo $state === 'WV' ? 'selected' : ''; ?>>West Virginia</option>
                    <option value="WI" <?php echo $state === 'WI' ? 'selected' : ''; ?>>Wisconsin</option>
                    <option value="WY" <?php echo $state === 'WY' ? 'selected' : ''; ?>>Wyoming</option>
                </select>
            </div>

            <!-- Zip Code -->
            <div class="w3-section">
                <label for="zipCode"><strong>Zip Code:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="zipCode" type="text"
                       required size="10" maxlength="10" minlength="5" name="zipCode" placeholder="63368"
                       value="<?php echo $zipCode; ?>"/>
            </div>

            <!-- Phone Number -->
            <div class="w3-section">
                <label for="phoneNumber"><strong>Phone Number:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="phoneNumber" type="text"
                       required size="12" maxlength="12" name="phoneNumber" placeholder="555-555-5555"
                       value="<?php echo $phone; ?>"/>
            </div>

            <!-- Email -->
            <div class="w3-section">
                <label for="email"><strong>Email:</strong></label><br/>
                <input class="w3-input w3-border w3-border-black" disabled id="email" type="email"
                       required name="email" placeholder="jsmith123@email.com"
                       pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{1,4}$"
                       value="<?php echo $email; ?>"/>
            </div>

            <!-- Gender -->
            <div class="w3-section" >
                <label><strong>Gender:</strong></label>
                <br/>
                <input type="radio" required disabled
                       name="gender" id="maleGender"
                    <?php if ($gender=="male"){echo "checked";}?>
                       value="male"/> <label for="male">Male</label><br/>
                <input type="radio" required disabled
                       name="gender" id="femaleGender"
                    <?php if ($gender=="female"){echo "checked";}?>
                       value="female"/> <label for="female">Female</label><br/>
                <input type="radio" required disabled
                       name="gender" id="otherGender"
                    <?php if ($gender=="other"){echo "checked";}?>
                       value="other"/>  <label for="other">Other</label>
            </div>

            <!-- Marital Status -->
            <div class="w3-section">
                <label><strong>Marital Status</strong></label>
                <br/>
                <input type="radio" required disabled
                       name="maritalStatus" id="married"
                    <?php if ($maritalStatus=="married"){echo "checked";}?>
                       value="married"/> <label for="married">Married</label><br/>
                <input type="radio" required disabled
                       name="maritalStatus" id="divorced"
                    <?php if ($maritalStatus=="divorced"){echo "checked";}?>
                       value="divorced"/> <label for="divorced">Divorced</label><br/>
                <input type="radio" required disabled
                       name="maritalStatus" id="neverMarried"
                    <?php if ($maritalStatus=="neverMarried"){echo "checked";}?>
                       value="neverMarried"/> <label for="never">Never Married</label>
            </div>

            <!--            Date of Birth pop up (date clicker) -->
            <div class="w3-section">
                <label for="birthDay"><strong>Date of Birth:</strong></label><br/>
                <input class="w3-border w3-border-black" disabled id="birthDay" type="date" name="birthDay"
                       required value="<?php echo $dateOfBirth; ?>"/><br/>
            </div>

            <!-- Submit Button -->
            <input type="submit" class=" w3-button w3-deep-orange" disabled id="submit" value="Submit">

            <!-- Reset Button -->
            <input type="reset" class="w3-button w3-deep-orange" disabled value="Reset">
        </form>
        <h5 class="w3-center w3-text-deep-orange"><strong>Thank You. Have a great day!</strong></h5>
    </div>

    <!-- Back to top of page option -->
    <div class="w3-right w3-content w3-text-deep-orange">
            <br/>
            <a href="#" class="w3-bar-item w3-button w3-light-gray w3-border w3-border-blue"><strong>Back to top</strong></a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-display-container w3-content w3-center" style="max-width:1500px">
        <div class="w3-display-middle w3-wide w3-text-blue w3-bottom-middle">
            <br/><br/><br/><br/><br/><br/><br/>
            <a href="https://www.youtube.com/watch?v=g4_p2-TG840">
                <img src="/images/logo.jpg" alt="Picture of Logo" class="w3-image w3-margin-top" width="75" height="75"/>
                <br/><strong>Mountain Man Photography Youtube - Click Here</strong>
            </a>
        </div>
    </footer>
</body>
</html>

