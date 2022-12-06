<?php require_once('header.php');?>
<style>
tr.image td {
    vertical-align: middle;
}
tr.text td {
    vertical-align: top;
    padding-bottom: 20px;
}
td {
    font-size: 9pt;
    width: 33%;
    text-align: center;
}
</style>

<div id='page'>

<img border=0 alt="TVC Documents" src="images/art14621968.gif">

<h3>Click icons below for more information or to download the corresponding document</h3>
<?php
$documents = [
 [ "files/TVCconstitution.pdf", "Constitution", "images/constitn.jpg" ],
 [ "files/TVCByLaws2017.pdf", "By-Laws (2017)", "images/by-lawstn.jpg" ],
 [ "files/TVCPractices2017.pdf", "Practices & Procedures (2017)", "images/pract&proced.jpg" ],
 [ "files/DelegatesIntro.pdf", "Delegate's Introduction to TVC (2017)", "images/delegatesintro.gif" ],
 [ "files/2022-2023 TVC Directory.pdf", "TVC Directory (2022)", "images/directtn.jpg" ],
 [ "files/2022-2023 Ambassador Badge Form.pdf", "Amdassador Badge Form", "images/badge.png" ],
 [ "insurance", "Liability & Accidental Medical Insurance", "images/usdablue.jpg" ],
 [ "files/Randall Award Form 2012.pdf", "Randall Award Nomination Form<br>Due August 15th", "images/award.jpg" ],
 [ "files/AdvertisingReimbursement.pdf","Lesson Advertising Reimbursement Form", "images/reimburse.jpg" ],
 [ "http://www.irs.gov/businesses/page/0,,id=23108,00.html", "IRS Forms Online Ordering", "images/irslogo.jpg" ],
];

echo "<table border=0>\n";
$n = 0;
$text = [];
foreach( $documents as $row )
{
    if( count($text) == 0 )
	echo "<tr class='image'>\n";

    echo "<td height=72><a href='$row[0]' title='$row[1]'>\n";
    echo "<img border=0 src='$row[2]'></a></td>\n";
    $text[] = $row[1];

    if( count($text) == 3 )
    {
	echo "</tr><tr class='text'><td>\n";
	echo implode( '</td><td>', $text );
	echo "</td></tr>\n";
	$text = [];
    }
}

if( count($text) )
{
    echo "</tr><tr class='text'><td>\n";
    echo implode( '</td><td>', $text );
    echo "</td></tr>\n";
    $text = [];
}
?>
</table>

</div>

<?php require_once('footer.php');?>
