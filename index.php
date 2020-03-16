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
        <style>
            .mainBox {
                text-align: center;
                padding: 20px;
            }
            .subBox {
                display: inline-block;
                height: auto;
                width: 700px;
                padding: 30px;
            }
            .dot {
                height: 10px;
                width: 10px;
                background-color: green;
                border-radius: 50%;
                display: inline-block;
            }

            select {
                height: 40px;
                width: 100%;
                padding: 5px;
            }
            
            .pan {
                display: flex;
            }

            .ico {
                padding: 7px;
                font-size: 20px;
                color: #4d7185;
            }

            input {
                padding: 20px;
            }

            button {
                margin-top: 10px;
                margin-bottom: 10px;
            }

            .opt {
                width: 18px;
                height: 18px;
                padding: 40px;
            }
        </style>
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
                    Note:<br/>
                    <span id="voteTimer" style="color: red;"></span><br />
                    <span id="voteTimer2" style="color: red;"></span><br />
                    Candidates must be<br />
                    1. tests1<br />
                    1. tests1<br />
                    1. tests1<br />
                    1. tests1<br />
                    1. tests1<br />
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