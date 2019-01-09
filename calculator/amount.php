<?php

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'https://explorer.monetaryunit.org/ext/getdistribution/');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
curl_setopt($ch,CURLOPT_TIMEOUT,10);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

$result = curl_exec($ch);
curl_close($ch);
$data = json_decode($result,true);

$eleos = $data['t_101plus']['total'] + $data['t_76_100']['total'];
$post_data = json_encode($ch);
?>
<?php echo "$result";?>