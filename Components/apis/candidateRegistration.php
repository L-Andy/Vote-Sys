<?php
    include('config.php');

    $userFirstName = $_POST['userFirstName'];
    $userSeconNames = $_POST['userSeconNames'];
    $userPassportNumber = $_POST['userPassportNumber'];
    $userYearOfAward = $_POST['userYearOfAward'];
    $userUniversity = $_POST['userUniversity'];
    $userPost = $_POST['userPost'];
    $userEmail = $_POST['userEmail'];
    $userPhoneNumber = $_POST['userPhoneNumber'];
    $userWilaya = $_POST['userWilaya'];

    $checkUserQuery = "SELECT * FROM Vote.Registeration WHERE passportNo='$userPassportNumber'";
    $check_Query = mysqli_query($conn, $checkUserQuery);
    $final_check = mysqli_fetch_all($check_Query, MYSQLI_ASSOC);

    if (count($final_check) > 0) {?>
        <div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-red" style="margin: 10px;">
			<p><?php echo "Candidate already registered"; ?></p></h2>
		</div>
    <?php } else {
        $userReg = "INSERT INTO `Vote`.`Registeration` (`passportNo`, `firstName`, `lastName`, `year`, `email`, `phone`, `uiversity`, `wilaya`, `post`, `counts`)
            VALUES (
                '$userPassportNumber',
                '$userFirstName',
                '$userSeconNames',
                '$userYearOfAward',
                '$userEmail',
                '$userPhoneNumber',
                '$userUniversity',
                '$userWilaya',
                '$userPost',
                '0')";
        mysqli_query($conn, $userReg);?>
        <div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-small w3-text-blue" style="margin: 10px;">
			<p><?php echo "Successfuly registered.. check the candidates list"; ?></p></h2>
		</div>
    <?php }
?>