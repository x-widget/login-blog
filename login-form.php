<div class='login-box'><div class='inner'>
    <form action="<?=url_login_check()?>" method="post" autocomplete="off">
		<div class='login-box-top'>
			<p>로그인을 해 주세요</p>
			
			<div style='clear:both;'></div>
		</div>
		
		<div class='login-box-middle'>
			<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
			<div class='username'><input type="text" name="mb_id" required placeholder='아이디'  style="background: url('<?=$widget_config['url']?>/img/username.png') no-repeat 5% 50%;" /></div>
			<div><input type="password" name="mb_password" id="ol_pw" required placeholder='비밀번호' style="background: url('<?=$widget_config['url']?>/img/password.png') no-repeat 5% 50%;" /></div>
		</div>
		
		<div class='login-box-bottom'>
          <div class='submit-button'><input type="submit"  value="로그인"></div>
			<div class='setting'>
			<a class='register-right' href="<?=url_register()?>">회원가입</a> 
				<a class='find-password' id="ol_password_lost" href="<?=url_bbs()?>/password_lost.php" target='_blank'>비밀번호 찾기</a>
			</div>
		</div>
		
    </form>
</div></div>

