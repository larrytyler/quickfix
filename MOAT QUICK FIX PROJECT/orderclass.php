<?php 

class Order{

public $dbcon;

function __construct(){
 
 $this->dbcon = new mysqli("localhost","root","","quick_fixx");


}


function insertBooking($orderlocationid ,$orderserviceid, $orderuserid, $orderaddress){

$insertquery = "INSERT INTO order_table SET order_table_user_id = '$orderuserid', order_table_service_id = '$orderserviceid',order_table_address ='$orderaddress',order_table_location_id ='$orderlocationid' ";
$result=$this->dbcon-> query($insertquery);
if($this->dbcon->affected_rows==1){
return true;
}else {
	return false;
}

}



function orderTable(){
$sql = "SELECT * from  order_table join registered_users on order_table.order_table_user_id = registered_users.reg_user_id ";

$result = $this->dbcon->query($sql);

$rows = array();
if ($this->dbcon->affected_rows>0){

  while($row

   = $result -> fetch_array()){
    $rows[]=$row;

  }

return $rows;
}
else{
  return $rows;
}
}




public function insertOrder($amount, $serviceid, $userid,$transref){

  //call upload file function
    //write sql query
    $sql = "INSERT INTO payment SET payment_amount='$amount',service_id='$serviceid',user_id='$userid',trans_ref='$transref'";

    // run the query
    $result = $this ->dbcon -> query($sql);

    if($this ->dbcon->affected_rows == 1){

      return true;
    }else{

      return false;
    }



  



#end trans details 
}




#begin initialise paystack


public function initializePaystack($amount, $email, $reference){
  $url = "https://api.paystack.co/transaction/initialize";
  $callbackurl = "http://localhost/kilophp/week3bootstrap/quickfixcallback.php";

  $fields = [
    'email' => $email,
    'amount' => $amount * 100,
    'reference' => $reference,
    'callback_url' => $callbackurl
  ];

$fields_string = http_build_query($fields);
//step 1 : open connection 
$ch = curl_init();

//step 2 : set curl options 
//set the url, number of POST vars , POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_308547aae57f3606ea3ade5853f89faf462a7974",
    "Cache-Control: no-cache",
  ));
  
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

//check of theres error 

if (curl_error($ch)){
  
  var_dump(curl_error($ch));
}

//step 4 close curl session 
 
 curl_close($ch);
 // step 5 : condertt json data to array
  $response = json_decode($result, true);


  return $response ; 



}













#end paystack transaction 

}








?>