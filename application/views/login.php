<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>กรุงเทพประกันชีวิต</title>
		<link rel="stylesheet" href="<?=base_url(); ?>assets/css/style.css" type="text/css">
	</head>
	<body>
		<div class="content">
			<img src="<?=base_url(); ?>assets/images/logo.png" class="logo"/>
			<p class="page_title">
				โปรแกรมช่วยในการวางแผนด้านการเงิน
			</p>
			<?php echo form_open('/login', array('id' => 'sign-up')); ?>
			<p class="title">
				เข้าสู่ระบบ
			</p>
			<fieldset>
				<label>รหัสตัวแทน : </label>
				<input type="text" id="username" name="username" />
			</fieldset>
			<fieldset>
				<label>รหัสผ่าน : </label>
				<input type="password" id="password" name="password" />
			</fieldset>
			<fieldset>
				<input type="submit" value="Login" />
			</fieldset>
			<?=form_close(); ?>
		</div>
	</body>
</html>
