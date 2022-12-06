<?php
require_once('header.php');
?>
<style>
.badge {
    overflow: hidden;
    text-align: center;
    font: bold 13px Tahoma,Arial,Helvetica,Sans-Serif;
}
.scroll {
    width: 221px;
    height: 111px;
    background-image: url('images/shadow.png');
    background-size: contain;
    margin: 0;
    padding: 0;
}
</style>



<!--  Here is the recognition award section. -->

<div style='margin-left: 5em'>
<img src="images/shadheader.png" border=0 width=221 height=14>
<div class='badge scroll'>
        <p class="trbold">2021 TVC<br>Recognition Award<br>Recipients:</p>
        <p class="verdana"><a href="awardKalmbach.php" class="style3">Darrell &amp; Erin Kalmbach</a></p>
</div>
<img src="images/shadfooter.png" border=0 width=221 height=11>
</div>

<div class='badge'>
Click graphics below to view individual club sites
</div>

<?php require_once('badges.php'); ?>
<?php require_once('footer.php'); ?>
