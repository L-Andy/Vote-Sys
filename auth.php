<?php include('Components/php/head.php');
include('adminComponents/apis/auth.php')
?>
    <title>Auth</title>
</head>
<body style="background-color: #114c73">
       <div class="w3-container mainBox">
            <div class="w3-card w3-border w3-mobile w3-round s4 w3-white subBox">
                <img src="Components/images/ndejje.png" class="w3-circle">
                <hr />
                <form method='post' action="#" enctype="multipart/form-data">
                <input name="username" type="text" class="w3-input w3-border w3-margin-top w3-roundw" placeholder="User name">
                <input name="password" type="text" class="w3-input w3-border w3-margin-top w3-round" placeholder="password">
                <button class="w3-button w3-round w3-medium w3-green w3-left" name="login"><i class="fas fa-pen-nib"></i>  Login</button>
    </form>
            </div>           
        </div>
    </body>
</html>