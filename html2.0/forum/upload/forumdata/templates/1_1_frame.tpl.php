<? if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?=$charset?>">
<title><?=$navtitle?> <?=$bbname?> <?=$seotitle?> - Powered by Discuz!</title>
<?=$seohead?>
<meta name="keywords" content="<?=$metakeywordsDiscuz?>!,Board,Comsenz,forums,bulletin board,<?=$seokeywords?>">
<meta name="description" content="<?=$bbname?> <?=$seodescription?> - Discuz! Board">
<meta name="generator" content="Discuz! <?=$version?>" />
<meta name="author" content="Discuz! Team & Comsenz UI Team" />
<meta name="copyright" content="2001-2009 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta http-equiv="MSThemeCompatible" content="Yes">
<style type="text/css">
body {
margin: 0px;
}
#frameswitch {
background: url(<?=IMGDIR?>/frame_switch.gif) no-repeat 0;
cursor: pointer;
}
</style>
<script src="<?=$jspath?>common.js?<?=VERHASH?>" type="text/javascript"></script>
<script src="<?=$jspath?>iframe.js?<?=VERHASH?>" type="text/javascript"></script>
<script type="text/javascript"><? $framewidthcss = $framewidth -3; ?>function framebutton(){
var obj = document.getElementById('navigation');
var frameswitch = document.getElementById('frameswitch');
var switchbar = document.getElementById('switchbar');
if(obj.style.display == 'none'){
obj.style.display = '';
switchbar.style.left = '<?=$framewidthcss?>px';
frameswitch.style.backgroundPosition = '0';
}else{
obj.style.display = 'none';
switchbar.style.left = '0px';
frameswitch.style.backgroundPosition = '-11';
}
}

if(top != self) {
top.location = self.location;
}
</script>
</head>

<body scroll="no">
<table border="0" cellPadding="0" cellSpacing="0" height="100%" width="100%">
<tr>
<td align="middle" id="navigation" valign="center" name="frametitle" width="<?=$framewidth?>">
<iframe name="leftmenu" frameborder="0" src="leftmenu.php?frameon=no" scrolling="auto" style="height: 100%; visibility: inherit; width: <?=$framewidth?>px; z-index: 1" onkeydown="refreshrightframe(event)"></iframe>
<td style="width: 100%">
<table id="switchbar" border="0" cellPadding="0" cellSpacing="0" width="11" height="100%" style="position: absolute; left: <?=$framewidthcss?>px; background-repeat: repeat-y; background-position: -<?=$framewidthcss?>px">
<tr><td onClick="framebutton()"><img id="frameswitch" src="images/common/none.gif" alt="" border="0" width="11" height="49" /></td></tr>
</table>
<iframe frameborder="0" scrolling="yes" name="main" src="<?=$newurl?>" style="height: 100%; visibility: inherit; width: 100%; z-index: 1;overflow: visible;" onkeydown="refreshrightframe(event)"></iframe>
</td>
</tr>
</table>
</body>
</html>