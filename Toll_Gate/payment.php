<?php
	$api_key="";
?>

<form action="https://www.example.com/payment/success/" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $api_key;?>" 
    data-amount="<?php echo $_POST['v_price']*100;?>" 
    data-currency="INR"
    data-id="<?php echo 'TID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Toll Management System"
    data-description=""
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="<?php echo $_POST['c_name'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>