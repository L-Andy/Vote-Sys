<?php

    function getPresidentsFinal() {
        $PresidentFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='President' AND approved='Yes' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($PresidentFinal, $candidates);
        }
        return $PresidentFinal;
    }

    function getVicePresidentsFinal() {
        $vicePresidentFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='vicePresident' AND approved='Yes' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($vicePresidentFinal, $candidates);
        }
        return $vicePresidentFinal;
    }

    function getVicePresidentsGirlsFinal() {
        $vicePresidentsGirlsFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='vicePresidentGirls' AND approved='Yes' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($vicePresidentsGirlsFinal, $candidates);
        }
        return $vicePresidentsGirlsFinal;
    }

    function getGeneralSecretaryFinal() {
        $generalSecretaryFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='generalSecretary' AND approved='Yes' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($generalSecretaryFinal, $candidates);
        }
        return $generalSecretaryFinal;
    }

    function getTreasurerFinal() {
        $TreasurerFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='Treasurer' AND approved='Yes' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($TreasurerFinal, $candidates);
        }
        return $TreasurerFinal;
    }

    function getEducationMinisterFinal() {
        $educationMinisterFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='educationMinister' AND approved='Yes' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($educationMinisterFinal, $candidates);
        }
        return $educationMinisterFinal;
    }

    function getInformationMinisterFinal() {
        $informationMinisterFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='informationMinister' AND approved='Yes' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($informationMinisterFinal, $candidates);
        }
        return $informationMinisterFinal;
    }
?>

