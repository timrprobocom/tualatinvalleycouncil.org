<?php

function quote($s) {
    return htmlspecialchars($s,ENT_QUOTES);
}

function displayWholeList()
{
    $db = new SQLite3( 'tvcdates.sq3', SQLITE3_OPEN_READONLY );
    $rset = $db->query( "SELECT * FROM dates ORDER BY date DESC;" );
?>
<p>Click a date to edit that entry.
<p><a href='tvcdates.php?edit=new'>Click here</a> to add a new entry.
<p>
<table border=1 cellspacing=0 cellpadding=5>
<tr><th rowspan=2>Date<br>YYYY-MM-DD</th><th rowspan=2>Time</th>
    <th>Theme</th><th>Talent</th><th>Location</th></tr>
<tr><th colspan=3>Flyer</th></tr>
<?php while( $row = $rset->fetchArray() ) { ?>
<tr>
<td rowspan=2><a href="tvcdates.php?edit=<?=$row['date']?>"><?=$row['date']?></a></td>
<td rowspan=2><?=$row['time']?></td>
<td><?=quote($row['theme'])?></td>
<td><?=quote($row['talent'])?></td>
<td><?=$row['location']?></td>
</tr>
<tr>
<td colspan=3><?=$row['flyer']?>&nbsp;</td>
</tr>
<?php 
    }
    echo "</table>\n";
}


function editOneEntry( $edit = '' )
{
    $db = new SQLite3( 'tvcdates.sq3', SQLITE3_OPEN_READONLY );
    if( $edit == 'new' )
    {
	$row = [
	    'date' => '',
	    'time' => '',
	    'theme' => '',
	    'talent' => '',
	    'location' => '',
	    'flyer' => ''
	];
    }
    else
    {
	$rset = $db->query( "SELECT * FROM dates WHERE date='$edit';" );
	$rset->reset();
	$row = $rset->fetchArray();
    }
?>
<form method=post action="tvcdates.php">
<?php if( $edit == 'new' ) { ?>
<input type=hidden name='new' value='1'>
<?php } ?>
<table>
<tr><th align=left>Field</th><th align=left>Value</th></tr>
<tr><td>Date</td>
    <td><input type=text name=date value='<?=$row['date']?>'></td></tr>
<tr><td>Time</td>
    <td><input type=text name=time value='<?=$row['time']?>'></td></tr>
<tr><td>Theme</td>
    <td><input type=text name=theme size=60 value='<?=quote($row['theme'])?>'></td></tr>
<tr><td>Talent</td>
    <td><input type=text name=talent size=60 value='<?=quote($row['talent'])?>'></td></tr>
<tr><td>Location</td>
    <td><input type=text name=location size=60 value='<?=$row['location']?>'></td></tr>
<tr><td>Flyer</td>
    <td><input type=text name=flyer size=80 value='<?=$row['flyer']?>'></td></tr>
<tr><td><td><input type=submit name=button value'Update'></td></tr>
</table>
</form>
<?php
}

function intro( )
{
?>
<html>
<body>
<h1>TVC Calendar Database</h1>
<?php
}

function insertEntry( )
{
    $s = "INSERT INTO dates (date,time,theme,talent,location,flyer) VALUES " .
         "(:date,:time,:theme,:talent,:location,:flyer);";
    $db = new SQLite3( 'tvcdates.sq3', SQLITE3_OPEN_READWRITE );
    $stmt = $db->prepare($s);
    $stmt->bindValue( ":date", $_REQUEST['date'] );
    $stmt->bindValue( ":time", $_REQUEST['time'] );
    $stmt->bindValue( ":theme", $_REQUEST['theme'] );
    $stmt->bindValue( ":talent", $_REQUEST['talent'] );
    $stmt->bindValue( ":location", $_REQUEST['location'] );
    $stmt->bindValue( ":flyer", $_REQUEST['flyer'] );
    $stmt->execute();
    header( 'Location: tvcdates.php' );
}


function updateEntry( )
{
    $s = "UPDATE dates SET time=:time,theme=:theme,talent=:talent,location=:location, ".
         "flyer=:flyer WHERE date=:date;";
    $db = new SQLite3( 'tvcdates.sq3', SQLITE3_OPEN_READWRITE );
    $stmt = $db->prepare($s);
    $stmt->bindValue( ":time", $_REQUEST['time'] );
    $stmt->bindValue( ":theme", $_REQUEST['theme'] );
    $stmt->bindValue( ":talent", $_REQUEST['talent'] );
    $stmt->bindValue( ":location", $_REQUEST['location'] );
    $stmt->bindValue( ":flyer", $_REQUEST['flyer'] );
    $stmt->bindValue( ":date", $_REQUEST['date'] );
    $stmt->execute();
    header( 'Location: tvcdates.php' );
}


if( array_key_exists( 'edit', $_REQUEST ) )
{
    intro();
    editOneEntry( $_REQUEST['edit'] );
}
else if( array_key_exists( 'new', $_REQUEST ) )
{
    insertEntry( );
}
else if( array_key_exists( 'date', $_REQUEST ) )
{
    updateEntry( );
}
else
{
    intro();
    displayWholeList();
}

?>
