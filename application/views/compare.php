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
          <p class="page_title"></p>
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">BLA : ขั้นตอน</a>
					<ul class="nav">
						<li>
							<a href="<?=base_url(); ?>user">1.ข้อมูลลูกค้า</a>
						</li>
						<li>
							<a href="#">2.ความต้องการ</a>
						</li>
						<li class="active">
							<a href="#">3.รายงาน</a>
						</li>
					</ul>
					<span style="float: right; margin-top:10px;"><?= $this -> session -> userdata('Fname') . " " . $this -> session -> userdata('Lname'); ?>
						| <a href="<?=base_url('login/logout'); ?>" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่ ?')">Logout</a></span>
				</div>
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
								<td><h4 style="color:#006000;"><?=$plan_a['Plan']; ?></h4></td>
								<td><h4 style="color:#006000;"><?=$plan_b['Plan']; ?></h4></td>
							</tr>
							<tr>
								<td>ทุนความคุ้มครอง</td>
								<td><h4 style="color:#dc143c;"><?=number_format($plan_a['Budget']); ?></h4></td>
								<td><h4 style="color:#dc143c;"><?=number_format($plan_b['Budget']); ?></h4></td>
							</tr>
							<tr>
								<td>เบี้ยประกันต่อปี</td>
                                                                <td><h4 style="color:#dc143c;"><?=number_format($plan_a['Total']); ?></h4></td>
								<td><h4 style="color:#dc143c;"><?=number_format($plan_b['Total']); ?></h4></td>
							</tr>
							<tr>
								<td>ชำระเบี้ยกี่ปี</td>
								<td><h4 style="color:#006000;"><?=$plan_a['Contract']; ?></h4></td>
								<td><h4 style="color:#006000;"><?=$plan_b['Contract']; ?></h4></td>
							</tr>
							<tr>
								<td>ชำระเบี้ยถึงอายุ</td>
								<td><h4 style="color:#006000;"><?=$plan_a['PayYear']; ?></h4></td>
								<td><h4 style="color:#006000;"><?=$plan_b['PayYear']; ?></h4></td>
							</tr>
							<tr>
								<td>เงินครบสัญญา</td>
								<td><h4 style="color:#006000;"><?=number_format($plan_a['Budget']); ?></h4></td>
								<td><h4 style="color:#006000;"><?=number_format($plan_b['Budget']); ?></h4></td>
							</tr>
							<tr>
								<td>คุ้มครองถึงอายุ</td>
								<td><h4 style="color:#006000;"><?=$plan_a['ProtectYear']; ?></h4></td>
								<td><h4 style="color:#006000;"><?=$plan_b['ProtectYear']; ?></h4></td>
							</tr>
							<tr>
								<td>ปี่ที่สินสุดสัญญา</td>
								<td><h4 style="color:#006000;"><?=$plan_a['ProtectEnd']; ?></h4></td>
								<td><h4 style="color:#006000;"><?=$plan_b['ProtectEnd']; ?></h4></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
                      
                     </ul>
		</div>
	</body>
</html>

