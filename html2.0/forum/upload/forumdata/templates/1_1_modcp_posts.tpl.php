<? if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
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
<option value="1" <?=$threadoptionselect['1']?>>Thread FIrst</option>
<option value="2" <?=$threadoptionselect['2']?>>Thread Reply</option>
</select>					
</td>		
</tr>		
<tr>
<td>Post Author:</td>
<td><input type="text" class="txt" size="20" value="<?=$result['users']?>" name="users" style="width: 180px"/></td>
<td>Time Range:</td>
<td><input type="text" class="txt" size="10" value="<?=$result['starttime']?>" name="starttime" onclick="showcalendar(event, this)"/> To 
<? if($adminid == 1) { ?>
<input type="text" class="txt" size="10" value="<?=$result['endtime']?>" name="endtime" onclick="showcalendar(event, this)"/>
<? } else { ?>
<input type="text" class="txt" size="10" value="<?=$result['endtime']?>" name="endtime" readonly disabled /> 
<? if($adminid == 2) { ?>
<br />You can only delete posts posted in recent 2 weeks
<? } elseif($adminid == 3) { ?>
<br />You can only delete Posts posted in recent 1 week.
<? } } ?>

 </td>
</tr>		
<tr>
<td>Keyword:</td>
<td><input type="text" class="txt" size="20" value="<?=$result['keywords']?>" name="keywords" style="width: 180px"/></td>
<td>Post IP:</td>
<td><input type="text" class="txt" value="<?=$result['useip']?>" name="useip" style="width: 180px" /></td>
<tr>		
<tr>
<td></td>
<td colspan="3">
<button value="true" id="searchsubmit" name="searchsubmit" class="submit" type="submit">Submit</button> 

</td>
</tr>
</table>	
</div>
</form>
</div>
<? if($error == 1) { ?>
<p style="padding: 4px; color: red">Search Condition not Enough! You should be at least set a search condition</p>
<? } elseif($error == 2) { ?>
<p style="padding: 4px; color: red">Time Error! Moderator only can delete posts Posted in recent 1 week, Super Moderator only can delete posts Posted in 2 weeks, Please Return</p>
<? } elseif($error == 3) { ?>
<p style="padding: 4px; color: red">Illegal Keywords! Keywords should contain at least 4 characters</p>
<? } elseif($error == 4) { ?>
<p style="padding: 4px; color: red">You don't have permission to "Bath Delete Post"</p>
<? } elseif($do=='list' && empty($error)) { ?>
<div class="c_header"><h2>Totally Find <strong><?=$total?></strong> Threads</h2></div>
<div id="threadlist" class="threadlist datalist">
<form method="post" name="moderate" id="moderate" action="<?=$cpscript?>?action=<?=$action?>&op=<?=$op?>">
<input type="hidden" name="formhash" value="<?=FORMHASH?>" />
<input type="hidden" name="fid" value="<?=$fid?>" />
<input type="hidden" name="do" value="delete" />
<table cellspacing="0" cellpadding="0" class="datatable" width="100%" style="table-layout:fixed">
<thead class="colplural">
<tr>
<td class="icon">&nbsp;</td>
<td >&nbsp;</td>
<td class="author">Forum</td>
<td class="lastpost"><cite>Author</cite></td>
</tr>
</thead><? if(is_array($postlist)) { foreach($postlist as $post) { ?><tbody>
<tr>
<td><? if($allowmassprune) { ?><input class="checkbox" type="checkbox" name="delete[]" value="<?=$post['pid']?>" /><? } ?></td>
<th class="subject">
<span  class="lightlink">Thread: &nbsp;<a target="_blank" href="redirect.php?goto=findpost&amp;pid=<?=$post['pid']?>&amp;ptid=<?=$post['tid']?>&amp;modthreadkey=<?=$post['modthreadkey']?>"><?=$post['tsubject']?></a></span><br />
<?=$post['message']?>
</th>

<td class="author">
<cite><a href="forumdisplay.php?fid=<?=$post['fid']?>"><?=$post['forum']?></a>
</cite>
</td>

<td class="lastpost">
<cite>
<? if($post['authorid'] && $post['author']) { ?>
<a href="space.php?uid=<?=$post['authorid']?>" target="_blank"><?=$post['author']?></a>
<? } else { ?>
<a href="space.php?uid=<?=$post['authorid']?>" target="_blank">Anonymous</a>
<? } ?>
</cite>
<em><?=$post['dateline']?></em>
</td>
</tr>
</tbody><? } } if($postlist && $allowmassprune) { ?>
<tbody class="notelistbg">
<tr>
<td><? if($allowmassprune) { ?><input type="checkbox" name="chkall" onclick="checkall(this.form, 'delete')" class="checkbox"/><? } ?></td>
<th class="subject">
<input type="submit" name="deletesubmit" value="Delete Seleted Post">
&nbsp;<input type="checkbox" class="checkbox" name="nocredit" value="1" checked> DisUpgrade User's Credit
</th>

<td class="author">			
</td>

<td class="lastpost">
<cite>&nbsp;</cite>
<em>&nbsp;</em>
</td>
</tr>
</tbody>
<? } ?>
</table>
<? if($multipage) { ?><?=$multipage?> <? } ?>
</form>
</div>
<? } ?>
<br />
<br />
<br />
<br />
<br />