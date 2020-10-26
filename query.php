<?php require_once('submit.php'); ?>
<html>
<head>
<!-- calling css file -->
<link rel="stylesheet" href="query.css"></head>
<body>
<form method="post">
<h2>Questions? Comments?<br>
Send us an email.</h2>

<label for="name">Your Name</label><br>
<input type="text" id="name" name="name">
<span class="error"><?php echo $nameErr;?></span><br>

<label for="email">Your Email</label><br>
<input type="email" id="email" name="email">
<span class="error"><?php echo $emailErr;?></span><br>

<label for="phone">Phone</label><br>
<input type="number" id="phone" name="phone"><br>

<label for="message">Your Message</label><br>
<input type="textarea" id="message" name="message" row="4" cols="50"><br>
<br>
<!-- submit button -->
<input id="submit" type="submit" Value="SEND">
</form>
</body>
</html>