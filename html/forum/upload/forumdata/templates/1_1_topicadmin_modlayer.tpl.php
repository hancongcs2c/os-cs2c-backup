<? if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div id="modlayer" style="display: none;position:position">
<input type="hidden" name="optgroup" />
<input type="hidden" name="operation" />
<a class="collapse" href="javascript:;" onclick="$('modlayer').className='collapsed'"><img src="<?=IMGDIR?>/collapsed_yes.gif" alt="Zoom out" title="Zoom out" /></a>
<label><input class="checkbox" type="checkbox" name="chkall" onclick="if(!($('modcount').innerHTML = modclickcount = checkall(this.form, 'moderate'))) {$('modlayer').style.display = 'none';}" /> CheckAll</label>
<span>Select</span><strong onmouseover="$('moremodoption').style.display='block'" onclick="$('modlayer').className=''" id="modcount"></strong><span>piece: </span>
<? if($allowdelpost) { ?>
<strong><a href="javascript:;" onclick="tmodthreads(3, 'delete');return false;">Delete</a></strong>
<span class="pipe">|</span>
<? } if($allowmovethread) { ?>
<strong><a href="javascript:;" onclick="tmodthreads(2, 'move');return false;">Move</a></strong>
<span class="pipe">|</span>
<? } if($allowedittypethread) { ?>
<strong><a href="javascript:;" onclick="tmodthreads(2, 'type');return false;">Types</a></strong>
<? } ?>

<div id="moremodoption">
<hr class="solidline" />
<? if($allowstickthread) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'stick');return false;">Stick</a>
<? } if($allowdigestthread) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'digest');return false;">Digest</a>
<? } if($allowhighlightthread) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'highlight');return false;">Highlight</a>
<? } if($allowrecommendthread && $forum['modrecommend']['open'] && $forum['modrecommend']['sort'] != 1) { ?>
<a href="javascript:;" onclick="tmodthreads(1, 'recommend');return false;">Recommend</a>
<? } if($allowbumpthread || $allowclosethread) { ?>
<span class="pipe">|</span>
<? } if($allowbumpthread) { ?>
<a href="javascript:;" onclick="tmodthreads(3, 'bump');return false;">Bump\&Down</a>
&nbsp;
<? } if($allowclosethread) { ?>
<a href="javascript:;" onclick="tmodthreads(4);return false;">Lock/Unlock</a>
<? } ?>
</div>
</div>