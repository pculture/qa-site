<?PHP
sleep(10);
echo <<<FEED
<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0" 
  xmlns:media="http://search.yahoo.com/mrss" 
  xmlns:creativeCommons="http://backend.userland.com/creativeCommonsRssModule"
  xmlns:dtvmedia="http://pculture.org/RSSModules/dtv/1.0">
<channel>
  <title>Yahoo Media TEST</title>
  <description>This is a PCF-governed RSS 2.0 feed to test Yahoo media enclosures. All contents of this feed are for example only.</description>
  <link>http://pculture.org/feeds_test/feed1</link>
  <dtvmedia:libraryLink>http://pculture.org/feeds_test/feed1</dtvmedia:libraryLink>
  <pubDate>Wed, 19 Apr 2006 13:53:29 -0500</pubDate>
  <generator>Participatory Culture Foundation</generator>
   <item>
     <title>Video 1</title>
     <link>http://pculture.org/feeds_test/py1.mov</link>
     <guid isPermaLink="false">A1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
     <description>This is the first test video, it is 842 KB and should download quickly.</description>
     <media:thumbnail url="http://pculture.org/feeds_test/mike_tv_drawing_cropped.jpg"/>
     <enclosure 
        url="http://pculture.org/feeds_test/py1.mov" 
        type="video/quicktime"  
        length="842" />
     <pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
  </item>
  <item>
    <title>Video 2</title>
    <link>http://pculture.org/feeds_test/py1.mov</link>
    <guid isPermaLink="false">B1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
    <description>This is the second test video, it is 842 KB and should download quickly.</description>
    <media:thumbnail url="http://pculture.org/feeds_test/mike_tv_drawing_cropped.jpg"/>
    <enclosure 
       url="http://pculture.org/feeds_test/py1.mov" 
       type="video/quicktime"  
       length="842" />
    <pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
  </item>
   <item>
     <title>Video 3</title>
     <link>http://pculture.org/feeds_test/machine_gun.avi</link>
     <guid isPermaLink="false">C1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
     <description>This is the third test video, it is 961 KB and should download quickly.</description>
     <media:thumbnail url="http://pculture.org/feeds_test/mike_tv_drawing_cropped.jpg"/>
     <enclosure 
        url="http://pculture.org/feeds_test/py1.mov" 
        type="video/quicktime"  
        length="842" />
     <pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
  </item>
   <item>
     <title>Video 4</title>
     <link>http://pculture.org/feeds_test/TogetherWeRide.mov</link>
     <guid isPermaLink="false">D1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
     <description>This is the fourth test video, it is 8.63 MB and should take a long time to download.</description>
     <media:thumbnail url="http://pculture.org/feeds_test/mike_tv_drawing_cropped.jpg"/>
     <enclosure 
        url="http://pculture.org/feeds_test/py1.mov" 
        type="video/quicktime"  
        length="842" />
     <pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
  </item>
   <item>
     <title>Video 5</title>
     <link>http://pculture.org/feeds_test/py1.mov</link>
     <guid isPermaLink="false">E1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
     <description>This is the fifth test video, it is 842 KB and should download quickly.</description>
     <media:thumbnail url="http://pculture.org/feeds_test/mike_tv_drawing_cropped.jpg"/>
     <enclosure 
        url="http://pculture.org/feeds_test/py1.mov" 
        type="video/quicktime"  
        length="842" />
     <pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
  </item>
   <item>
     <title>Video 6</title>
     <link>http://pculture.org/feeds_test/py1.mov</link>
     <guid isPermaLink="false">F1cd241bf61bf9c4fb34aa48ecb252c1e40d50087</guid>
     <description>This is the sixth test video, it is 842 KB and should download quickly.</description>
     <media:thumbnail url="http://pculture.org/feeds_test/mike_tv_drawing_cropped.jpg"/>
     <enclosure 
        url="http://pculture.org/feeds_test/py1.mov" 
        type="video/quicktime"  
        length="842" />
     <pubDate>Wed, 19 Apr 2006 13:53:21 -0500</pubDate>
  </item>
</channel>
</rss>
FEED;
?>
