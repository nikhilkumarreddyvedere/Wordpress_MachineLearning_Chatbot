<?php

$message=$_POST['msg'];

$url = "https://westus.api.cognitive.microsoft.com/qnamaker/v2.0/knowledgebases/9bf4fd6c-34c5-47d8-b67f-faf7c86b4835/generateAnswer";

$aParameter = array("question"=>$message) ; //parameters to be sent

$params = json_encode($aParameter); //convert param to json string

//headers to be sent optional if no header required skip this and remove curlopt_httpheader thing from curl call
$aHeaders = array(
        'Ocp-Apim-Subscription-Key: 38ee6d1d9b204ba398227f80dab45643',
        'Accept: application/json',
		'Content-Type:application/json',
    );

$c = curl_init();

curl_setopt($c, CURLOPT_USERAGENT,  'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:1.0) Gecko/20100101 Firefox/11.0'); // empty user agents probably not accepted
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($c, CURLOPT_AUTOREFERER,    1);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($c, CURLOPT_HTTPHEADER, $aHeaders);

curl_setopt($c, CURLOPT_URL, $url );
curl_setopt($c, CURLOPT_REFERER, $url);
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c,CURLOPT_POSTFIELDS,$params);
$Result = curl_exec($c);
echo $Result;
?>



