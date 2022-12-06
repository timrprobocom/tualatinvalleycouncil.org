import math

ctrx = 514
ctry = 618


badges = [
    ("images/ebeavers.jpg", "Eager Beavers", "eagerbeavers.info", 117, 116, 160, 533, 369 ),
    ("images/hodwnr.jpg", "Hoedowners", "hoedowners.info", 141, 139, 190, 680, 447 ),
    ("images/sunprom.gif", "Sunset Promenaders", "sunsetpromenaders.com", 180, 99, 150, 709, 637 ),
    ("images/trisqs.gif", "Tri Squares", "trisquares.com", 152, 103, 160, 680, 775 ),
    ("images/hayshkrs.gif", "Hayshakers", "hayshakers.org", 153, 90, 120, 543, 900 ),
    ("images/vllysqrs.gif", "Valley Squares", "valleysquares.com",127, 123, 150, 362, 881 ),
    ("images/toedrgs.gif", "Toe Draggers", "toedraggers.org", 144, 101, 150, 214, 781 ),
    ("images/rsquared.jpg", "R Square D", "r-square-d.info", 141, 98, 150, 186, 638 ),
    ("images/m&m.gif", "Mix &amp; Mingle", "mixandminglesquares.org", 121, 122, 190, 237, 453 ),
    ("images/csbg2.gif", "Wavesteppers", "wavesteppers.org", 95, 144, 190, 392, 341 ),
]


r = 400
badges.append( ("images/colrivdnc.jpg", "Columbia River Dancers", "columbiariverdancers.com", 150, 123, 190, 392, 341 ) )
badges.append( ("images/vrd.png", "Valley River Dancers", "valleyriverdancers.org", 186, 110, 170, 150, 150 ) )
badges.append( ("images/timbers.jpg", "Tualatin Timber Squares", "tualatindance.com", 130, 131, 170, 150, 150 ) )

print( """<style>
.badge {
    position: absolute;
    overflow: hiden;
    text-align: center;
    font: bold 13px Tahoma,Arial,Helvetica,Sans-Serif;
}
</style>""")

print( "<!-- %d, %d -->" % (ctrx, ctry) )

theta = 90 - 180 / len(badges)

print( "<div style='height: 820; z-index: -1'>" )

for (img, nm, url, w, h, bh, x, y) in badges:
    dx = r * math.cos( theta * 0.01745329232 )
    dy = r * math.sin( theta * 0.01745329232 )
    newx = int(ctrx + dx - w / 2)
    newy = int(ctry - dy - h / 2)
    print( "<!--", nm, x, y, newx, newy, "-->" )
    theta -= 360 / len(badges)
    
    print( "<div class='badge' style=\"left:%dpx; top:%dpx; width:%dpx; height:%dpx\">" % ( newx, newy, w, bh ) )
    print("    <a href='http://www.%s/' target='_blank'>" % url)
    print( "    <img src='http://tualatinvalleycouncil.org/%s' border=0 width=%d height=%d></a>" % ( img, w, h ) )
    print( "    <br>%s" % nm )
    print( "</div>" )

print( "</div>" )
