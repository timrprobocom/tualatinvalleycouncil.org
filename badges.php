<?php
$badges = [
    ["images/colrivdnc.jpg", "Columbia River Dancers", "columbiariverdancers.weebly.com", 150, 123, 190],
    ["images/ebeavers.jpg", "Eager Beavers", "eagerbeavers.info", 117, 116, 160],
    ["images/hayshkrs.gif", "Hayshakers", "hayshakers.org", 153, 90, 120],
    ["images/hodwnr.jpg", "Hoedowners", "hoedowners.info", 141, 139, 190],
    ["images/m&m.gif", "Mix &amp; Mingle", "mixandminglesquares.org", 121, 122, 190],
    ["images/OakHills.PNG", "Oak Hills Squares", "oakhillsquares.com", 285, 115, 0, 0],
    ["images/rsquared.jpg", "R Square D", "r-square-d.info", 141, 98, 150],
    ["images/sunprom.gif", "Sunset Promenaders", "sunsetpromenaders.com", 180, 99, 150],
    ["images/trisqs.gif", "Tri Squares", "trisquares.com", 152, 103, 160],
    ["images/vrd.png", "Valley River Dancers", "valleyriverdancers.us", 186, 110, 170],
    ["images/vllysqrs.gif", "Valley Squares", "valleysquares.com",127, 123, 150],
    ["images/csbg2.gif", "Wavesteppers", "wavesteppers.org", 95, 144, 190]
];

function place($img)
{
    echo <<<END
<td align=center class='badge' height=$img[5]>
 <a href='http://$img[2]' target='_blank'>
  <img src='$img[0]' border=0 width=$img[3] height=$img[4]/></a>
 <br>$img[1]
</td>
END;
}

#<div class='badge' style=" left:440px; top:520px; width:170px; height:226px"><img src="images/TVC170.gif" border=0 width=170 height=226></div>

echo "<table width=100%><tr>\n";
place( $badges[0] );
place( $badges[1] );
place( $badges[2] );
place( $badges[3] );
echo "</tr><tr>";
place( $badges[4] );
echo "<td class='badge' align=center valign=middle colspan=2 rowspan=2><img src='images/TVC170.gif' border=0 width=170 height=226/></td>";
place( $badges[5] );
echo "</tr><tr>";
place( $badges[6] );
place( $badges[7] );
echo "</tr><tr>";
place( $badges[8] );
place( $badges[9] );
place( $badges[10] );
place( $badges[11] );
echo "</tr></table>";

