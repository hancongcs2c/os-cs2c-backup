<? if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="pages_btns s_clear">
<span class="postbtn" id="prompt_index_postbtn"><a href="misc.php?action=nav" onclick="showWindow('nav', this.href);return false;">New</a></span>
<? if(!$discuz_uid) { ?>
<p>Hi, if you want to enjoy full benefits of this forum like downloading, discussing etc, please <a href="<?=$regname?>" onclick="floatwin('open_register', this.href, 600, 400, '600,0');return false;" class="lightlink">Register</a> an account, and use it to <a href="logging.php?action=login" onclick="floatwin('open_login', this.href, 600, 400);return false;" class="lightlink">Login</a>. Join us and be a part of this great community!</p>
<? } else { ?>
Welcome <?=$discuz_userss?>, <? if($lastvisit) { ?>Your last visit was at <?=$lastvisit?>, <? } ?><a href="my.php?item=threads" class="lightlink" target="_blank">My Posts</a>, <a href="search.php?srchfrom=<?=$newthreads?>&amp;searchsubmit=yes" class="lightlink">View New Thread</a>, <a href="member.php?action=markread" id="ajax_markread" onclick="ajaxmenu(this);doane(event);" class="lightlink">Mark Read</a>
<? } ?>
</div>

<? if(empty($gid) && $announcements) { ?>
<div id="ann">
<dl>
<dt>Note:</dt>
<dd>
<div id="annbody"><ul id="annbodylis"><?=$announcements?></ul></div>
</dd>
</dl>
</div>
<script type="text/javascript">announcement();</script>
<? } ?>