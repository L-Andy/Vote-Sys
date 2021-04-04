<?php

    function mainQuery($post) {
        $candidatesFinal = Array();
        global $conn;
        $Query = "SELECT * FROM Registeration WHERE post='$post' AND approved='Yes'";
        $Results = mysqli_query($conn, $Query);
        while ($candidates = mysqli_fetch_assoc($Results)) {
            array_push($candidatesFinal, $candidates);
        }
        return $candidatesFinal;
    }
?>


