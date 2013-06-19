<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>กรุงเทพประกันชีวิต</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		<link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
		<script src="js/jquery-1.9.1.js"></script>
		<script src="js/jquery-ui-1.10.3.custom.js"></script>

		<script>
			$(function() {
				$("#birthday").datepicker();
			});
		</script>
	</head>
	<body>
		<div class="container" style="box-shadow: 1px 1px 15px 1px rgba(50, 50, 50,.5); padding-bottom: 30px;">
			<img src="images/logo.png" class="logo"/>
			<p class="page_title"></p>
			<form class="well span11 form-horizontal" style="float:none;margin:0 auto">
				<fieldset>
					<!-- Genaral form -->
					<h4>ข้อมูลทั่วไป</h4>

					<!-- first-name input-->
					<div class="control-group">
						<label class="control-label">ชื่อ</label>
						<div class="controls">
							<input id="first-name" name="full-name" type="text" placeholder="ชื่อ" class="input">
						</div>
					</div>
					<!-- last-name input-->
					<div class="control-group">
						<label class="control-label">นามสกุล</label>
						<div class="controls">
							<input id="last-name" name="last-name" type="text" placeholder="นามสกุล" class="input">
						</div>
					</div>
					<!-- nick-name input-->
					<div class="control-group">
						<label class="control-label">ชื่อเล่น</label>
						<div class="controls">
							<input id="nick-name" name="nick-name" type="text" placeholder="ชื่อเล่น" class="input">
						</div>
					</div>
					<!-- Birthday input-->
					<div class="control-group">
						<label class="control-label">วันเกิด</label>
						<div class="controls">
							<input id="birthday" name="birthday" placeholder="วัน/เดือน/ปี " type="text">
						</div>
					</div>
					<!-- Old input-->
					<div class="control-group">
						<label class="control-label">อายุ</label>
						<div class="controls">
							<input id="old" name="old" type="text" placeholder="อายุ" class="input">
						</div>
					</div>
					<!-- Old input-->
					<div class="control-group">
						<label class="control-label">เพศ</label>
						<div class="controls">
							<input type="radio" name="sex" value="male">
							ชาย
							<input type="radio" name="sex" value="female">
							หญิง
						</div>
					</div>
					<!-- status selected-->
					<div class="control-group">
						<label class="control-label">สภานภาพ</label>
						<div class="controls">
							<select id="status" name="status" class="input">
								<option value="singel">โสด</option>
								<option value="married">แต่งงาน</option>
								<option value="divorce">หย่าร้าง</option>
								<option value="other">อื่นๆ</option>
							</select>
						</div>
					</div>
					<!-- address input-->
					<div class="control-group">
						<label class="control-label">ที่อยู่</label>
						<div class="controls">
							<input id="address" name="address" type="text" placeholder="ที่อยู่" class="input">
						</div>
					</div>
					<!-- city input-->
					<div class="control-group">
						<label class="control-label">จังหวัด</label>
						<div class="controls">
							<select id="country" name="country" class="input">
								<option value="" selected="selected">กรุณาเลือกจังหวัด</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
							</select>
						</div>
					</div>
					<!-- postal-code input-->
					<div class="control-group">
						<label class="control-label">รหัสไปรษณีย์</label>
						<div class="controls">
							<input id="postcode" name="postcode" type="text" placeholder="รหัสไปรษณีย์" class="input">
						</div>
					</div>
					<!-- email input -->
					<div class="control-group">
						<label class="control-label">อีเมล์</label>
						<div class="controls">
							<input id="email" name="email" type="text" placeholder="อีเมล์" class="input">
						</div>
					</div>
					<!-- telephone input -->
					<div class="control-group">
						<label class="control-label">เบอร์บ้าน</label>
						<div class="controls">
							<input id="telephone" name="telephone" type="text" placeholder="เบอร์บ้าน" class="input">
						</div>
					</div>
					<!-- moblie input -->
					<div class="control-group">
						<label class="control-label">เบอร์มือถือ</label>
						<div class="controls">
							<input id="mobile" name="mobile" type="text" placeholder="เบอร์มือถือ" class="input">
						</div>
					</div>

					<!-- Salary form -->
					<h4>ข้อมูลรายได้</h4>
					<!-- moblie input -->
					<div class="control-group">
						<label class="control-label">รายได้ประจำ</label>
						<div class="controls">
							<input id="main_income" name="main_income" type="text" placeholder="รายได้ประจำ" class="input"> ต่อเดือน
						</div>
					</div>
					<!-- moblie input -->
					<div class="control-group">
						<label class="control-label">รายได้อื่นๆ</label>
						<div class="controls">
							<input id="other_income" name="other_income" type="text" placeholder="รายได้อื่นๆ" class="input"> ต่อเดือน
						</div>
					</div>
					<!-- moblie input -->
					<div class="control-group">
						<label class="control-label">รายได้รวม</label>
						<div class="controls">
							<input id="sum_income" name="sum_income" type="text" placeholder="รายได้รวม" class="input"> ต่อเดือน
						</div>
					</div>
					<!-- submit input -->
					<div class="control-group">
						<div class="controls">
							<button class="btn btn-primary">
								ตกลง
							</button>
							&nbsp;
							<button class="btn">
								ยกเลิก
							</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</body>
</html>
