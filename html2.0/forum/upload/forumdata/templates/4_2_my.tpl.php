<? if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('my');
0
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/my.htm', '/var/www/html/forum/upload/./templates/default/header.htm', 1378870885, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/my.htm', '/var/www/html/forum/upload/./templates/default/personal_navbar.htm', 1378870885, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/my.htm', '/var/www/html/forum/upload/./templates/default/footer.htm', 1378870885, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/my.htm', '/var/www/html/forum/upload/./templates/default/jsmenu.htm', 1378870885, '2', './templates/colors')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$charset?>" />
<title><?=$navtitle?> <?=$bbname?> <?=$seotitle?> - Powered by Discuz!</title>
<?=$seohead?>
<meta name="keywords" content="<?=$metakeywords?><?=$seokeywords?>" />
<meta name="description" content="<?=$metadescription?> <?=$bbname?> <?=$seodescription?> - Discuz! Board" />
<meta name="generator" content="Discuz! <?=$version?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2009 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link rel="archives" title="<?=$bbname?>" href="<?=$boardurl?>archiver/" />
<?=$rsshead?>
<?=$extrahead?><link rel="stylesheet" type="text/css" href="forumdata/cache/style_<?=STYLEID?>_common.css?<?=VERHASH?>" /><link rel="stylesheet" type="text/css" href="forumdata/cache/scriptstyle_<?=STYLEID?>_<?=CURSCRIPT?>.css?<?=VERHASH?>" />
<? if($forum['ismoderator']) { ?>
<link href="forumdata/cache/style_4_moderator.css?g1J" rel="stylesheet" type="text/css" />
<? } ?><script type="text/javascript">var STYLEID = '<?=STYLEID?>', IMGDIR = '<?=IMGDIR?>', VERHASH = '<?=VERHASH?>', charset = '<?=$charset?>', discuz_uid = <?=$discuz_uid?>, cookiedomain = '<?=$cookiedomain?>', cookiepath = '<?=$cookiepath?>', attackevasive = '<?=$attackevasive?>', disallowfloat = '<?=$disallowfloat?>', creditnotice = '<? if($creditnotice) { ?><?=$creditnames?><? } ?>', <? if(in_array(CURSCRIPT, array('viewthread', 'forumdisplay'))) { ?>gid = parseInt('<?=$thisgid?>')<? } elseif(CURSCRIPT == 'index') { ?>gid = parseInt('<?=$gid?>')<? } else { ?>gid = 0<? } ?>, fid = parseInt('<?=$fid?>'), tid = parseInt('<?=$tid?>')</script>
<script src="<?=$jspath?>common.js?<?=VERHASH?>" type="text/javascript"></script>
</head>
<style type="text/css">
*{
text-shadow: 1px 0 1px #ddd;
font-family: Verdana, Geneva, sans-serif;
font-size:14px;
}
html{background-color:#fefefe;}
body{width:1024px;margin:0 auto;}
#onlinelist dt, #onlinelist dd  ,.forumlinks, .forumimglink, .forumtxtlink, .list td, .list th{border-top:1px dotted #ddd;}
.postbtn, .replybtn{background:none;background-color:#cc0000;}
.postbtn a, .replybtn a{letter-spacing:1px;padding-left:0;}
#nav{background:none;text-indent:0;}
#umenu{margin-top:3.65em;}
#umenu a{color:#999;margin:0;}
.navul a:hover,#footlink a:hover,h2 a:hover{text-decoration:none;}
#header .wrap{padding:15px 0 20px;}
#header .wrap.s_clear{width:100%;}
.wrap.s_clear h2 a img{width:92px;height:92px;}
.wrap.s_clear h2 a span,.wrap.s_clear h2 a small{
position:relative;
top:-54px;
left:-4px;
}
.wrap.s_clear h2 a span{font-size:2em;color: #ddd;
text-shadow: 1px 0 1px #ddd;
-webkit-text-shadow: 1px 0 1px #ddd;
-moz-text-shadow: 1px 0 1px #ddd;
font-weight: bold;
}
.wrap.s_clear h2 a small{
display:inline-block;
font-size: .8em;
color: #666;
font-weight: normal;
margin-top: 5px;
margin-left:96px;
}
.navul{display:inline-block;margin:7.35em 0 2em;float:right;}
.navul li{float:left;}
.navul li a{font-size: 1.2em;
padding: 3px 8px;margin:0 20px;}
.navul li a.current{margin-right:0;}
.navul li a:hover, .navul li a.current {
color: #c00;
border-bottom: 3px solid #c00;
transition: all .3s;
-webkit-transition: all .3s;
-moz-transition: all .3s;
}
.t_l, .t_c, .t_r, .m_l, .m_r, .b_l, .b_c, .b_r{background-color:#cc0000;}
.nofloat{background-color:#fefefe;}
input{border:1px solid #ccc;padding:8px 8px;}
</style>
<body id="<?=CURSCRIPT?>" onkeydown="if(event.keyCode==27) return false;">

<div id="append_parent"></div><div id="ajaxwaitid"></div>

<div id="header">
<div class="wrap s_clear">
<h2><a href="<?=$indexname?>" title="forum of cs2c opensource community"><?=BOARDLOGO?> <span>blah blah</span><br /><small>Lorem ipsum dolor sit amet, consectetuer adipiscing</small></a></h2>
<ul class="navul">
<li><a href="http://10.1.50.7/osc/index.html">Community</a></li>
<li><a href="http://10.1.50.7/osc/html/project.html">Project</a></li>
<li><a href="http://10.1.50.7/mediawiki-1.21.2/index.php/CS2C_OS:Current_events">News</a></li>
<li><a href="http://10.1.50.7/mediawiki-1.21.2/index.php/Main_Page">Wiki</a></li>
<li><a href="http://10.1.50.7/forum/upload/index.php" class="current">Forum</a></li>
<li style="clear:left;"></li>

</ul>

<div id="umenu">
<? if($discuz_uid) { ?>
<cite><a href="space.php?uid=<?=$discuz_uid?>" class="noborder"><?=$discuz_userss?></a><? if($allowinvisible) { ?><span id="loginstatus"><? if(!empty($invisible)) { ?><a href="member.php?action=switchstatus" onclick="ajaxget(this.href, 'loginstatus');doane(event);">Invisible Mode</a><? } else { ?><a href="member.php?action=switchstatus" title="Switch to Invisible Mode" onclick="ajaxget(this.href, 'loginstatus');doane(event);">Online Mode</a><? } ?></span><? } ?></cite>
<span class="pipe">|</span>
<? if($ucappopen['UCHOME']) { ?>
<a href="<?=$uchomeurl?>/space.php?uid=<?=$discuz_uid?>" target="_blank">Space</a>
<? } elseif($ucappopen['XSPACE']) { ?>
<a href="<?=$xspaceurl?>/?uid-<?=$discuz_uid?>" target="_blank">Space</a>
<? } ?>
<a id="myprompt" href="notice.php" <? if($prompt) { ?>class="new" onmouseover="showMenu({'ctrlid':this.id})"<? } ?>>Notice</a>
<span id="myprompt_check"></span>
<a href="pm.php" id="pm_ntc" target="_blank">P.M.</a>
<? if($taskon) { ?>
<a id="task_ntc" <? if($doingtask) { ?>href="task.php?item=doing" class="new" title="You have unfinished Task"<? } else { ?>href="task.php"<? } ?> target="_blank">Task</a>
<? } ?>

<span class="pipe">|</span>
<a href="memcp.php">User CP</a>
<? if($discuz_uid && $adminid > 1) { ?><a href="modcp.php?fid=<?=$fid?>" target="_blank">Moderator CP</a><? } if($discuz_uid && $adminid == 1) { ?><a href="admincp.php" target="_blank">Admin CP</a><? } ?>
<a href="logging.php?action=logout&amp;formhash=<?=FORMHASH?>">Logout</a>
<? } elseif(!empty($_DCOOKIE['loginuser'])) { ?>
<cite><a id="loginuser" class="noborder"><?=$_DCOOKIE['loginuser']?></a></cite>
<a href="logging.php?action=login" onclick="showWindow('login', this.href);return false;">Activation</a>  
<a href="logging.php?action=logout&amp;formhash=<?=FORMHASH?>">Logout</a>
<? } else { ?>
<a href="logging.php?action=login" onclick="showWindow('login', this.href);return false;">Login </a>|<a href="<?=$regname?>" onclick="showWindow('register', this.href);return false;" class="noborder"> <?=$reglinkname?></a>

<? } ?>
</div>
<div id="ad_headerbanner"><? if($admode && !empty($advlist['headerbanner'])) { ?><?=$advlist['headerbanner']?><? } ?></div>
<div id="menu">
<ul>
<? if($_DCACHE['settings']['frameon'] > 0) { ?>
<li>
<span class="frameswitch">
<script type="text/javascript">
if(top == self) {
<? if(($_DCACHE['settings']['frameon'] == 2 && !defined('CACHE_FILE') && in_array(CURSCRIPT, array('index', 'forumdisplay', 'viewthread')) && (($_DCOOKIE['frameon'] == 'yes' && $_GET['frameon'] != 'no') || (empty($_DCOOKIE['frameon']) && empty($_GET['frameon']))))) { ?>
top.location = 'frame.php?frameon=yes&referer='+escape(self.location);
<? } ?>
document.write('<a href="frame.php?frameon=yes" target="_top" class="frameon">Column Mode<\/a>');
} else {
document.write('<a href="frame.php?frameon=no" target="_top" class="frameoff">Flat Mode<\/a>');
}
</script>
</span>
</li>
<? } if(is_array($navs)) { foreach($navs as $id => $nav) { if($id == 3) { if(!empty($plugins['jsmenu'])) { ?>
<?=$nav['nav']?>
<? } if(!empty($plugins['links'])) { if(is_array($plugins['links'])) { foreach($plugins['links'] as $module) { if(!$module['adminid'] || ($module['adminid'] && $adminid > 0 && $module['adminid'] >= $adminid)) { ?><li><?=$module['url']?></li><? } } } } } else { if(!$nav['level'] || ($nav['level'] == 1 && $discuz_uid) || ($nav['level'] == 2 && $adminid > 0) || ($nav['level'] == 3 && $adminid == 1)) { ?><?=$nav['nav']?><? } } } } if(in_array($BASEFILENAME, $navmns)) { $mnid = $BASEFILENAME; } elseif($navmngs[$BASEFILENAME]) { if(is_array($navmngs[$BASEFILENAME])) { foreach($navmngs[$BASEFILENAME] as $navmng) { if($navmng['0'] == array_intersect_assoc($navmng['0'], $_GET)) { $mnid = $navmng['1']; } } } } ?>
</ul>
<script type="text/javascript">
var currentMenu = $('mn_<?=$mnid?>') ? $('mn_<?=$mnid?>') : $('mn_<?=$navmns['0']?>');
currentMenu.parentNode.className = 'current';
</script>
</div>
<? if(!empty($stylejumpstatus)) { ?>
<script type="text/javascript">
function setstyle(styleid) {
str = unescape('<? echo str_replace("'", "\\'", urlencode($_SERVER['QUERY_STRING'])); ?>');
str = str.replace(/(^|&)styleid=\d+/ig, '');
str = (str != '' ? str + '&' : '') + 'styleid=' + styleid;
location.href = '<?=$BASESCRIPT?>?' + str;
}
</script>
<ul id="style_switch"><? if(is_array($styles)) { foreach($styles as $id => $stylename) { ?><li<? if($id == STYLEID) { ?> class="current"<? } ?>><a href="###" onclick="setstyle(<?=$id?>)" title="<?=$stylename?>" style="background: <?=$styleicons[$id]?>;"><?=$stylename?></a></li><? } } ?></ul>
<? } ?>
</div>
<div id="myprompt_menu" style="display:none" class="promptmenu">
<div class="promptcontent">
<ul class="s_clear"><? if(is_array($prompts)) { foreach($prompts as $promptkey => $promptdata) { if($promptkey) { ?><li<? if(!$promptdata['new']) { ?> style="display:none"<? } ?>><a id="prompt_<?=$promptkey?>" href="<? if($promptdata['script']) { ?><?=$promptdata['script']?><? } else { ?>notice.php?filter=<?=$promptkey?><? } ?>" target="_blank"><?=$promptdata['name']?> (<?=$promptdata['new']?>)</a></li><? } } } ?></ul>
</div>
</div>
</div>
<?=$pluginhooks['global_header']?>
<div id="nav">
<a href="<?=$indexname?>"><?=$bbname?></a> &raquo;
<? if($srchfid) { ?><a href="my.php?item=<?=$item?><?=$extra?>"><? } if(empty($item) || in_array($item, array('threads', 'posts', 'polls', 'tradestats', 'selltrades', 'buytrades', 'tradethreads', 'reward', 'activities', 'debate'))) { ?>My Posts
<? } elseif($item == 'favorites') { ?>Favorite
<? } elseif($item == 'attention') { ?>My Attention
<? } elseif($item == 'buddylist') { ?>Buddy<? } if($srchfid) { ?></a> &raquo; <?=$forumname?><? } ?>
</div>
<div id="wrap" class="wrap with_side s_clear">
<div class="main">
<div class="content">
<? if($item != 'buddylist') { ?>
<div class="itemtitle s_clear">
<? if(empty($item) || in_array($item, array('threads', 'posts', 'polls', 'tradestats', 'selltrades', 'buytrades', 'tradethreads', 'reward', 'activities', 'debate'))) { ?>
<h1>My Posts</h1>
<div class="right"><select onchange="location.href='my.php?item=<?=$item?><? if($type) { ?>&type=<?=$type?><? } if($filter) { ?>&filter=<?=$filter?><? } ?>&srchfid=' + this.value"><option>All forums</option><?=$forumselect?></select></div>
<ul>
<li<? if(empty($item) || $item == 'threads') { ?> class="current"<? } ?>><a href="my.php?item=threads<?=$extrafid?>" hidefocus="true"><span>Thread</span></a></li>
<li<? if($item == 'posts') { ?> class="current"<? } ?>><a href="my.php?item=posts<?=$extrafid?>" hidefocus="true"><span>Reply</span></a></li>
<li class="pipe">|</li>
<li id="polls" <? if($item == 'polls') { ?> class="current"<? } ?>><a href="my.php?item=polls" hidefocus="true"><span>Poll</span></a></li>
<li id="rewards" onmouseover="showMenu({'ctrlid':this.id})"<? if($item == 'reward') { ?> class="current"<? } ?>><a href="my.php?item=reward&amp;type=stats<?=$extrafid?>" hidefocus="true" class="dropmenu"><span>Reward</span></a></li>
<li id="activities" onmouseover="showMenu({'ctrlid':this.id})"<? if($item == 'activities') { ?> class="current"<? } ?>><a href="my.php?item=activities&amp;type=orig<?=$extrafid?>" hidefocus="true" class="dropmenu"><span>Activity</span></a></li>
<li id="debates" onmouseover="showMenu({'ctrlid':this.id})"<? if($item == 'debate') { ?> class="current"<? } ?>><a href="my.php?item=debate&amp;type=orig<?=$extrafid?>" hidefocus="true" class="dropmenu"><span>Debate</span></a></li>
<? if($tradeopen) { ?><li id="trades" onmouseover="showMenu({'ctrlid':this.id})"<? if(in_array($item, array('tradestats', 'selltrades', 'buytrades', 'tradethreads'))) { ?> class="current"<? } ?>><a href="my.php?item=tradestats<?=$extrafid?>" hidefocus="true" class="dropmenu"><span>Trade</span></a></li><? } ?>
<?=$pluginhooks['my_navextra']?>
</ul>
<? } elseif($item == 'favorites') { ?>
<h1>Favorite</h1>
<ul>
<li id="favorite_threads" <? if($type == 'thread') { ?> class="current"<? } ?>><a href="my.php?item=favorites&amp;type=thread<?=$extrafid?>"><span>Threads</span></a></li>
<li id="favorite_forums" <? if($type == 'forum') { ?> class="current"<? } ?>><a href="my.php?item=favorites&amp;type=forum<?=$extrafid?>"><span>Forums</span></a></li>
</ul>
<? } elseif($item == 'attention') { ?>
<h1>My Attention</h1>
<ul>
<li id="favorite_threads" <? if($type == 'thread') { ?> class="current"<? } ?>><a href="my.php?item=attention&amp;type=thread<?=$extrafid?>"><span>Threads</span></a></li>
<li id="favorite_forums" <? if($type == 'forum') { ?> class="current"<? } ?>><a href="my.php?item=attention&amp;type=forum<?=$extrafid?>"><span>Forums</span></a></li>
</ul>
<? } ?>
</div>
<? if($forumname) { ?><div class="c_header"><strong>Forum: <?=$forumname?></strong> <a href="my.php?item=<?=$item?><? if($type) { ?>&amp;type=<?=$type?><? } ?>" class="lightlink">(All)</a></div><? } } ?>
<div class="<? if(!in_array($item, array('tradestats', 'selltrades', 'buytrades', 'tradethreads'))) { ?>threadlist <? } ?>datalist">
<? if(empty($item) || $item == 'threads') { include template('my_threads', '0', ''); } elseif($item == 'posts') { include template('my_posts', '0', ''); } elseif($item == 'polls') { include template('my_polls', '0', ''); } elseif(in_array($item, array('tradestats', 'selltrades', 'buytrades', 'tradethreads'))) { if($item == 'tradestats') { include template('my_tradestats', '0', ''); } elseif($item == 'selltrades' || $item == 'buytrades') { include template('my_trades', '0', ''); } elseif($item == 'tradethreads') { include template('my_tradethreads', '0', ''); } } elseif($item == 'reward') { include template('my_rewards', '0', ''); } elseif($item == 'activities') { include template('my_activities', '0', ''); } elseif($item == 'debate') { include template('my_debate', '0', ''); } elseif($item == 'attention') { if($type == 'forum') { if($action == 'detail') { include template('my_attention_forums_detail', '0', ''); } else { include template('my_attention_forums', '0', ''); } } else { include template('my_attention', '0', ''); } } elseif($item == 'favorites') { include template('my_favorites', '0', ''); } elseif($item == 'buddylist') { include template('my_buddylist', '0', ''); } ?>
</div>
<ul class="popupmenu_popup titlemenu_popup" id="rewards_menu" style="display: none">
<li <? if($type == 'question') { ?> class="current"<? } ?>><a href="my.php?item=reward&amp;type=question<?=$extrafid?>">Activities</a></li>
<li <? if($type == 'answer') { ?> class="current"<? } ?>><a href="my.php?item=reward&amp;type=answer<?=$extrafid?>">I Joined</a></li>
<li <? if($type == 'stats') { ?> class="current"<? } ?>><a href="my.php?item=reward&amp;type=stats<?=$extrafid?>">Statistics</a></li>
</ul>
<ul class="popupmenu_popup titlemenu_popup" id="activities_menu" style="display: none">
<li <? if($type == 'orig') { ?> class="current"<? } ?>><a href="my.php?item=activities&amp;type=orig<?=$extrafid?>">Activities</a></li>
<li <? if($type == 'apply') { ?> class="current"<? } ?>><a href="my.php?item=activities&amp;type=apply<?=$extrafid?>">I Joined</a></li>
</ul>
<ul class="popupmenu_popup titlemenu_popup" id="debates_menu" style="display: none">
<li <? if($item == 'debate' && $type == 'orig') { ?> class="current"<? } ?>><a href="my.php?item=debate&amp;type=orig<?=$extrafid?>">Activities</a></li>
<li <? if($item == 'debate' && $type == 'reply') { ?> class="current"<? } ?>><a href="my.php?item=debate&amp;type=reply<?=$extrafid?>">I Joined</a></li>
</ul>
<ul class="popupmenu_popup titlemenu_popup" id="trades_menu" style="display: none">
<li <? if($item == 'buytrades') { ?> class="current"<? } ?>><a href="my.php?item=buytrades<?=$extrafid?>">Buy</a></li>
<li <? if($item == 'tradethreads') { ?> class="current"<? } ?>><a href="my.php?item=tradethreads<?=$extrafid?>">Sell</a></li>
<li <? if($item == 'selltrades') { ?> class="current"<? } ?>><a href="my.php?item=selltrades&amp;filter=all">Seller Logs</a></li>
<li <? if($item == 'tradestats') { ?> class="current"<? } ?>><a href="my.php?item=tradestats<?=$extrafid?>">Trade Log</a></li>
<li><a href="eccredit.php?uid=<?=$discuz_uid?>" target="_blank">Rate</a></li>
</ul>
</div>
</div>
<div class="side"><h2>User CP</h2>
<div class="sideinner">
<ul class="tabs">
<? if($regverify == 1 && $groupid == 8) { ?>
<li<? if(CURSCRIPT=='memcp' && $action == 'emailverify') { ?> class="current"<? } ?>><a href="member.php?action=emailverify">Reverify Email</a></li>
<? } if($regverify == 2 && $groupid == 8) { ?>
<li<? if(CURSCRIPT=='memcp' && $action == 'validating') { ?> class="current"<? } ?>><a href="memcp.php?action=validating">User Validating</a></li>
<li<? if(CURSCRIPT=='memcp' && $action == 'profile' && $typeid == '2') { ?> class="current"<? } ?>><a href="memcp.php?action=profile&amp;typeid=2">Personal Profile</a></li>
<? } else { ?>
<li<? if(CURSCRIPT=='memcp' && $action == 'profile' && $typeid == '3') { ?> class="current"<? } ?>><a href="memcp.php?action=profile&amp;typeid=3" id="uploadavatar" prompt="uploadavatar">Modify Avatar</a></li>
<li<? if(CURSCRIPT=='memcp' && $action == 'profile' && $typeid == '2') { ?> class="current"<? } ?>><a href="memcp.php?action=profile&amp;typeid=2">Personal Profile</a></li>
<li<? if(CURSCRIPT=='pm') { ?> class="current"<? } ?>><a href="pm.php">P.M.</a></li>
<li<? if(CURSCRIPT=='notice') { ?> class="current"<? } ?>><a href="notice.php">Notice</a></li>
<li<? if(CURSCRIPT=='my' && $item == 'buddylist') { ?> class="current"<? } ?>><a href="my.php?item=buddylist&amp;<?=$extrafid?>">Buddy</a></li>
<? if($regstatus > 1) { ?><li><a href="invite.php">Invite</a></li><? } if($ucappopen['UCHOME']) { ?>
<li><a href="<?=$uchomeurl?>/space.php?uid=<?=$discuz_uid?>" target="_blank">My Space</a></li>
<? } elseif($ucappopen['XSPACE']) { ?>
<li><a href="<?=$xspaceurl?>/?uid-<?=$discuz_uid?>" target="_blank">My Space</a></li>
<? } } ?>
</ul>
</div>

<? if($groupid != 8) { ?>
<hr class="shadowline" />

<div class="sideinner">
<ul class="tabs">
<li<? if(CURSCRIPT=='my' && in_array($item, array('threads', 'posts', 'polls', 'reward', 'activities', 'debate', 'buytrades', 'tradethreads', 'selltrades', 'tradestats'))) { ?> class="current"<? } ?>><a href="my.php?item=threads<?=$extrafid?>">My Posts</a></li>
<li<? if(CURSCRIPT=='my' && $item == 'favorites') { ?> class="current"<? } ?>><a href="my.php?item=favorites&amp;type=thread<?=$extrafid?>">Favorite</a></li>
<li<? if(CURSCRIPT=='my' && $item == 'attention') { ?> class="current"<? } ?>><a href="my.php?item=attention&amp;type=thread<?=$extrafid?>">My Attention</a></li>
<? if(!empty($plugins['plinks_my'])) { if(is_array($plugins['plinks_my'])) { foreach($plugins['plinks_my'] as $module) { if(!$module['adminid'] || ($module['adminid'] && $adminid > 0 && $module['adminid'] >= $adminid)) { ?><li<? if(CURSCRIPT == 'plugin' && $_GET['id'] == $module['id']) { ?> class="current"<? } ?>><?=$module['url']?></li><? } } } } ?>
</ul>
</div>

<hr class="shadowline" />

<div class="sideinner">
<ul class="tabs">
<li<? if(CURSCRIPT=='memcp' && $action == 'credits') { ?> class="current"<? } ?>><a href="memcp.php?action=credits">My Credits</a></li>
<li<? if(CURSCRIPT=='memcp' && $action == 'usergroups') { ?> class="current"<? } ?>><a href="memcp.php?action=usergroups">User Group</a></li>
<li<? if(CURSCRIPT=='task') { ?> class="current"<? } ?>><a href="task.php">Task</a></li>
<? if($medalstatus) { ?><li<? if(CURSCRIPT=='medal') { ?> class="current"<? } ?>><a href="medal.php">Medals List</a></li><? } if($magicstatus) { ?><li<? if(CURSCRIPT=='magic') { ?> class="current"<? } ?>><a href="magic.php">Props</a></li><? } if(!empty($plugins['plinks_tools'])) { if(is_array($plugins['plinks_tools'])) { foreach($plugins['plinks_tools'] as $module) { if(!$module['adminid'] || ($module['adminid'] && $adminid > 0 && $module['adminid'] >= $adminid)) { ?><li<? if(CURSCRIPT == 'plugin' && $_GET['id'] == $module['id']) { ?> class="current"<? } ?>><?=$module['url']?></li><? } } } } ?>
</ul>
</div>
<? } ?>

<hr class="shadowline" />

<div class="sideinner">
<ul class="tabs">
<li<? if(CURSCRIPT=='memcp' && $action == 'profile' && $typeid == '5') { ?> class="current"<? } ?>><a href="memcp.php?action=profile&amp;typeid=5">Personalize</a></li>
<li<? if(CURSCRIPT=='memcp' && $action == 'profile' && $typeid == '1') { ?> class="current"<? } ?>><a href="memcp.php?action=profile&amp;typeid=1">Password & Security</a></li>
</ul>
</div>

<hr class="shadowline" />

<div class="sideinner">
<ul class="tabs">
<li>My Credits: <?=$credits?></li><? if(is_array($extcredits)) { foreach($extcredits as $id => $credit) { ?><li><?=$credit['title']?>: <?=$GLOBALS['extcredits'.$id]?> <?=$credit['unit']?></li><? } } ?></ul>
</div>
<?=$pluginhooks['memcp_side']?></div>
</div>

<script type="text/javascript">
function attentionToggleShow(id) {
checkbox = $(id);
url = window.location.href;
if(checkbox.checked) {
url = url.replace('&filter=new', '');
url = url.replace('filter=new&', '');
} else {
if(url.indexOf('filter=all') != -1) {
url = url.replace('filter=all', 'filter=new');
} else {
url += '&filter=new';
}
}
window.location = url;
}
</script>
</div><? if(!empty($plugins['jsmenu'])) { ?>
<ul class="popupmenu_popup headermenu_popup" id="plugin_menu" style="display: none"><? if(is_array($plugins['jsmenu'])) { foreach($plugins['jsmenu'] as $module) { ?>     <? if(!$module['adminid'] || ($module['adminid'] && $adminid > 0 && $module['adminid'] >= $adminid)) { ?>
     <li><?=$module['url']?></li>
     <? } } } ?></ul>
<? } if(is_array($subnavs)) { foreach($subnavs as $subnav) { ?><?=$subnav?><? } } if($prompts['newbietask'] && $newbietasks) { include template('task_newbie_js', '0', ''); } if($admode && !empty($advlist)) { ?>
<div class="ad_footerbanner" id="ad_footerbanner1"><?=$advlist['footerbanner1']?></div><? if($advlist['footerbanner2']) { ?><div class="ad_footerbanner" id="ad_footerbanner2"><?=$advlist['footerbanner2']?></div><? } if($advlist['footerbanner3']) { ?><div class="ad_footerbanner" id="ad_footerbanner3"><?=$advlist['footerbanner3']?></div><? } } else { ?>
<div id="ad_footerbanner1"></div><div id="ad_footerbanner2"></div><div id="ad_footerbanner3"></div>
<? } ?>

<?=$pluginhooks['global_footer']?>
<div id="footer">
<div class="wrap s_clear">
<div id="footlink">
<p>
<strong><a href="http://10.1.50.7/osc/" target="_blank">Community</a></strong>
  <span class="pipe">|</span> <a href="http://10.1.50.7/mediawiki-1.21.2/index.php/Main_Page" target="_blank">Wiki</a>				
<? if($icp) { ?>( <a href="http://www.miibeian.gov.cn/" target="_blank"><?=$icp?></a>)<? } ?>
<span class="pipe">|</span><a href="mailto:<?=$adminemail?>">Contact Us</a>
<? if($allowviewstats) { ?><span class="pipe">|</span><a href="stats.php">Stats</a><? } if($archiverstatus) { ?><span class="pipe">|</span><a href="archiver/" target="_blank">Archiver</a><? } if($wapstatus) { ?><span class="pipe">|</span><a href="wap/" target="_blank">WAP</a><? } if($statcode) { ?><span class="pipe">| <?=$statcode?></span><? } ?>
<?=$pluginhooks['global_footerlink']?>
</p>
<p class="smalltext" style="display:none;">
GMT<?=$timenow['offset']?>, <?=$timenow['time']?>
<? if(debuginfo()) { ?>, <span id="debuginfo">Processed in <?=$debuginfo['time']?> second(s), <?=$debuginfo['queries']?> queries<? if($gzipcompress) { ?>, Gzip enabled<? } ?></span><? } ?>.
</p>
</div>
<div id="rightinfo">
<p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em style="display:none;"><?=$version?></em><? if(!empty($boardlicensed)) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?=$_SERVER['HTTP_HOST']?>" target="_blank">Licensed</a><? } ?></p>
<p class="smalltext">&copy; 2013 <a href="http://www.cs2c.com.cn" target="_blank">CS2C.</a></p>
</div><? updatesession(); ?></div>
</div>
<? if($_DCACHE['settings']['frameon'] && in_array(CURSCRIPT, array('index', 'forumdisplay', 'viewthread')) && $_DCOOKIE['frameon'] == 'yes') { ?>
<script src="<?=$jspath?>iframe.js?<?=VERHASH?>" type="text/javascript"></script>
<? } output(); ?></body>
</html>
