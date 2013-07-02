<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>กรุงเทพประกันชีวิต</title>
		<link rel="stylesheet" href="<?=base_url(); ?>assets/css/style.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.css" type="text/css">
		<link href="<?=base_url(); ?>assets/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
		<script src="<?=base_url(); ?>assets/js/jquery-1.9.1.js"></script>
		<script src="<?=base_url(); ?>assets/js/jquery-ui-1.10.3.custom.js"></script>

		<script>
			function chkSubmit() {
				var other = document.getElementById('budget').value;
				if (other > 100000) {
					var check = other.substring(1, 2);
					if (check != 0) {
						var numplus = parseInt(other.substring(0, 1)) + parseInt(1);
						var numzero = parseInt(other.substring(1, 10).length);
						document.getElementById('budget').value = String(numplus) + "00000";
					}
				} else {
					if (other.length < 6) {
						document.getElementById('budget').value = "100000";
					}
				}
			}
		</script>
	</head>
	<body>
		<div class="container" style="box-shadow: 1px 1px 15px 1px rgba(50, 50, 50,.5); padding-bottom: 500px;">
			<img src="<?=base_url(); ?>assets/images/logo.png" class="logo"/>
                        <p class="page_title">
			</p>
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">BLA : ขั้นตอน</a>
					<ul class="nav">
						<li>
							<a href="<?=base_url(); ?>user">1.ข้อมูลลูกค้า</a>
						</li>
                                                <li class="active">
							<a href="#">2.ความต้องการ</a>
						</li>
                                                 <li>
							<a href="#">3.รายงาน</a>
						</li>
						<li>
							<a href="<?=base_url(); ?>report">รายงาน</a>
						</li>
					</ul>
					<span style="float: right; margin-top:10px;"><?= $this -> session -> userdata('Fname') . " " . $this -> session -> userdata('Lname'); ?>
						| <a href="<?=base_url('login/logout'); ?>" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่ ?')">Logout</a></span>
				</div>
			</div>
			<div class="well span11 form-horizontal" style="float:none;margin:0 auto">
				<ul class="thumbnails" style="margin: 20px;">
					<?php echo form_open('insurance/plan1/', array("class" => "form-horizontal")); ?>
					<li class="span10">
						<div class="thumbnail clearfix">
							<img src="<?=site_url('assets/images/protect.png'); ?>" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
								<h4>ความคุ้มครองสูง</h4>
								<small><b>ความคุ้มครองที่ต้องการ </b>
									<input type="hidden" name="cusid" id="cusid"value="<?=$cusid; ?>" >
									<input type="text" name="budget" id="budget" class="input-small" value="100000" />
									บาท</small>
								<input type="submit" value="คำนวนเบี้ยประกัน" class="btn btn-primary icon pull-right">
							</div>
						</div>
					</li>
					<?=form_close(); ?>
					<?php echo form_open('insurance/plan2/', array("class" => "form-horizontal")); ?>
					<li class="span10" style="padding-top: 12px;">
						<div class="thumbnail clearfix">
							<img src="<?=site_url('assets/images/saving.png'); ?>" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
								<h4>เงินออมทรัพย์ / เงินปันผล</h4>
								<small><b>เบี้ยประกันที่ต้องการ </b>
									<input type="hidden" name="cusid" id="cusid"value="<?=$cusid; ?>" >
									<input type="text" name="budget" id="budget" value="5000" class="input-small" />
									บาท/ปี</small>
								<input type="submit" value="คำนวนเบี้ยประกัน" class="btn btn-primary icon pull-right">
							</div>
						</div>
					</li>
					<?=form_close(); ?>
				</ul>
			</div>
		</div>
	</body>
</html>
