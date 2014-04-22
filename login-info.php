<div class='login-box logged-in'><div class='inner'>
	<div class='logged-in-name'>
		[<?=my('nick')?>]님 로그인
	</div>
	<div class='logged-in-messages'>
		<a href="<?=g::memo_new()?>" target="_blank">
			<img src='<?=$widget_config['url']?>/message2.png'/> 쪽지 확인
		</a>
	</div>
	<div class='logged-in-change-password'>
		<a href="<?=url_bbs()?>/member_confirm.php?url=register_form.php">
			<img src='<?=$widget_config['url']?>/lock2.png'/> 비밀번호 변경
		</a>
	</div>
	<div class='middle-panel'>
	<?php if ($is_admin == 'super' || $is_auth) {  ?>
	<div class='admin-mode'>
		<div><a href="<?=g::url()?>/adm">ADMIN PANEL</a></div>
		<div><a href="<?=x::url_admin()?>">X Admin Panel</a></div>
	</div>
	<?php }  ?>
	<div class='logout-button' <?if ($is_admin == 'super' || $is_auth) echo "style='float: right; width: 82px;'"?>>
		<a href="<?=url_bbs()?>/logout.php" <?if ($is_admin == 'super' || $is_auth) echo "style='padding: 0;'"?>>로그아웃</a>
	</div>
		<div style='clear: both'></div>
	</div>
	<div class='account-settings'>
		<a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php">
			<img src='<?=$widget_config['url']?>/setting.png'/> 회원정보변경
		</a>
	</div>

		
</div></div>