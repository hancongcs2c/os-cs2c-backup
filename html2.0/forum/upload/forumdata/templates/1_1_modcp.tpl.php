<? if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('modcp');
0
|| checktplrefresh('/var/www/html/forum/upload/././templates/default/modcp.htm', '/var/www/html/forum/upload/././templates/default/footer.htm', 1378780709, '1', './templates/default')
|| checktplrefresh('/var/www/html/forum/upload/././templates/default/modcp.htm', '/var/www/html/forum/upload/././templates/default/jsmenu.htm', 1378780709, '1', './templates/default')
;?><? include template('header', '0', ''); ?><div id="nav"><a href="<?=$indexname?>"><?=$bbname?></a> &raquo; <a href="modcp.php">Moderator CP</a></div>
<div id="wrap" class="wrap with_side s_clear">
<div class="main">
<div class="content">
<? if($script == 'noperm') { ?>
<div class="mainbox">
<h3>System Error</h3>
<table cellspacing="0" cellpadding="0">
<tr>
<td>You have no permission to use this function or moderate this forum</td>
</tr>
</table>
</form>
</div>

<div class="notice">Administrators in "Moderator Management Panel" have only same rights with super moderator, for further operaton, please enter admin center.</div>
<? } elseif(!empty($modtpl)) { include(template($modtpl)); } ?>
</div>
</div>
<div class="side">
<h2>Moderator CP</h2>
<div class="sideinner noborder">
<ul class="tabs">
<li<? if($action == 'home') { ?> class="current"<? } ?>><? if($notenum) { ?><span class="numbg"><?=$notenum?></span><? } ?><a href="<?=$cpscript?>">inner Message</a></li>
<? if($modforums['fids']) { if($allowviewreport) { ?><li<? if($action == 'report') { ?> class="current"<? } ?>><? if($reportnum) { ?><span class="numbg"><?=$reportnum?></span><? } ?><a href="<?=$cpscript?>?action=report<?=$forcefid?>">Report</a></li><? } if($allowmodpost || $allowmoduser) { ?>
<li<? if($action == 'moderate') { ?> class="current"<? } ?>><? if($modnum) { ?><span class="numbg"><?=$modnum?></span><? } ?><a href="<?=$cpscript?>?action=moderate&op=<? if($allowmodpost) { ?>threads<?=$forcefid?><? } else { ?>members<? } ?>">Moderate</a></li>
<? } } if(!empty($plugins['modcp_base'])) { if(is_array($plugins['modcp_base'])) { foreach($plugins['modcp_base'] as $id => $module) { ?><li<? if($_GET['id'] == $id) { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=plugin&op=base&id=<?=$id?>"><?=$module['name']?></a></li><? } } } ?>
</ul>
</div>

<hr class="shadowline" />

<? if($allowedituser || $allowbanuser || $allowbanip) { ?>
<div class="sideinner">
<ul class="tabs">
<? if($allowbanuser) { ?><li<? if($action == 'members' && $op == 'ban') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=members&op=ban">Ban User</a></li><? } if($allowbanip) { ?><li<? if($action == 'members' && $op == 'ipban') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=members&op=ipban">Ban IP</a></li><? } if($modforums['fids']) { ?><li<? if($action == 'forumaccess') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=forumaccess<?=$forcefid?>">User Perm.</a></li><? } if($allowedituser) { ?><li<? if($action == 'members' && $op == 'edit') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=members&op=edit">Edit User</a></li><? } ?>
</ul>
</div>

<hr class="shadowline" />
<? } if($modforums['fids']) { ?>
<div class="sideinner">
<ul class="tabs">
<li<? if($action == 'threads' || $action == 'recyclebins') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=threads&op=threads<?=$forcefid?>">Thread</a></li>
<? if($allowrecommendthread) { ?><li<? if($action == 'forums' && $op == 'recommend') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=forums&op=recommend&show=all<?=$forcefid?>">Recommend</a></li><? } if($alloweditforum) { ?><li<? if($action == 'forums' && $op == 'editforum') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=forums&op=editforum<?=$forcefid?>">Edit Forum</a></li><? } ?>
</ul>
</div>

<hr class="shadowline" />
<? } if($allowpostannounce || $allowviewlog) { ?>
<div class="sideinner">
<ul class="tabs">
<? if($allowpostannounce) { ?><li<? if($action == 'announcements') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=announcements">Note</a></li><? } if($allowviewlog) { ?><li<? if($action == 'logs') { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=logs">Moderation Log</a></li><? } ?>
</ul>
</div>

<hr class="shadowline" />
<? } if(!empty($plugins['modcp_tools'])) { ?>
<div class="sideinner">
<ul class="tabs"><? if(is_array($plugins['modcp_tools'])) { foreach($plugins['modcp_tools'] as $id => $module) { ?><li<? if($_GET['id'] == $id) { ?> class="current"<? } ?>><a href="<?=$cpscript?>?action=plugin&op=tools&id=<?=$id?>"><?=$module['name']?></a></li><? } } ?></ul>
</div>

<hr class="shadowline" />
<? } ?>

<div class="sideinner">
<ul class="tabs">
<li><a href="<? if($forcefid) { ?>forumdisplay.php?<?=$forcefid?><? } else { ?><?=$indexname?><? } ?>">Return</a></li>
<li><a href="<?=$cpscript?>?action=logout">Logout</a></li>
</ul>
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
<strong><a href="<?=$siteurl?>" target="_blank"><?=$sitename?></a></strong>
<? if($icp) { ?>( <a href="http://www.miibeian.gov.cn/" target="_blank"><?=$icp?></a>)<? } ?>
<span class="pipe">|</span><a href="mailto:<?=$adminemail?>">Contact Us</a>
<? if($allowviewstats) { ?><span class="pipe">|</span><a href="stats.php">Stats</a><? } if($archiverstatus) { ?><span class="pipe">|</span><a href="archiver/" target="_blank">Archiver</a><? } if($wapstatus) { ?><span class="pipe">|</span><a href="wap/" target="_blank">WAP</a><? } if($statcode) { ?><span class="pipe">| <?=$statcode?></span><? } ?>
<?=$pluginhooks['global_footerlink']?>
</p>
<p class="smalltext">
GMT<?=$timenow['offset']?>, <?=$timenow['time']?>
<? if(debuginfo()) { ?>, <span id="debuginfo">Processed in <?=$debuginfo['time']?> second(s), <?=$debuginfo['queries']?> queries<? if($gzipcompress) { ?>, Gzip enabled<? } ?></span><? } ?>.
</p>
</div>
<div id="rightinfo">
<p>Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?=$version?></em><? if(!empty($boardlicensed)) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?=$_SERVER['HTTP_HOST']?>" target="_blank">Licensed</a><? } ?></p>
<p class="smalltext">&copy; 2001-2009 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a></p>
</div><? updatesession(); ?></div>
</div>
<? if($_DCACHE['settings']['frameon'] && in_array(CURSCRIPT, array('index', 'forumdisplay', 'viewthread')) && $_DCOOKIE['frameon'] == 'yes') { ?>
<script src="<?=$jspath?>iframe.js?<?=VERHASH?>" type="text/javascript"></script>
<? } output(); ?></body>
</html>