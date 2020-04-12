<div id="finalVoteModel" class="w3-modal" style="display: none">
    <div class="w3-modal-content" style="padding: 30px;">
        <div class="w3-white">
        <div class="w3-center">
            <i class="far fa-check-circle" style="font-size: 100px; color: #38556e"></i>
        </div>
            <hr style="margin-top: 5px">
            <span class="w3-text-blue w3-small">**Enter your passport number and email to complete your voting</span>
            <br /><br />
            <div class="pan w3-border w3-round" style="displa: flex;">
                <i class="ico fas fa-passport"></i>
                <input id="voterNo" type="text" class="w3-input w3-border w3-round" placeholder="Passport Number" required>
            </div>
            <h2 id="passportNoError" class="w3-small w3-text-red" style="margin: 10px;"></h2>
            <br />
            
            <div class="pan w3-border w3-round" style="displa: flex;">
                <i class="ico fas fa-at"></i>
                <input id="voterEmail" type="email" class="w3-input w3-border w3-round" placeholder="Email address" required>
            </div>
            <h2 id="emailError" class="w3-small w3-text-red" style="margin: 10px;"></h2>
            <br />
            <div id="votingstatus" style="display: none">Voting... Please wait</div>
            <div id="finalPipe"></div>
            <button id="voteButton" class="w3-button w3-green w3-medium w3-round" onclick="Vote()"><i class="fas fa-vote-yea"></i>  Finish</button>
            <button class="w3-button w3-red w3-medium w3-round" onclick="Launch('none')"><i class="fas fa-window-close"></i>  Close</button>
        </div>
    </div>
</div>
