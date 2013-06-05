<?php
OC::$CLASSPATH['OC_Calendar_ics'] = 'apps/calendar_ics/lib/app.php';

OCP\App::addNavigationEntry( array( 
	'id' => 'calendar_ics',
	'order' => 11,
	'href' => OCP\Util::linkTo( 'calendar_ics', 'index.php' ),
	'icon' => OCP\Util::imagePath( 'calendar_ics', 'calendar_ics.svg' ),
	'name' => 'Calendar .ics'
));
