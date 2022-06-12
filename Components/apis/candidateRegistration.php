<?php
    include('config.php');
    error_reporting(1);
    $errors = Array();
    $status = Array();
    if (isset($_POST['register'])) {
        $userFirstName = $_POST['fn'];
        $userSecondName = $_POST['sn'];
        $userStudentNumber = $_POST['studentNumber'];
        $userYearOfAward = $_POST['yoe'];
        $userPost = $_POST['pst'];
        $userEmail = $_POST['email'];
        $userPhoneNumber = $_POST['number'];
        $userResidence = $_POST['residence'];
        
        $checkUserQuery = "SELECT * FROM Registeration WHERE studentNo='$userStudentNumber'";
        $check_Query = mysqli_query($conn, $checkUserQuery);
        $final_check = mysqli_fetch_all($check_Query, MYSQLI_ASSOC);

        if (count($final_check) > 0) {
            array_push($errors, "Candidate already registered");
        } else {
            if (empty($userFirstName) || empty($userSecondName) || empty($userStudentNumber) || empty($userResidence) || empty($userEmail)) {
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
            $appFinalName = $userStudentNumber.' '.$_FILES['userApplication']['name'];
            $appTmpFile = $_FILES['userApplication']['tmp_name'];
            $appExtension = pathinfo($appFileName, PATHINFO_EXTENSION);

            $payFileName = $_FILES['userPayment']['name'];
            $payFinalName = $userStudentNumber.' '.$_FILES['userPayment']['name'];
            $payTmpFile = $_FILES['userPayment']['tmp_name'];
            $payExtension = pathinfo($payFileName, PATHINFO_EXTENSION);

            $manifestoFileName = $_FILES['userManifesto']['name'];
            $manifestoFinalName = $userStudentNumber.' '.$_FILES['manifesto']['name'];
            $manifestoTmpFile = $_FILES['manifesto']['tmp_name'];
            $manifestoExtension = pathinfo($manifestoFileName, PATHINFO_EXTENSION);


            $destination = 'Components/uploads/';

            if ($appExtension != 'pdf') {array_push($errors, "Application form must be in pdf format");}

            if ($payExtension != 'pdf') {array_push($errors, "Payment receipt must be in pdf format");}

            if ($manifestoExtension != 'pdf') {array_push($errors, "Manifesto must be in pdf format");}
            
            if (count($errors) == 0) {

                move_uploaded_file($appTmpFile, $destination.$appFinalName);
                move_uploaded_file($payTmpFile, $destination.$payFinalName);
                move_uploaded_file($manifestoTmpFile, $destination.$manifestoFinalName);

                $userReg = "INSERT INTO `Registeration` (`studentNo`, `firstName`, `lastName`, `year`, `email`, `phone`, `residence`, `post`, `Application`, `Payment`, `manifesto`, `approved`, `counts`)
                    VALUES (
                        '$userStudentNumber',
                        '$userFirstName',
                        '$userSecondName',
                        '$userYearOfAward',
                        '$userEmail',
                        '$userPhoneNumber',
                        '$userResidence',
                        '$userPost',
                        '$appFinalName',
                        '$payFinalName',
                        '$manifestoFinalName',
                        'No',
                        '0')";
                mysqli_query($conn, $userReg);
                if (!mysqli_query($conn, $userReg)) {echo mysqli_error($conn);}
                array_push($status, "Application pending for approval, check the candidate's list in 6 hours");
            }
        }
    }
