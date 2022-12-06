<?php

// Start in 2009 and gather until we find no more files.

$years = [];
for( $yr = 2009; $yr < 2199; $yr++ )
{
    $any = 0;
    $str = "<td>\n";
    for( $mo = 1; $mo <= 12; $mo++ )
    {
	$tm = mktime( 0, 0, 0, $mo, 27, $yr );
	if( $tm > time() )
	    break;
	$short = strtolower(date('M',$tm));
	$long = date('F',$tm);
        $pdfs = glob( "files/$short*$yr.pdf" );
	if( count($pdfs) > 0 ) 
	{
	    $any++;
	    $pat = $pdfs[0];
	    $str .= "<a href='$pat' target='_blank'>$long</a><br>\n";
	}
	else
	    $str .= "No meeting<br>\n";
    }
    $str .= "</td>\n";
    if( !$any )
	break;
    $years[$yr] = $str;
}

// Sort the keys in reverse order.

krsort($years);

// Do the years 7 at a time to fit across.  Too bad there's no
// "grab the first 7" function in PHP.

$row = [];
foreach( $years as $yr=>$body )
{
    $row[$yr] = $body;
    if( count($row) == 7 )
    {
	generaterow($row);
	$row = [];
    }
}
if( count($row) )
    generaterow($row);

function generaterow($row) 
{
    echo "<tr>\n";
    foreach( $row as $yr => $body )
	echo "<th>$yr</th>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    foreach( $row as $yr => $body )
	echo $body;
    echo "</tr>\n";
}

