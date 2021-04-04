<?php
    include('config.php');
    $errors = Array();
    $status = Array();
    if (isset($_POST['register'])) {
        $userFirstName = $_POST['fn'];
        $userSecondNames = $_POST['sn'];
        $userPassportNumber = $_POST['psn'];
        $userYearOfAward = $_POST['yoe'];
        $userUniversity = $_POST['univ'];
        $userPost = $_POST['pst'];
        $userEmail = $_POST['email'];
        $userPhoneNumber = $_POST['no'];
        $userWilaya = $_POST['wilaya'];
        
        

        $checkUserQuery = "SELECT * FROM Registeration WHERE passportNo='$userPassportNumber' AND email='$userEmail'";
        $check_Query = mysqli_query($conn, $checkUserQuery);
        $final_check = mysqli_fetch_all($check_Query, MYSQLI_ASSOC);

        if (count($final_check) > 0) {
            array_push($errors, "Candidate already registered");
        } else {
            if (empty($userFirstName) || empty($userSecondNames) || empty($userPassportNumber)
                || empty($userUniversity) || empty($userWilaya) || empty($userEmail)) {
                    array_push($errors, "Please check, some fields are missing");
                }

            if ($userPost == 'null') {
                array_push($errors, "Please select a post");
            }

            if ($userYearOfAward == 'null') {array_push($errors, "Please select a year of award");}
            /* 
                get the file name and modify it to fit the user
                add the name of the user
                save the file 
                and then add the link to the database

            */
            $appFileName = $_FILES['userApplication']['name'];
            $appFinalName = $userPassportNumber.' '.$_FILES['userApplication']['name'];
            $appTmpFile = $_FILES['userApplication']['tmp_name'];
            $appExtension = pathinfo($appFileName, PATHINFO_EXTENSION);

            $payFileName = $_FILES['userPayment']['name'];
            $payFinalName = $userPassportNumber.' '.$_FILES['userPayment']['name'];
            $payTmpFile = $_FILES['userPayment']['tmp_name'];
            $payExtension = pathinfo($payFileName, PATHINFO_EXTENSION);

            $scolarFileName = $_FILES['userScolarite']['name'];
            $scolarFinalName = $userPassportNumber.' '.$_FILES['userScolarite']['name'];
            $scolarTmpFile = $_FILES['userScolarite']['tmp_name'];
            $scolarExtension = pathinfo($payFileName, PATHINFO_EXTENSION);

            $manifestoFileName = $_FILES['userManifesto']['name'];
            $manifestoFinalName = $userPassportNumber.' '.$_FILES['userManifesto']['name'];
            $manifestoTmpFile = $_FILES['userManifesto']['tmp_name'];
            $manifestoExtension = pathinfo($payFileName, PATHINFO_EXTENSION);


            $destination = 'Components/uploads/';

            if ($appExtension != 'pdf') {array_push($errors, "Application form must be in pdf format");}

            if ($payExtension != 'pdf') {array_push($errors, "Payment receipt must be in pdf format");}

            if ($scolarExtension != 'pdf') {array_push($errors, "Scolarite must be in pdf format");}

            if ($manifestoExtension != 'pdf') {array_push($errors, "Manifesto must be in pdf format");}
            
            if (count($errors) == 0) {

                move_uploaded_file($appTmpFile, $destination.$appFinalName);
                move_uploaded_file($payTmpFile, $destination.$payFinalName);
                move_uploaded_file($scolarTmpFile, $destination.$scolarFinalName);
                move_uploaded_file($manifestoTmpFile, $destination.$manifestoFinalName);

                $userReg = "INSERT INTO `Registeration` (`passportNo`, `firstName`, `lastName`, `year`, `email`, `phone`, `uiversity`, `wilaya`, `post`, `Application`, `Payment`, `manifesto`, `scolarite`, `approved`, `counts`)
                    VALUES (
                        '$userPassportNumber',
                        '$userFirstName',
                        '$userSecondNames',
                        '$userYearOfAward',
                        '$userEmail',
                        '$userPhoneNumber',
                        '$userUniversity',
                        '$userWilaya',
                        '$userPost',
                        '$appFinalName',
                        '$payFinalName',
                        '$manifestoFinalName',
                        '$scolarFinalName',
                        'No',
                        '0')";
                mysqli_query($conn, $userReg);
                // if (!mysqli_query($conn, $userReg)) {echo mysqli_error($conn);}
                array_push($status, "Application pending for approval, check the candidate's list in 6 hours");
            }
        }
    }
