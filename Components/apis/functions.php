<?php

    function getPresidents() {
        $President = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='President' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($President, $candidates);
        }
        return $President;
    }

    function getVicePresidents() {
        $vicePresident = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='vicePresident' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($vicePresident, $candidates);
        }
        return $vicePresident;
    }

    function getVicePresidentsGirls() {
        $vicePresidentsGirls = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='vicePresidentGirls' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($vicePresidentsGirls, $candidates);
        }
        return $vicePresidentsGirls;
    }

    function getGeneralSecretary() {
        $generalSecretary = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='generalSecretary' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($generalSecretary, $candidates);
        }
        return $generalSecretary;
    }

    function getTreasurer() {
        $Treasurer = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='Treasurer' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($Treasurer, $candidates);
        }
        return $Treasurer;
    }

    function getEducationMinister() {
        $educationMinister = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='educationMinister' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($educationMinister, $candidates);
        }
        return $educationMinister;
    }

    function getInformationMinister() {
        $informationMinister = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='informationMinister' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($informationMinister, $candidates);
        }
        return $informationMinister;
    }
?>

