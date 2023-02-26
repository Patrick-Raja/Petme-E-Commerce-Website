<?php

include('includes/dbconn.php');
if(isset($_POST['savechanges'])){
		$id = $_POST['foodid'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$qty = $_POST['oqty'];
        $price = $_POST['price'];
		$otype = $_POST['otype'];
		$datep = $_POST['datep'];    

		$sql =("SELECT * FROM tblorders WHERE cname = '$name'") or die (mysqli_error());
    $result=mysqli_query($con, $sql);
			if(mysqli_num_rows($result)==5){
					echo '<script>alert("You reach maximum order of 5");
								window.loaction.href="availableframe.php";</script>';
				}
				else{

				$sql = ("INSERT INTO tblorders VALUES(NULL,'$name','$address','$contact','$id','$qty','new',NULL,'$otype','$datep')") or die (mysqli_error());
                $result=mysqli_query($con, $sql);

							if($result==true){
								//echo '<script>alert("Your order will be process.The system will follow up by moving to payment page, thankyou!");
											 //window.location.href="payment.php"</script>';}
                                // Merchant key here as provided by Payu
                                $MERCHANT_KEY = "gtKFFx";
                                $SALT = "eCwWELxi";
                                $txnid="b728690de9f3635d3656";
                                $name="anil";
                                $email="webanilsidhu@gmail.com";
                                $phone="9999766582";
                                $surl="http://localhost/cake/my_app_name/view/sucess";
                                $furl="http://localhost/cake/my_app_name/view/failure";
                                $productInfo="xyzabc";
                                $amount = $price * $qty;
                                //use $amount=10; for testing
                                // Merchant Salt as provided by Payu

                                $hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$name.'|'.$email.'|||||||||||'.$SALT;
                                $hash =strtolower(hash("sha512", $hashseq)); 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head >
</head>
<body>
<style>
    body{
        background-color: #778899;
    }
</style>
<center>
<h1>PayUMoney Payment Request Form </h1>
<p>Amount: <?php echo $amount?></p>
<form action="https://sandboxsecure.payu.in/_payment"  name="payuform" method=POST >
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
<input type="hidden" name="hash"  value="<?php echo $hash;?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
<input type="hidden" name="amount" value="<?php echo $amount;?>" />
<input type="hidden" name="firstname" id="firstname" value="<?php echo $name;?>" />
<input type="hidden" name="email" id="email"  value="<?php echo $email;?>" />
<input type="hidden" name="phone" value="<?php echo $phone;?> " />
<input type="hidden" name="productinfo" value="<?php echo $productInfo;?>"/>
<input type="hidden" name="surl"  size="64" value="<?php echo $surl;?> " />
<input type="hidden" name="furl"  size="64" value="<?php echo $furl;?> " /></td>
<input type="hidden" type="hidden" name="service_provider" value="" /></td>

<input type="submit" value="Submit"/>

</form>
</center>
</body>
</html>
                               <?php
                                }
											 else{
												 echo '<script>alert("Sorry unable to process your request. please try again later!");
											 window.location.href="availableframe.php"</script>';
												 }
	}	}
?>
