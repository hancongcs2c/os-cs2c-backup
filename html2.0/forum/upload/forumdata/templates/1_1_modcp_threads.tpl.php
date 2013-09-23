<? if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script src="<?=$jspath?>moderate.js?<?=VERHASH?>" type="text/javascript"></script>
<div class="itemtitle s_clear">
<h1>Thread</h1>
<ul>
<li <? if($action == 'threads' && $op == 'threads') { ?> class="current" <? } ?>><a href="<?=$cpscript?>?action=threads&op=threads<?=$forcefid?>" hidefocus="true"><span>Forum</span></a></li>
<li <? if($action == 'threads' && $op == 'posts') { ?> class="current" <? } ?>><a href="<?=$cpscript?>?action=threads&op=posts<?=$forcefid?>" hidefocus="true"><span>Bath Delete</span></a></li>
<li <? if($action == 'recyclebins') { ?> class="current" <? } ?>><a href="<?=$cpscript?>?action=recyclebins<?=$forcefid?>" hidefocus="true"><span>Thread Recyclebin</span></a></li>
</ul>
</div>
<script src="<?=$jspath?>calendar.js?<?=VERHASH?>" type="text/javascript"></script>
<div class="datalist">
<form method="post" action="<?=$cpscript?>?action=<?=$action?>&op=<?=$op?>">
<input type="hidden" name="do" value="search">
<input type="hidden" name="formhash" value="<?=FORMHASH?>">
<div class="filterform">
<table cellspacing="0" cellpadding="0">
<tr>
<td width="15%">Select Forum:</td>
<td width="35%">
<select name="fid" style="width: 180px">
<option value=""></option><? if(is_array($modforums['list'])) { foreach($modforums['list'] as $id => $name) { ?><option value="<?=$id?>" <? if($id == $fid) { ?>selected<? } ?>><?=$name?></option><? } } ?></select>
</td>
<td width="15%">Posts Type</td>
<td width="35%">
<select name="threadoption" style="width: 180px">
<option value="0" <?=$threadoptionselect['0']?>>All</option>
<option value="1" <?=$threadoptionselect['1']?>>Poll</option>
<option value="2" <?=$threadoptionselect['2']?>>Trade</option>
<option value="3" <?=$threadoptionselect['3']?>>Reward</option>
<option value="4" <?=$threadoptionselect['4']?>>Activity</option>
<option value="5" <?=$threadoptionselect['5']?>>Debate</option>
<option value="999" <?=$threadoptionselect['999']?>>Digest</option>
<option value="888" <?=$threadoptionselect['888']?>>Stick</option>
</select>
</td>
</tr>
<tr>
<td>Post Author:</td>
<td><input type="text" class="txt" size="20" value="<?=$result['users']?>" name="users" style="width: 180px"/></td>
<td>Post Date:</td>
<td><input type="text" class="txt" size="10" value="<?=$result['starttime']?>" name="starttime" onclick="showcalendar(event, this);"/> To <input type="text" class="txt" size="10" value="<?=$result['endtime']?>" name="endtime" onclick="showcalendar(event, this)"/> </td>
</tr>
<tr>
<td>Subject Keyword:</td>
<td><input type="text" class="txt" size="20" value="<?=$result['keywords']?>" name="keywords" style="width: 180px"/></td>
<td>Views:</td>
<td><input type="text" class="txt" size="10" value="<?=$result['viewsmore']?>" name="viewsmore"/> To <input type="text" class="txt" size="10" value="<?=$result['viewsless']?>" name="viewsless"/> </td>
<tr>
<tr>
<td>No Reply:</td>
<td><input type="text" class="txt" size="20" value="<?=$result['noreplydays']?>" name="noreplydays" style="width: 180px"/></td>
<td>Reply:</td>
<td><input type="text" class="txt" size="10" value="<?=$result['repliesmore']?>" name="repliesmore"/> To <input type="text" class="txt" size="10" value="<?=$result['repliesless']?>" name="repliesless"/> </td>
<tr>
<tr>
<td></td>
<td colspan="3"><button value="true" id="searchsubmit" name="submit" class="submit" type="submit">Submit</button></td>
</tr>
</table>
</div>
</form>
</div>

<? if($fid) { ?>
<div class="c_header"><h3 class="noarrow">Current Forum: <a href="forumdisplay.php?fid=<?=$fid?>" target="_blank" class="lightlink"><?=$forum['name']?></a>, There is <strong><?=$total?></strong> Results,Please Select to moderate</h3></div>
<div id="threadlist" style="position: relative;" class="threadlist datalist">
<form method="post" name="moderate" id="moderate" action="topicadmin.php?action=moderate&amp;fid=<?=$fid?>&amp;infloat=yes&amp;nopost=yes">
<input type="hidden" name="formhash" value="<?=FORMHASH?>" />
<input type="hidden" name="frommodcp" value="<? if(empty($do)) { ?>1<? } else { ?>2<? } ?>" />
<table cellspacing="0" cellpadding="0" style="position: relative;" class="datatable">
<thead class="colplural">
<tr>
<td class="icon">&nbsp;</td>
<td class="icon">&nbsp;</td>
<td >&nbsp;</td>
<td class="author">Author</td>
<td class="nums">Replies/Views</td>
<td class="lastpost"><cite>Last Post</cite></td>
</tr>
</thead><? if(is_array($postlist)) { foreach($postlist as $thread) { ?><tbody id="<?=$thread['id']?>">
<tr>
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
<td>
<? if($thread['displayorder'] <= 3 || $adminid == 1) { ?>
<input onclick="tmodclick(this)" class="checkbox" type="checkbox" name="moderate[]" value="<?=$thread['tid']?>" />
<? } else { ?>
<input class="checkbox" type="checkbox" disabled="disabled" />
<? } ?>
</td>
<th class="subject <?=$thread['folder']?>">
<label>
<? if($thread['rate'] > 0) { ?>
<img src="<?=IMGDIR?>/agree.gif" alt="" />
<? } elseif($thread['rate'] < 0) { ?>
<img src="<?=IMGDIR?>/disagree.gif" alt="" />
<? } if($thread['digest'] > 0) { ?>
<img src="<?=IMGDIR?>/digest_<?=$thread['digest']?>.gif" alt="Digest <?=$thread['digest']?>" />
<? } ?>
&nbsp;</label>

<span id="thread_<?=$thread['tid']?>"><a href="viewthread.php?tid=<?=$thread['tid']?>" target="_blank" <?=$thread['highlight']?>><?=$thread['subject']?></a></span>
<? if($thread['readperm']) { ?> - [Read Permission <span class="bold"><?=$thread['readperm']?></span>]<? } if($thread['price'] > 0) { if($thread['special'] == '3') { ?>
- <span style="color: #C60">[Reward<?=$extcredits[$creditstransextra['2']]['title']?> <span class="bold"><?=$thread['price']?></span> <?=$extcredits[$creditstransextra['2']]['unit']?>]</span>
<? } else { ?>
- [Price <?=$extcredits[$creditstransextra['1']]['title']?> <span class="bold"><?=$thread['price']?></span> <?=$extcredits[$creditstransextra['1']]['unit']?>]
<? } } elseif($thread['special'] == '3' && $thread['price'] < 0) { ?>
- <span style="color: #269F11">[Solved]</span>
<? } if($thread['displayorder'] == 1) { ?>
- <span style="color: #C60">stick I</span>
<? } elseif($thread['displayorder'] == 2) { ?>
- <span style="color: #C60">stick II</span>
<? } elseif($thread['displayorder'] == 3) { ?>
- <span style="color: #C60">stick III</span>
<? } if($thread['attachment'] == 2) { ?>
<img src="images/attachicons/image_s.gif" alt="Image Attachment" class="attach" />
<? } elseif($thread['attachment'] == 1) { ?>
<img src="images/attachicons/common.gif" alt="Attachment" class="attach" />
<? } ?>
</th>

<td class="author">
<cite>
<? if($thread['authorid'] && $thread['author']) { ?>
<a href="space.php?uid=<?=$thread['authorid']?>" target="_blank"><?=$thread['author']?></a>
<? } else { ?>
<a href="space.php?uid=<?=$thread['authorid']?>" target="_blank">Anonymous</a>
<? } ?>
</cite>
<em><?=$thread['dateline']?></em>
</td>

<td class="nums"><strong><?=$thread['replies']?></strong>/<em><?=$thread['views']?></em></td>
<td class="lastpost">
<cite><? if($thread['lastposter']) { ?><a target="_blank" href="space.php?username=<?=$thread['lastposterenc']?>"><?=$thread['lastposter']?></a><? } else { ?>Anonymous<? } ?></cite>
<em><a target="_blank" href="redirect.php?tid=<?=$thread['tid']?>&amp;goto=lastpost"><?=$thread['lastpost']?></a></em>
</td>
</tr>
</tbody><? } } ?></table>
<? if($multipage) { ?><?=$multipage?> <? } if(!$total) { ?><p class="nodata">Found No related Thread</p><? } include template('topicadmin_modlayer', '0', ''); ?></form>
</div>
<br /><br />
<? } else { ?>
<p>Please Select Forum to moderate</p>
<? } ?>