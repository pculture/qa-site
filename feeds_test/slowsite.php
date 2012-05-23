<?php
sleep(5);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
          "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Miro Guide - Video Podcast Directory</title>
    <meta name="author" content="author" lang="en">
    <meta name="copyright" content="Copyright 2008">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="14 days">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="language" content="en">
    
    <link rel="StyleSheet" type="text/css"
          href="http://s3.miroguide.com/static/css/style.css?nonce=">
    <link rel="StyleSheet" type="text/css"
          href="http://s3.miroguide.com/static/css/rating.css?nonce=">
    <!--[if lt IE 7]>
    <link rel="stylesheet" href="http://s3.miroguide.com/static/css/ie_styles.css" type="text/css" media="screen">
    <script defer type="text/javascript" src="http://s3.miroguide.com/static/js/ie_png.js"></script>
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="http://s3.miroguide.com/static/css/ie7_styles.css" type="text/css" media="screen">
    <![endif]-->
    <script type="text/javascript" src="/jsi18n/"></script>
    <script type="text/javascript">
        var star_names = [
            "Not interested",
            "I hate this show",
            "I dislike this show",
            "I like this show",
            "I really like this show",
            "I love this show!"];
    </script>
    <script src="http://s3.miroguide.com/static/js/jquery.min.js"
            type="text/javascript">
    </script>
    <script src="http://s3.miroguide.com/static/js/jquery.form.js"
            type="text/javascript">
    </script>
    <script src="http://s3.miroguide.com/static/js/jquery.corners.js"
            type="text/javascript">
    </script>
    <script src="http://s3.miroguide.com/static/js/rating.js"
            type="text/javascript">
    </script>
    <script src="http://s3.miroguide.com/static/js/miroguide.js?nonce="
            type="text/javascript">
    </script>

    
<script type="text/javascript" src="http://partner.googleadservices.com/gampad/google_service.js">
</script>
<script type="text/javascript">
  GS_googleAddAdSenseService("ca-pub-4702283658897171");
  GS_googleEnableAllServices();
</script>
<script type="text/javascript">
  GA_googleAddSlot("ca-pub-4702283658897171", "MiroGuide_HomePage_Leaderboard_728x90");
  GA_googleAddSlot("ca-pub-4702283658897171", "MiroGuide_InnerPages_Leaderboard_728x90");
  GA_googleFetchAds();
</script>
    
    
<script src="http://s3.miroguide.com/static/js/jquery.preload-min.js"
type="text/javascript">
</script>
<script type="text/javascript">
$.preload(['popup/bottom', 'small_add_feed', 'small_add_button',
'buttons/preview-cap', 'buttons/preview-bg',
'popup/right_arrow', 'popup/border', 'popup/top',
'popup/left_arrow', 'popup/right_shadow',
'misc_button_med_cap', 'misc_button_med',
'big_no-nos', 'big_stars'],
{base: 'http://s3.miroguide.com/static/images/',
ext: '.png'});
</script>
<script src="http://s3.miroguide.com/static/js/feature_rotate.js"
type="text/javascript" defer></script>
<script src="http://s3.miroguide.com/static/js/hover.js"
type="text/javascript"></script>

<link rel="alternate" type="application/rss+xml" title="Featured Shows"
href="https://www.miroguide.com/rss/featured">
<link rel="alternate" type="application/rss+xml" title="New Shows"
href="https://www.miroguide.com/rss/new">

</head>

<body onload="add_corners(); setup_login_form();carouselOnLoad();"
      id="main" class="video">
 <div id="feedbackwidget"><a href="http://getsatisfaction.com/participatoryculturefoundation/products/participatoryculturefoundation_miro_guide"><img src="http://s3.miroguide.com/static/images/feedback.gif" alt="FEEDBACK"></a></div>
  
    <div id="topBar">
      <div class="page">
        <ul id="mainMenu">
          <li id="logo">
            <a href="/" onclick="showLoadIndicator();" class="current-page">
              <img src="http://s3.miroguide.com/static/images/logo.png" alt="Miro" >
            </a>
          </li>
          <li class="video_feeds">
            <a href="/" onclick="showLoadIndicator();" class="current-page">
              <span class="nav_text">Video</span>
            </a>
          </li>
          <li class="streaming_shows">
            <a href="/audio/" onclick="showLoadIndicator();">
              <span class="nav_text">
                Audio
              </span>
            </a>
          </li>
          <li class="video_love">
            <a href="/recommend/" onclick="showLoadIndicator();">
              <span class="nav_text">Videos you'll love</span>
            </a>
          </li>
        </ul>

        <div id="searchBG"></div>

        <form method="get" action="/search">

          <div id="searchSpot">

              <input type="text" class="headSearch" name="query"
                   id="search_query" />

          <!--
            <input type="text" class="headSearch" name="query"
                   id="search_query"  value="Search">
           -->

           <script type="text/javascript">
              //<![CDATA[
$(document).ready(function() {
    $("#searchSpot input").focus(searchFocus).blur(searchBlur);});
              //]]>
            </script>

            <button value="Search" name="submit" class="submit_search_small">Search</button>

          </div>
        </form>
      </div>
    </div>

    <div id="topBarLower">
      <div class="page">
        <ul id="lowerMenu">
          <li>
            <a href="/genres/" onclick="showLoadIndicator();"><span>Genres</span></a>
            <div class="genres_popup">
  <div>
    <div>
      
      <ul class="index_1">
        
        <li><a href="/genres/Activism" onclick="showLoadIndicator();">Activism</a></li>
        
        <li><a href="/genres/Animals" onclick="showLoadIndicator();">Animals</a></li>
        
        <li><a href="/genres/Animation" onclick="showLoadIndicator();">Animation</a></li>
        
        <li><a href="/genres/Arts" onclick="showLoadIndicator();">Arts</a></li>
        
        <li><a href="/genres/Blogs" onclick="showLoadIndicator();">Blogs</a></li>
        
        <li><a href="/genres/Business" onclick="showLoadIndicator();">Business</a></li>
        
        <li><a href="/genres/Comedy" onclick="showLoadIndicator();">Comedy</a></li>
        
        <li><a href="/genres/Courseware" onclick="showLoadIndicator();">Courseware</a></li>
        
      </ul>
      
      <ul class="index_2">
        
        <li><a href="/genres/Education" onclick="showLoadIndicator();">Education</a></li>
        
        <li><a href="/genres/Environment" onclick="showLoadIndicator();">Environment</a></li>
        
        <li><a href="/genres/Family" onclick="showLoadIndicator();">Family</a></li>
        
        <li><a href="/genres/Food" onclick="showLoadIndicator();">Food</a></li>
        
        <li><a href="/genres/Government" onclick="showLoadIndicator();">Government</a></li>
        
        <li><a href="/genres/Health" onclick="showLoadIndicator();">Health</a></li>
        
        <li><a href="/genres/International" onclick="showLoadIndicator();">International</a></li>
        
        <li><a href="/genres/Kids" onclick="showLoadIndicator();">Kids</a></li>
        
      </ul>
      
      <ul class="index_3">
        
        <li><a href="/genres/Linux%20%26%20Free%20Software" onclick="showLoadIndicator();">Linux &amp; Free Software</a></li>
        
        <li><a href="/genres/Local" onclick="showLoadIndicator();">Local</a></li>
        
        <li><a href="/genres/Mac" onclick="showLoadIndicator();">Mac</a></li>
        
        <li><a href="/genres/Movies%20%26%20TV" onclick="showLoadIndicator();">Movies &amp; TV</a></li>
        
        <li><a href="/genres/Music" onclick="showLoadIndicator();">Music</a></li>
        
        <li><a href="/genres/News" onclick="showLoadIndicator();">News</a></li>
        
        <li><a href="/genres/Politics" onclick="showLoadIndicator();">Politics</a></li>
        
        <li><a href="/genres/Public%20Broadcasting" onclick="showLoadIndicator();">Public Broadcasting</a></li>
        
      </ul>
      
      <ul class="index_4">
        
        <li><a href="/genres/Religion%20%26%20Spirituality" onclick="showLoadIndicator();">Religion &amp; Spirituality</a></li>
        
        <li><a href="/genres/Science" onclick="showLoadIndicator();">Science</a></li>
        
        <li><a href="/genres/Sexuality" onclick="showLoadIndicator();">Sexuality</a></li>
        
        <li><a href="/genres/Sports" onclick="showLoadIndicator();">Sports</a></li>
        
        <li><a href="/genres/Technology" onclick="showLoadIndicator();">Technology</a></li>
        
        <li><a href="/genres/Transportation" onclick="showLoadIndicator();">Transportation</a></li>
        
        <li><a href="/genres/Travel" onclick="showLoadIndicator();">Travel</a></li>
        
        <li><a href="/genres/Video%20Games" onclick="showLoadIndicator();">Video Games</a></li>
        
      </ul>
      
    </div>
    <br style="clear: both;">
  </div>
</div>
          </li>
          <li><a href="/hd/" onclick="showLoadIndicator();"><span>HD Shows</span></a></li>
          <li><a href="/popular/" onclick="showLoadIndicator();"><span>Most Popular</span></a></li>
          <li><a href="/toprated/" onclick="showLoadIndicator();"><span>Top Rated</span></a></li>
          <li><a href="/new/" onclick="showLoadIndicator();"><span>New Shows</span></a></li>
          <li><a href="/languages/" onclick="showLoadIndicator();"><span>Video by Language</span></a></li>
          <li id="language"
              onmouseover="return showMenu('hoverMenuLanguage', 'language', event)"
              onmouseout="return hideMenu('hoverMenuLanguage', 'language', event)">
            <a href="#">Language</a>
          </li>
          <li id="account"
              onmouseover="return showMenu('hoverMenuLogin', 'account', event)"
              onmouseout="return hideMenu('hoverMenuLogin', 'account', event)">
            <a href="/accounts/login">
              
                Account
              
            </a>
          </li>
        </ul>
      </div>
    </div>

    


<div id="hover_align">

<div id="hoverMenuLogin"
onmouseover="return showMenu('hoverMenuLogin', 'account', event)"
onmouseout="return hideMenu('hoverMenuLogin', 'account', event)">
<ul>
<li class="form-errors"></li>
<li id="login">
<form method="post" action="/accounts/login">
<div>
<input type="hidden" name="which-form" value="login">
</div>
<div class="form_row">
<label for="id_username">Username</label>
<input id="id_username" name="username" maxlength="20" type="text">
</div>
<div class="form_row">
<label for="id_password">Password</label>
<input id="id_password" name="password" maxlength="20" type="password">
</div>
<div class="form_row accountsubmit">
<a class="forgot_password"
href="/accounts/forgot-password">
Forgot password
</a>
<button id="login_button" class="fr" type="submit">
<span>Login</span>
</button>
</div>
</form>
</li>
<li id="registerHidden">
<form method="post" action="/accounts/login">
<div>
<input type="hidden" name="which-form" value="register">
</div>
<div class="form_row">
<label for="id_newusername">
Username *
</label>
<input id="id_newusername" name="newusername" maxlength="20" type="text">
</div>
<div class="form_row">
<label for="id_email">
Email Address *
</label>
<input id="id_email" name="email" maxlength="50" type="text">
</div>
<div class="form_row">
<label for="id_newpassword">
Pick a Password *
</label>
<input id="id_newpassword" name="newpassword" maxlength="20" type="password">
</div>
<div class="form_row">
<label for="id_newpassword2">
Confirm Password *
</label>
<input id="id_newpassword2" name="newpassword2" maxlength="20" type="password">
</div>
<div class="form_row accountsubmit">
<button class="fr gray-button" type="submit">
<span>Register!</span>
</button>
</div>
</form>
</li>
</ul>
<div id="register">
<p>
<a href="/accounts/login">
<span class="register_tag">Register Now!</span>
<span class="always_free">Always Free</span>
</a>
</p>
</div>
</div>

<div id="hoverMenuLanguage"
onmouseover="return showMenu('hoverMenuLanguage', 'language', event)"
onmouseout="return hideMenu('hoverMenuLanguage', 'language', event)">

<h3><span>Display Shows:</span></h3>
<form action="/accounts/set_language_view" method="GET">
<ul class="default">
<li class="current">
<button type="submit" name="filter" value="0">
<span>In all languages</span>
</button>
</li>
<li>
<button type="submit" name="filter" value="1">
<span>In my language</span>
</button>
</li>
</ul>
</form>

<div id="upButton"></div>
<h3><span>My Language:</span></h3>
<form action="/i18n/setlang/" method="POST">
<ul>


<li class="current">
<button type="submit" name="language" value="en">
<span class="code">en</span>
<span>English</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ar">
<span class="code">ar</span>
<span>العربية</span>
</button>
</li>

<li>
<button type="submit" name="language" value="bn">
<span class="code">bn</span>
<span>বাংলা</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ca">
<span class="code">ca</span>
<span>català</span>
</button>
</li>

<li>
<button type="submit" name="language" value="zh-cn">
<span class="code">zh-cn</span>
<span>廣東話</span>
</button>
</li>

<li>
<button type="submit" name="language" value="hr">
<span class="code">hr</span>
<span>Hrvatski</span>
</button>
</li>

<li>
<button type="submit" name="language" value="da">
<span class="code">da</span>
<span>dansk</span>
</button>
</li>

<li>
<button type="submit" name="language" value="nl">
<span class="code">nl</span>
<span>Nederlands</span>
</button>
</li>

<li>
<button type="submit" name="language" value="et">
<span class="code">et</span>
<span>eesti keel</span>
</button>
</li>

<li>
<button type="submit" name="language" value="fi">
<span class="code">fi</span>
<span>suomi</span>
</button>
</li>

<li>
<button type="submit" name="language" value="fr">
<span class="code">fr</span>
<span>français</span>
</button>
</li>

<li>
<button type="submit" name="language" value="de">
<span class="code">de</span>
<span>Deutsch</span>
</button>
</li>

<li>
<button type="submit" name="language" value="el">
<span class="code">el</span>
<span>ελληνικά</span>
</button>
</li>

<li>
<button type="submit" name="language" value="he">
<span class="code">he</span>
<span>עברית / עִבְרִית</span>
</button>
</li>

<li>
<button type="submit" name="language" value="hi">
<span class="code">hi</span>
<span>हिन्दी</span>
</button>
</li>

<li>
<button type="submit" name="language" value="hu">
<span class="code">hu</span>
<span>magyar</span>
</button>
</li>

<li>
<button type="submit" name="language" value="is">
<span class="code">is</span>
<span>Íslenska</span>
</button>
</li>

<li>
<button type="submit" name="language" value="id">
<span class="code">id</span>
<span>Bahasa Indonesia</span>
</button>
</li>

<li>
<button type="submit" name="language" value="it">
<span class="code">it</span>
<span>italiano</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ja">
<span class="code">ja</span>
<span>日本語</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ko">
<span class="code">ko</span>
<span>한국어</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ku">
<span class="code">ku</span>
<span>Kurdí</span>
</button>
</li>

<li>
<button type="submit" name="language" value="lv">
<span class="code">lv</span>
<span>latviešu valoda</span>
</button>
</li>

<li>
<button type="submit" name="language" value="lt">
<span class="code">lt</span>
<span>lietuvių kalba</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ms">
<span class="code">ms</span>
<span>Bahasa melayu</span>
</button>
</li>

<li>
<button type="submit" name="language" value="no">
<span class="code">no</span>
<span>Norsk</span>
</button>
</li>

<li>
<button type="submit" name="language" value="fa">
<span class="code">fa</span>
<span>فارسى</span>
</button>
</li>

<li>
<button type="submit" name="language" value="pl">
<span class="code">pl</span>
<span>polski</span>
</button>
</li>

<li>
<button type="submit" name="language" value="pt-br">
<span class="code">pt-br</span>
<span>português (brazil)</span>
</button>
</li>

<li>
<button type="submit" name="language" value="pt">
<span class="code">pt</span>
<span>português (portugal)</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ro">
<span class="code">ro</span>
<span>român</span>
</button>
</li>

<li>
<button type="submit" name="language" value="ru">
<span class="code">ru</span>
<span>Русский язык</span>
</button>
</li>

<li>
<button type="submit" name="language" value="sr">
<span class="code">sr</span>
<span>Srpski</span>
</button>
</li>

<li>
<button type="submit" name="language" value="sk">
<span class="code">sk</span>
<span>slovenčina</span>
</button>
</li>

<li>
<button type="submit" name="language" value="sl">
<span class="code">sl</span>
<span>slovenščina</span>
</button>
</li>

<li>
<button type="submit" name="language" value="es">
<span class="code">es</span>
<span>español</span>
</button>
</li>

<li>
<button type="submit" name="language" value="sv">
<span class="code">sv</span>
<span>Svenska</span>
</button>
</li>

<li>
<button type="submit" name="language" value="th">
<span class="code">th</span>
<span>ภาษาไทย</span>
</button>
</li>

<li>
<button type="submit" name="language" value="tr">
<span class="code">tr</span>
<span>Türkçe</span>
</button>
</li>

<li>
<button type="submit" name="language" value="vi">
<span class="code">vi</span>
<span>tiếng việt</span>
</button>
</li>

</ul>
</form>
<div id="downButton"></div>
<script type="text/javascript">
//<!CDATA[[
$("#upButton").hover(languageUp, languageStop);
$("#downButton").hover(languageDown, languageStop);
//]]>
</script>
</div><!--hoverMenu-->
</div><!--hover_align-->


  
  
  

<div id="welcome">
<div class="inner">
<div class="inner2">
<div class="message">
<h2>Welcome to the Miro Guide!</h2>
<p>Miro Guide has thousands of video and audio shows — you can browse and watch most of them right here.</p>
<p>Make this message disappear by <a href="/accounts/login">logging in</a>.
</div>
<div class="miro_message">
<p>We also make Miro, a free internet TV application. Miro makes subscribing, managing, and watching programs easy, and it works extra well with all the HD programming you'll find here in the guide.</p>
<span>Try it now</span>
<a class="large_add_button" href="http://www.getmiro.com/download/">
<span>Download Miro</span>
</a>
</div>
<br style="clear: both;">
</div>
</div>
</div>
<script type="text/javascript">
if (!isMiro()) {
document.getElementById('welcome').style.display = 'block';
}
</script>


<div id="content" class="page">
<div class="front-page">


<div id="featured">

<a href="/audio/"><img id="now_with_audio" src="http://s3.miroguide.com/static/images/audio_badge.png" /></a>

<div class="page">


<!--Carousel-->
<div id="featuredItemsCarousel" class="largeCarousel">
<div id="button_previous">
<span class="hidden">
previous features
</span>
</div>
<div id="innerContent">
<ul id="featured-list">

<li>

<div>

<a href="/feeds/12233" onclick="showLoadIndicator();">
<span class="thumb featuredItem top_corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/195x130/12233.jpeg); width: 195px; height: 130px;">

</span>
<span class="featured_bg">Moderator Pick</span>
</a>

</div>
<a href="http://subscribe.getmiro.com/?url1=http%3A//feeds.feedburner.com/oreilly/igniteshow&amp;trackback1=http%3A//www.miroguide.com/feeds/12233/subscribe-hit&amp;section1=video" onclick="return handleSubscriptionLink('http://www.miroguide.com/feeds/12233/subscribe-hit', 'http://subscribe.getmiro.com/?url1=http%3A//feeds.feedburner.com/oreilly/igniteshow&amp;trackback1=http%3A//www.miroguide.com/feeds/12233/subscribe-hit&amp;section1=video');"
class="large_add_button feed">
<span class="only-in-miro">
<span>ADD FEED TO SIDEBAR</span>
</span>
</a></li>

<li>

<div>

<a href="/feeds/12838" onclick="showLoadIndicator();">
<span class="thumb featuredItem top_corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/195x130/12838.jpeg); width: 195px; height: 130px;">

</span>
<span class="featured_bg">Moderator Pick</span>
</a>

</div>
<a href="http://subscribe.getmiro.com/?url1=http%3A//www.youtube.com/rss/user/foodcurated/videos.rss&amp;trackback1=http%3A//www.miroguide.com/feeds/12838/subscribe-hit&amp;section1=video" onclick="return handleSubscriptionLink('http://www.miroguide.com/feeds/12838/subscribe-hit', 'http://subscribe.getmiro.com/?url1=http%3A//www.youtube.com/rss/user/foodcurated/videos.rss&amp;trackback1=http%3A//www.miroguide.com/feeds/12838/subscribe-hit&amp;section1=video');"
class="large_add_button feed">
<span class="only-in-miro">
<span>ADD FEED TO SIDEBAR</span>
</span>
</a></li>


<li class="column">


<div>

<a href="/feeds/12826" onclick="showLoadIndicator();">
<span class="thumb featuredItem top_corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/195x130/12826.jpeg); width: 195px; height: 130px;">

</span>
<span class="featured_bg">Moderator Pick</span>
</a>

</div>
<a href="http://subscribe.getmiro.com/?url1=http%3A//feeds.themobileclassroom.com/themobileclassroom-free&amp;trackback1=http%3A//www.miroguide.com/feeds/12826/subscribe-hit&amp;section1=video" onclick="return handleSubscriptionLink('http://www.miroguide.com/feeds/12826/subscribe-hit', 'http://subscribe.getmiro.com/?url1=http%3A//feeds.themobileclassroom.com/themobileclassroom-free&amp;trackback1=http%3A//www.miroguide.com/feeds/12826/subscribe-hit&amp;section1=video');"
class="large_add_button feed">
<span class="only-in-miro">
<span>ADD FEED TO SIDEBAR</span>
</span>
</a>
</li>

<li class="column">


<div>

<a href="/feeds/12219" onclick="showLoadIndicator();">
<span class="thumb featuredItem top_corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/195x130/12219.jpeg); width: 195px; height: 130px;">

</span>
<span class="featured_bg">Moderator Pick</span>
</a>

</div>
<a href="http://subscribe.getmiro.com/?url1=http%3A//feministfrequency.blip.tv/%3Fskin%3Drss&amp;trackback1=http%3A//www.miroguide.com/feeds/12219/subscribe-hit&amp;section1=video" onclick="return handleSubscriptionLink('http://www.miroguide.com/feeds/12219/subscribe-hit', 'http://subscribe.getmiro.com/?url1=http%3A//feministfrequency.blip.tv/%3Fskin%3Drss&amp;trackback1=http%3A//www.miroguide.com/feeds/12219/subscribe-hit&amp;section1=video');"
class="large_add_button feed">
<span class="only-in-miro">
<span>ADD FEED TO SIDEBAR</span>
</span>
</a>
</li>

<li class="column">


<div>

<a href="/feeds/12861" onclick="showLoadIndicator();">
<span class="thumb featuredItem top_corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/195x130/12861.jpeg); width: 195px; height: 130px;">

<img class="hd_tag_large"
src="http://s3.miroguide.com/static/images/ico_hd_tag_large.png"
alt="High-Definition Channel">

</span>
<span class="featured_bg">Moderator Pick</span>
</a>

</div>
<a href="http://subscribe.getmiro.com/?url1=http%3A//revision3.com/landlinetv/feed/MP4-High-Definition&amp;trackback1=http%3A//www.miroguide.com/feeds/12861/subscribe-hit&amp;section1=video" onclick="return handleSubscriptionLink('http://www.miroguide.com/feeds/12861/subscribe-hit', 'http://subscribe.getmiro.com/?url1=http%3A//revision3.com/landlinetv/feed/MP4-High-Definition&amp;trackback1=http%3A//www.miroguide.com/feeds/12861/subscribe-hit&amp;section1=video');"
class="large_add_button feed">
<span class="only-in-miro">
<span>ADD FEED TO SIDEBAR</span>
</span>
</a>
</li>

<li class="column">


<div>

<a href="/feeds/12781" onclick="showLoadIndicator();">
<span class="thumb featuredItem top_corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/195x130/12781.jpeg); width: 195px; height: 130px;">

</span>
<span class="featured_bg">Moderator Pick</span>
</a>

</div>
<a href="http://subscribe.getmiro.com/?url1=http%3A//mediasanctuary.blip.tv/rss&amp;trackback1=http%3A//www.miroguide.com/feeds/12781/subscribe-hit&amp;section1=video" onclick="return handleSubscriptionLink('http://www.miroguide.com/feeds/12781/subscribe-hit', 'http://subscribe.getmiro.com/?url1=http%3A//mediasanctuary.blip.tv/rss&amp;trackback1=http%3A//www.miroguide.com/feeds/12781/subscribe-hit&amp;section1=video');"
class="large_add_button feed">
<span class="only-in-miro">
<span>ADD FEED TO SIDEBAR</span>
</span>
</a>
</li>

</ul>
</div>
<div id="button_next"></div>
</div>
</div>
</div>



<div class="big_search">
<p>Search for Video</p>
<form method="GET" action="/search">
<div>
<input type="text" class="field" name="query"><button class="submit_search">Search</button>
</div>
</form>
</div>


<div id="container">
<div id="contentSmall">
<div class="detailsHead3">
<div class="resultsCount">
<a name="new" class="heading selected" href="/new/" onclick="showLoadIndicator();">New Shows</a>
<a name="popular" class="heading" href="/popular/" onclick="showLoadIndicator();">Most Popular</a>
<a name="hd" class="heading" href="/hd/" onclick="showLoadIndicator();">HD Favorites</a>
<div class="heading">
<a name="genres" href="/genres/" onclick="showLoadIndicator();">Genres</a>
<div class="genres_popup">
<div>
<div>

<ul class="index_1">

<li><a href="/genres/Activism" onclick="showLoadIndicator();">Activism</a></li>

<li><a href="/genres/Animals" onclick="showLoadIndicator();">Animals</a></li>

<li><a href="/genres/Animation" onclick="showLoadIndicator();">Animation</a></li>

<li><a href="/genres/Arts" onclick="showLoadIndicator();">Arts</a></li>

<li><a href="/genres/Blogs" onclick="showLoadIndicator();">Blogs</a></li>

<li><a href="/genres/Business" onclick="showLoadIndicator();">Business</a></li>

<li><a href="/genres/Comedy" onclick="showLoadIndicator();">Comedy</a></li>

<li><a href="/genres/Courseware" onclick="showLoadIndicator();">Courseware</a></li>

</ul>

<ul class="index_2">

<li><a href="/genres/Education" onclick="showLoadIndicator();">Education</a></li>

<li><a href="/genres/Environment" onclick="showLoadIndicator();">Environment</a></li>

<li><a href="/genres/Family" onclick="showLoadIndicator();">Family</a></li>

<li><a href="/genres/Food" onclick="showLoadIndicator();">Food</a></li>

<li><a href="/genres/Government" onclick="showLoadIndicator();">Government</a></li>

<li><a href="/genres/Health" onclick="showLoadIndicator();">Health</a></li>

<li><a href="/genres/International" onclick="showLoadIndicator();">International</a></li>

<li><a href="/genres/Kids" onclick="showLoadIndicator();">Kids</a></li>

</ul>

<ul class="index_3">

<li><a href="/genres/Linux%20%26%20Free%20Software" onclick="showLoadIndicator();">Linux &amp; Free Software</a></li>

<li><a href="/genres/Local" onclick="showLoadIndicator();">Local</a></li>

<li><a href="/genres/Mac" onclick="showLoadIndicator();">Mac</a></li>

<li><a href="/genres/Movies%20%26%20TV" onclick="showLoadIndicator();">Movies &amp; TV</a></li>

<li><a href="/genres/Music" onclick="showLoadIndicator();">Music</a></li>

<li><a href="/genres/News" onclick="showLoadIndicator();">News</a></li>

<li><a href="/genres/Politics" onclick="showLoadIndicator();">Politics</a></li>

<li><a href="/genres/Public%20Broadcasting" onclick="showLoadIndicator();">Public Broadcasting</a></li>

</ul>

<ul class="index_4">

<li><a href="/genres/Religion%20%26%20Spirituality" onclick="showLoadIndicator();">Religion &amp; Spirituality</a></li>

<li><a href="/genres/Science" onclick="showLoadIndicator();">Science</a></li>

<li><a href="/genres/Sports" onclick="showLoadIndicator();">Sports</a></li>

<li><a href="/genres/Technology" onclick="showLoadIndicator();">Technology</a></li>

<li><a href="/genres/Transportation" onclick="showLoadIndicator();">Transportation</a></li>

<li><a href="/genres/Travel" onclick="showLoadIndicator();">Travel</a></li>

<li><a href="/genres/Video%20Games" onclick="showLoadIndicator();">Video Games</a></li>

</ul>

</div>
<br style="clear: both;">
</div>
</div>
</div>
</div>

</div>

<ul class="newVideos" style="display: block;">

<li>

<div class="thumb show_hover hover_12908">
<a href="/feeds/12908" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12908.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12908">БочарикТВ</a></p>
</li>

<li>

<div class="thumb show_hover hover_12913">
<a href="/feeds/12913" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12913.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12913">myD3SIGNS</a></p>
</li>

<li>

<div class="thumb show_hover hover_12921">
<a href="/feeds/12921" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12921.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12921"> LandTrust For Central North Carolina</a></p>
</li>

<li>

<div class="thumb show_hover hover_12914">
<a href="/feeds/12914" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12914.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12914">Terravino</a></p>
</li>

<li>

<div class="thumb show_hover hover_12918">
<a href="/feeds/12918" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12918.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12918">Easy to Assemble</a></p>
</li>

<li>

<div class="thumb show_hover hover_12907">
<a href="/feeds/12907" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12907.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12907">ПрожекторПерисХилтон</a></p>
</li>

<li>

<div class="thumb show_hover hover_12906">
<a href="/feeds/12906" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12906.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12906">DeceasedCrab</a></p>
</li>

<li>

<div class="thumb show_hover hover_12905">
<a href="/feeds/12905" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12905.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12905">Pawsitive Vybe</a></p>
</li>

<li>

<div class="thumb show_hover hover_12922">
<a href="/feeds/12922" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12922.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12922">Brooklyn Museum</a></p>
</li>

<li>

<div class="thumb show_hover hover_12877">
<a href="/feeds/12877" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12877.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12877">SharetTV</a></p>
</li>

<li>

<div class="thumb show_hover hover_12895">
<a href="/feeds/12895" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12895.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12895">BK CHOWDER SURFER</a></p>
</li>

<li>

<div class="thumb show_hover hover_12894">
<a href="/feeds/12894" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12894.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12894">BK CHOWDER SURFER</a></p>
</li>

<li>

<div class="thumb show_hover hover_12889">
<a href="/feeds/12889" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12889.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12889">Jai Hind</a></p>
</li>

<li>

<div class="thumb show_hover hover_12892">
<a href="/feeds/12892" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12892.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12892">The Inventor Lady</a></p>
</li>

<li>

<div class="thumb show_hover hover_12899">
<a href="/feeds/12899" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12899.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12899">Alien Documentary</a></p>
</li>

<li>

<div class="thumb show_hover hover_12886">
<a href="/feeds/12886" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12886.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12886">Brave New Films</a></p>
</li>

<li>

<div class="thumb show_hover hover_12887">
<a href="/feeds/12887" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12887.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12887">Heels on Wheels TV</a></p>
</li>

<li>

<div class="thumb show_hover hover_12880">
<a href="/feeds/12880" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12880.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12880">Sermon Network Featured Sermons</a></p>
</li>

<li>

<div class="thumb show_hover hover_12876">
<a href="/feeds/12876" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12876.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12876">HeskemTV</a></p>
</li>

<li>

<div class="thumb show_hover hover_12883">
<a href="/feeds/12883" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12883.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12883">Volare in parapendio</a></p>
</li>

</ul>

<ul class="newVideos">

<li>

<div class="thumb show_hover hover_9037">
<a href="/sites/9037" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9037.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/9037">The Simpsons</a></p>
</li>

<li>

<div class="thumb show_hover hover_12331">
<a href="/feeds/12331" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12331.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12331">Earth-Touch HD Stories</a></p>
</li>

<li>

<div class="thumb show_hover hover_3153">
<a href="/feeds/3153" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3153.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3153">Discovery Channel Video Podcasts</a></p>
</li>

<li>

<div class="thumb show_hover hover_1685">
<a href="/feeds/1685" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/1685.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/1685">Timo&#39;s HD Movie Trailers</a></p>
</li>

<li>

<div class="thumb show_hover hover_12889">
<a href="/feeds/12889" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12889.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12889">Jai Hind</a></p>
</li>

<li>

<div class="thumb show_hover hover_9439">
<a href="/feeds/9439" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9439.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9439">TEDTalks (hd)</a></p>
</li>

<li>

<div class="thumb show_hover hover_8978">
<a href="/sites/8978" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8978.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/8978">The Daily Show with Jon Stewart</a></p>
</li>

<li>

<div class="thumb show_hover hover_8971">
<a href="/sites/8971" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8971.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/8971">Heroes</a></p>
</li>

<li>

<div class="thumb show_hover hover_3898">
<a href="/feeds/3898" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3898.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3898">Tekzilla (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_12861">
<a href="/feeds/12861" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12861.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12861">LandlineTV (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_10728">
<a href="/feeds/10728" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/10728.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/10728">Ubuntu Linux Tutorials by gotbletu</a></p>
</li>

<li>

<div class="thumb show_hover hover_79">
<a href="/feeds/79" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/79.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/79">MAKE Magazine - Videos!</a></p>
</li>

<li>

<div class="thumb show_hover hover_9767">
<a href="/feeds/9767" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9767.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9767">Mac App Guide (HD video)</a></p>
</li>

<li>

<div class="thumb show_hover hover_8968">
<a href="/sites/8968" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8968.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/8968">The Office</a></p>
</li>

<li>

<div class="thumb show_hover hover_12918">
<a href="/feeds/12918" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12918.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12918">Easy to Assemble</a></p>
</li>

<li>

<div class="thumb show_hover hover_2014">
<a href="/feeds/2014" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2014.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2014">TED Talks</a></p>
</li>

<li>

<div class="thumb show_hover hover_5671">
<a href="/feeds/5671" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5671.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5671">Linux Journal</a></p>
</li>

<li>

<div class="thumb show_hover hover_12826">
<a href="/feeds/12826" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12826.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12826">The Mobile Classroom</a></p>
</li>

<li>

<div class="thumb show_hover hover_12908">
<a href="/feeds/12908" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12908.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12908">БочарикТВ</a></p>
</li>

<li>

<div class="thumb show_hover hover_5320">
<a href="/feeds/5320" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5320.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5320">GeekBrief.TV | Extra Large Format</a></p>
</li>

</ul>

<ul class="newVideos">

<li>

<div class="thumb show_hover hover_12331">
<a href="/feeds/12331" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12331.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12331">Earth-Touch HD Stories</a></p>
</li>

<li>

<div class="thumb show_hover hover_1685">
<a href="/feeds/1685" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/1685.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/1685">Timo&#39;s HD Movie Trailers</a></p>
</li>

<li>

<div class="thumb show_hover hover_9439">
<a href="/feeds/9439" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9439.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9439">TEDTalks (hd)</a></p>
</li>

<li>

<div class="thumb show_hover hover_3898">
<a href="/feeds/3898" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3898.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3898">Tekzilla (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_12861">
<a href="/feeds/12861" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12861.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12861">LandlineTV (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_79">
<a href="/feeds/79" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/79.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/79">MAKE Magazine - Videos!</a></p>
</li>

<li>

<div class="thumb show_hover hover_9767">
<a href="/feeds/9767" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9767.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9767">Mac App Guide (HD video)</a></p>
</li>

<li>

<div class="thumb show_hover hover_12918">
<a href="/feeds/12918" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12918.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12918">Easy to Assemble</a></p>
</li>

<li>

<div class="thumb show_hover hover_5320">
<a href="/feeds/5320" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5320.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5320">GeekBrief.TV | Extra Large Format</a></p>
</li>

<li>

<div class="thumb show_hover hover_5891">
<a href="/feeds/5891" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5891.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5891">Living in the Future (Eco Living)</a></p>
</li>

<li>

<div class="thumb show_hover hover_12913">
<a href="/feeds/12913" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12913.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12913">myD3SIGNS</a></p>
</li>

<li>

<div class="thumb show_hover hover_12886">
<a href="/feeds/12886" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12886.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12886">Brave New Films</a></p>
</li>

<li>

<div class="thumb show_hover hover_6162">
<a href="/feeds/6162" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/6162.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/6162">Scam School (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_3490">
<a href="/feeds/3490" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3490.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3490">NASA&#39;s Jet Propulsion Lab (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_5520">
<a href="/feeds/5520" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5520.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5520">Diggnation (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_4105">
<a href="/feeds/4105" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/4105.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/4105">A-Z of Bushcraft &amp; Survival Skills</a></p>
</li>

<li>

<div class="thumb show_hover hover_9940">
<a href="/feeds/9940" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9940.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9940">Earth-Touch Marine Channel HD</a></p>
</li>

<li>

<div class="thumb show_hover hover_4688">
<a href="/feeds/4688" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/4688.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/4688">Understanding Adobe Photoshop</a></p>
</li>

<li>

<div class="thumb show_hover hover_5322">
<a href="/feeds/5322" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5322.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5322">The Totally Rad Show (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_6305">
<a href="/feeds/6305" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/6305.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/6305">FashionStock.TV</a></p>
</li>

</ul>

<ul id="genreVideos" class="newVideos" style="display: none;">


<li class="left">
<h3>

<a href="/genres/Activism" onclick="showLoadIndicator();">Activism</a>

<span class="dash"></span>
<a href="/genres/Activism">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_2065">
<a href="/feeds/2065" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2065.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2065">LIFE Voices</a></p>
</li>

<li>

<div class="thumb show_hover hover_2481">
<a href="/feeds/2481" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2481.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2481">The Alex Jones Show</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Animals" onclick="showLoadIndicator();">Animals</a>

<span class="dash"></span>
<a href="/genres/Animals">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_12331">
<a href="/feeds/12331" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12331.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12331">Earth-Touch HD Stories</a></p>
</li>

<li>

<div class="thumb show_hover hover_4294">
<a href="/feeds/4294" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/4294.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/4294">Earth-Touch.com | Wildlife HD video, Weekly highlights podcast</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Animation" onclick="showLoadIndicator();">Animation</a>

<span class="dash"></span>
<a href="/genres/Animation">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9037">
<a href="/sites/9037" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9037.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/9037">The Simpsons</a></p>
</li>

<li>

<div class="thumb show_hover hover_9036">
<a href="/sites/9036" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9036.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/9036">Spider-Man</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Arts" onclick="showLoadIndicator();">Arts</a>

<span class="dash"></span>
<a href="/genres/Arts">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9439">
<a href="/feeds/9439" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9439.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9439">TEDTalks (hd)</a></p>
</li>

<li>

<div class="thumb show_hover hover_10657">
<a href="/feeds/10657" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/10657.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/10657">Film Riot (HD)</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Blogs" onclick="showLoadIndicator();">Blogs</a>

<span class="dash"></span>
<a href="/genres/Blogs">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_7750">
<a href="/feeds/7750" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/7750.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/7750">Hak5 (Large Quicktime)</a></p>
</li>

<li>

<div class="thumb show_hover hover_7524">
<a href="/feeds/7524" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/7524.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/7524">PRI&#39;s The World: International News from BBC/PRI/WGBH</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Business" onclick="showLoadIndicator();">Business</a>

<span class="dash"></span>
<a href="/genres/Business">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_6446">
<a href="/feeds/6446" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/6446.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/6446">Harvard Business Video IdeaCast</a></p>
</li>

<li>

<div class="thumb show_hover hover_3496">
<a href="/feeds/3496" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3496.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3496">CNBC&#39;s Mad Money w/ Jim Cramer - The Lightning Round</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Comedy" onclick="showLoadIndicator();">Comedy</a>

<span class="dash"></span>
<a href="/genres/Comedy">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_8978">
<a href="/sites/8978" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8978.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/8978">The Daily Show with Jon Stewart</a></p>
</li>

<li>

<div class="thumb show_hover hover_2145">
<a href="/feeds/2145" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2145.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2145">Tiki Bar TV (video)</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Courseware" onclick="showLoadIndicator();">Courseware</a>

<span class="dash"></span>
<a href="/genres/Courseware">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9741">
<a href="/feeds/9741" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9741.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9741">Mac Learning Environments - Webcasts</a></p>
</li>

<li>

<div class="thumb show_hover hover_10953">
<a href="/feeds/10953" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/10953.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/10953">CPA Exam Preparation Podcast</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Education" onclick="showLoadIndicator();">Education</a>

<span class="dash"></span>
<a href="/genres/Education">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9439">
<a href="/feeds/9439" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9439.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9439">TEDTalks (hd)</a></p>
</li>

<li>

<div class="thumb show_hover hover_7613">
<a href="/feeds/7613" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/7613.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/7613">Sneekylinux</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Environment" onclick="showLoadIndicator();">Environment</a>

<span class="dash"></span>
<a href="/genres/Environment">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_12331">
<a href="/feeds/12331" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12331.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12331">Earth-Touch HD Stories</a></p>
</li>

<li>

<div class="thumb show_hover hover_2531">
<a href="/feeds/2531" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2531.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2531">Finding America HD 720p Video Podcast</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Family" onclick="showLoadIndicator();">Family</a>

<span class="dash"></span>
<a href="/genres/Family">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_8973">
<a href="/sites/8973" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8973.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/8973">24</a></p>
</li>

<li>

<div class="thumb show_hover hover_8989">
<a href="/sites/8989" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8989.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/8989">Angel</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Food" onclick="showLoadIndicator();">Food</a>

<span class="dash"></span>
<a href="/genres/Food">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_4105">
<a href="/feeds/4105" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/4105.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/4105">A-Z of Bushcraft &amp; Survival Skills</a></p>
</li>

<li>

<div class="thumb show_hover hover_664">
<a href="/feeds/664" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/664.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/664">Winelibrary TV</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Government" onclick="showLoadIndicator();">Government</a>

<span class="dash"></span>
<a href="/genres/Government">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_8875">
<a href="/feeds/8875" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8875.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/8875">President Obama&#39;s Weekly Address &amp; Key Speeches</a></p>
</li>

<li>

<div class="thumb show_hover hover_2481">
<a href="/feeds/2481" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2481.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2481">The Alex Jones Show</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Health" onclick="showLoadIndicator();">Health</a>

<span class="dash"></span>
<a href="/genres/Health">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_2648">
<a href="/feeds/2648" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2648.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2648">Midwest Teen Sex Show</a></p>
</li>

<li>

<div class="thumb show_hover hover_10032">
<a href="/feeds/10032" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/10032.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/10032">Health Hyperlink, Inc.</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/International" onclick="showLoadIndicator();">International</a>

<span class="dash"></span>
<a href="/genres/International">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_12331">
<a href="/feeds/12331" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12331.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12331">Earth-Touch HD Stories</a></p>
</li>

<li>

<div class="thumb show_hover hover_7660">
<a href="/feeds/7660" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/7660.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/7660">HeadMix</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Kids" onclick="showLoadIndicator();">Kids</a>

<span class="dash"></span>
<a href="/genres/Kids">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_12644">
<a href="/feeds/12644" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12644.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12644">Free Magic Tricks</a></p>
</li>

<li>

<div class="thumb show_hover hover_10928">
<a href="/feeds/10928" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/10928.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/10928">NOS Jeugdjournaal</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Linux%20%26%20Free%20Software" onclick="showLoadIndicator();">Linux &amp; Free Software</a>

<span class="dash"></span>
<a href="/genres/Linux%20%26%20Free%20Software">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_5671">
<a href="/feeds/5671" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5671.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5671">Linux Journal</a></p>
</li>

<li>

<div class="thumb show_hover hover_8098">
<a href="/feeds/8098" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8098.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/8098">Category5 Technology TV - DIVX</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Local" onclick="showLoadIndicator();">Local</a>

<span class="dash"></span>
<a href="/genres/Local">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_12921">
<a href="/feeds/12921" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12921.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12921"> LandTrust For Central North Carolina</a></p>
</li>

<li>

<div class="thumb show_hover hover_12742">
<a href="/feeds/12742" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12742.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12742">Stuck in Vermont</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Mac" onclick="showLoadIndicator();">Mac</a>

<span class="dash"></span>
<a href="/genres/Mac">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9767">
<a href="/feeds/9767" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9767.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9767">Mac App Guide (HD video)</a></p>
</li>

<li>

<div class="thumb show_hover hover_610">
<a href="/feeds/610" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/610.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/610">Ask the Techies</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Movies%20%26%20TV" onclick="showLoadIndicator();">Movies &amp; TV</a>

<span class="dash"></span>
<a href="/genres/Movies%20%26%20TV">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9037">
<a href="/sites/9037" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9037.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/9037">The Simpsons</a></p>
</li>

<li>

<div class="thumb show_hover hover_8971">
<a href="/sites/8971" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8971.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/8971">Heroes</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Music" onclick="showLoadIndicator();">Music</a>

<span class="dash"></span>
<a href="/genres/Music">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9075">
<a href="/sites/9075" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9075.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/sites/9075">The Crow: Stairway To Heaven</a></p>
</li>

<li>

<div class="thumb show_hover hover_3833">
<a href="/feeds/3833" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3833.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3833">Philharmonia Orchestra Video Podcasts</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/News" onclick="showLoadIndicator();">News</a>

<span class="dash"></span>
<a href="/genres/News">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_3898">
<a href="/feeds/3898" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3898.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3898">Tekzilla (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_7594">
<a href="/feeds/7594" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/7594.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/7594">Tekzilla Daily Tip</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Politics" onclick="showLoadIndicator();">Politics</a>

<span class="dash"></span>
<a href="/genres/Politics">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_2014">
<a href="/feeds/2014" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2014.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2014">TED Talks</a></p>
</li>

<li>

<div class="thumb show_hover hover_3729">
<a href="/feeds/3729" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3729.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3729">UChannel</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Public%20Broadcasting" onclick="showLoadIndicator();">Public Broadcasting</a>

<span class="dash"></span>
<a href="/genres/Public%20Broadcasting">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_627">
<a href="/feeds/627" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/627.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/627">NOVA | PBS</a></p>
</li>

<li>

<div class="thumb show_hover hover_2564">
<a href="/feeds/2564" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2564.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2564">FRONTLINE/World | PBS</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Religion%20%26%20Spirituality" onclick="showLoadIndicator();">Religion &amp; Spirituality</a>

<span class="dash"></span>
<a href="/genres/Religion%20%26%20Spirituality">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_3059">
<a href="/feeds/3059" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/3059.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/3059">Pat Condell</a></p>
</li>

<li>

<div class="thumb show_hover hover_12458">
<a href="/feeds/12458" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/12458.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/12458">TreVelocita&#39;s Channel</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Science" onclick="showLoadIndicator();">Science</a>

<span class="dash"></span>
<a href="/genres/Science">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_79">
<a href="/feeds/79" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/79.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/79">MAKE Magazine - Videos!</a></p>
</li>

<li>

<div class="thumb show_hover hover_5248">
<a href="/feeds/5248" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5248.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5248">TED Theme: A Greener Future?</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Sports" onclick="showLoadIndicator();">Sports</a>

<span class="dash"></span>
<a href="/genres/Sports">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_5514">
<a href="/feeds/5514" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5514.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5514">ESPN: Around the Horn</a></p>
</li>

<li>

<div class="thumb show_hover hover_2253">
<a href="/feeds/2253" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/2253.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/2253">VilaWeb TV</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Technology" onclick="showLoadIndicator();">Technology</a>

<span class="dash"></span>
<a href="/genres/Technology">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_9439">
<a href="/feeds/9439" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/9439.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/9439">TEDTalks (hd)</a></p>
</li>

<li>

<div class="thumb show_hover hover_5322">
<a href="/feeds/5322" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5322.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5322">The Totally Rad Show (HD)</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Transportation" onclick="showLoadIndicator();">Transportation</a>

<span class="dash"></span>
<a href="/genres/Transportation">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_6144">
<a href="/feeds/6144" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/6144.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/6144">BMW TV</a></p>
</li>

<li>

<div class="thumb show_hover hover_8861">
<a href="/feeds/8861" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/8861.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/8861">MOTORZ HD</a></p>
</li>

</ul>
</li>



<li class="right">
<h3>

<a href="/genres/Travel" onclick="showLoadIndicator();">Travel</a>

<span class="dash"></span>
<a href="/genres/Travel">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_4105">
<a href="/feeds/4105" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/4105.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/4105">A-Z of Bushcraft &amp; Survival Skills</a></p>
</li>

<li>

<div class="thumb show_hover hover_1683">
<a href="/feeds/1683" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/1683.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/1683">Unterwegs</a></p>
</li>

</ul>
</li>



<li class="left">
<h3>

<a href="/genres/Video%20Games" onclick="showLoadIndicator();">Video Games</a>

<span class="dash"></span>
<a href="/genres/Video%20Games">View All</a>
</h3>
<ul>

<li>

<div class="thumb show_hover hover_5322">
<a href="/feeds/5322" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/5322.jpeg); width: 97px; height: 65px;">

<img class="hd_tag_tiny"
src="http://s3.miroguide.com/static/images/ico_hd_tag_tiny.png" alt="">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/5322">The Totally Rad Show (HD)</a></p>
</li>

<li>

<div class="thumb show_hover hover_4863">
<a href="/feeds/4863" onclick="showLoadIndicator();">
<span class="thumb corners"
style="background: url(http://s3.miroguide.com/static/media/thumbnails/97x65/4863.jpeg); width: 97px; height: 65px;">

</span>
</a>
</div>
<p><a href="http://www.miroguide.com/feeds/4863">X-Play&#39;s Daily Video Podcast</a></p>
</li>

</ul>
</li>


</ul>

<a class="more_link" href="/new/" onclick="showLoadIndicator();">More New Shows >></a>

<script type="text/javascript">

tabs = $('.resultsCount .heading');

function selectTab(link, text) {
$("#contentSmall .selected").removeClass('selected');
link.addClass('selected');
if (text === undefined) {
$("#contentSmall .more_link").hide();
} else {
if (link[0].nodeName === 'A') {
href = link.attr('href');
} else {
href = link.find('a:first').attr('href');
}
$('#contentSmall .more_link').attr('href', href).text(text + ' >>').show();
}
};

tabs.eq(0).click(function() {
selectTab($(this), "More New Shows");
$('#genreVideos').hide();
$('.newVideos').hide().eq(0).show();
location.hash = "#new"
return false;
});
tabs.eq(1).click(function() {
selectTab($(this), "More Popular Shows");
$('#genreVideos').hide();
$('.newVideos').hide().eq(1).show();
location.hash = "#popular";
return false;
});
tabs.eq(2).click(function() {
selectTab($(this), "More HD Shows");
$('#genreVideos').hide();
$('.newVideos').hide().eq(2).show();
location.hash = "#hd";
return false;
});
tabs.eq(3).children('a').click(function() {
selectTab($(this));
location.hash = "#genres";
$('.newVideos').hide();
$('#genreVideos').show();
return false;
});

if (location.hash === '#popular') {
tabs.eq(1).click();
} else if (location.hash === "#hd") {
tabs.eq(2).click();
} else if (location.hash === '#genres') {
tabs.eq(3).children('a').click();
}
</script>

</div><!--container-->
</div>
</div>
</div>


  <div id="footer"><a href="http://www.getmiro.com">Get Miro!</a> - <a href="/dmca" onclick="showLoadIndicator();">DMCA Information</a> - <a href="/submit/" onclick="showLoadIndicator();">Submit a Feed</a></div>
  

  <div id="load-indicator">
    <img alt="Loading..."
         src="http://s3.miroguide.com/static/images/load-indicator.gif">
  </div>
<!-- Start Quantcast tag --> <script type="text/javascript"> _qoptions={ qacct:"p-f1oJI0C-85pYg" }; </script> <script type="text/javascript" src="//secure.quantserve.com/quant.js"></script> <noscript> <a href="http://www.quantcast.com/p-f1oJI0C-85pYg" target="_blank"><img src="//secure.quantserve.com/pixel/p-f1oJI0C-85pYg.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/></a> </noscript> <!-- End Quantcast tag -->

</body>
</html>
