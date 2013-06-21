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
			<div class="well span11 form-horizontal" style="float:none;margin:0 auto">
				<div class="btn-toolbar">
				    <a href="<?=base_url('register'); ?>"><button class="btn btn-primary">เพิ่มรายชื่อใหม่</button></a>
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
				        <tr>
				          <td>1</td>
				          <td>Mark dsfdhjfh</td>
				          <td style="width: 10px; text-align: center;">ชาย</td>
				          <td style="width: 10px; text-align: center;">10</td>
				          <td>the_mark7</td>
				          <td>
				              <a href="user.html"><i class="icon-pencil"></i></a>
				              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
				          </td>
				        </tr>
				        <tr>
				          <td>2</td>
				          <td>Ashley</td>
				          <td>Jacobs</td>
				          <td>ash11927</td>
				          <td>ash11927</td>
				          <td>
				              <a href="user.html"><i class="icon-pencil"></i></a>
				              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
				          </td>
				        </tr>
				        <tr>
				          <td>3</td>
				          <td>Audrey</td>
				          <td>Ann</td>
				          <td>audann84</td>
				          <td>ash11927</td>
				          <td>
				              <a href="user.html"><i class="icon-pencil"></i></a>
				              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
				          </td>
				        </tr>
				        <tr>
				          <td>4</td>
				          <td>John</td>
				          <td>Robinson</td>
				          <td>jr5527</td>
				          <td>ash11927</td>
				          <td>
				              <a href="user.html"><i class="icon-pencil"></i></a>
				              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
				          </td>
				        </tr>
				        <tr>
				          <td>5</td>
				          <td>Aaron</td>
				          <td>Butler</td>
				          <td>ash11927</td>
				          <td>aaron_butler</td>
				          <td>
				              <a href="user.html"><i class="icon-pencil"></i></a>
				              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
				          </td>
				        </tr>
				        <tr>
				          <td>6</td>
				          <td>Chris</td>
				          <td>Albert</td>
				          <td>ash11927</td>
				          <td>cab79</td>
				          <td>
				              <a href="user.html"><i class="icon-pencil"></i></a>
				              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
				          </td>
				        </tr>
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
