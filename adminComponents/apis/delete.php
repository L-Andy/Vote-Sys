<?php 
    include('../../Components/apis/config.php');

    $user = $_POST['user'];
    $Query = "DELETE FROM `Registeration` WHERE `Registeration`.`studentNo` = '$user'";
    mysqli_query($conn, $Query);
    if (mysqli_query($conn, $Query)) {?>
    <div class="w3-panel w3-small w3-red w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-medium w3-text-blue" style="margin: 10px;">
		<p class='w3-text-white'><?php echo "Candidate deleted succesfully"; ?></p></h2>
	</div>
    <?php } else {?>
        <div class="w3-panel w3-small w3-sand w3-round" style="margin-left: 30px; margin-right: 30px;"><h2 class="w3-medium w3-text-blue" style="margin: 10px;">
		    <p><?php echo "Error occured"."  ".mysqli_error($conn); ?></p></h2>
	    </div>
    <?php }?>