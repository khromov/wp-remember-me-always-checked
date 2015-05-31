<?php
/*
Plugin Name: Remember Me Always Checked
Version: 1.0
Plugin URI:
Description: Automatically checks the 'Remember Me' checkbox on the login page (useful if you are keen to keep your user logged in)
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