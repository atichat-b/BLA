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
			$(function() {
				$("#birthday").datepicker();
			});
		</script>
	</head>
	<body>
		<div class="container" style="box-shadow: 1px 1px 15px 1px rgba(50, 50, 50,.5); padding-bottom: 500px;">
			<img src="<?=base_url(); ?>assets/images/logo.png" class="logo"/>
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">Title</a>
					<ul class="nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#"><?= $this -> session -> userdata('Fname') . " " . $this -> session -> userdata('Lname'); ?></a>
						</li>
					</ul>
				</div>
			</div>
			<form class="well span11 form-horizontal" style="float:none;margin:0 auto">
				<ul class="thumbnails" style="margin: 20px;">
					<li class="span10">
						<div class="thumbnail clearfix">
							<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
								<a href="http://bootsnipp.com/" class="btn btn-primary icon  pull-right">คำนวนเบี้ยประกัน</a>
								<h4><a href="#" >ความคุ้มครองสูง</a></h4>
								<small><b>ความคุ้มครองที่ต้องการ </b>
									<input type="text" name="plan1" id="plan1" value="100,000" class="input-small" />
									บาท</small>

							</div>
						</div>
					</li>
					<li class="span10">
						<div class="thumbnail clearfix">
							<img src="http://placehold.it/320x200" alt="ALT NAME" class="pull-left span2 clearfix" style='margin-right:10px'>
							<div class="caption" class="pull-left">
								<a href="http://bootsnipp.com/" class="btn btn-primary icon  pull-right">คำนวนเบี้ยประกัน</a>
								<h4><a href="#" >เงินออมทรัพย์ / เงินปั่นผล</a></h4>
								<small><b>ความคุ้มครองที่ต้องการ </b>
									<input type="text" name="plan2" id="plan2" value="5,000" class="input-small" />
									บาท/ปี</small>
							</div>
						</div>
					</li>
				</ul>
			</form>
		</div>
	</body>
</html>
