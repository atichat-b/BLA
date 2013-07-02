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
                        <p class="page_title">
			</p>
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">BLA : ขั้นตอน</a>
					<ul class="nav">
						<li>
							<a href="<?=base_url(); ?>/user">1.ข้อมูลลูกค้า</a>
						</li>
                                                <li>
							<a href="<?=base_url(); ?>insurance/plan/6">2.ความต้องการ</a>
						</li>
                                                <li class="active">
							<a href="#">3.รายงาน</a>
						</li>
					</ul>
					<span style="float: right; margin-top:10px;"><?= $this -> session -> userdata('Fname') . " " . $this -> session -> userdata('Lname'); ?> | <a href="<?=base_url('login/logout'); ?>" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่ ?')">Logout</a></span>
				</div>
                            <div class="well span11 form-horizontal" style="float:none;margin:0 auto">
                           
			</div>
                            <ul class="thumbnails" style="margin: 20px;">
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
								<td><?=$plan_a['Plan']; ?></td>
								<td><?=$plan_b['Plan']; ?></td>
							</tr>
							<tr>
								<td>ทุนความคุ้มครอง</td>
								<td><?=number_format($plan_a['Budget']); ?></td>
								<td><?=number_format($plan_b['Budget']); ?></td>
							</tr>
							<tr>
								<td>เบี้ยประกันต่อปี</td>
								<td><?=number_format($plan_a['Total']); ?></td>
								<td><?=number_format($plan_b['Total']); ?></td>
							</tr>
							<tr>
								<td>ชำระเบี้ยกี่ปี</td>
								<td><?=$plan_a['Contract']; ?></td>
								<td><?=$plan_b['Contract']; ?></td>
							</tr>
							<tr>
								<td>ชำระเบี้ยถึงอายุ</td>
								<td><?=$plan_a['PayYear']; ?></td>
								<td><?=$plan_b['PayYear']; ?></td>
							</tr>
							<tr>
								<td>เงินครบสัญญา</td>
								<td><?=number_format($plan_a['Budget']); ?></td>
								<td><?=number_format($plan_b['Budget']); ?></td>
							</tr>
							<tr>
								<td>คุ้มครองถึงอายุ</td>
								<td><?=$plan_a['ProtectYear']; ?></td>
								<td><?=$plan_b['ProtectYear']; ?></td>
							</tr>
							<tr>
								<td>ปี่ที่สินสุดสัญญา</td>
								<td><?=$plan_a['ProtectEnd']; ?></td>
								<td><?=$plan_b['ProtectEnd']; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
                     </ul>
		</div>
	</body>
</html>

