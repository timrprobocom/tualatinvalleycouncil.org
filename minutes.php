<?php require_once('header.php'); ?>
<style>
table.orange th {
    background-color: #ff6600;
    color: white;
    vertical-align: middle;
    text-align: center;
    width: 116px;
    font: 12pt Arial,Helvetica,Sans Serif;
}
table.orange td {
    vertical-align: top;
    text-align: center;
    color: #36f;
    font: 10pt Arial,Helvetica,Sans Serif;
}
table.orange td a { 
    color: #f60;
    text-decoration: none;
}
table.orange td a:link { color: #f60; }
table.orange td a:visited { color: #f60; }
table.orange td a:hover { color: #000; }
table.orange td a:active { color: #000; }
</style>

<div id='page'>

<img border=0 alt="Meeting Minutes" src="images/art8180500.gif">

<table class='orange'>
<?php include('makeminutes.php'); ?>
</table>


<h4>PDF File Accessibility</h4>
<p class='wpmd'>Adobe Reader is required to view PDF files.<br>
Click the "Get Adobe Reader" image to get a<br>
free download of the reader from Adobe.<br>
<br>
<a href="http://www.adobe.com/products/acrobat/readstep2.html"><IMG border=0 src="images/get_adobe_reader.gif"></a>
<br>

</div>

<?php require_once('footer.php'); ?>
