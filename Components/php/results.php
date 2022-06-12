<div id="viewCandidatesResults" class="w3-border w3-round" style="padding: 10px; display: none">
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">New Ndejje Cabinent</div>
    <hr style="margin-top: 5px">
    <table class="w3-table-all w3-mobile" style="overflow: scroll">
        <thread>
            <tr class="w3-blue">
                <th>Names</th>
                <th>Post</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Residence</th>
            </tr>
            <tr>
                <td><?php echo $presidentsFinals[0]['firstName'].' '.$presidentsFinals[0]['lastName'];?></td>
                <td>President</td>
                <td><?php echo $presidentsFinals[0]['phone'];?></td>
                <td><?php echo $presidentsFinals[0]['email'];?></td>
                <td><?php echo $presidentsFinals[0]['wilaya'];?></td>
            </tr>
            <tr>
                <td><?php echo $VpsFinals[0]['firstName'].' '.$VpsFinals[0]['lastName']?></td>
                <td>Vice President</td>
                <td><?php echo $VpsFinals[0]['phone'];?></td>
                <td><?php echo $VpsFinals[0]['email'];?></td>
                <td><?php echo $VpsFinals[0]['wilaya'];?></td>
            </tr>
            <tr>
                <td><?php echo $VpGsFinals[0]['firstName'].' '.$VpGsFinals[0]['lastName'];?></td>
                <td>Vice President Girl</td>
                <td><?php echo $VpGsFinals[0]['phone'];?></td>
                <td><?php echo $VpGsFinals[0]['email'];?></td>
                <td><?php echo $VpGsFinals[0]['wilaya'];?></td>
            </tr>
            <tr>
                <td><?php echo $GsecsFinals[0]['firstName'].' '.$GsecsFinals[0]['lastName'];?></td>
                <td>General Secretary</td>
                <td><?php echo $GsecsFinals[0]['phone'];?></td>
                <td><?php echo $GsecsFinals[0]['email'];?></td>
                <td><?php echo $GsecsFinals[0]['wilaya'];?></td>
            </tr>
            <tr>
                <td><?php echo $TrsFinals[0]['firstName'].' '.$TrsFinals[0]['lastName'];?></td>
                <td>Treasurer</td>
                <td><?php echo $TrsFinals[0]['phone'];?></td>
                <td><?php echo $TrsFinals[0]['email'];?></td>
                <td><?php echo $TrsFinals[0]['wilaya'];?></td>
            </tr>
            <tr>
                <td><?php echo $EducMsFinals[0]['firstName'].' '.$EducMsFinals[0]['lastName'];?></td>
                <td>Education Minister</td>
                <td><?php echo $EducMsFinals[0]['phone'];?></td>
                <td><?php echo $EducMsFinals[0]['email'];?></td>
                <td><?php echo $EducMsFinals[0]['wilaya'];?></td>
            </tr>
            <tr>
                <td><?php echo $InfoMsFinals[0]['firstName'].' '.$InfoMsFinals[0]['lastName'];?></td>
                <td>Information Minister</td>
                <td><?php echo $InfoMsFinals[0]['phone'];?></td>
                <td><?php echo $InfoMsFinals[0]['email'];?></td>
                <td><?php echo $InfoMsFinals[0]['wilaya'];?></td>
            </tr>
        </thread>
    </table>
    <br /><br />
    <div class='w3-center'>GENERAL RESULTS</div>
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">President</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($presidentsFinals as $presidentFinal) {?>
                <li><?php echo $presidentFinal['firstName'].' '.$presidentFinal['lastName'].' - '.$presidentFinal['counts'];?></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Vice President</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($VpsFinals as $VpFinal) {?>
                <li><?php echo $VpFinal['firstName'].' '.$VpFinal['lastName'].' - '.$VpFinal['counts'];?></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Vice President Girls</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($VpGsFinals as $VpGFinal) {?>
                <li><?php echo $VpGFinal['firstName'].' '.$VpGFinal['lastName'].' - '.$VpGFinal['counts'];?></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">General Secretary</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($GsecsFinals as $GsecFinal) {?>
                <li><?php echo $GsecFinal['firstName'].' '.$GsecFinal['lastName'].' - '.$GsecFinal['counts'];?></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Treasurer</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($TrsFinals as $TrFinal) {?>
                <li><?php echo $TrFinal['firstName'].' '.$TrFinal['lastName'].' - '.$TrFinal['counts'];?></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Education Minister</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($EducMsFinals as $EducMFinal) {?>
                <li><?php echo $EducMFinal['firstName'].' '.$EducMFinal['lastName'].' - '.$EducMFinal['counts'];?></li>
            <?php }
        ?>
    </ol>
    <br />
    <hr style="margin-bottom: 5px">
    <div style="text-align: left; padding-left: 50px; font-size: 18px;">Information Minister</div>
    <hr style="margin-top: 5px">
    <ol class="w3-medium" style="text-align: left">
        <?php
            foreach ($InfoMsFinals as $InfoMFinal) {?>
                <li><?php echo $InfoMFinal['firstName'].' '.$InfoMFinal['lastName'].' - '.$InfoMFinal['counts'];?></li>
            <?php }
        ?>
    </ol>
    <br />
</div>
