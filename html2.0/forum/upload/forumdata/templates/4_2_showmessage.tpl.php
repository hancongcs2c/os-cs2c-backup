<? if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('showmessage');
0
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/showmessage.htm', '/var/www/html/forum/upload/./templates/default/header.htm', 1379494614, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/showmessage.htm', '/var/www/html/forum/upload/./templates/default/footer.htm', 1379494614, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/showmessage.htm', '/var/www/html/forum/upload/./templates/default/jsmenu.htm', 1379494614, '2', './templates/colors')
;?>
<? if(!$inajax) { ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$charset?>" />
<title><?=$navtitle?> <?=$bbname?> <?=$seotitle?> - Powered by Discuz!</title>
<?=$seohead?>
<meta name="keywords" content="<?=$metakeywords?><?=$seokeywords?>" />
<meta name="description" content="<?=$metadescription?> <?=$bbname?> <?=$seodescription?> - Discuz! Board" />
<meta name="generator" content="Discuz! <?=$version?>" />
<meta name="author" content="cong.han@cs2c.com.cn" />
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
body{margin:0 auto;}
#onlinelist dt, #onlinelist dd  ,.forumlinks, .forumimglink, .forumtxtlink, .list td, .list th{border-top:1px dotted #ddd;}
.postbtn, .replybtn{background:none;background-color:#ffb8b8;}
.postbtn:hover, .replybtn:hover{background:none;background-color:#cc0000;
transition:all .1s ease-in-out .1s;
-webkit-transition:all .1s ease-in-out .1s;
-moz-transition:all .1s ease-in-out .1s;
}
.mainbox.list.friend{display:none;}
.pages a:hover, .pageback a, .pages a.next{border:0;}
.postbtn a, .replybtn a{letter-spacing:1px;padding-left:0;}
#nav{background:none;text-indent:0;}
#umenu{margin-top:3.65em;}
#umenu a{color:#999;margin:0;}
.navul a:hover,#footlink a:hover,h2 a:hover{text-decoration:none;}
#header .wrap{padding:15px 0 20px;}
#header .wrap.s_clear{width:100%;}
.wrap.s_clear h2 a img{width:92px;}
.wrap.s_clear h2 a span,.wrap.s_clear h2 a small{
position:relative;
top:-42px;
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
.navul{display:inline-block;margin:6.5em 0 2em;float:right;}
.navul li{float:left;}
.navul li a{font-size: 16px;
padding: 0 2px;margin:0 20px;}
.navul li a.current{margin-right:0;}
.navul li a:hover, .navul li a.current {
color: #c00;
border-bottom: 1px dotted #c00;
transition: all .3s;
-webkit-transition: all .3s;
-moz-transition: all .3s;
}
.t_l, .t_c, .t_r, .m_l, .m_r, .b_l, .b_c, .b_r{background-color:#cc0000;}
.nofloat{background-color:#fefefe;}
input{border:1px solid #ccc;padding:8px 8px;}
.postauthor a img{border-radius:60px;
-webkit-border-radius:60px;
-moz-border-radius:60px;}

.useraction{
display:none;
}
</style>
<body id="<?=CURSCRIPT?>" onkeydown="if(event.keyCode==27) return false;">

<div id="append_parent"></div><div id="ajaxwaitid"></div>

<div id="header">
<div class="wrap s_clear">
<h2><a href="<?=$indexname?>" title="forum of cs2c opensource community"><?=BOARDLOGO?> <span>blah blah</span><br /><small>Lorem ipsum dolor sit amet, consectetuer adipiscing</small></a></h2>
<ul class="navul">
<li><a href="/index.html">Home</a></li>
<li><a href="/mediawiki-1.21.2/index.php/Migration_center">Migration Center</a></li>
<li><a href="/mediawiki-1.21.2/index.php/Project">Project</a></li>
<li><a href="/mediawiki-1.21.2/index.php/News">News</a></li>
<li><a href="/mediawiki-1.21.2/index.php/Main_Page">Wiki</a></li>
<li><a href="/forum/upload/index.php" class="current">Forum</a></li>
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
<? } else { include template('header_ajax', '0', ''); } $allowreturn = $url_forward || !stristr($show_message, 'Return') ? 0 : 1;$alerttype = $url_forward ? (preg_match('/\_succeed$/', $message) ? 'alert_right' : 'alert_info') : ($allowreturn ? 'alert_error' : 'alert_info'); if(!$inajax) { ?>
<div id="nav"><a href="<?=$indexname?>"><?=$bbname?></a> &raquo; Tips</div>

<div id="wrap" class="wrap s_clear"><div class="main"><div class="content nofloat">
<div class="fcontent alert_win">
<h3 class="float_ctrl"><em><?=$bbname?> Tips</em></h3>
<hr class="shadowline" />
<div class="postbox"><div class="<?=$alerttype?>">
<p><?=$show_message?></p>
<? if($url_forward) { if(empty($forwardtype)) { ?>
<p class="alert_btnleft"><a href="<?=$url_forward?>">Click here if your browser does not automatically redirect you.</a></p>
<? } else { ?>
<p class="alert_btnleft"><a href="<?=$url_forward?>">If the download does not start after  <?=$refreshtime?> seconds, please click here.</a></p>
<? } } elseif($allowreturn) { ?>
<p class="alert_btnleft"><a href="javascript:history.back()">[Return to the page you were previously viewing]</a></p>
<? } ?>
</div></div>
</div>
</div></div></div>
<? } elseif(!empty($infloat) && (empty($_POST) || !empty($nopost))) { ?>
<div class="fcontent alert_win">
<h3 class="float_ctrl"><em>Tips</em><span><a href="javascript:;" class="float_close" onclick="hideWindow('<?=$handlekey?>');" title="Close">Close</a></span></h3>
<hr class="shadowline" />
<div class="postbox">
<div class="<?=$alerttype?>"><?=$show_message?></div>
<? if($messagehandle == 'NOPERM' && !$discuz_uid) { ?>
<div class="alert_btn"><input type="button" onclick="hideWindow('<?=$handlekey?>');showWindow('login', 'logging.php?action=login');" value="&nbsp;Confirmed&nbsp;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="hideWindow('<?=$handlekey?>');" value="&nbsp;Cancel&nbsp;" /></div>
<? } else { ?>
<div class="alert_btn"><input type="button" onclick="hideWindow('<?=$handlekey?>');" value="Close" /></div>
<? } ?>
</div>
</div>
<? } else { echo str_replace(array(", Please return", ", Please"), array(", Please", "."), $show_message); if($extra == 'HALTED' || $extra == 'NOPERM') { ?>
<script type="text/javascript" reload="1">
function ajaxerror() {
hideMenu();
showDialog('<?=$show_message?>', 'notice', '', null, 0);
}
ajaxerror();
</script>
<? } } if(!$inajax) { ?>
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
<? } else { include template('footer_ajax', '0', ''); } ?>