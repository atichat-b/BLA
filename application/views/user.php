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
		<div class="container" style="box-shadow: 1px 1px 15px 1px rgba(50, 50, 50,.5); padding-bottom: 500px;">
			<img src="<?=base_url(); ?>assets/images/logo.png" class="logo"/>
			<p class="page_title"></p>
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="#">BLA</a>
					<ul class="nav">
						<li class="active">
							<a href="#">ข้อมูลลูกค้า</a>
						</li>
						<li>
							<a href="http://localhost/bla/insurance/plan" >ความต้องการ</a>						
					    </li>
					</ul>
					<span style="float: right; margin-top:10px;"><?= $this -> session -> userdata('Fname') . " " . $this -> session -> userdata('Lname'); ?> | <a href="<?=base_url('login/logout');?>">Logout</a></span>
				</div>

			</div>
			<div class="well span11 form-horizontal" style="float:none;margin:0 auto">
			  <div class="btn-toolbar">
				    <a href="<?=base_url('register'); ?>"><button class="btn btn-primary">เพิ่มรายชื่อใหม่</button></a>
					<div class="caption" class="pull-left">
						<small><b>ค้นหา</b>
						<input name="budget" type="text" class="input-small" id="budget" value="" size="10">
						</small>		
			  		</div>
				</div>
				
				    <table class="table">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th style="width: 150px; text-align: center;">ชื่อ</th>
				          <th style="width: 50px; text-align: center;">เพศ</th>
				          <th style="width: 50px; text-align: center;">อายุ</th>
				          <th style="width: 300px; text-align: center;">ที่อยู่</th>
				          <th></th>
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
				          <td>
				          	  <a href="<?=site_url('insurance/plan/' . ($row -> Customer_ID)); ?>" role="button" data-toggle="modal" class="btn btn-mini"><i class="icon-retweet"></i></a>
				          	  &nbsp;&nbsp;
				              <a href="<?=site_url('user/edit/' . ($row -> Customer_ID)); ?>"><i class="icon-pencil"></i></a>
				              <a href="<?=site_url('user/delete/' . ($row -> Customer_ID)); ?>" role="button" data-toggle="modal" onclick="return confirm('Are you sure you want to return to the home page ?')"><i class="icon-remove"></i></a>
				          </td>
				        </tr>	
				        <?php $rowID++;
							}
						  ?>						  
				        <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						        <h3 id="myModalLabel">Delete Confirmation</h3>
						    </div>
						    <div class="modal-body">
						        <p class="error-text">Are you sure you want to delete the user?</p>
						    </div>
						    <div class="modal-footer">
						        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
						        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
						    </div>
						</div>
				      </tbody>
				    </table>
				 </div>
			</div>
		</div>
	</body>
</html>
