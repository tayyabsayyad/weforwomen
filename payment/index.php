<?php
require_once("dbconfig.php");
?>
<html>
<head>
	<title>razor pay integartion</title>
	<meta name="viewport" content="width=device-width">
	<style>

	.razorpay-payment-button
	{
		color:#ffffff;
		background-color: red;
		border-color: black;
		font-size: 14px;
		padding: 10px;
	}
	</style>
</head>
<body>
<form action="charge.php" method="POST">
<!-- Note that the amount is in paise = 50 INR -->
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $razor_api_key;?>"
    data-amount="10000"
    data-buttontext="Click for payment"
    data-name="We For Women"
    data-description="payment"
    data-image="logo.png"
    data-prefill.name="Yash Agarwal"
    data-prefill.email="support@WeForWomen.com"
    data-theme.color="blue"
></script>
<input type="hidden" value="Hidden Element" name="hidden">
</form>
</body>
</html>