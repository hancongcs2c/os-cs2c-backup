<? if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('/var/www/html/forum/upload/././templates/default/pm_checknew.htm', '/var/www/html/forum/upload/././templates/default/header_ajax.htm', 1378780421, '1', './templates/default')
|| checktplrefresh('/var/www/html/forum/upload/././templates/default/pm_checknew.htm', '/var/www/html/forum/upload/././templates/default/footer_ajax.htm', 1378780421, '1', './templates/default')
;?><? ob_end_clean(); ob_start(); @header("Expires: -1"); @header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE); @header("Pragma: no-cache"); @header("Content-type: application/xml; charset=$charset"); echo '<?xml version="1.0" encoding="'.$charset.'"?>';; ?><root><![CDATA[<? if($s) { ?><script type="text/javascript" reload="1"><?=$s?>;$('myprompt').className='new';$('myprompt').onmouseover=function(){showMenu({'ctrlid':'myprompt'});}</script><? if($pmsound) { ?><div id="pmsound" style="position:absolute;top:-100000px"></div><script type="text/javascript" reload="1">$('pmsound').innerHTML = AC_FL_RunContent('id', 'pmsoundplayer', 'name', 'pmsoundplayer', 'width', '0', 'height', '0', 'src', '<?=$boardurl?>images/sound/player.swf', 'FlashVars', 'sFile=<?=$boardurl?>images/sound/pm_<?=$pmsound?>.mp3', 'menu', 'false',  'allowScriptAccess', 'sameDomain', 'swLiveConnect', 'true');</script><? } } define('STAT_DISABLED', 1); funcstat(); stat_code(); $s = ob_get_contents(); ob_end_clean(); $s = preg_replace("/([\x01-\x08\x0b-\x0c\x0e-\x1f])+/", ' ', $s); $s = str_replace(array(chr(0), ']]>'), array(' ', ']]&gt;'), $s); ?><?=$s?>
<? if($prompts['newbietask'] && $newbietasks) { include template('task_newbie_js', '0', ''); } ?>
]]></root><? exit; ?>