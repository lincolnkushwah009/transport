<?php
function redirect() {
    header('location: index.php');
}
 if(isset($_POST['email']))
{
	$cname=$_POST['cname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	
	
		$to=$email;    
        $subject = "Your Query Successfully Received by Malik Transport Pvt. Ltd.";
        $message =" <div class='container'>
    
    <div class='row'>
    
    <table width='100%' style='border:1px dotted #e6e6e6;max-width:600px' cellspacing='0' cellpadding='0' border='0' align='center'>
  <tbody>

   <tr>
    <td height='40' align='center' bgcolor='#f2e635' style='padding:10px'><a class='jkl' href=''><span style='float:left;'></span><h1 class='cfg'>Welcome to Malik Transport Pvt. Ltd.</h1><br>
 </a></td>
   </tr>
 <tr><td height='10'></td></tr>
    <tr>
    <td align='center'><a href='https://maliktransport.co.in' target='_blank' data-saferedirecturl=''>
<img src='https://maliktransport.co.in/images/logo-small.png' width='39%' class='CToWUd'></a></td>
  </tr>


    <tr><td bgcolor='#fff' height='10'></td></tr>
   <tr>
    <td bgcolor='#fff' align='left'><a style='text-decoration:none;color:#545454;padding:0px 0px;font:normal 22px calibri;color:#000' href='#m_5214483983294932554_m_-2506295658882639727_'>Hi $cname,</a></td>
   </tr>
   <tr><td bgcolor='#fff' height='10'></td></tr>
    <tr>
    <td bgcolor='#fff' align='left'><a style='text-decoration:none;color:#545454;padding:0px 0px;font:normal 18px calibri;color:#000' href='#m_5214483983294932554_m_-2506295658882639727_'>Greetings from Malik Transport Pvt. Ltd.</a></td>
   </tr>



   <tr><td bgcolor='#fff' height='10'></td></tr>
    <tr><td style='font:normal 18px calibri;color:#000'>
    Thank you for your enquiry on Malik Transport Pvt. Ltd. We appreciate you
for taking the time to our Website.
    </td></tr>
	
     <tr><td bgcolor='#fff' height='10'></td></tr>
	 <tr><td style='padding-top:13px;padding-bottom:10px'><span style='font:normal 18px calibri;color:#000;font-weight:800'>Here is your Details
</span></td></tr>
     <tr><td style='font:normal 18px calibri;color:#000;padding-bottom:8px'>
	 <b>Email :</b> $cname <br> 
	 <b>Email :</b> $email <br>
	 <b>Mobile No. :</b> $mobile <br>
	
	 </td></tr>
	 
	 <tr><td bgcolor='#fff' height='10'></td></tr>
	
     
    <tr><td bgcolor='#fff' height='10'></td></tr>

     <tr><td bgcolor='#fff' height='10'></td></tr>
  <tr><td bgcolor='#fff' height='5'></td></tr>
  <tr>
      <td>
	  <center><a href='https://maliktransport.co.in' target='_blank' data-saferedirecturl=''><input style='background-color:#f2e635;color:#000;font:normal 24px calibri;font-weight:800;padding:5px 90px' type='button' value='Click Here For Visit Our Website'></a></center>
	    <p style='color:#000000;font:normal 18px calibri;font-weight:400;text-align:center'><span style='font-size:23px'>Support</span><br>
        <b>Call :</b> +91-7428510073 <br>
        <b>Email :</b> <a href='mailto:info@maliktransport.co.in' target='_blank'>info@maliktransport.co.in</a> </p>
     </td>
   </tr>
  <tr><td bgcolor='#fff' height='10'></td></tr>
     <tr><td>
       <table width='100%' style='border-collapse:collapse'>
         <tbody><tr style='background-color:#f2e635;color:#000'>
           <th style='text-align:left;padding:8px;font-size:18px'>
<p><span><b>Warm
Regards<br>Malik Transport Pvt. Ltd. Team</b></span></p>
</th>
         </tr>
  </tbody></table></td></tr></tbody>
</table>
        
        
        <br>
        
        
    
    </div>
    </div>
  
<style>
    
    .jkl
    {
        
        text-decoration:none;
        color:#545454;
        padding:0px 5px;
        
        color:#000; 
        font-size:16px!important;
        
    }
    
    
    .cfg
    {
        font-family: cursive!important;
        
    }
    </style>
    
    ";
                
         // Always set content-type when sending HTML email
                 
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From: <noreply@maliktransport.co.in>' . "\r\n"; 
                $headers .= 'BCC: <info@maliktransport.co.in>' . "\r\n"; 
                $success=mail($to,$subject,$message,$headers);
echo "<meta http-equiv=Refresh content=0;url=index.php>";
	}
	
			
	 /*header('location:index.php');*/
	 
?>