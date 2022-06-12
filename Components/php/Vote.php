<div id="Vote" class="w3-border-top w3-border-bottom" style="padding: 20px; display: none">
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">President</div>
    <hr style="margin-top: 5px">
    <div class="w3-medium" style="text-align: left">
        <ol style="list-style-type: none;">
            <?php
                foreach ($presidents as $president) {?>
                    <li>
                        <input class="opt" type="radio" name="prsdt"
                            onclick="Selector('president', '<?php echo $president['studentNo'];?>')"
                        />
                        <label class="w3-medium" style="margin-left: 10px;">
                            <span style="font-size: 17px;">
                                <?php echo $president['firstName'].' '.$president['lastName'];?>
                            </span>
                        </label>  
                    </li>
                <?php }
            ?>
        </ol> 
    </div>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Vice President</div>
    <hr style="margin-top: 5px">
    <div class="w3-medium" style="text-align: left">
        <ol style="list-style-type: none;">
            <?php
                foreach ($Vps as $Vp) {?>
                    <li>
                        <input class="opt" type="radio" name="vprsdt"
                            onclick="Selector('vprsdt', '<?php echo $Vp['studentNo'];?>')"
                        />
                        <label class="w3-medium" style="margin-left: 10px;">
                            <span style="font-size: 17px;">
                                <?php echo $Vp['firstName'].' '.$Vp['lastName'];?>
                            </span>
                        </label>  
                    </li>
                <?php }
            ?>
        </ol>  
    </div>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Vice President Girls</div>
    <hr style="margin-top: 5px">
    <div class="w3-medium" style="text-align: left">
        <ol style="list-style-type: none;">
            <?php
                foreach ($VpGs as $VpG) {?>
                    <li>
                        <input class="opt" type="radio" name="vprsdtg"
                            onclick="Selector('vprsdtg', '<?php echo $VpG['studentNo'];?>')"
                        />
                        <label class="w3-medium" style="margin-left: 10px;">
                            <span style="font-size: 17px;">
                                <?php echo $VpG['firstName'].' '.$VpG['lastName'];?>
                            </span>
                        </label>  
                    </li>
                <?php }
            ?>
        </ol> 
    </div>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">General Secretary</div>
    <hr style="margin-top: 5px">
    <div class="w3-medium" style="text-align: left">
        <ol style="list-style-type: none;">
            <?php
                foreach ($Gsecs as $Gsec) {?>
                    <li>
                        <input class="opt" type="radio" name="gs"
                            onclick="Selector('gs', '<?php echo $Gsec['studentNo'];?>')"
                        />
                        <label class="w3-medium" style="margin-left: 10px;">
                            <span style="font-size: 17px;">
                                <?php echo $Gsec['firstName'].' '.$Gsec['lastName'];?>
                            </span>
                        </label>  
                    </li>
                <?php }
            ?>
        </ol> 
    </div>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Treasurer</div>
    <hr style="margin-top: 5px">
    <div class="w3-medium" style="text-align: left">
        <ol style="list-style-type: none;">
            <?php
                foreach ($Trs as $Tr) {?>
                    <li>
                        <input class="opt" type="radio" name="trs"
                            onclick="Selector('trs', '<?php echo $Tr['studentNo'];?>')"
                        />
                        <label class="w3-medium" style="margin-left: 10px;">
                            <span style="font-size: 17px;">
                                <?php echo $Tr['firstName'].' '.$Tr['lastName'];?>
                            </span>
                        </label>  
                    </li>
                <?php }
            ?>
        </ol> 
    </div>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Education Minister</div>
    <hr style="margin-top: 5px">
    <div class="w3-medium" style="text-align: left">
        <ol style="list-style-type: none;">
            <?php
                foreach ($EducMs as $EducM) {?>
                    <li>
                        <input class="opt" type="radio" name="edm"
                            onclick="Selector('edm', '<?php echo $EducM['studentNo'];?>')"
                        />
                        <label class="w3-medium" style="margin-left: 10px;">
                            <span style="font-size: 17px;">
                                <?php echo $EducM['firstName'].' '.$EducM['lastName'];?>
                            </span>
                        </label>  
                    </li>
                <?php }
            ?>
        </ol> 
    </div>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Information Minster</div>
    <hr style="margin-top: 5px">
    <div class="w3-medium" style="text-align: left">
        <ol style="list-style-type: none;">
            <?php
                foreach ($InfoMs as $InfoM) {?>
                    <li>
                        <input class="opt" type="radio" name="ifm"
                            onclick="Selector('ifm', '<?php echo $InfoM['studentNo'];?>')"
                        />
                        <label class="w3-medium" style="margin-left: 10px;">
                            <span style="font-size: 17px;">
                                <?php echo $InfoM['firstName'].' '.$InfoM['lastName'];?>
                            </span>
                        </label>  
                    </li>
                <?php }
            ?>
        </ol> 
    </div>
    <br />
    <button class="w3-button w3-green w3-medium w3-round" onclick="Launch('block')"><i class="far fa-check-circle"></i>  Vote</button>
</div>
