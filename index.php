<?php
/**
 * @file
 * index.php by vp7
 * Based on https://github.com/vp7/Custom-Podcast-feed
 * Sample script for Custom-Podcast-feed
 * Farzad YousefiF7D
 * https://github.com/F7D
 * vp7@usa.com
 */

header('Content-Type: text/xml; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: Sun, 19 Nov 1978 05:00:00 GMT');

$now=date('r');
?>
<?php echo '<?'; ?>xml version="1.0"<?php echo '?>'; ?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	xmlns:georss="http://www.georss.org/georss" 
	xmlns:geo="http://www.w3.org/2003/01/geo/wgs84_pos#" 
	xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd"
    xmlns:media="http://search.yahoo.com/mrss/">
	<channel>
	
  <title>7| Custom-Podcast-feed</title>
  <description>New description </description>
  <copyright>VP7 &amp;F.Yousefi ©20<?php echo date('y');?></copyright>
  <itunes:author>F7D</itunes:author>
  <itunes:owner>
    <itunes:name>VP7 </itunes:name>
    <itunes:email> VP7@usa.com </itunes:email>
  </itunes:owner>
  <itunes:category text="Religion &amp; Spirituality">
    <itunes:category text="Christianity"/>
  </itunes:category>
  <itunes:explicit>clean</itunes:explicit>
  <itunes:summary>7Radio is a new Podcast for You.</itunes:summary>
  <link>http://vp7.us</link>
  <itunes:image href="https://vp7.us/display/files/favicon/apple-touch-icon-180x180.png"/>
  <pubDate><?php echo $now; ?></pubDate>
  <ttl> 480 </ttl>
  <language>en</language>
<?php
$post = $_GET['post'];
$url = "**YOUR FIRST PODCAST URL**";
$rss = simplexml_load_file($url);
$img = "https://material.io/guidelines/static/spec/images/callouts/download.svg";
$a = 'VP7';
$b = 'F7D';
$blog = "https://7ip.ir";
if (!isset ($post)) {
$items = $rss->channel->item;
foreach($items as $item)
{
$title = $item->title;
$link = $item->link;
$enclosure = $item->enclosure;
$description = $item->description;?>
 <item>
    <title> <?php echo $item->title; ?> </title>
    <itunes:author> <?php echo $a; ?> </itunes:author>
    <dc:creator> <?php echo $b; ?> </dc:creator>
    <description> <?php echo $item->description; ?> </description>
	<content:encoded xmlns:content="http://purl.org/rss/1.0/modules/content/"><![CDATA[<p><a href="<?php echo $item->enclosure['url']; ?>">Download</a><br />
<!--[if lt IE 9]><script>document.createElement('audio');</script><![endif]-->
<audio preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="<?php echo $item->enclosure['url']; ?>"/><a href="<?php echo $item->enclosure['url']; ?>"><?php echo $item->title; ?></a></audio></p><p><a href="<?php echo $item->enclosure['url']; ?>?dl=1"><img src="<?php echo $img ; ?>" alt="Download" border="1" height="43" width="43" /></a><img src="https://placeholdit.imgix.net/~text?h=43&amp;&amp;txt=<?php echo $item->title;?>&amp;bg=%234ab866&amp;txtsize=17&amp;txtclr=7" border="1" /></p>
]]></content:encoded>
<pubDate><?php echo $item->$description;?> </pubDate>
   <media:content url="<?php echo $img;?>" medium="image"></media:content> 
      <enclosure url="<?php echo $item->enclosure['url']; ?>" length="<?php echo $item->enclosure['length']; ?>" type="audio/mpeg" />
    <guid isPermaLink="true"><?php echo $blog; ?> </guid>
	
  </item>
<?php     }
}

?>
 </channel>
</rss>
<?php
/**
 * @file
 * index.php by vp7
 * Based on https://github.com/vp7/Custom-Podcast-feed
 * Sample script for Custom-Podcast-feed
 * Farzad YousefiF7D
 * https://github.com/F7D
 * vp7@usa.com
 */

header('Content-Type: text/xml; charset=UTF-8');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0');
header('Pragma: no-cache');
header('Expires: Sun, 19 Nov 1978 05:00:00 GMT');

$now=date('r');
?>
<?php echo '<?'; ?>xml version="1.0"<?php echo '?>'; ?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	xmlns:georss="http://www.georss.org/georss" 
	xmlns:geo="http://www.w3.org/2003/01/geo/wgs84_pos#" 
	xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd"
    xmlns:media="http://search.yahoo.com/mrss/">
	<channel>
	
  <title>7| Custom-Podcast-feed</title>
  <description>New description </description>
  <copyright>VP7 &amp;F.Yousefi ©20<?php echo date('y');?></copyright>
  <itunes:author>F7D</itunes:author>
  <itunes:owner>
    <itunes:name>VP7 </itunes:name>
    <itunes:email> VP7@usa.com </itunes:email>
  </itunes:owner>
  <itunes:category text="Religion &amp; Spirituality">
    <itunes:category text="Christianity"/>
  </itunes:category>
  <itunes:explicit>clean</itunes:explicit>
  <itunes:summary>7Radio is a new Podcast for You.</itunes:summary>
  <link>http://vp7.us</link>
  <itunes:image href="https://vp7.us/display/files/favicon/apple-touch-icon-180x180.png"/>
  <pubDate><?php echo $now; ?></pubDate>
  <ttl> 480 </ttl>
  <language>en</language>
<?php
$post = $_GET['post'];
$url = "**YOUR FIRST PODCAST URL**";
$rss = simplexml_load_file($url);
$img = "https://material.io/guidelines/static/spec/images/callouts/download.svg";
$a = 'VP7';
$b = 'F7D';
$blog = "https://7ip.ir";
if (!isset ($post)) {
$items = $rss->channel->item;
foreach($items as $item)
{
$title = $item->title;
$link = $item->link;
$enclosure = $item->enclosure;
$description = $item->description;?>
 <item>
    <title> <?php echo $item->title; ?> </title>
    <itunes:author> <?php echo $a; ?> </itunes:author>
    <dc:creator> <?php echo $b; ?> </dc:creator>
    <description> <?php echo $item->description; ?> </description>
	<content:encoded xmlns:content="http://purl.org/rss/1.0/modules/content/"><![CDATA[<p><a href="<?php echo $item->enclosure['url']; ?>">Download</a><br />
<!--[if lt IE 9]><script>document.createElement('audio');</script><![endif]-->
<audio preload="none" style="width: 100%;" controls="controls"><source type="audio/mpeg" src="<?php echo $item->enclosure['url']; ?>"/><a href="<?php echo $item->enclosure['url']; ?>"><?php echo $item->title; ?></a></audio></p><p><a href="<?php echo $item->enclosure['url']; ?>?dl=1"><img src="<?php echo $img ; ?>" alt="Download" border="1" height="43" width="43" /></a><img src="https://placeholdit.imgix.net/~text?h=43&amp;&amp;txt=<?php echo $item->title;?>&amp;bg=%234ab866&amp;txtsize=17&amp;txtclr=7" border="1" /></p>
]]></content:encoded>
<pubDate><?php echo $item->$description;?> </pubDate>
   <media:content url="<?php echo $img;?>" medium="image"></media:content> 
      <enclosure url="<?php echo $item->enclosure['url']; ?>" length="<?php echo $item->enclosure['length']; ?>" type="audio/mpeg" />
    <guid isPermaLink="true"><?php echo $blog; ?> </guid>
	
  </item>
<?php     }
}

?>
 </channel>
</rss>
