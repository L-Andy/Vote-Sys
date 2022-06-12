let Candidates = {
    voterEmail: null,
    Voter: null,
    president: null,
    vP: null,
    vPG: null,
    gS: null,
    Trs: null,
    infoM: null,
    educM: null,
};

let tracker = {
    voteTracker: null,
    regTracker: null,
};

function EventLoader(event) {
    document.getElementById('mainWindow').innerHTML = document.getElementById(event).innerHTML;
}

// function RegisterCandidate() {

//     let Errors = [];
//     let firstName = $("#fn").val();
//     let secondName = $("#sn").val();
//     let passportNumber = $("#psn").val();
//     let yearOfAward = $("#yoe").val();
//     let post = $("#pst").val();
//     let Email = $("#email").val();
//     let phoneNumber = $("#no").val();
//     let wilaya = $("#residence").val();
//     let applicationForm = $("#userApplication").val();
//     let payForm = $("#userPayment").val();
//     let manifesto = $("#userManifesto").val();

//     if (firstName.length || secondName.length || passportNumber.length ||
//         Email.length || phoneNumber.length || wilaya.length === 0) {
//         Errors.push("Missing information. please check again")
//     }
//     if (post === 'Post') {
//         Errors.push("Please select post");
//     }

//     if (yearOfAward === 'Year of Award') {
//         Errors.push("Please select the year of award");
//     }

//     if (Errors.length != 0) {
//         alert(Errors);
//     } else {
//         $.ajax({
//             method: 'POST',
//             datatype: 'json',
//             url: 'Components/apis/candidateRegistration.php',
//             data: {
//                 "firstName": firstName,
//                 "secondName": secondName,
//                 "studentNumber": studentNumber,
//                 "yearOfAward": yearOfAward,
//                 "post": post,
//                 "Email": Email,
//                 "phoneNumber": phoneNumber,
//                 "residence": residence,
//                 "applicationForm": applicationForm,
//                 "payForm": payForm,
//                 "manifesto": manifesto
//             },
//             success: function (html) {
//                 $("#results").html(html).show();
//             }
//         });
//     }

// }
function Launch(action) {
    document.getElementById('finalVoteModel').style.display = action;
}

function Launch2(action) {
    document.getElementById('uploadmodal').style.display = action;
}

function Vote() {
    voter = $('#voterNo').val();
    voteremail = $('#voterEmail').val();
    Candidates.voterEmail = voteremail;
    Candidates.Voter = voter;

    if (Candidates.Voter.length === 0) {
        document.getElementById('passportNoError').innerHTML = 'Student number is required';
    } else if (Candidates.voterEmail.length === 0) {
        document.getElementById('emailError').innerHTML = 'Email required';
    } else {
        document.getElementById('passportNoError').innerHTML = '';
        document.getElementById('emailError').innerHTML = '';
        $.ajax({
            beforeSend: function (html) {
                $('#votingstatus').show();
            },
            url: 'Components/apis/Vote.php',
            method: 'POST',
            datatype: 'json',
            data: Candidates,
            complete: function (html) {
                $('#votingstatus').hide();
            },
            success: function (html) {
                $('#finalPipe').html(html).show();
            },
        });
    }
}

function Selector(target, data) {
    switch (target) {
        case 'president':
            Candidates.president = data;
            break;

        case 'vprsdt':
            Candidates.vP = data;
            break;

        case 'vprsdtg':
            Candidates.vPG = data;
            break;

        case 'gs':
            Candidates.gS = data;
            break;

        case 'trs':
            Candidates.Trs = data;
            break;

        case 'edm':
            Candidates.educM = data;
            break;

        case 'ifm':
            Candidates.infoM = data;
            break;

        default:
            break;
    }
}

function Timer(date, target, effect, msg) {
    document.getElementById('voteMainButton').disabled = true;
    let deadline = new Date(date).getTime();
    let x = setInterval(function () {
        let now = new Date().getTime();
        let t = deadline - now;
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById(target).innerHTML = 'Candidates registration expiring in ' + days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';
        if (t < 0) {
            tracker.regTracker = 'done';
            clearInterval(x);
            document.getElementById(target).innerHTML = msg;
            document.getElementById('mainWindow').innerHTML = '';
            document.getElementById(target).value = msg;
            document.getElementById(effect).disabled = true;
        }
    }, 1000);
}

function Timer2(date, target, effect, msg) {
    document.getElementById('voteMainButton').disabled = true;
    let deadline = new Date(date).getTime();
    let x = setInterval(function () {
        let now = new Date().getTime();
        let t = deadline - now;
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById(target).innerHTML = 'Verified candidates will be displayed under view candidates in 48hrs and Voting will begin in  ' + days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';
        if (t < 0) {
            tracker.regTracker = null;
            tracker.voteTracker = 'startvote';
            clearInterval(x);
            document.getElementById(target).innerHTML = msg;
            document.getElementById(target).value = msg;
            document.getElementById(effect).disabled = true;
            Launch('none');
            document.getElementById('mainWindow').innerHTML = '';
        }
    }, 1000);
}

function Timer3(date, target, effect, msg) {
    document.getElementById('voteMainButton').disabled = false;
    let deadline = new Date(date).getTime();
    let x = setInterval(function () {
        let now = new Date().getTime();
        let t = deadline - now;
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById(target).innerHTML = 'Voting will end in  ' + days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';
        if (t < 0) {
            clearInterval(x);
            document.getElementById(target).innerHTML = msg;
            document.getElementById(target).value = msg;
            document.getElementById(effect).disabled = true;
            Launch('none');
            document.getElementById('mainWindow').innerHTML = '';
            document.getElementById('viewCandidatesResults').style.display = 'block';
        }
    }, 1000);
}

setInterval(() => {
    checker();
}, 1000);

function checker() {
    // pass time from the database
    if (tracker.regTracker === 'done') {
        Timer2('Jun 28, 2022 09:43:00', 'voteTimer2', 'voteMainButton', 'voting process has started');
    }

    // time can be got from the database
    if (tracker.voteTracker === 'startvote') {
        Timer3('Jun 27, 2022 13:50:00', 'voteTimer2', 'voteMainButton', 'voting process has ended');
    }
}

// pass time from the database
Timer('Aug 24, 2022 13:40:00', 'voteTimer', 'registerMainButton', 'Registration ended');
