<? if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table cellspacing="0" cellpadding="0" summary="My Threads" class="datatable">
<thead class="colplural">
<tr>
<td class="folder">&nbsp;</td>
<td class="icon">&nbsp;</td>
<th>Thread</th>
<td class="forum">Forum</td>
<? if(!$uid) { ?>
<td class="nums">
<select onchange="window.location='my.php?item=threads&filter=' + this.value + '<?=$fidadd?>'">
<option value="">Status</option>
<option value="recyclebin"<? if($filter == 'recyclebin') { ?> selected="selected"<? } ?>>Recyclebin</option>
<option value="aduit"<? if($filter == 'aduit') { ?> selected="selected"<? } ?>>Waiting Aduit</option>
<option value="close"<? if($filter == 'close') { ?> selected="selected"<? } ?>>Close</option>
<option value="common"<? if($filter == 'common') { ?> selected="selected"<? } ?>>Normal</option>
</option>
</td>
<? } ?>
<td class="lastpost"><cite>Last Post</cite></td>
</tr>
</thead>
<? if($threadlist) { ?>
<tbody><? if(is_array($threadlist)) { foreach($threadlist as $thread) { ?><tr>
<td class="folder">
<a href="viewthread.php?tid=<?=$thread['tid']?>" target="_blank">
<? if($thread['folder'] == 'lock') { ?>
<img src="<?=IMGDIR?>/folder_lock.gif" /></a>
<? } elseif(in_array($thread['displayorder'], array(1, 2, 3))) { ?>
<img src="<?=IMGDIR?>/pin_<?=$thread['displayorder']?>.gif" alt="<?=$threadsticky[3-$thread['displayorder']]?>" /></a>
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
<img src="<?=IMGDIR?>/rewardsmall.gif" alt="Reward" <? if($thread['price'] < 0) { ?>class="solved"<? } ?> />
<? } elseif($thread['special'] == 4) { ?>
<img src="<?=IMGDIR?>/activitysmall.gif" alt="Activity" />
<? } elseif($thread['special'] == 5) { ?>
<img src="<?=IMGDIR?>/debatesmall.gif" alt="Debate" />
<? } else { ?>
<?=$thread['icon']?>
<? } ?>
</td>
<th><? if($thread['displayorder'] >= 0) { ?><a href="viewthread.php?tid=<?=$thread['tid']?>" target="_blank"><?=$thread['subject']?></a><? } else { ?><?=$thread['subject']?><? } ?></th>
<td class="forum"><a href="forumdisplay.php?fid=<?=$thread['fid']?>" target="_blank"><?=$thread['forumname']?></a></td>
<? if(!$uid) { ?>
<td class="nums"><? if($thread['displayorder'] == '-1') { ?>Recyclebin<? } elseif($thread['displayorder'] == '-2') { ?>Waiting Aduit<? } elseif($thread['closed'] == '1') { ?>Close<? } else { ?>Normal<? } ?></td>
<? } ?>
<td class="lastpost">
<cite><? if($thread['lastposter']) { ?><a href="space.php?username=<?=$thread['lastposterenc']?>" target="_blank"><?=$thread['lastposter']?></a><? } else { ?>Anonymous<? } ?></cite>
<em><a href="redirect.php?tid=<?=$thread['tid']?>&amp;goto=lastpost#lastpost"><?=$thread['lastpost']?></a></em>
</td>
</tr><? } } ?></tbody>
<? } else { ?>
<tr>
<td class="folder">&nbsp;</td>
<td class="icon">&nbsp;</td>
<th colspan="4"><p class="nodata">No Record</p></th>
</tr>
<? } ?>
</table>
<? if(!empty($multipage)) { ?><div class="pages_btns"><?=$multipage?></div><? } ?>