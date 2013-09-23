<?php
//ENGLISH DISCUZ!7.2 TRANSLATE BY COOBY http://www.imcrp.com
$language = array
(

	'reason_moderate' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_merge' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_delete_post' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_ban_post' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_warn_post' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}<br />
consecutive $warningexpiration days, total $warninglimit warnings, you will be automatically prohibited posted $warningexpiration day<br />
Up to now, you have been warned that  $authorwarnings times, please note!
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_move' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> moved to <a href=\"{boardurl}forumdisplay.php?from=notice&fid={$toforum[fid]}\">{$toforum[name]}</a> {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_copy' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> Copy to <a href=\"{boardurl}viewthread.php?from=notice&tid=$threadid\">{$thread[subject]}</a> {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

     'reason_stamp_update' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> Add a stamp {$_DCACHE[stamps][$stamp][text]} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_stamp_delete' => '<div class=\"f_manage\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> by <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a>Delete a stamp {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modthreads_delete' => '<div class=\"f_manage\">Your thread {$threadsubject} did not pass the audit, has now been removed! {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modthreads_validate' => '<div class=\"f_manage\">Your thread <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$threadsubject}</a> has already been vetted and approved! {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">View</a>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modreplies_delete' => '<div class=\"f_manage\">Your reply is not approved, has now been removed! {time}
<dl class=\"summary\"><dt>Reply Content:</dt><dd>$post</dd></dl>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modreplies_validate' => '<div class=\"f_manage\">Your response has already been vetted and approved, published! {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">View</a>
<dl class=\"summary\"><dt>Reply Content:</dt><dd>$post</dd></dl>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reportpost' => '<div><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> to your report {time}
<a href=\"{boardurl}{$posturl}\" class=\"il to\">View</a>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'transfer' => '<div class=\"f_credit\">You receive from the <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> points transfer {$extcredits[$creditstrans][title]} {$netamount} {$extcredits[$creditstrans][unit]} {time}
<a href=\"{boardurl}memcp.php?from=notice&action=creditslog\" class=\"il to\">View</a>
<fieldset><ins>{$transfermessage}</ins></fieldset></div>',

	'addfunds' => '<div class=\"f_credit\">Result points you submit the request has been successfully completed, the corresponding amount of points have been deposited into your points account {time}
<a href=\"{boardurl}memcp.php?from=notice&action=creditslog\" class=\"il to\">View</a>
<dl class=\"summary\"><dt>Order Number:</dt><dd>{$order[orderid]}<dt>expenses:</dt><dd>yuan {$order[price]} yuan</dd><dt>Income:</dt><dd>{$extcredits[$creditstrans][title]} {$order[amount]} {$extcredits[$creditstrans][unit]}</dd></dl></div>',

	'rate_reason' => '<div class=\"f_rate\">Your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> ±» <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> score {$ratescore} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'rate_removereason' => '<div class=\"f_rate\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> withdrew on your topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> Rating {$ratescore} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'trade_seller_send' => '<div class=\"f_trade\"><a href=\"{boardurl}space.php?from=notice&uid={$userid}\">{$user}</a> to buy your goods <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a>the other party had already paid, waiting for your shipment {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">View</a></div>',

	'trade_buyer_confirm' => '<div class=\"f_trade\">You have purchased the goods <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a>is<a href=\"{boardurl}space.php?from=notice&uid={$userid}\">{$user}</a> has been shipped, waiting for you to confirm the {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">View</a></div>',

	'trade_fefund_success' => '<div class=\"f_trade\">goods <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a> has been Refund success {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">rating</a></div>',

	'trade_success' => '<div class=\"f_trade\">goods <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a> has been Trading success {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">rating</a></div>',

	'eccredit' => '<div class=\"f_trade\">with your transaction <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> has been evaluated to you {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">back to comments</a></div>',

	'activity_apply' => '<div class=\"f_activity\">activities <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$activity_subject}</a> of the initiator has approved you to participate in this event {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">View</a></div>',

	'activity_delete' => '<div class=\"f_activity\">activities <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$activity_subject}</a> of the sponsors refused to participate in this event you {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">View</a></div>',

	'reward_question' => '<div class=\"f_reward\">your reward topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> is <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> set up the best answer is {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">View</a></div>',

	'reward_bestanswer' => '<div class=\"f_reward\">your response has been the topic of reward <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> author of <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> selected as the best reward The answer {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">View</a></div>',

	'favoritethreads_notice' => '<div class=\"f_thread\">{actor}responded to your interest in the subject of <a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\">{$thread[subject]}</a> {time}
<a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\" class=\"il to\">Rate score</a>
<dfn><a href=\"my.php?from=notice&item=attention&action=remove&tid={$thread[tid]}\" onclick=\"ajaxmenu(this, 3000);doane(event);\" class=\"deloption ntc_remove\">cancel a reminder</a></dfn></div>',

	'repquote_noticeauthor' => '<div class=\"f_quote\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> references you have the topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> post {time}
<dl class=\"summary\"><dt>your post:<dt><dd>{$noticeauthormsg}</dd><dt><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> wrote:</dt><dd>{$postmsg}</dd></dl>
<p><a href=\"{boardurl}post.php?from=notice&action=reply&fid={$fid}&tid={$thread[tid]}&reppost={$pid}\">Reply</a><i>|</i><a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\">²é¿´</a></p></div>',

	'reppost_noticeauthor' => '<div class=\"f_reply\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> replied to you have the topic <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> post {time}
<dl class=\"summary\"><dt>your post:<dt><dd>{$noticeauthormsg}</dd><dt><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> wrote:</dt><dd>{$postmsg}</dd></dl>
<p><a href=\"{boardurl}post.php?from=notice&action=reply&fid={$fid}&tid={$thread[tid]}&reppost={$pid}\">Reply</a><i>|</i><a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\">View</a></p></div>',

	'magics_sell' => '<div class=\"f_magic\">Your props {$magic[name]} ±» <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> to buy a return {$totalcredit} {time}</div>',

	'magics_receive' => '<div class=\"f_magic\">You receive <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> give you props {$magicarray[$magicid][name]} {time}
<fieldset><ins>{$givemessage}</ins></fieldset>
<p><a href=\"{boardurl}magic.php\">rebate props</a><i>|</i><a href=\"{boardurl}magic.php?from=notice&action=mybox\" class=\"to\">go to my tool box</a></p></div>',

	'magic_thread' => '<div class=\"f_magic\">Your posts {$thread[subject]} ±» <a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_user}</a> using the {$magic[name]} {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">Go and see it!</a></div>',

	'magic_thread_anonymous' => '<div class=\"f_magic\">Your posts {$thread[subject]} by other people to use the {$magic[name]} {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">Go and see it!</a></div>',

	'magic_user' => '<div class=\"f_magic\">{$discuz_user} You use {$magic[name]} {time}
<a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid]\" class=\"il to\">Go and see it!</a></div>',

	'magic_user_anonymous' => '<div class=\"f_magic\">you by other people to use the {$magic[name]}at {time}</div>',

	'buddy_new' => '<div class=\"f_buddy\"><a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_userss}</a> add you as Buddy of the {time}
<a href=\"{boardurl}my.php?from=notice&item=buddylist&newbuddyid={$discuz_uid}&buddysubmit=yes\" class=\"il to\" onclick=\"ajaxmenu(this, 3000);doane(event);\">add {$discuz_userss} as a Buddy</a></div>',

	'buddy_new_uch' => '<div class=\"f_buddy\"><a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_userss}</a> add you as Buddy of the {time}
<p><a href=\"{boardurl}my.php?from=notice&item=buddylist&newbuddyid={$discuz_uid}&buddysubmit=yes\" onclick=\"ajaxmenu(this, 3000);doane(event);\">¼Ó {$discuz_userss} ÎªºÃÓÑ</a><i>|</i>
<a href=\"{$uchomeurl}/space.php?from=notice&uid={$discuz_uid}\" class=\"to\">Added {$discuz_userss} as a Buddy</a></p></div>',

	'task_reward_credit' => '<div class=\"f_task\">Congratulations on completing your tasks:<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>access points {$extcredits[$task[prize]][title]} {$task[bonus]} {$extcredits[$task[prize]][unit]} {time}
<p><a href=\"{boardurl}memcp.php?from=notice&action=credits\">see my points</a><i>|</i><a href=\"{boardurl}memcp.php?from=notice&action=creditslog&operation=creditslog\" class=\"il to\">View Points earnings records</a></p></div>',

	'task_reward_magic' => '<div class=\"f_task\">Congratulations on completing your tasks:<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>get props <a href=\"{boardurl}magic.php\">{$magicname}</a> {$task[bonus]} gold {time}</div>',

	'task_reward_medal' => '<div class=\"f_task\">Congratulations on completing your tasks:<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>awarded medals <a href=\"{boardurl}medal.php\">{$medalname}</a> valid {$task[bonus]} days {time}</div>',

	'task_reward_invite' => '<div class=\"f_task\">Congratulations on completing your tasks:<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>to be invited yards <a href=\"{boardurl}invite.php\">{$task[prize]}</a> a valid {$task[bonus]} days {time}
<dl class=\"summary\"><dt>invitation code:</dt><dd>{$rewards}</dd></dl></div>',

	'task_reward_group' => '<div class=\"f_task\">Congratulations on completing your tasks:<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>access to user groups {$grouptitle} valid {$task[bonus]} days {time}
<a href=\"{boardurl}faq.php?from=notice&action=grouppermission\" class=\"il to\">to see if I can do</a></div>',

	'thread_views' => '<div>Your topic {subject} see more than the {count} {time}</div>',

	'thread_replies' => '<div>the subject of your reply more than {subject} of the {count} {time}</div>',

	'thread_rate' => '<div>Your topic {subject} score more than {count} {time}</div>',

	'post_rate' => '<div>your responses {thread} score more than{count} {time}</div>',

	'user_usergroup' => '<div>upgrade your user group {usergroup} {time}
<a href=\"{boardurl}faq.php?from=notice&action=grouppermission\" class=\"il to\">to see if I can do</a></div>',

	'user_credit' => '<div>your total score achieved {count} {time}</div>',

	'user_threads' => '<div>the number you wrote the theme to {count} {time}</div>',

	'user_posts' =>	'<div>the number of your post to {count} {time}</div>',

	'user_digest' => '<div>paste the number to reach the essence of your {count} {time}</div>',

);

?>