<?php
/**
 * Copyright (c) 2012 Myles McNamara <get@smyl.es>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 */


// Check if we are a user
OCP\User::checkLoggedIn();

OCP\App::checkAppEnabled('joyride');

$tmpl = new OCP\Template( 'joyride', 'main', 'user' );
$tmpl->printPage();

