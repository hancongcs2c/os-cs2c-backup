<? if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('register');
0
|| checktplrefresh('/var/www/html/forum/upload/./templates/default/register.htm', '/var/www/html/forum/upload/./templates/default/seccheck.htm', 1378804359, '2', './templates/colors')
;?><? include template('header', '0', ''); if(!empty($message)) { ?>
<script type="text/javascript" onload="1"><? $bbname = str_replace('\'', '\\\'', $bbname); ?>if(document.body.stat) document.body.stat('register_succeed', '<?=$regname?>');
display('main_messaqge');
display('layer_reg');
display('layer_message');
<? if($regverify == 1) { ?>
$('messageleft1').innerHTML = '<p>Thank you for registering! <?=$bbname?></p><p>Your account is not activated, please Check your Email to activate your account</p>';
$('messageright1').innerHTML = '<a href="memcp.php">User CP</a><br />If you do not receive our system Email, click "re-verify the validity of Email in User CP HOME," or try to replace another address. NOTE:Before your account activated, you might not be able to Post. After your account successful activated, the above restrictions will automatically be canceled.';
setTimeout("window.location.href='memcp.php'", <?=$mrefreshtime?>);
<? } elseif($regverify == 2) { ?>
$('messageleft1').innerHTML = '<p>Thank you for registering! <?=$bbname?></p><p>Please wait for the administrator to verify your account</p>';
$('messageright1').innerHTML = '<a href="memcp.php">User CP</a>';
setTimeout("window.location.href='memcp.php'", <?=$mrefreshtime?>);
<? } else { if($newbietask) { ?>
$('messageleft1').innerHTML = '<p>Thank you for registering! <?=$bbname?></p><p>We invite you to participate in the newbie task <?=$task['name']?>,Will now forward to the task details page.</p>';
$('messageright1').innerHTML = '<a href="javascript:;" onclick="location.href=\'task.php?action=view&id=<?=$task['taskid']?>\'">If the page does not redirect, Click Here to reload</a>';
setTimeout('location.href=\'task.php?action=view&id=<?=$task['taskid']?>\'', <?=$mrefreshtime?>);
<? } else { ?>
$('messageleft1').innerHTML = '<p>Thank you for registering! <?=$bbname?></p>';
$('messageright1').innerHTML = '<a href="javascript:;" onclick="location.reload()">If the page does not redirect, Click Here to reload</a>';
setTimeout('location.reload()', <?=$mrefreshtime?>);
<? } } if($_DCACHE['settings']['frameon'] && $_DCOOKIE['frameon'] == 'yes') { ?>
if(top != self) {
parent.leftmenu.location.reload();
}
<? } ?>
</script>
<? } else { if(empty($infloat)) { ?>
<div id="nav"><a href="<?=$indexname?>"><?=$bbname?></a> <?=$navigation?></div>
<div id="wrap" class="wrap s_clear">
<div class="main"><div class="content nofloat">
<? } ?>
<div class="fcontent" id="main_messaqge">
<div id="layer_bbrule" class="postbox" style="display: none;">
<div>
<h3><?=$bbname?> Rule Message</h3>
<div class="clause"><?=$bbrulestxt?></div>
<button onclick="$('agreebbrule').checked = true;display('layer_reg');display('layer_bbrule');">Agree</button> &nbsp; <button onclick="hideWindow('register')">Disagree</button>
</div>
</div>
<div id="layer_reg" class="postbox s_clear">
<h3 class="float_ctrl">
<em id="returnmessage4"><? if($action != 'activation') { ?><?=$reglinkname?><? } else { ?>You account needs to be activated<? } ?></em>
<span>
<? if(!empty($infloat)) { ?><a href="javascript:;" class="float_close" onclick="hideWindow('register')" title="Close">Close</a><? } ?>
</span>
</h3>
<form method="post" name="register" id="registerform" onsubmit="ajaxpost('registerform', 'returnmessage4', 'returnmessage4', 'onerror');return false;" action="<?=$regname?>?regsubmit=yes">
<input type="hidden" name="formhash" value="<?=FORMHASH?>" />
<input type="hidden" name="referer" value="<?=$referer?>" />
<? if(!empty($infloat)) { ?><input type="hidden" name="handlekey" value="<?=$handlekey?>" /><? } ?>
<input type="hidden" name="activationauth" value="<? if($action == 'activation') { ?><?=$activationauth?><? } ?>" />
<div class="loginform">
<div id="reginfo_a">
<span id="activation_hidden"<? if($action == 'activation') { ?> style="display:none"<? } ?>>
<? if(!empty($fromuser)) { ?>
<span>
<label><em>Reg. From:</em><?=$fromuser?></label>
<input type="hidden" name="fromuser"value="<?=$fromuser?>" />
</span>
<? } ?>
<label><em>Name:</em><input type="text" id="username" name="username" autocomplete="off" size="25" maxlength="15" value="" onBlur="checkusername()" tabindex="1" class="txt" /> *</label>
<label><em>Password:</em><input type="password" name="password" size="25" id="password" onkeypress="detectCapsLock(event, this)" tabindex="1" class="txt" /> *</label>
<label><em>Confirm:</em><input type="password" name="password2" size="25" id="password2" onkeypress="detectCapsLock(event, this)" tabindex="1" value="" class="txt" /> *</label>
<label><em>Email:</em><input type="text" name="email" autocomplete="off" size="25" id="email" onBlur="checkemail()" tabindex="1" class="txt" /> *</label>
<label><em>&nbsp;</em><a href="https://domains.live.com/members/signup.aspx?domain=<?=$msn['domain']?>" target="_blank" style="float: left; width: 210px;"><? if($msn['on']) { ?>Register @<?=$msn['domain']?> Email<? } else { ?>Register an email<? } ?></a></label>
</span>
<? if($action == 'activation') { ?>
<span id="activation_user">
<label><em>Name:</em><?=$username?></label>
</span>
<? } if($secqaacheck || $seccodecheck) { ?>
<div class="regsec"><label style="display:inline"><em>Check: </em><? if($secqaacheck) { ?>
<input name="secanswer" id="secanswer" type="text" autocomplete="off" style="width:50px" value="Security Question" class="txt" href="ajax.php?action=updatesecqaa" tabindex="1">
<span id="checksecanswer"><img src="images/common/none.gif" width="16" height="16"></span>
<? } if($seccodecheck) { ?>
<input name="seccodeverify" id="seccodeverify_<?=CURSCRIPT?>" type="text" autocomplete="off" style="width:50px" value="Code" class="txt" href="ajax.php?action=updateseccode" tabindex="1">
<a href="javascript:;" onclick="updateseccode();doane(event);">Change</a>
<span id="checkseccodeverify_<?=CURSCRIPT?>"><img src="images/common/none.gif" width="16" height="16"></span>
<? } ?>

<script type="text/javascript" reload="1">
var profile_seccode_invalid = 'Security Code Error, Please try again';
var profile_secanswer_invalid = 'Your Answer is wrong, please try again';
var lastseccode = lastsecanswer = secfocus ='';
var secanswerObj = $('secanswer');
var seccodeObj = $('seccodeverify_<?=CURSCRIPT?>');
var secstatus = {'secanswer':0,'seccodeverify_<?=CURSCRIPT?>':0};

if(secanswerObj) {
secanswerObj.onclick = secanswerObj.onfocus = showIdentifying;
secanswerObj.onblur = function(e) {if(!secfocus) $('secanswer_menu').style.display='none';checksecanswer();doane(e);};
}

if(seccodeObj) {
seccodeObj.onclick = seccodeObj.onfocus = showIdentifying;
seccodeObj.onblur = function(e) {if(!secfocus) $('seccodeverify_<?=CURSCRIPT?>_menu').style.display='none';checkseccode();doane(e);};
}

function showIdentifying(e) {
var obj = BROWSER.ie ? event.srcElement : e.target;
if(!$(obj.id + '_menu')) {
obj.value = '';
ajaxmenu($(obj.id), 0, 1, 3, '12', function() {
secstatus[obj.id] = 1;
$(obj.id + '_menu').onmouseover = function() { secfocus = 1; }
$(obj.id + '_menu').onmouseout = function() { secfocus = '';$(obj.id).focus(); }
});
} else if(secstatus[obj.id] == 1) {
$(obj.id + '_menu').style.display = '';
}
obj.unselectable = 'off';
obj.focus();
doane(e);
}

function updateseccode(op) {
if(isUndefined(op)) {
ajaxget('ajax.php?action=updateseccode', seccodeObj.id + '_menu', 'ajaxwaitid', '', '', '$(seccodeObj.id + \'_menu\').style.display = \'\'');
} else {
window.document.seccodeplayer.SetVariable("isPlay", "1");
}
seccodeObj.focus();
}

function checkseccode() {
var seccodeverify = seccodeObj.value;
if(seccodeverify == lastseccode) {
return;
} else {
lastseccode = seccodeverify;
}
var cs = $('checkseccodeverify_<?=CURSCRIPT?>');
<? if($seccodedata['type'] != 1) { ?>
if(!(/[0-9A-Za-z]{4}/.test(seccodeverify))) {
warning(cs, profile_seccode_invalid);
return;
}
<? } else { ?>
if(seccodeverify.length != 2) {
warning(cs, profile_seccode_invalid);
return;
}
<? } ?>
ajaxresponse('checkseccodeverify_<?=CURSCRIPT?>', 'action=checkseccode&seccodeverify=' + (BROWSER.ie && document.charset == 'utf-8' ? encodeURIComponent(seccodeverify) : seccodeverify));
}

function checksecanswer() {
        var secanswer = secanswerObj.value;
if(secanswer == lastsecanswer) {
return;
} else {
lastsecanswer = secanswer;
}
ajaxresponse('checksecanswer', 'action=checksecanswer&secanswer=' + (BROWSER.ie && document.charset == 'utf-8' ? encodeURIComponent(secanswer) : secanswer));
}

function ajaxresponse(objname, data) {
var x = new Ajax('XML', objname);
x.get('ajax.php?inajax=1&' + data, function(s){
        var obj = $(objname);
        if(s.substr(0, 7) == 'succeed') {
        	obj.style.display = '';
                obj.innerHTML = '<img src="<?=IMGDIR?>/check_right.gif" width="16" height="16" />';
obj.className = "warning";
} else {
warning(obj, s);
}
});
}

function warning(obj, msg) {
if((ton = obj.id.substr(5, obj.id.length)) != 'password2') {
$(ton).select();
}
obj.style.display = '';
obj.innerHTML = '<img src="<?=IMGDIR?>/check_error.gif" width="16" height="16" />';
obj.className = "warning";
}
</script></label></div>
<? } if(($regstatus > 1 && $action != 'activation') || $regstatus == 2) { ?>
<label><em>Invite Code:</em><input type="text" name="invitecode" autocomplete="off" size="25" maxlength="16" value="<?=$invitecode?>" id="invitecode" onBlur="checkinvitecode()" tabindex="1" class="txt" /><? if($regstatus == 2) { ?> *<? } ?></label>
<? } ?>
</div>
<div id="reginfo_b"<? if(!empty($infloat)) { ?> style="display:none;"<? } ?>>
<? if($regverify == 2) { ?>
<label><em>Reg. Reason:</em><input name="regmessage" autocomplete="off" size="25" tabindex="1" class="txt" /> *</label>
<? } if(is_array($_DCACHE['fields_required'])) { foreach($_DCACHE['fields_required'] as $field) { ?><label<? if($field['description']) { ?> title="<? echo htmlspecialchars($field['description']); ?>"<? } ?>><em><?=$field['title']?>:</em>
<? if($field['selective']) { ?>
<select name="field_<?=$field['fieldid']?>new" tabindex="1">
<option value="">- Select -</option><? if(is_array($field['choices'])) { foreach($field['choices'] as $index => $choice) { ?><option value="<?=$index?>"<? if($index == $member['field_'.$field['fieldid']]) { ?> selected="selected"<? } ?>><?=$choice?></option><? } } ?></select>
<? } else { ?>
<input type="text" name="field_<?=$field['fieldid']?>new" size="25" value="<?=$member['field_'.$field['fieldid']]?>" tabindex="1" class="txt" />
<? } ?> *
</label><? } } ?></div>
</div>
<div class="logininfo">
<h4>Already have a account? <a href="logging.php?action=login" onclick="floatwin('close_register');floatwin('open_login', this.href, 600, 400);return false;">Login Now</a></h4>
<? if($action == 'activation') { ?>
<p>Give up activating<a href="javascript:;" onclick="$('registerform').activationauth.value='';$('activation_hidden').style.display='';$('activation_user').style.display='none'">Register Now</a></p>
<? } ?>
</div>
<p class="fsubmit s_clear">
<? if($sitemessage['register']) { ?><a href="javascript:;" id="custominfo_register" class="right"><img src="<?=IMGDIR?>/info.gif" alt="FAQ" /></a><? } ?>
<span id="reginfo_a_btn">
<? if($action != 'activation') { ?><em>&nbsp;</em><? } if(($field || $regverify == 2) && !empty($infloat)) { ?>
<button class="submit" tabindex="1" onclick="regstep('reginfo_a','reginfo_b'); return false;">Next</button>
</span>
<span id="reginfo_b_btn" style="display:none">
<em class="regpre"><a href="javascript:;" onclick="regstep('reginfo_b','reginfo_a');">Previous</a></em>
<? } ?>
<button class="submit" id="registerformsubmit" type="submit" name="regsubmit" value="true" tabindex="1"><? if($action == 'activation') { ?>Activation<? } else { ?>Submit<? } ?></button>
<? if($bbrules) { ?>
<input type="checkbox" class="checkbox" name="agreebbrule" value="<?=$bbrulehash?>" id="agreebbrule" checked="checked" /> <label for="agreebbrule">Agree<a href="javascript:;" onclick="display('layer_reg');display('layer_bbrule');">Rule Message</a></label>
<? } ?>
</span>
</p>
</form>
</div>
</div>
<div id="layer_message" class="fcontent alert_win" style="display: none;">
<h3 class="float_ctrl">
<em>Login</em>
<span><? if(!empty($infloat)) { ?><a href="javascript:;" class="float_close" onclick="hideWindow('login')" title="Close">Close</a><? } ?></span>
</h3>
<hr class="shadowline" />
<div class="postbox"><div class="alert_right">
<div id="messageleft1"></div>
<p class="alert_btnleft" id="messageright1"></p>
</div>
</div>

<script type="text/javascript" reload="1">
<? if($action != 'activation') { ?>
function initinput_register() {
$('registerform').username.focus();
}
if(BROWSER.ie && BROWSER.ie < 7) {
setTimeout('initinput_register()', 500);
} else {
initinput_register();
}
<? } if($sitemessage['register']) { ?>
showPrompt('custominfo_register', 'click', '<? echo trim($sitemessage['register'][array_rand($sitemessage['register'])]); ?>', <?=$sitemessage['time']?>);
<? } ?>

var profile_username_toolong = 'UserName is longer than 15 characters';
var profile_username_tooshort = 'UserName is shorter than 3 characters';
var doublee = parseInt('<?=$doublee?>');
var lastusername = lastpassword = lastemail = lastinvitecode = '';

function messagehandle_register(key, msg) {
$('returnmessage4').className = key == 1 ? 'onerror' : '';
$('returnmessage4').innerHTML = msg;
}

function checkusername() {
var username = trim($('username').value);
if(username == '' || username == lastusername) {
return;
} else {
lastusername = username;
}
var unlen = username.replace(/[^\x00-\xff]/g, "**").length;
if(unlen < 3 || unlen > 15) {
messagehandle_register(1, unlen < 3 ? profile_username_tooshort : profile_username_toolong);
return;
}
        ajaxget('ajax.php?infloat=register&handlekey=register&action=checkusername&username=' + (BROWSER.ie && document.charset == 'utf-8' ? encodeURIComponent(username) : username), 'returnmessage4');
}

function checkemail() {
var email = trim($('email').value);
if(email == '' || email == lastemail) {
return;
} else {
lastemail = email;
}
ajaxget('ajax.php?infloat=register&handlekey=register&action=checkemail&email=' + email, 'returnmessage4');

}
function checkinvitecode() {
var invitecode = trim($('invitecode').value);
if(invitecode == lastinvitecode) {
return;
} else {
lastinvitecode = invitecode;
}
        ajaxget('ajax.php?infloat=register&handlekey=register&action=checkinvitecode&invitecode=' + invitecode, 'returnmessage4');
}
function trim(str) {
return str.replace(/^\s*(.*?)[\s\n]*$/g, '$1');
}
<? if(($field && !empty($infloat)) || $regverify == 2) { ?>
function regstep(obja,objb){
$(obja).style.display = $(obja+'_btn').style.display = 'none';
$(objb).style.display = $(objb+'_btn').style.display = '';
}
<? } if($invitecode) { ?>
ajaxget('ajax.php?infloat=register&handlekey=register&action=checkinvitecode&invitecode=<?=$invitecode?>', 'returnmessage4');
<? } ?>
</script>
<? } updatesession(); if(empty($infloat)) { ?>
</div></div>
</div>
<? } include template('footer', '0', ''); ?>