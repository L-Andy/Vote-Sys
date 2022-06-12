<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header('location: auth.php');
    } else {
        include('Components/php/head.php');
        include('Components/apis/config.php');
        include('adminComponents/apis/functions.php');
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
    <body style="background-color: #114c73">
       <div class="w3-container mainBox">
            <div class="w3-card w3-border w3-mobile w3-round s4 w3-white subBox">
                <img src="Components/images/ndejje.png" class="w3-circle">
                <hr />
                <i class="fas fa-poll"></i>  NDEJJE VOTE ADMIN
                <span class="dot"></span>
                <br /><br />
                <a href='logout.php'>
                <button class="w3-button w3-teal">Log out</button>
</a>
                <hr style="margin-bottom: 5px">
                <div style="text-align: center; padding-left: 50px; font-size: 18px;">President</div>
                <hr style="margin-top: 5px">
                    <?php foreach ($presidents as $president) {?>
                    <div class="w3-card s4" style="padding: 30px; text-align: left; width: 100%;">
                        Name: <?php echo $president['firstName'].' '.$president['lastName'];?><br />
                        Residence: <?php echo $president['residence'];?><br />
                        Year of award: <?php echo $president['year'];?><br />
                        Application : <a href="Components/uploads/<?php echo $president['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $president['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $president['studentNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div id="verifystatus" style="display: none;">verifying....</div>
                        <div class="w3-container" id="<?php echo 'btn'.$president['studentNo'];?>">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $president['studentNo'];?>', 'approve')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right" onclick="Approve('<?php echo $president['studentNo'];?>', 'delete')">Delete</button>
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
                        Residence: <?php echo $Vp['residence'];?><br />
                        Year of award: <?php echo $Vp['year'];?><br />
                        Application : <a href="Components/uploads/<?php echo $Vp['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $Vp['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $Vp['studentNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container" id="<?php echo 'btn'.$Vp['studentNo'];?>">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $Vp['studentNo'];?>', 'approve')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right" onclick="Approve('<?php echo $Vp['studentNo'];?>', 'delete')">Delete</button>
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
                        Residence: <?php echo $VpG['residence'];?><br />
                        Year of award: <?php echo $VpG['year'];?><br />
                        Application : <a href="Components/uploads/<?php echo $VpG['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $VpG['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $VpG['studentNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container" id="<?php echo 'btn'.$VpG['studentNo'];?>">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $VpG['studentNo'];?>', 'approve')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right" onclick="Approve('<?php echo $VpG['studentNo'];?>', 'delete')">Delete</button>
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
                        Residence: <?php echo $Gsec['residence'];?><br />
                        Year of award: <?php echo $Gsec['year'];?><br />
                        Application : <a href="Components/uploads/<?php echo $Gsec['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $Gsec['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $Gsec['studentNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container" id="<?php echo 'btn'.$Gsec['studentNo'];?>">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $Gsec['studentNo'];?>', 'approve')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right" onclick="Approve('<?php echo $Gsec['studentNo'];?>', 'delete')">Delete</button>
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
                        Residence: <?php echo $Tr['residence'];?><br />
                        Year of award: <?php echo $Tr['year'];?><br />
                        Application : <a href="Components/uploads/<?php echo $Tr['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $Tr['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $Tr['studentNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container" id="<?php echo 'btn'.$Tr['studentNo'];?>">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $Tr['studentNo'];?>', 'approve')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right" onclick="Approve('<?php echo $Tr['studentNo'];?>', 'delete')">Delete</button>
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
                        Residence: <?php echo $EducM['residence'];?><br />
                        Year of award: <?php echo $EducM['year'];?><br />
                        Application : <a href="Components/uploads/<?php echo $EducM['Application'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $EducM['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $EducM['studentNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container" id="<?php echo 'btn'.$EducM['studentNo'];?>">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $EducM['studentNo'];?>', 'approve')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right" onclick="Approve('<?php echo $EducM['studentNo'];?>', 'delete')">Delete</button>
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
                        Residence: <?php echo $InfoM['residence'];?><br />
                        Year of award: <?php echo $InfoM['year'];?><br />
                        Scolarite: <a href="Components/uploads/<?php echo $InfoM['scolarite'];?>" target="_blank">Check</a><br />
                        Payment: <a href="Components/uploads/<?php echo $InfoM['Payment'];?>" target="_blank">Check</a><br />
                        <div id="<?php echo $InfoM['studentNo'];?>"></div>
                        <hr style="margin-bottom: 10px">
                        <div class="w3-container" id="<?php echo 'btn'.$InfoM['studentNo'];?>">
                            <button class="w3-green w3-button w3-small w3-round" style="float: left" onclick="Approve('<?php echo $InfoM['studentNo'];?>', 'approve')">Approve</button>
                            <button class="w3-red w3-button w3-small w3-round" style="float: right" onclick="Approve('<?php echo $InfoM['studentNo'];?>', 'delete')">Delete</button>
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
<?php }?>