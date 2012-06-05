<html>
<head>
<title>Test Channel Guide</title>
<style>

body {
padding: 20px;
font-size: 16px;
font-family: arial;
}

</style>

</head>
<body>
<?php
if (isset($_GET['dtvapiURL'])) {
  echo '<script src="'.$_GET['dtvapiURL'].'" language="javascript"></script>';
  echo '<script language="javascript" >dtvapiInitialize("'.$_GET['dtvapiCookie'].'");</script>';
} else {
?>
<script language="javascript">
function dtvapiInitialize(cookie) {
}

function dtvapiAddChannel(url) {
  document.location.href = ('action:addFeed?selected=0&url='+escape(url));
  return false;
}

function dtvapiGoToChannel(url) {
  document.location.href = ('action:addFeed?selected=1&url='+escape(url));
  return false;
}
</script>
<?php
}?>






<strong>Testing Feeds</strong>
<p>These feeds never change and were made specifically for testing Democracy Player.</p>

<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed1.rss');">Subscribe to Feed 1</a> - <a href="javascript:dtvapiGoToChannel('http://qa.pculture.org/feeds_test/feed1.rss');">Go to Feed 1</a>
</p>

<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed2.rss');">Subscribe to Feed 2</a>
</p>


<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed3.rss');">Subscribe to Feed 3</a>
</p>

<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed4.rss');">Subscribe to Feed 4</a>
</p>

<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed5.rss');">Subscribe to Feed 5</a>
</p>

<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed6.rss');">Subscribe to Feed 6</a>
</p>

<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed7.rss');">Subscribe to Feed 7</a>
</p>


<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed8.rss');">Subscribe to Feed 8</a>
</p>



<p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/torrentpasswordrss.rss');">Subscribe to Torrent Password Feed</a>
</p>

 <p>
<a href="javascript:dtvapiAddChannel('http://qa.pculture.org/feeds_test/feed20.rss');">Subscribe to Feed 20</a> Empty Directory Torrent Feed
</p>

<p>
&nbsp;
</p>

<strong>Real-World Feeds</strong>
<p>These are actual internet TV channels and are likely to be changing constantly.</p>

<p>
<a href="javascript:dtvapiAddChannel('http://thechannelchannel.tv/?feed=rss2');">Subscribe to The Channel Channel</a>
- <a href="javascript:dtvapiGoToChannel('http://thechannelchannel.tv/?feed=rss2');">Go to The Channel Channel</a> </p>

<p>
<a href="javascript:dtvapiAddChannel('http://www.channelfrederator.com/rss);">Subscribe to Channel Frederator</a>
- <a href="javascript:dtvapiGoToChannel('http://www.channelfrederator.com/rss');">Go to Channel Frederator</a> </p>

<p>
<a href="javascript:dtvapiAddChannel('http://www.thirteenrec.com/bm/rss.php?i=2');">Subscribe to Thirteen Records</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://channel9.msdn.com/rss.aspx?ForumID=14&Mode=0&sortby=0&sortorder=1');">Subscribe to Channel 9</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://live.watchmactv.com/?feed=rss2');">Subscribe to Mac TV</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://hak5.libsyn.com/rss');">Subscribe to Hak5</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://www.tv.rsims2.com/bm/rss.php?i=2');">Subscribe to The Illworld</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://twitorrents.com/bm/rss.php?i=6');">Subscribe to This Week in Tech</a>
</p>



<p>
<a href="javascript:dtvapiAddChannel('http://revision3.com/systm/feed/small.h264.mov.torrent.xml');">Subscribe to Systm</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://www.anonymes.biz/tv/bm/rss.php?i=2');">Subscribe to Anonymes</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://www.g4tv.com/attackoftheshow/podcasts/5/Attack_of_the_Show_Daily_Video_Podcast__G4_TV.xml');">Subscribe to Attack of the Show</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://feeds.feedburner.com/TikiBarTV');">Subscribe to TikiBarTV</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://www.oldeenglish.org/bm/rss.php?i=1&PHPSESSID=b4679f46884f6b4a8980fdffe4121475');">Subscribe to Olde English</a>
</p><p>
<a href="javascript:dtvapiAddChannel('http://del.icio.us/rss/representordie/system:media:video');">Subscribe to Represent or Die</a>
</p><p>
<a href="javascript:dtvapiAddChannel('http://feeds.feedburner.com/command-n/h264');">Subscribe to CommandN</a>
</p><p>
<a href="javascript:dtvapiAddChannel('http://channel102.net/rss2.php');">Subscribe to Channel 102</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://www.telemusicvision.com/videos/rss.php?i=1');">Subscribe to Telemusicvision</a>
</p><p>
<a href="javascript:dtvapiAddChannel('http://geekbrief.podshow.com/?feed=rss2');">Subscribe to Geek Brief TV</a>

</p>

<p><strong>Torrent Feeds</strong></p>
<p>These are feeds of various format of legal torrents, and are likely to be changing constantly.</p>

</p><p>
<a href="javascript:dtvapiAddChannel('http://www.movedigital.com/rss/rocketboom/p2p.xml');">Rocketboom p2p</a>
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://bt.etree.org/rss/bt_etree_org.rdf');">bt.etree.org</a> live recordings of bootleg-friendly artists in the lossless FLAC audio format
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://revision3.com/ifanboy/feed/xvid-large.torrent');"> iFanboy </a> large xvid
</p>

<p>
<a href="javascript:dtvapiAddChannel('http://revision3.com/indigital/feed/wmv-large.torrent');"> InDigital </a> large wmv
</p>
<p>
<a href="javascript:dtvapiAddChannel('http://revision3.com/geekdrome/feed/mp3.torrent');"> Geekdrome  </a> mp3
</p><p>
<a href="javascript:dtvapiAddChannel('http://revision3.com/trs/feed/theora-large.torrent');"> The totally rad show </a> large theora
</p><p>
<a href="javascript:dtvapiAddChannel('http://revision3.com/xlr8rtv/feed/xvid-small.torrent');"> XLR8R </a> small xvid
</p><p>
<a href="javascript:dtvapiAddChannel('http://www.legaltorrents.com/rss.xml');"> LegalTorrents.com </a> mixed content
</p>

















</body>
</html>
