<?php

// update checker github

require_once get_template_directory()  . '/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/studiowebvision/webvision-theme/',
	__FILE__,
	'webvision-theme'
);

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('29139acb9b6cddff2a991f15c449e063a3480d4d');

//Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

$myUpdateChecker->getVcsApi()->enableReleaseAssets();