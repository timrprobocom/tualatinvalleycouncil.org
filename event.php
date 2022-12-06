<?php require_once('header.php'); ?>
<?php
function next_meeting()
{
    $base = "fourth mon of";
    $then = strtotime($base) + 86399;
    if(
	(time() > $then) ||
	(date('m') == 12) ||
	(date('Ym') == '201607')
    )
	$base .= " next month";
    return date('l, F jS, Y', strtotime($base));
}
function next_location()
{
    if( strpos(next_meeting(), "Jan") === FALSE )
	return <<<END
    Old Spaghetti Factory<br>
    18925 NW Tanasbourne Ave<br>
    Hillsboro, OR  97124<br>
    (503) 617-7614<br>
END;
    else 
	return <<<END
    Hillsboro IOOF Hall<br>
    267 E Main St<br>
    Hillsboro, OR   97123<br>
    (503) 648-5332<br>
END;
}
?>
<style>
h3 {
    color: #f60;
}
div.imageholder {
    float: right;
    position: relative;
    z-index: 0;
}
div.imageholder img#square {
    position: absolute;;
    overflow: hidden;
    left: 260px;
    top: 65px;
    z-index: 1;
}
p {
    font: 11pt Arial;
}
td {
    vertical-align: top;
    font: 11pt Arial;
}
.important {
    color: red;
    font: bold italic 12pt Arial;
}
</style>


<img border=0 alt="Event Calendar" src="images/art14468031.gif">
<br>

<!-- div class='imageholder'>
<a href="http://goo.gl/eRwtvK">Map to Old Spaghetti Factory</a>
</div -->

<p>
<B>TVC Meetings</B> are held the fourth Monday of every month, except December.
Meetings are currently held via Zoom teleconference. Contact us at
tvc@squaredance.gen.or.us for contact information.
<!-- table border=0 cellpadding=5>
<tr> <td><b>Next Meeting:</b></td>
     <td><b><?=next_meeting();?></b> </td></tr>
<tr> <td><b>Location:</b></td>
     <td><?=next_location();?>
    </td></tr>
<tr><td><b>Time:</B></td>
    <td> 6:00pm - social/dinner<br>
         7:00pm - meeting</td></tr>
</table -->

<br style='clear: right'>

<h3>Upcoming TVC &amp; Other Events</h3>

<?php
$db = new SQLite3( 'tvcdates.sq3', SQLITE3_OPEN_READONLY );
$rset = $db->query( "SELECT * FROM dates ORDER BY date;" );
while( $row = $rset->fetchArray() )
{
    $when = strtotime($row['date']);
    if( $when >= time() )
    {
	$pretty = date('F j, Y', $when);
	echo "<p>\n";
	echo "<b>$pretty</b> ".$row['theme']."<br>\n";
	echo "<b>Featuring:</b> ".$row['talent']."<br>\n";
	echo "<b>Location:</b> ".$row['location']."<br>\n";
	echo "<b>Time:</b> ".$row['time']."<br>\n";
	if( $row['flyer'] )
	    echo "<a href=\"".$row['flyer']."\">Dance Flyer</a>\n";
    }
}
?>

<p class='important'>
Mark your calendars and we hope to see you in a square soon!


<?php require_once('footer.php'); ?>
