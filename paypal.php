<?php       
		   
  $paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; 
	  $paypal_id='rahulgothi1991@gmail.com';

?>
<?php 

if(!empty($_POST)){
 
 $social_media = $_POST['social_media'];
 $fb_insta = $_POST['fb_insta'];
 $grouth_booster = $_POST['grouth_booster'];
 $blogs = $_POST['blogs'];
 $total = $_POST['total'];
 $first_name = $_POST['first_name'];
 $last_name=$_POST['last_name'];
 $package_name=$_POST['package_name'];
 $age=$_POST['age'];
 $email_id=$_POST['email_id'];
 $company_name=$_POST['company_name'];
$website=$_POST['website'];

 }
 ?>

	 <form action='<?php echo $paypal_url; ?>' method='post' name='frmPayPal' id="frmPayPal">

		<input type='hidden' name='business' value='<?php echo $paypal_id;?>'>

		<input type='hidden' name='cmd' value='_xclick'>

		<input type='hidden' name='item_name' value='Account'>

		<input type='hidden' name='item_number' value=''>

		<input type='hidden' name='amount' value='<?php echo $total;?>'>

		<input type='hidden' name='no_shipping' value='1'>

		<input type='hidden' name='currency_code' value='GBP'>

		<input type='hidden' name='handling' value='0'>

		

		<input type='hidden' name='return' value='http://gainsocialmedia.co.uk/success.php?package_name=<?php echo  $package_name;?>&sucsses=completed'>

	</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <script>

$(document).ready(function(){

     $("#frmPayPal").submit();

});

</script>                                    