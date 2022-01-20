<?php include 'email_form.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mail Gönder</title>

	</head>
<body>

	<?php echo $alert; ?>


	<section>
		 <div class="contact-section">
		 	<div class="contact-form">
		<form class="contact" action="" method="post">
			<h2>Mail Gönder</h2>
			<label>İsim</label>
			<input name="name" type="text" placeholder="Enter Name">
			<br><br>
			<label>Mail</label>
			<input name="email" type="text" placeholder="Enter Email" required>
			<br><br>
			<p>Mesaj</p>
			<textarea name="message" rows="5" placeholder="Type Message"></textarea>
			<br><br>
			<button type="submit" name="submit" class="send-btn" value="Send">Submit</button>
		</form>
	</div>
	</div>
	</section>
	
	<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>	
</body>
</html>
