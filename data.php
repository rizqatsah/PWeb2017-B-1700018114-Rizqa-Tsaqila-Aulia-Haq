<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styledata.css">
	<script type="text/javascript" language="javascript">
        function show()
        {
            window.alert('Thanks for your registration');
            window.location.href='index.html';
        }
        </script>
</head>
<body>
<div class="container">
		
			<div class="heading">
				<h2 align="center">CONFIRMATION</h2>
			</div>
			<div class="detail">
				<form>
					<div class="row">
						<div class="col1">
							<label for="lemail">E-mail Address : </label>
						</div>
						<div class="col2">
							<?php echo $_POST["email"]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label for="lnoktp">NO. KTP</label>
						</div>
						<div class="col2">
							<?php echo $_POST["ktp"]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label for="lname">Name</label>
						</div>
						<div class="col2">
							<?php echo $_POST["name"]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label for="lcategori">Categories</label>
						</div>
						<div class="col2">
							<?php echo $_POST["categori"]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label for="lpos">Position</label>
						</div>
						<div class="col2">
							<?php echo $_POST["jabatan"]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label for="liname">Business Name</label>
						</div>
						<div class="col2">
							<?php echo $_POST["industri"]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label for="laddress">Address</label>
						</div>
						<div class="col2" >
							<label for="address"><?php echo $_POST["address"]; ?></label>
							
						</div>
					</div>
					
				</form>
			</div>
			
			<div class="footer">
				<div>
					<p>Make sure your information is true.</p>
				</div>
			</div>
			<div class="button">
					<button id="yes" onclick="show()">YES</button>
					<button id="no"><a href="form.html">NO</button>
			</div>
	</div>
</body>
</html>