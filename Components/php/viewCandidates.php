<div id="viewCandidates" class="w3-border w3-round" style="padding: 20px; display: none">
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">President</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($presidents as $president) {?>
                <li><?php echo $president['firstName'].' '.$president['lastName'].' - '.$president['wilaya'];?></li>
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
                <li><?php echo $Vp['firstName'].' '.$Vp['lastName'].' - '.$Vp['wilaya'];?></li>
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
                <li><?php echo $VpG['firstName'].' '.$VpG['lastName'].' - '.$vPG['wilaya'];?></li>
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
                <li><?php echo $Gsec['firstName'].' '.$Gsec['lastName'].' - '.$Gsec['wilaya'];?></li>
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
                <li><?php echo $Tr['firstName'].' '.$Tr['lastName'].' - '.$Tr['wilaya'];?></li>
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
                <li><?php echo $EducM['firstName'].' '.$EducM['lastName'].' - '.$EducM['wilaya'];?></li>
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
                <li><?php echo $InfoM['firstName'].' '.$InfoM['lastName'].' - '.$InfoM['wilaya'];?></li>
            <?php }
        ?>
    </ol>
    <br />
</div>
