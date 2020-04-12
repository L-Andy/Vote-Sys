<div id="viewCandidates" class="w3-border w3-round" style="padding: 20px; display: none">
*Follow the candidate's name to read his manifesto
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">President</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($presidents as $president) {?>
                <li><a href="<?php 
                    if ($president['manifesto'] == null) {echo "Components/php/manifestoError.php";
                    } else {echo 'Components/uploads/'.$president['manifesto'];};
                    ?>" target="_blank"><?php echo $president['firstName'].' '.$president['lastName'].' - '.$president['wilaya'];?></a></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Vice President</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($Vps as $Vp) {?>
                <li><a href="<?php 
                    if ($Vp['manifesto'] == null) {echo "Components/php/manifestoError.php";
                    } else {echo 'Components/uploads/'.$Vp['manifesto'];};
                    ?>" target="_blank"><?php echo $Vp['firstName'].' '.$Vp['lastName'].' - '.$Vp['wilaya'];?></a></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Vice President Girls</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($VpGs as $VpG) {?>
                <li><a href="<?php 
                    if ($VpG['manifesto'] == null) {echo "Components/php/manifestoError.php";
                    } else {echo 'Components/uploads/'.$VpG['manifesto'];};
                    ?>" target="_blank"><?php echo $VpG['firstName'].' '.$VpG['lastName'].' - '.$vPG['wilaya'];?></a></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">General Secretary</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($Gsecs as $Gsec) {?>
                <li><a href="<?php 
                    if ($Gsec['manifesto'] == null) {echo "Components/php/manifestoError.php";
                    } else {echo 'Components/uploads/'.$Gsec['manifesto'];};
                    ?>" target="_blank"><?php echo $Gsec['firstName'].' '.$Gsec['lastName'].' - '.$Gsec['wilaya'];?></a></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Treasurer</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($Trs as $Tr) {?>
                <li><a href="<?php 
                    if ($Tr['manifesto'] == null) {echo "Components/php/manifestoError.php";
                    } else {echo 'Components/uploads/'.$Tr['manifesto'];};
                    ?>" target="_blank"><?php echo $Tr['firstName'].' '.$Tr['lastName'].' - '.$Tr['wilaya'];?></a></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Education Minister</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($EducMs as $EducM) {?>
                <li><a href="<?php 
                    if ($EducM['manifesto'] == null) {echo "Components/php/manifestoError.php";
                    } else {echo 'Components/uploads/'.$EducM['manifesto'];};
                    ?>" target="_blank"><?php echo $EducM['firstName'].' '.$EducM['lastName'].' - '.$EducM['wilaya'];?></a></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Information Minister</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($InfoMs as $InfoM) {?>
                <li><a href="<?php 
                    if ($InfoM['manifesto'] == null) {echo "Components/php/manifestoError.php";
                    } else {echo 'Components/uploads/'.$InfoM['manifesto'];};
                    ?>" target="_blank"><?php echo $InfoM['firstName'].' '.$InfoM['lastName'].' - '.$InfoM['wilaya'];?></a></li>
            <?php }
        ?>
    </ol>
    <br />
</div>
