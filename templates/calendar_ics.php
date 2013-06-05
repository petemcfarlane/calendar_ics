<h1>Calendars available:</h1>
<?php
// get calendars
$calendars = OC_Calendar_Calendar::allCalendars( OC_User::getUser() );

// list calendars with name and link HOME/apps/calendar_ics/feed.php
print "<ul id='calendars'>";
	foreach ($calendars as $calendar) {
		print "<li class='calendar_link' data-calendar_uri='$calendar[uri]'>$calendar[displayname]</li>";
	}
print "</ul>";
?>

<h2>Instructions to retrive the .ics link</h2>
<p>Click on the calendar you would like to subscribe to below.</p>
<p>Re-enter your cloud password when prompted.</p>
<p>A link will be generated for you and displayed in another prompt box. Copy this link.</p>

<h2>Add a calendar subscription to google calendar</h2>
<p>Logon to https://calendar.google.com</p>
<p>In the left hand menu click the arrow to the right of 'Other calendars', choose 'Add By URL'</p>
<p>Paste the link into the box, click 'Add Calendar'</p>

<p><strong>Note:</strong> This will only allow you to see events on the calendar, not create new events.</p>
<p><strong>Note:</strong> There is no way to force a 'refresh' of the calendar stream, google will automatically scan for updates, but this could be anything between 2 minutes and 2 days <a target="_blank" href="https://support.google.com/calendar/answer/38847?hl=en">https://support.google.com/calendar/answer/38847?hl=en</a> This phenomenon is not exclusive to cloud, and is the same for all google subscription calendars, including BaseCamp.</p>

<img src="<?php p(OCP\Util::imagePath('calendar_ics', 'google_1.jpg' )); ?>">
<img src="<?php p(OCP\Util::imagePath('calendar_ics', 'google_2.jpg' )); ?>">


<h2>Add calendar subscription to outlook</h2>
<p>Open Outlook, go to Calendars, click 'Open Calendars -> From Internet'</p>
<p>Paste the link in the box, click 'Yes' to subscribe to the calendar.</p>
<p>To refresh the calendar, hit 'Send And Recieve' as you normally would</p>
<img src="<?php p(OCP\Util::imagePath('calendar_ics', 'outlook.jpg' )); ?>">
<p><strong>Note:</strong> This will only allow you to see events on the calendar, not create new events.</p>