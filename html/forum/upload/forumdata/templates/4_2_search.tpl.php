<? if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('search');
0
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/header.htm', 1379834381, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/search_threads.htm', 1379834381, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/search_sort.htm', 1379834381, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/footer.htm', 1379834381, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/header.htm', 1379834381, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/footer.htm', 1379834381, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/jsmenu.htm', 1379834381, '2', './templates/colors')
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/search.htm', '/var/www/html/forum/upload/./templates/default/jsmenu.htm', 1379834381, '2', './templates/colors')
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
body{margin:0 auto;background:url(/osc/img/dotted-bg.png) repeat;}
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
<h2><a href="<?=$indexname?>" title="forum of cs2c opensource community"><?=BOARDLOGO?> <span>Migration to Linux</span><br />
<small>Devoted to Technology and Solutions</small></a></h2>
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
<div id="nav"><a href="<?=$indexname?>"><?=$bbname?></a> &raquo; Search</div>
<div id="wrap" class="wrap">
<form class="searchform" method="post" action="search.php"<? if($qihoo['status']) { ?> target="_blank"<? } ?>>
<input type="hidden" name="formhash" value="<?=FORMHASH?>" />
<? if(!empty($srchtype)) { ?><input type="hidden" name="srchtype" value="<?=$srchtype?>" /><? } ?>

<label for="srchtxt" class="searchlabel">
Search
<strong>
<? if($srchtype == 'threadsort') { ?>
Category
<? } elseif($srchtype == 'trade') { ?>
Trade
<? } elseif($srchtype == 'qihoo') { ?>
Qihoo Search
<? } else { ?>
Thread
<? } ?>
</strong>
</label>

<? if($srchtype != 'threadsort') { ?>
<p class="searchkey">
<input type="text" id="srchtxt" name="srchtxt" prompt="search_kw" size="45" maxlength="40" value="<?=$keyword?>" class="txt" tabindex="1" />
<script type="text/javascript">$('srchtxt').focus();</script>
<? if($checkarray['posts']) { ?>
<select name='srchtype'>
<option value="title">Title</option>
<? if(!$disabled['fulltext']) { ?><option value="fulltext">Full Text</option><? } ?>
</select>
<? } ?>
<button type="submit" name="searchsubmit" id="searchsubmit" value="true" prompt="search_submit">Search</button>
<? if($checkarray['posts']) { ?>
<a href="javascript:;" onclick="userdisplay = $('search_option').style.display == '' ? '0' : '1'; display('search_option'); ajaxget('ajax.php?action=displaysearch_adv&display='+userdisplay);">Advanced</a>
<? } ?>
</p>
<? } ?>

<p>
<input type="radio" name="st" onclick="window.location=('search.php')" <?=$checkarray['posts']?> id="srchtypeposts"/> <label for="srchtypeposts">Thread</label>
<input type="radio" name="st" onclick="window.location=('search.php?srchtype=trade')" <?=$checkarray['trade']?> id="srchtypetrade"/> <label for="srchtypetrade">Trade</label>
<? if($qihoo['status']) { ?><input type="radio" name="st" onclick="window.location=('search.php?srchtype=qihoo')" <?=$checkarray['qihoo']?> id="srchtypeqihoo" /> <label for="srchtypeqihoo">Qihoo Search</label><? } ?>
<input type="radio" name="st" onclick="window.location=('search.php?srchtype=threadsort')" <?=$checkarray['threadsort']?> id="srchtypesort"/> <label for="srchtypesort">Category</label>
</p><? $policymsgs = $p = ''; if(is_array($creditspolicy['search'])) { foreach($creditspolicy['search'] as $id => $policy) { ?><?
$policymsg = <<<EOF

EOF;
 if($extcredits[$id]['img']) { 
$policymsg .= <<<EOF
{$extcredits[$id]['img']} 
EOF;
 } 
$policymsg .= <<<EOF
{$extcredits[$id]['title']} {$policy} {$extcredits[$id]['unit']}
EOF;
?><? $policymsgs .= $p.$policymsg;$p = ', '; } } if($policymsgs) { ?><p>Each Search need <?=$policymsgs?></p><? } if($srchtype != 'qihoo') { ?>
<div id="search_option" <? if($checkarray['posts'] && empty($_DCOOKIE['displaysearch_adv'])) { ?>style="display: none;"<? } ?>>
<hr class="shadowline"/>
<h3>Search Options</h3>
<table summary="Search" cellspacing="0" cellpadding="0" class="formtable">
<? if($srchtype == 'threadsort') { ?>
<tr>
<th><label for="typeid">Category</label></th>
<td>
<select name="sortid" onchange="ajaxget('post.php?action=threadsorts&sortid='+this.options[this.selectedIndex].value+'&operate=1&sid=<?=$sid?>', 'threadsorts', 'threadsortswait')">
<option value="0">None</option><?=$threadsorts?>
</select>
<span id="threadsortswait"></span>
</td>
</tr>
<tbody id="threadsorts"></tbody>
<? } if($checkarray['posts'] || $srchtype == 'trade') { ?>
<tr>
<td>Author</td>
<td><input type="text" id="srchname" name="srchuname" size="45" maxlength="40" class="txt" /></td>
</tr>

<tr>
<td>Thread Range</td>
<td>
<label><input type="radio" name="srchfilter" value="all" checked="checked" /> All Thead</label>
<label><input type="radio" name="srchfilter" value="digest" /> Digest Thread</label>
<label><input type="radio" name="srchfilter" value="top" /> Top Thread</label>
</td>
</tr>
<? } if($checkarray['posts']) { ?>
<tr>
<td>Special Thread</td>
<td>
<label><input type="checkbox" name="special[]" value="1" /> Poll Thread</label>
<label><input type="checkbox" name="special[]" value="2" /> Trade Thread</label>
<label><input type="checkbox" name="special[]" value="3" /> Reward Thread</label>
<label><input type="checkbox" name="special[]" value="4" /> Activity Thread</label>
<label><input type="checkbox" name="special[]" value="5" /> Debate Thread</label><? if(is_array($threadplugins)) { foreach($threadplugins as $pluginid => $threadplugin) { ?><label><input type="checkbox" name="specialplugin[]" value="<?=$threadplugin['iconid']?>" /> <?=$threadplugin['name']?></label><? } } ?></td>
</tr>
<? } if($srchtype == 'trade') { ?>
<tr>
<td>Trade Type</td>
<td>
<select name="srchtypeid"><option value="">All</option><? if(is_array($tradetypes)) { foreach($tradetypes as $typeid => $typename) { ?><option value="<?=$typeid?>"><?=$typename?></option><? } } ?></select>
</td>
</tr>
<? } if($checkarray['posts'] || $srchtype == 'trade') { ?>
<tr>
<th><label for="srchfrom">Search Time</label></th>
<td>
<select id="srchfrom" name="srchfrom">
<option value="0">All Time</option>
<option value="86400">1 day</option>
<option value="172800">2 days</option>
<option value="604800">1 week</option>
<option value="2592000">1 month</option>
<option value="7776000">3 months</option>
<option value="15552000">6 months</option>
<option value="31536000">!365_days_ago!</option>
</select>
<label><input type="radio" name="before" value="" checked="checked" /> Within</label>
<label><input type="radio" name="before" value="1" /> Before</label>
</td>
</tr>

<tr>
<td><label for="orderby">Order by</label></td>
<td>
<select id="orderby1" name="orderby">
<option value="lastpost" selected="selected">Last Post</option>
<option value="dateline">Start Time</option>
<option value="replies">Replies</option>
<option value="views">Views</option>
</select>
<select id="orderby2" name="orderby" style="position: absolute; display: none" disabled>
<option value="dateline" selected="selected">Date</option>
<option value="price">Price</option>
<option value="expiration">Remain Time</option>
</select>
<label><input type="radio" name="ascdesc" value="asc" /> Ascending</label>
<label><input type="radio" name="ascdesc" value="desc" checked="checked" /> Descending</label>
</td>
</tr>
<? } ?>

<tr>
<td valign="top"><label for="srchfid">Search Range</label></td>
<td>
<select id="srchfid" name="srchfid[]" multiple="multiple" size="10" style="width: 26em;">
<option value="all"<? if(!$srchfid) { ?> selected="selected"<? } ?>>All Forum</option>
<?=$forumselect?>
</select>
</td>
</tr>

<? if($srchtype == 'threadsort') { ?>
<tr>
<th>&nbsp;</th>
<td><button class="submit" type="submit" name="searchsubmit" value="true">Search</button></td>
</tr>
<? } ?>
</table>
</div>
<? } if(empty($srchtype) && empty($keyword)) { ?>
<hr class="shadowline"/>
<h3>Quick Search</h3>
<table cellspacing="4" cellpadding="0" width="100%">
<tr>
<td><a href="search.php?srchfrom=3600&amp;searchsubmit=yes">Thread Post in 1 Hour</a></td>
<td><a href="search.php?srchfrom=14400&amp;searchsubmit=yes">Thread Post in 4 Hours</a></td>
<td><a href="search.php?srchfrom=28800&amp;searchsubmit=yes">Thread Post in 8 Hours</a></td>
<td><a href="search.php?srchfrom=86400&amp;searchsubmit=yes">Thread Post in 1 day</a></td>
</tr>
<tr>
<td><a href="search.php?srchfrom=604800&amp;searchsubmit=yes">Thread Post in 1 week</a></td>
<td><a href="search.php?srchfrom=2592000&amp;searchsubmit=yes">Thread Post in 1 month</a></td>
<td><a href="search.php?srchfrom=15552000&amp;searchsubmit=yes">Thread Post in 6 month</a></td>
<td><a href="search.php?srchfrom=31536000&amp;searchsubmit=yes">Thread Post in 1 year</a></td>
</tr>
</table>
<? } ?>
</form>

<? if(!empty($searchid) && submitcheck('searchsubmit', 1)) { if($checkarray['posts']) { ?><div class="searchlist threadlist datalist">
<div class="itemtitle s_clear">
<h1><? if($keyword) { ?>Result: <em>Find ¡°<span class="emfont"><?=$keyword?></span>¡± Thread <?=$index['threads']?> </em><? } else { ?>Result: <em>Find <?=$index['threads']?> Threads</em><? } ?></h1>
<? if(!empty($multipage)) { ?><?=$multipage?><? } ?>
</div>
<table summary="Search" cellspacing="0" cellpadding="0" width="100%" class="datatable">
<thead>
<tr class="colplural">
<td class="folder">&nbsp;</td>
<td class="icon">&nbsp;</td>
<th>Subject</th>
<td class="forum">Forum</td>
<td class="author">Author</td>
<td class="nums">Replies/Views</td>
<td class="lastpost"><cite>Last Post</cite></td>
</tr>
</thead><? if(is_array($threadlist)) { foreach($threadlist as $thread) { ?><tbody>
<tr>
<td class="folder">
<a href="viewthread.php?tid=<?=$thread['tid']?>&amp;highlight=<?=$index['keywords']?>" title="Open in new window" target="_blank">
<? if($thread['folder'] == 'lock') { ?>
<img src="<?=IMGDIR?>/folder_lock.gif" /></a>
<? } else { ?>
<img src="<?=IMGDIR?>/folder_<?=$thread['folder']?>.gif" /></a>
<? } ?>
</td>
<td class="icon">
<? if($thread['special'] == 1) { ?>
<img src="<?=IMGDIR?>/pollsmall.gif" alt="Poll" />
<? } elseif($thread['special'] == 2) { ?>
<img src="<?=IMGDIR?>/tradesmall.gif" alt="Trade" />
<? } elseif($thread['special'] == 3) { ?>
<img src="<?=IMGDIR?>/rewardsmall.gif" alt="Reward" />
<? } elseif($thread['special'] == 4) { ?>
<img src="<?=IMGDIR?>/activitysmall.gif" alt="Activity" />
<? } elseif($thread['special'] == 5) { ?>
<img src="<?=IMGDIR?>/debatesmall.gif" alt="Debate" />
<? } else { ?>
<?=$thread['icon']?>
<? } ?>
</td>
<th class="subject">
<label>
<? if($thread['digest'] > 0) { ?>
<img src="<?=IMGDIR?>/digest_<?=$thread['digest']?>.gif" alt="Digest <?=$thread['digest']?>" />
<? } ?>
&nbsp;
</label>
<a href="viewthread.php?tid=<?=$thread['tid']?>&amp;highlight=<?=$index['keywords']?>" target="_blank" <?=$thread['highlight']?>><?=$thread['subject']?></a>
<? if($thread['attachment'] == 2) { ?>
<img src="images/attachicons/image_s.gif" alt="Image Attachment" class="attach" />
<? } elseif($thread['attachment'] == 1) { ?>
<img src="images/attachicons/common.gif" alt="Attachment" class="attach" />
<? } if($thread['multipage']) { ?><span class="threadpages"><?=$thread['multipage']?></span><? } ?>
</th>
<td class="forum"><a href="forumdisplay.php?fid=<?=$thread['fid']?>"><?=$thread['forumname']?></a></td>
<td class="author">
<cite>
<? if($thread['authorid'] && $thread['author']) { ?>
<a href="space.php?uid=<?=$thread['authorid']?>"><?=$thread['author']?></a>
<? } else { if($forum['ismoderator']) { ?><a href="space.php?uid=<?=$thread['authorid']?>">Anonymous</a><? } else { ?>Anonymous<? } } ?>
</cite>
<em><?=$thread['dateline']?></em>
</td>
<td class="nums"><strong><?=$thread['replies']?></strong> / <em><?=$thread['views']?></em></td>
<td class="lastpost">
<cite><? if($thread['lastposter']) { ?><a href="space.php?username=<?=$thread['lastposterenc']?>"><?=$thread['lastposter']?></a><? } else { ?>Anonymous<? } ?></cite>
<em><a href="redirect.php?tid=<?=$thread['tid']?>&amp;goto=lastpost<?=$highlight?>#lastpost"><?=$thread['lastpost']?></a></em>
</td>
</tr>
</tbody><? } } if(empty($threadlist)) { ?>
<tbody><tr><th colspan="7">Sorry, no matched result.</th></tr></tbody>
<? } ?>

</table>
<? if(!empty($multipage)) { ?><div class="pages_btns s_clear"><?=$multipage?></div><? } ?>
</div>
<? } elseif($checkarray['threadsort']) { ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
body{margin:0 auto;background:url(/osc/img/dotted-bg.png) repeat;}
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
<h2><a href="<?=$indexname?>" title="forum of cs2c opensource community"><?=BOARDLOGO?> <span>Migration to Linux</span><br />
<small>Devoted to Technology and Solutions</small></a></h2>
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
<div id="nav">
<a href="<?=$indexname?>"><?=$bbname?></a> &raquo; Category
</div>

<div id="wrap" class="wrap s_clear">
<div class="main">
<div class="content">
<div class="searchlist threadlist datalist">
<div class="itemtitle s_clear">
<h1>Result: <em>Find <?=$index['threads']?> Threads</em></h1>
<? if(!empty($multipage)) { ?><?=$multipage?><? } ?>
</div>
<table summary="Search" cellspacing="0" cellpadding="0" width="100%" class="datatable">
<thead>
<tr class="colplural">
<td class="icon">&nbsp;</td>
<td>Subject</td><? if(is_array($optionlist)) { foreach($optionlist as $var) { ?><td style="width: 10%"><?=$var?></td><? } } ?><td style="width: 15%">Date</td>
</tr>
</thead>
<? if($resultlist) { if(is_array($resultlist)) { foreach($resultlist as $tid => $value) { ?><tbody>
<tr>
<td class="icon"><?=$value['icon']?></td>
<th><a href="viewthread.php?tid=<?=$tid?>" target="_blank"><?=$value['subject']?></a></th><? if(is_array($optionlist)) { foreach($optionlist as $identifier => $var) { ?><td style="width: 10%"><? if($value['option'][$identifier]) { ?><?=$value['option'][$identifier]?><? } else { ?>&nbsp;<? } ?></td><? } } ?><td style="width: 15%"><?=$value['dateline']?></td>
</tr>
</tbody><? } } } else { ?>
<tr><td colspan="<?=$colspan?>">Sorry, no matched result.</td></tr>
<? } ?>
</table>
<? if(!empty($multipage)) { ?><div class="pages_btns s_clear"><?=$multipage?></div><? } ?>
</div>
</div>
</div>
</div>
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
<? } } ?>

</div>


<script type="text/javascript">
<? if($sortid) { ?>
ajaxget('post.php?action=threadsorts&sortid=<?=$sortid?>&operate=1&inajax=1', 'threadsorts', 'threadsortswait');
<? } ?>
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
