<? if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<h1>Manage Login</h1>
<div class="channelinfo">To login "Moderator Management Panel", you need to input password. "Moderator Management Panel" will be locked if the password input is incorrect over three times. It takes 30 minutes before the panel is unlocked</div>
<form method="post" action="<?=$cpscript?>?action=login" class="filterform">
<input type="hidden" name="formhash" value="<?=FORMHASH?>">
<input type="hidden" name="fid" value="<?=$fid?>">
<input type="hidden" name="submit" value="yes">
<table summary="Member Stats" cellspacing="0" cellpadding="5">
<tr>
<th width="60">Name:</th><td><?=$discuz_userss?></td>
</tr>
<tr>
<th>Pass:</th><td><input type="password" name="cppwd" class="txt" /></td>
</tr>
<tr>
<th></th><td><button type="submit" class="submit" name="submit" id="submit" value="true">Submit</button></td>
</tr>
</table>
</form>