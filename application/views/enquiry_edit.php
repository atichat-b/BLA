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
				$("#birthday").datepicker({
					changeMonth : true,
					changeYear : true,
					dateFormat : 'yy-mm-dd'
				});
			});
		</script>
		<script>
			function Total() {
				var total = document.getElementById('income_total');
				var salary = document.getElementById('income_salary').value;
				var other = document.getElementById('income_other').value;
				if (salary != "" & other != "") {
					var sum = parseInt(salary) + parseInt(other);
					total.value = sum;
				}
			}
		</script>
		<script>
			function Convertdate(o) {
				var old = document.getElementById("old");
				var tmp = document.getElementById("birthday").value.substring(0, 4);
				var current = new Date();
				var current_year = current.getFullYear();
				old.value = current_year - tmp;
			}
		</script>
	</head>
	<body>
		<div class="container" style="box-shadow: 1px 1px 15px 1px rgba(50, 50, 50,.5); padding-bottom: 30px;">
			<img src="<?=base_url(); ?>assets/images/logo.png" class="logo"/>
			<p class="page_title"></p>
			<?php echo form_open_multipart('/user/edit_save', array('class' => 'well span11 form-horizontal', 'name' => 'frm_check')); ?>
			<input type="hidden" id="ID" name="ID" value="<?=$query -> Customer_ID; ?>" />
			<fieldset>
				<!-- Genaral form -->
				<h4>ข้อมูลทั่วไป</h4>
				<!-- first-name input-->
				<div class="control-group">
					<label class="control-label">ชื่อ</label>
					<div class="controls">
						<input id="first-name" name="f_name" type="text" placeholder="ชื่อ" class="input" value="<?=$query -> F_Name; ?>">
					</div>
				</div>
				<!-- last-name input-->
				<div class="control-group">
					<label class="control-label">นามสกุล</label>
					<div class="controls">
						<input id="last-name" name="s_name" type="text" placeholder="นามสกุล" class="input" value="<?=$query -> L_Name; ?>">
					</div>
				</div>
				<!-- nick-name input-->
				<div class="control-group">
					<label class="control-label">ชื่อเล่น</label>
					<div class="controls">
						<input id="nick-name" name="n_name" type="text" placeholder="ชื่อเล่น" class="input" value="<?=$query -> N_Name; ?>">
					</div>
				</div>
				<!-- Birthday input-->
				<div class="control-group">
					<label class="control-label">วันเกิด</label>
					<div class="controls">
						<input id="birthday" name="birthday" placeholder="วัน/เดือน/ปี " type="text" onChange="Convertdate(this)" value="<?=$query -> BirthDay; ?>">
					</div>
				</div>
				<!-- Old input-->
				<div class="control-group">
					<label class="control-label">อายุ</label>
					<div class="controls">
						<input id="old" name="old" type="text" placeholder="อายุ" class="input" value="<?=$query -> Old; ?>">
					</div>
				</div>
				<!-- Sex input-->
				<div class="control-group">
					<label class="control-label">เพศ</label>
					<div class="controls">
						<input type="radio" name="sex" value="male" <?= ($query -> Sex == 'male') ? 'checked == "true"' : '' ?>>
						ชาย
						<input type="radio" name="sex" value="female" <?= ($query -> Sex == 'female') ? 'checked == "true"' : '' ?>>
						หญิง
					</div>
				</div>
				<!-- status selected-->
				<div class="control-group">
					<label class="control-label">สภานภาพ</label>
					<div class="controls">
						<select id="status" name="status" class="input">
							<option value="singel" <?= ($query -> Status == 'singel') ? 'selected="selected"' : '' ?>>โสด</option>
							<option value="married" <?= ($query -> Status == 'married') ? 'selected="selected"' : '' ?>>แต่งงาน</option>
							<option value="divorce" <?= ($query -> Status == 'divorce') ? 'selected="selected"' : '' ?>>หย่าร้าง</option>
							<option value="other" <?= ($query -> Status == 'other') ? 'selected="selected"' : '' ?>>อื่นๆ</option>
						</select>
					</div>
				</div>
				<!-- address input-->
				<div class="control-group">
					<label class="control-label">ที่อยู่</label>
					<div class="controls">
						<input id="address" name="address" type="text" placeholder="ที่อยู่" class="input" value="<?=$query -> Address; ?>">
					</div>
				</div>
				<!-- city input-->
				<div class="control-group">
					<label class="control-label">จังหวัด</label>
					<div class="controls">
						<select id="country" name="country" class="input">
							<option value="" selected="selected">กรุณาเลือกจังหวัด</option>
							<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
							<option value="กระบี่">กระบี่</option>
							<option value="กาญจนบุรี">กาญจนบุรี</option>
							<option value="กาฬสินธุ์">กาฬสินธุ์</option>
							<option value="กำแพงเพชร">กำแพงเพชร</option>
							<option value="ขอนแก่น">ขอนแก่น</option>
							<option value="จันทบุรี">จันทบุรี </option>
							<option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
							<option value="ชลบุรี">ชลบุรี</option>
							<option value="ชัยนาท">ชัยนาท</option>
							<option value="ชัยภูมิ">ชัยภูมิ</option>
							<option value="ชุมพร">ชุมพร</option>
							<option value="เชียงราย">เชียงราย</option>
							<option value="เชียงใหม่">เชียงใหม่</option>
							<option value="ตรัง">ตรัง</option>
							<option value="ตราด">ตราด</option>
							<option value="ตาก">ตาก</option>
							<option value="นครนายก">นครนายก</option>
							<option value="นครปฐม">นครปฐม</option>
							<option value="นครพนม">นครพนม</option>
							<option value="นครราชสีมา">นครราชสีมา</option>
							<option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
							<option value="นครสวรรค์">นครสวรรค์</option>
							<option value="นนทบุรี">นนทบุรี</option>
							<option value="นราธิวาส">นราธิวาส</option>
							<option value="น่าน">น่าน</option>
							<option value="บึงกาฬ">บึงกาฬ</option>
							<option value="บุรีรัมย์">บุรีรัมย์</option>
							<option value="ปทุมธานี">ปทุมธานี</option>
							<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
							<option value="ปราจีนบุรี">ปราจีนบุรี</option>
							<option value="ปัตตานี">ปัตตานี</option>
							<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
							<option value="พังงา">พังงา</option>
							<option value="พัทลุง">พัทลุง</option>
							<option value="พิจิตร">พิจิตร</option>
							<option value="พิษณุโลก">พิษณุโลก</option>
							<option value="เพชรบุรี">เพชรบุรี</option>
							<option value="เพชรบูรณ์">เพชรบูรณ์</option>
							<option value="แพร่">แพร่</option>
							<option value="พะเยา">พะเยา</option>
							<option value="ภูเก็ต">ภูเก็ต</option>
							<option value="มหาสารคาม">มหาสารคาม</option>
							<option value="มุกดาหาร">มุกดาหาร</option>
							<option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
							<option value="ยะลา">ยะลา</option>
							<option value="ยโสธร">ยโสธร</option>
							<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
							<option value="ระนอง">ระนอง</option>
							<option value="ระยอง">ระยอง</option>
							<option value="ราชบุรี">ราชบุรี</option>
							<option value="ลพบุรี">ลพบุรี</option>
							<option value="ลำปาง">ลำปาง</option>
							<option value="ลำพูน">ลำพูน</option>
							<option value="เลย">เลย</option>
							<option value="ศรีสะเกษ">ศรีสะเกษ</option>
							<option value="สกลนคร">สกลนคร</option>
							<option value="สงขลา">สงขลา</option>
							<option value="สตูล">สตูล</option>
							<option value="สมุทรปราการ">สมุทรปราการ</option>
							<option value="สมุทรสงคราม">สมุทรสงคราม</option>
							<option value="สมุทรสาคร">สมุทรสาคร</option>
							<option value="สระแก้ว">สระแก้ว</option>
							<option value="สระบุรี">สระบุรี</option>
							<option value="สิงห์บุรี">สิงห์บุร์</option>
							<option value="สุโขทัย">สุโขทัย</option>
							<option value="สุพรรณบุรี">สุพรรณบุรี</option>
							<option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
							<option value="สุรินทร์">สุรินทร์</option>
							<option value="หนองคาย">หนองคาย</option>
							<option value="หนองบัวลำภู">หนองบัวลำภู</option>
							<option value="อ่างทอง">อ่างทอง</option>
							<option value="อุดรธานี">อุดรธานี</option>
							<option value="อุทัยธานี">อุทัยธานี</option>
							<option value="อุตรดิตถ์">อุตรดิตถ์</option>
							<option value="อุบลราชธานี">อุบลราชธานี</option>
							<option value="อำนาจเจริญ">อำนาจเจริญ</option>

						</select>
					</div>
				</div>
				<!-- postal-code input-->
				<div class="control-group">
					<label class="control-label">รหัสไปรษณีย์</label>
					<div class="controls">
						<input id="postcode" name="postcode" type="text" placeholder="รหัสไปรษณีย์" class="input" value="<?=$query -> Postcode; ?>">
					</div>
				</div>
				<!-- email input -->
				<div class="control-group">
					<label class="control-label">อีเมล์</label>
					<div class="controls">
						<input id="email" name="email" type="text" placeholder="อีเมล์" class="input"value="<?=$query -> Email; ?>">
					</div>
				</div>
				<!-- telephone input -->
				<div class="control-group">
					<label class="control-label">เบอร์บ้าน</label>
					<div class="controls">
						<input id="telephone" name="telephone" type="text" placeholder="เบอร์บ้าน" class="input" value="<?=$query -> Tel; ?>">
					</div>
				</div>
				<!-- moblie input -->
				<div class="control-group">
					<label class="control-label">เบอร์มือถือ</label>
					<div class="controls">
						<input id="mobile" name="mobile" type="text" placeholder="เบอร์มือถือ" class="input" value="<?=$query -> Mobile; ?>">
					</div>
				</div>

				<!-- Salary form -->
				<h4>ข้อมูลรายได้</h4>
				<!-- moblie input -->
				<div class="control-group">
					<label class="control-label">รายได้ประจำ</label>
					<div class="controls">
						<input id="income_salary" name="income_salary" type="text" placeholder="รายได้ประจำ" class="input" onKeyup="Total()" value="<?=$query -> Income_money; ?>" OnChange="JavaScript:chkNum(this)">
						ต่อปี
					</div>
				</div>
				<!-- moblie input -->
				<div class="control-group">
					<label class="control-label">รายได้อื่นๆ</label>
					<div class="controls">
						<input id="income_other" name="income_other" type="text" placeholder="รายได้อื่นๆ" class="input" onKeyup="Total()" value="<?=$query -> Income_other; ?>" OnChange="JavaScript:chkNum(this)">
						ต่อปี
					</div>
				</div>
				<!-- moblie input -->
				<div class="control-group">
					<label class="control-label">รายได้รวม</label>
					<div class="controls">
						<input id="income_total" name="income_total" type="text" placeholder="รายได้รวม" class="input" value="<?=$query -> Income_total; ?>">
						ต่อเดือน
					</div>
				</div>
				<!-- submit input -->
				<div class="control-group">
					<div class="controls">
						<button class="btn btn-primary">
							ตกลง
						</button>
						&nbsp;
						<button class="btn" type="reset" onClick="javascript:window.location.href='<?=base_url('user'); ?>'">
							ยกเลิก
						</button>
					</div>
				</div>
			</fieldset>
			<?=form_close(); ?>
		</div>
	</body>
</html>
