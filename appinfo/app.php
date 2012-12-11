<?php

OCP\Util::addScript( 'joyride', 'jquery.joyride-2.0.2');
OCP\Util::addStyle('joyride', 'joyride-2.0.2');
OCP\Util::addScript('joyride', 'joyride-help');
OCP\Util::addHeader('ol', array('id' => 'ocJoyRide'));
OCP\Util::addHeader('li', array('data-id' => 'settings', 'data-text' => 'Next'));

OCP\App::registerAdmin( 'joyride', 'settings' );

OCP\App::addNavigationEntry( array( 
	'id' => 'joyride',
	'order' => 74,
	'href' => OCP\Util::linkTo( 'joyride', 'index.php' ),
	'icon' => OCP\Util::imagePath( 'joyride', 'slideshow.png' ),
	'name' => 'Cloud Tour'
));

echo '
<ol id="ocJoyRide">
    <li data-id="settings" data-text="Next" data-options="tipLocation:top; nubPosition: bottom;">
        <h2>Settings</h2>
        <p>Below is the settings menu, click this icon to expand the menu.</p>
    </li>
</ol>
';