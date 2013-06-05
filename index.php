<?php
OCP\User::checkLoggedIn();
OCP\JSON::checkAppEnabled('calendar_ics');

OCP\Util::addScript('calendar_ics','calendar_ics');
OCP\Util::addStyle('calendar_ics','calendar_ics');

OCP\App::setActiveNavigationEntry( 'calendar_ics' );

$tmpl = new OCP\Template( 'calendar_ics', 'calendar_ics', 'user' );
$tmpl->printPage();
