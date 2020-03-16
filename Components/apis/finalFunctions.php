<?php

    function getPresidentsFinal() {
        $PresidentFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Vote.Registeration WHERE post='President' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($PresidentFinal, $candidates);
        }
        return $PresidentFinal;
    }

    function getVicePresidentsFinal() {
        $vicePresidentFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Vote.Registeration WHERE post='vicePresident' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($vicePresidentFinal, $candidates);
        }
        return $vicePresidentFinal;
    }

    function getVicePresidentsGirlsFinal() {
        $vicePresidentsGirlsFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Vote.Registeration WHERE post='vicePresidentGirls' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($vicePresidentsGirlsFinal, $candidates);
        }
        return $vicePresidentsGirlsFinal;
    }

    function getGeneralSecretaryFinal() {
        $generalSecretaryFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Vote.Registeration WHERE post='generalSecretary' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($generalSecretaryFinal, $candidates);
        }
        return $generalSecretaryFinal;
    }

    function getTreasurerFinal() {
        $TreasurerFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Vote.Registeration WHERE post='Treasurer' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($TreasurerFinal, $candidates);
        }
        return $TreasurerFinal;
    }

    function getEducationMinisterFinal() {
        $educationMinisterFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Vote.Registeration WHERE post='educationMinister' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($educationMinisterFinal, $candidates);
        }
        return $educationMinisterFinal;
    }

    function getInformationMinisterFinal() {
        $informationMinisterFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Vote.Registeration WHERE post='informationMinister' ORDER BY counts DESC";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($informationMinisterFinal, $candidates);
        }
        return $informationMinisterFinal;
    }
?>

