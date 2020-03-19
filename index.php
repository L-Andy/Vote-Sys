<?php include('Components/php/head.php');?>
<?php include('Components/apis/config.php');?>
<?php include('Components/apis/functions.php');?>
<?php include('Components/apis/finalFunctions.php');?>
<?php
    $presidents = getPresidents();
    $Vps = getVicePresidents();
    $VpGs = getVicePresidentsGirls();
    $Gsecs = getGeneralSecretary();
    $Trs = getTreasurer();
    $EducMs = getEducationMinister();
    $InfoMs = getInformationMinister();

    // FINAL
    $presidentsFinals = getPresidentsFinal();
    $VpsFinals = getVicePresidentsFinal();
    $VpGsFinals = getVicePresidentsGirlsFinal();
    $GsecsFinals = getGeneralSecretaryFinal();
    $TrsFinals = getTreasurerFinal();
    $EducMsFinals = getEducationMinisterFinal();
    $InfoMsFinals = getInformationMinisterFinal();
?>
        <title>Vote</title>
    </head>
    <body style="background-color: #3b5243">
       <div class="w3-container mainBox">
            <div class="w3-card w3-border w3-mobile w3-round s4 w3-white subBox">
                <img src="Components/images/usaa.jpg" class="w3-circle">
                <hr />
                <i class="fas fa-poll"></i>  USAA CABINENT POLL 
                <span class="dot"></span>
                <hr />
                <button id="registerMainButton" class="w3-button w3-round w3-medium w3-blue" onclick="EventLoader('Register')"><i class="fas fa-pen-nib"></i>  Candidate Registration</button>
                <button class="w3-button w3-round w3-medium w3-green" onclick="EventLoader('viewCandidates')"><i class="fas fa-eye"></i>  View Candidates</button>
                <button id="voteMainButton" class="w3-button w3-round w3-medium w3-green" onclick="EventLoader('Vote')"><i class="fas fa-vote-yea"></i>  Vote</button>
                <br /><br />
                <?php include('Components/php/results.php');?>
                <div id="mainWindow"></div>
                <br />
                <div id="Note" style="text-align: left; padding: 5px; display: block">
                    <span id="voteTimer" style="color: red;"></span><br />
                    <span id="voteTimer2" style="color: red;"></span><br />
                    <hr />
                    <div class="w3-row-padding">
                        <div class="w3-half">
                            <b>Voting instructions</b><br />
                            <ul>
                                <li>Follow the voting button and make your choices</li>
                                <li>Enter the email and your passport number to complete your voting</li>
                                <li>Results will be displayed immediatly the voting process has closed</li>
                                <li>Voting must be done before the timer has run out</li>
                            </ul>
                        </div>
                        <div class="w3-half"><b>Candidates criterias</b><br />
                        <ul>
                            <li>Candidates applying for the post of president must be in more 3rd year and above</li>
                            <li>Candidates applying for any other post must be in 2nd year and above</li>
                            <li>Applications must be submitted before the timer has run out</li>
                            <li>All files must be uploaded in pdf format</li>
                        </ul>
                        </div>
                    </div>
                </div>
                <hr style="margin-bottom: 5px">
                © USAA <?php echo date('Y'); ?>
            </div>
       </div> 
    </body>
    <script type="text/javascript" src="Components/js/Main.js"></script>
</html>
<?php
    include('Components/php/candidateRegistration.php');
    include('Components/php/viewCandidates.php');
    include('Components/php/Vote.php');
    include('Components/php/finalVoteModel.php');
?>