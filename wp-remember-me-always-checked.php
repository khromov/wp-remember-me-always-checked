<?php
/*
Plugin Name: Remember Me Always Checked
Version: 1.0
Plugin URI:
Description: Set the 'Remember Me' box on the login page as checked by default and help keep users logged in. GitHub Updater-compatible.
Author: khromov
Author URI: http://snippets.khromov.se
License: GPLv2
GitHub Plugin URI: khromov/wp-remember-me-always-checked
*/

add_action('login_head', 'remember_me_always_checked');

function remember_me_always_checked() {
	?>
	<script type="text/javascript">
		function checkit() {
			document.getElementById('rememberme').checked = true;
		}
		window.onload = checkit;
	</script>
	<?php
}