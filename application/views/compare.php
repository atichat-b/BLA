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
	</head>
	<body>
		<div class="container" style="box-shadow: 1px 1px 15px 1px rgba(50, 50, 50,.5); padding-bottom: 200px;">
			<img src="<?=base_url(); ?>assets/images/logo.png" class="logo"/>			
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">BLA</a>
					<ul class="nav">
						<li>
							<a href="<?=base_url();?>/user">ข้อมูลลูกค้า</a>
						</li>
					</ul>
					<span style="float: right; margin-top:10px;"><?= $this -> session -> userdata('Fname') . " " . $this -> session -> userdata('Lname'); ?> | <a href="<?=base_url('login/logout');?>" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่ ?')">Logout</a></span>
				</div>
			</div>
			<h1 style="font-family: hel_45li; margin-left: 20px; color:#4c66a4;">ผลการคำนวณ</h1>
			<br/>
			<div class="row">
				<div class="span1"></div>
				<div class="span10">
					<table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th></th>
								<th>แนวทางเลือกที่ 1</th>
								<th>แนวทางเลือกที่ 2</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>แบบประกัน</td>
								<td><?=$plan['Plan']; ?></td>
								<td>ตลอดชีพ21</td>
							</tr>
							<tr>
								<td>เบี้ยประกันต่อปี</td>
								<td><?=number_format($plan['Total']); ?></td>
								<td>50GB</td>
							</tr>
							<tr>
								<td>รวมเบี้ยที่ต้องชำระ</td>
								<td>-</td>
								<td>2</td>
							</tr>
							<tr>
								<td>ทุนความคุ้มครอง</td>
								<td><?=number_format($plan['Budget']); ?></td>
								<td>1024MB</td>
							</tr>
							<tr>
								<td>รวมเงินปันผล</td>
								<td>-</td>
								<td>400GB</td>
							</tr>
							<tr>
								<td>เงินครบสัญญา</td>
								<td>-</td>
								<td>400GB</td>
							</tr>

							<tr>
								<td>ผลตอบแทนที่ได้รับ</td>
								<td>-</td>
								<td>$29.66/month</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>

