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
				$('#datepicker').datepicker({
					changeMonth : true,
					changeYear : true,
					dateFormat : 'yy-mm',
					onClose : function(dateText, inst) {
						var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
						var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
						$(this).datepicker('setDate', new Date(year, month, 1));
					},
					beforeShow : function(input, inst) {
						if (( datestr = $(this).val()).length > 0) {
							year = datestr.substring(datestr.length - 4, datestr.length);
							month = jQuery.inArray(datestr.substring(0, datestr.length - 5), $(this).datepicker('option', 'monthNames'));
							$(this).datepicker('option', 'defaultDate', new Date(year, month, 1));
							$(this).datepicker('setDate', new Date(year, month, 1));
						}
					}
				});
			});
		</script>
		<style>
			.ui-datepicker-calendar {
				display: none;
			}
</style>
	</head>
	<body>
		<div class="container" style="box-shadow: 1px 1px 15px 1px rgba(50, 50, 50,.5); padding-bottom: 500px;">
			<img src="<?=base_url(); ?>assets/images/logo.png" class="logo"/>
			<p class="page_title">
			</p>
              <div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">BLA :</a>
					<ul class="nav">
						<li class="active">
							<a href="<?=base_url(); ?>report"><b>รายงานประจำเดิอน</b></a>
						</li>
                                               <? $role = $this -> session -> userdata('role');
							if ($role == 1) {
								echo "<li class=''><a href='/report/get_all'><b>รายงานใต้สังกัด</b></a></li>";
							}
						?>
                                                <li>
							<a href="<?=base_url(); ?>user">1.ข้อมูลลูกค้า</a>
						</li>
                        <li>
							<a href="#">2.ความต้องการ</a>
						</li>
                        <li>
							<a href="report">3.รายงาน</a>
						</li>
						
					</ul>
					<span style="float: right; margin-top:10px;"><?= $this -> session -> userdata('Fname') . " " . $this -> session -> userdata('Lname'); ?> | <a href="<?=base_url('login/logout'); ?>" onclick="return confirm('คุณต้องการออกจากระบบใช่หรือไม่ ?')">Logout</a></span>
				</div>
			</div>
			<div class="well span11 form-horizontal" style="float:none;margin:0 auto">
			  <div class="btn-toolbar">
				    <?=form_open('report/get_date', array("class" => "form-search pull-right")); ?>
					<div class="input-append">
					    <input type="text" name="datepicker" id="datepicker" class="span2 search-query" placeholder="เดือน">
                                            <button type="submit" class="btn">ค้นหา</button>
				 	</div>
				  	<?=form_close(); ?>
				</div>
				    <table class="table">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th style="width: 150px; text-align: center;">ชื่อ</th>
				          <th style="width: 50px; text-align: center;">เพศ</th>
				          <th style="width: 50px; text-align: center;">อายุ</th>
				          <th style="width: 350px; text-align: center;">ที่อยู่</th>
				          <th style="width: 100px; text-align: center;">วันที่บันทึก</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<?php 
				      	$rowID = 1;
				      	 foreach($query->result() as $row) {
				      		$sex ="";	
				      		if($row -> Sex == "male"){
				      			$sex = "ชาย";
				      		}
							else{
								$sex = "หญิง";
							}
				      		?>
				        <tr>
				          <td><?= $rowID; ?></td>
				          <td><?= $row -> F_Name . " " . $row -> L_Name; ?></td>
				          <td style="width: 10px; text-align: center;"><?= $sex; ?></td>
				          <td style="width: 10px; text-align: center;"><?= $row -> Old; ?></td>
				          <td><?= substr($row -> Address, 0, 50); ?></td>
				       	  <td><?=$row -> Date_Add; ?></td>
				        </tr>	
				        <?php $rowID++;
							}
						  ?>						  
				      </tbody>
				    </table>
				 </div>
			</div>
		</div>
	</body>
</html>
