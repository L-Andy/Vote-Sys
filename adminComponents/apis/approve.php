<?php 
    include('../../Components/apis/config.php');

    $user = $_POST['user'];
    $Query = "UPDATE Registeration SET approved='Yes' WHERE passportNo='$user'";
    mysqli_query($conn, $Query);
    if (mysqli_query($conn, $Query)) {?>
    <div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-medium w3-text-blue" style="margin: 10px;">
		<p><?php echo "Candidate approved succesfully"; ?></p></h2>
	</div>
    <?php } else {?>
        <div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-medium w3-text-blue" style="margin: 10px;">
		    <p><?php echo "Error occured"."  ".mysqli_error($conn); ?></p></h2>
	    </div>
    <?php }?>