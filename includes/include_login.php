<?php
	// Check for server variable, and update session variable if needed
	if(isset($_SERVER["REMOTE_USER"])) {
		$_SESSION["user"] = $_SERVER["REMOTE_USER"];
	} 
?>
				<div id="navigation">
					<ul>
						<li><a href="index.php">Home</a></li>
<?php
	if(isset($_SESSION["user"])) {
?>
						<li><a href="author.php">My Stats</a></li>
						<li class="login"><a href="/Shibboleth.sso/Logout?return=/oastats/destroyer.php">Logout</a></li>
<?php		
	} else {
?>
						<li class="login"><a href="secure/?return=author.php">Login</a></li>
<?php		
	}
?>						
					</ul>
				</div>