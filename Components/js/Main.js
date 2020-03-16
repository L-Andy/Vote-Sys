let Candidates = {
    "voterEmail": null,
    "Voter": null,
    "president": null,
    "vP": null,
    "vPG": null,
    "gS": null,
    "Trs": null,
    "infoM": null,
    "educM": null
};
 
function EventLoader(event) {
    document.getElementById('mainWindow').innerHTML = document.getElementById(event).innerHTML;
}

function RegisterCandidate() {

    let Errors = [];
    let firstName = $("#fn").val();
    let secondName = $("#sn").val();
    let passportNumber = $("#psn").val();
    let yearOfAward = $("#yoe").val();
    let university = $("#univ").val();
    let post = $("#pst").val();
    let Email = $("#email").val();
    let phoneNumber = $("#no").val();
    let wilaya = $("#wilaya").val();

    if (firstName.length || secondName.length || passportNumber.length ||
        Email.length || phoneNumber.length || wilaya.length === 0) {
        Errors.push("Missing information. please check again")
    }
    if (post === 'Post') {
        Errors.push("Please select post");
    }

    if (yearOfAward === 'Year of Award') {
        Errors.push("Please select the year of award");
    }

    if (Errors.length != 0) {
        alert(Errors);
    } else {
        $.ajax({
            method: 'POST',
            datatype: 'json',
            url: 'Components/apis/candidateRegistration.php',
            data: {
                "userFirstName":firstName,
                "userSeconNames":secondName,
                "userPassportNumber":passportNumber,
                "userYearOfAward":yearOfAward,
                "userUniversity":university,
                "userPost":post,
                "userEmail":Email,
                "userPhoneNumber":phoneNumber,
                "userWilaya":wilaya
            },
            success: function(html) {
                $("#results").html(html).show();
            }
        });
    }
    
}   
function Launch(action) {
    document.getElementById("finalVoteModel").style.display=action;

}

function Vote() {
    voter = $("#voterNo").val();
    voteremail = $("#voterEmail").val();
    Candidates.voterEmail = voteremail;
    Candidates.Voter = voter;

    if (Candidates.Voter.length === 0) {
        document.getElementById("passportNoError").innerHTML = "Passport Number required";
    } 
    else if (Candidates.voterEmail.length === 0) {
        document.getElementById('emailError').innerHTML = "Email required";
    } else {
        document.getElementById("passportNoError").innerHTML = "";
        document.getElementById('emailError').innerHTML = "";
        $.ajax({
            url: 'Components/apis/Vote.php',
            method: 'POST',
            datatype: 'json',
            data: Candidates,
            success: function(html) {
                $("#finalPipe").html(html).show();
            }
        });
    }
}

function Selector(target, data) {
    switch (target) {
        case "president":
            Candidates.president = data;
            break;

        case "vprsdt":
            Candidates.vP = data;
            break;

        case "vprsdtg":
            Candidates.vPG = data;
            break;

        case "gs":
            Candidates.gS = data;
            break;

        case "trs":
            Candidates.Trs = data;
            break;

        case "edm":
            Candidates.educM = data;
            break;

        case "ifm":
            Candidates.infoM = data;
            break;
    
        default:
            break;
    }
}

function Timer(date, target, effect, msg) {
    let deadline = new Date(date).getTime(); 
    let x = setInterval(function() { 
        let now = new Date().getTime(); 
        let t = deadline - now; 
        let days = Math.floor(t / (1000 * 60 * 60 * 24)); 
        let hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
        let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
        let seconds = Math.floor((t % (1000 * 60)) / 1000); 
        document.getElementById(target).innerHTML = "Candidates registration expiring in "+ days + "d "  
        + hours + "h " + minutes + "m " + seconds + "s "; 
            if (t < 0) { 
                clearInterval(x); 
                document.getElementById(target).innerHTML = msg;
                document.getElementById('mainWindow').innerHTML = '';
                document.getElementById(target).value = msg;
                document.getElementById(effect).disabled=true;
            } 
    }, 1000); 
}

function Timer2(date, target, effect, msg) {
    let deadline = new Date(date).getTime(); 
    let x = setInterval(function() { 
        let now = new Date().getTime(); 
        let t = deadline - now; 
        let days = Math.floor(t / (1000 * 60 * 60 * 24)); 
        let hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
        let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
        let seconds = Math.floor((t % (1000 * 60)) / 1000); 
        document.getElementById(target).innerHTML = "Voting process expiring in "+ days + "d "  
        + hours + "h " + minutes + "m " + seconds + "s "; 
            if (t < 0) { 
                clearInterval(x); 
                document.getElementById(target).innerHTML = msg;
                document.getElementById(target).value = msg;
                document.getElementById(effect).disabled=true;
                Launch('none');
                document.getElementById('mainWindow').innerHTML = '';
                document.getElementById('viewCandidatesResults').style.display='block';
            } 
    }, 1000); 
}

Timer("Jun 16, 2020 06:23:00", "voteTimer", "registerMainButton", "Registration ended");
Timer2("Jun 16, 2020 06:31:00", "voteTimer2", "voteMainButton", "voting process ended")