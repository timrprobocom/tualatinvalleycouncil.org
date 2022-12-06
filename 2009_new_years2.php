<?php require('header.php');?>
<style>
div.item {
    float: left;
}
div.item1 {
    margin: 6px 6px 0 0;
    width: 112px;
    height: 112px;
}
div.item2l {
    position: relative;
    top: 12px;
    width: 112px;
    height: 87px;
    background: url('images/shadow.png') no-repeat right bottom;
}
div.item2p {
    position: relative;
    top: 12px;
    width: 87px;
    height: 112px;;
    background: url('images/shadow.png') no-repeat right bottom;
}
div.item2l img {
    width: 100px;
    height: 75px;
    position: relative;
    left: 3px;
    top: 3px;
}
div.item2p img {
    width: 75px;
    height: 100px;
    position: relative;
    left: 3px;
    top: 3px;
}
</style>

<div id="page">

<img border=0 alt="2008/9 New Year's Eve Dance" src="images/art41532625.gif">
<br>
<p>Click on thumbnails below to enlarge pictures.</p>

<?php
$portrait = array('013','031','034');

$pix = glob('images/NYE*');

foreach( $pix as $pic ):
  preg_match('/\d\d\d/',$pic,$match);
  if( in_array($match[0],$portrait) )
      $class = 'item2p';
  else
      $class = 'item2l';
?>
<div class="item">
 <div class="item1">
  <div class="<?=$class?>">
   <a href="<?=$pic?>">
    <img border=0 src="<?=$pic?>"/>
   </a>
  </div>
 </div>
</div>
<?php endforeach; ?>


<div class='item' style='padding-top: 30px'>
<table border=0>
<tr>
 <td align=center>previous<br>
  <a href="2009_new_years1"><img border=0 src="images/previous.gif"></a>
 </td>
 <td width=40></td>
 <td align=center>next<br>
  <a href="2009_hahnbarndance"><img border=0 src="images/next.gif"></a>
 </td>
</tr>
</table>
</div>


</div>
<br style="clear: both">

<?php require('footer.php');?>
