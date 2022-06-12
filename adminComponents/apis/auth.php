
<?php include('Components/apis/config.php');

$control = 'admin.php';

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (!empty($username) && !empty($password)) {
		
		if ($username == 'hacker' && $password == 'hacker') {
			$_SESSION['admin'] = 'athenticated';
            header('location: ' . $control);
		} else {
			?>
            <script>alert("Wrong credentials");</script>
            <?php
		}
	} else {
        ?>
        <script>alert('Both username and password are required');</script>
        <?php
    }
	
}



?>