<?php include('Components/php/head.php');?>
<?php include('Components/apis/config.php');?>
<?php include('adminComponents/apis/functions.php');?>
<?php
    $presidents = getPresidents();
    $Vps = getVicePresidents();
    $VpGs = getVicePresidentsGirls();
    $Gsecs = getGeneralSecretary();
    $Trs = getTreasurer();
    $EducMs = getEducationMinister();
    $InfoMs = getInformationMinister();
?>
<title>Control</title>
    </head>
    <body style="background-color: #3b5243">
       <div class="w3-container mainBox">
            <div class="w3-card w3-border w3-mobile w3-round s4 w3-white subBox">
                <img src="Components/images/usaa.jpg" class="w3-circle">
                <hr />
                <i class="fas fa-poll"></i>  USAA VOTE ADMIN
                <span class="dot"></span>
                <br /><br />
                <hr style="margin-bottom: 5px">
                <div style="text-align: center; padding-left: 50px; font-size: 18px;">President</div>
                <hr style="margin-top: 5px">
                    <?php foreach ($presidents as $president) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $president['firstName'].' '.$president['lastName'];?><br />
                        Wilaya: <?php echo $president['wilaya'];?><br />
                        Year of award: <?php echo $president['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $president['scolarite'];?>" target="_blank">Check</a><br />
                        Application : <a href="Components/uploads/<?php echo $president['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $president['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $president['passportNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $president['passportNo'];?>')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right">Delete</button>
                        </div>
                    </div>
                    <br /> 
                    <?php }?>
                    <br /> 
                    <br />
                    <hr style="margin-bottom: 5px">
                    <div style="text-align: center; padding-left: 50px; font-size: 18px;">Vice President</div>
                    <hr style="margin-top: 5px"> 
                    <?php foreach ($Vps as $Vp) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $Vp['firstName'].' '.$Vp['lastName'];?><br />
                        Wilaya: <?php echo $Vp['wilaya'];?><br />
                        Year of award: <?php echo $Vp['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $Vp['scolarite'];?>" target="_blank">Check</a><br />
                        Application : <a href="Components/uploads/<?php echo $Vp['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $Vp['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $Vp['passportNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $Vp['passportNo'];?>')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right">Delete</button>
                        </div>
                    </div>
                    <br /> 
                    <?php }?>
                    <br /> 
                    <br />
                    <hr style="margin-bottom: 5px">
                    <div style="text-align: center; padding-left: 50px; font-size: 18px;">Vice President Girls</div>
                    <hr style="margin-top: 5px"> 
                    <?php foreach ($VpGs as $VpG) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $VpG['firstName'].' '.$VpG['lastName'];?><br />
                        Wilaya: <?php echo $VpG['wilaya'];?><br />
                        Year of award: <?php echo $VpG['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $VpG['scolarite'];?>" target="_blank">Check</a><br />
                        Application : <a href="Components/uploads/<?php echo $VpG['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $VpG['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $VpG['passportNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $VpG['passportNo'];?>')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right">Delete</button>
                        </div>
                    </div>
                    <br />
                    <?php }?>
                    <br /> 
                    <br />
                    <hr style="margin-bottom: 5px">
                    <div style="text-align: center; padding-left: 50px; font-size: 18px;">General Secretary</div>
                    <hr style="margin-top: 5px"> 
                    <?php foreach ($Gsecs as $Gsec) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $Gsec['firstName'].' '.$Gsec['lastName'];?><br />
                        Wilaya: <?php echo $Gsec['wilaya'];?><br />
                        Year of award: <?php echo $Gsec['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $Gsec['scolarite'];?>" target="_blank">Check</a><br />
                        Application : <a href="Components/uploads/<?php echo $Gsec['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $Gsec['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $Gsec['passportNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $Gsec['passportNo'];?>')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right">Delete</button>
                        </div>
                    </div>
                    <br />
                    <?php }?>
                    <br /> 
                    <br />
                    <hr style="margin-bottom: 5px">
                    <div style="text-align: center; padding-left: 50px; font-size: 18px;">Treasurer</div>
                    <hr style="margin-top: 5px"> 
                    <?php foreach ($Trs as $Tr) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $Tr['firstName'].' '.$Tr['lastName'];?><br />
                        Wilaya: <?php echo $Tr['wilaya'];?><br />
                        Year of award: <?php echo $Tr['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $Tr['scolarite'];?>" target="_blank">Check</a><br />
                        Application : <a href="Components/uploads/<?php echo $Tr['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $Tr['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $Tr['passportNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $Tr['passportNo'];?>')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right">Delete</button>
                        </div>
                    </div>
                    <br />
                    <?php }?>
                    <br /> 
                    <br />
                    <hr style="margin-bottom: 5px">
                    <div style="text-align: center; padding-left: 50px; font-size: 18px;">Education Minister</div>
                    <hr style="margin-top: 5px"> 
                    <?php foreach ($EducMs as $EducM) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $EducM['firstName'].' '.$EducM['lastName'];?><br />
                        Wilaya: <?php echo $EducM['wilaya'];?><br />
                        Year of award: <?php echo $EducM['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $EducM['scolarite'];?>" target="_blank">Check</a><br />
                        Application : <a href="Components/uploads/<?php echo $EducM['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $EducM['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $EducM['passportNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $EducM['passportNo'];?>')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right">Delete</button>
                        </div>
                    </div>
                    <br />
                    <?php }?>
                    <br /> 
                    <br />
                    <hr style="margin-bottom: 5px">
                    <div style="text-align: center; padding-left: 50px; font-size: 18px;">Information Minster</div>
                    <hr style="margin-top: 5px"> 
                    <?php foreach ($InfoMs as $InfoM) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $InfoM['firstName'].' '.$InfoM['lastName'];?><br />
                        Wilaya: <?php echo $InfoM['wilaya'];?><br />
                        Year of award: <?php echo $InfoM['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $InfoM['scolarite'];?>" target="_blank">Check</a><br />
                        Application : <a href="Components/uploads/<?php echo $InfoM['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $InfoM['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $InfoM['passportNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $InfoM['passportNo'];?>')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right">Delete</button>
                        </div>
                    </div>
                    <br />
                    <?php }?>
                    <br /> 
                    <br />
                </div>
            </div>           
        </div>
    </body>
    <script stype="text/javascript" src="adminComponents/js/Main.js"></script>
</html>