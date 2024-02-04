<?php
    try {
        $last_id = $_SESSION["last_id"];
        //echo "<br/>ID: $last_id<br/>";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $dbUsername, $dbPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT userName, password, firstName, lastName,
            address1, address2, city, state, zipCode, phone, email, gender,
            maritalStatus, dateOfBirth ".
            " FROM registration WHERE id = :last_id");
        $stmt->bindParam(':last_id', $last_id);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //var_dump($stmt->fetchAll()[0]);
        $assocArray = $stmt->fetchAll()[0];
        $userName = $assocArray["userName"];
        $password = $assocArray["password"];
        $firstName = $assocArray["firstName"];
        $lastName= $assocArray["lastName"];
        $addy1 = $assocArray["address1"];
        $addy2 = $assocArray["address2"];
        $city = $assocArray["city"];
        $state = $assocArray["state"];
        $zipCode = $assocArray["zipCode"];
        $phone = $assocArray["phone"];
        $email = $assocArray["email"];
        $gender = $assocArray["gender"];
        $maritalStatus = $assocArray["maritalStatus"];
        $dateOfBirth = $assocArray["dateOfBirth"];
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    } finally {
        $conn = null;
    }
?>

