<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Tualatin Valley Council</title>
<script src="http://code.jquery.com/jquery-1.10.2.js">
</script>
<script>
function swapimg() {
    var $this=$(this);
    var newSrc = $this.data('alts');
    $this.data('alts',$this.attr('src'));
    $this.attr('src', newSrc);
}

$(function(){
    $('.button').each(function(){
	var z = $(this).attr('src');
	z = z.replace('i.gif','a.gif');
	$(this).data('alts',z);
    });
    $('.button').hover( swapimg, swapimg );
});
    
</script>
<link href="/site.css" type="text/css" rel="stylesheet"/>
</head>
<body>
 <div class='container'>
  <div id='logo'>
   <h3 class='brown'>Square Dancing is Friendship &amp; Fun Put to Music!</h3>
   <div id='menu'>
    <a href='index'>
     <img class='button' src='images/nav130538900i.gif'/>
    </a>
    <a href='about'>
     <img class='button' src='images/nav130538901i.gif'/>
    </a>
    <a href='event'>
     <img class='button' src='images/nav130538902i.gif'/>
    </a>
    <a href='documents'>
     <img class='button' src='images/nav130538903i.gif'/>
    </a>
    <a href='minutes'>
     <img class='button' src='images/nav130538904i.gif'/>
    </a>
    <a href='pictures'>
     <img class='button' src='images/nav130538905i.gif'/>
    </a>
   </div>
  </div>
  <div id='menu2'>
   <a class='bw' href="banner">Banner Etiquette</a>
   <a class='bw' href="http://squaredance.gen.or.us/classes.php">Club Lessons</a>
   <a class='bw' href="findahall">Find A Hall</a>
   <a class='bw' href="awardKalmbach">TVC Awards</a>
  </div>

<!-- We end nested one div deep, in the container. -->
