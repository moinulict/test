<?php
  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,'http://devsxpress.com/regentairways/getData');
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $dataJson = curl_exec($curl_handle);
  curl_close($curl_handle);
  if (empty($dataJson)){
      print "Nothing returned from url.<p>";
  }
  else{
      print $dataJson;
  }
?>