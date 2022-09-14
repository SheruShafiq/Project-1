<?php
$url = 'https://min-api.cryptocompare.com/data/top/totalvolfull?limit=100&tsym=USD&api_key={2fa37e5d4f9ff6921fb5b5f3440c68cc9280886e2e3fa1f12f0dca8527b27496}';
$request = "{$url}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  // CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
$response = (json_decode($response)); // print json decoded response
curl_close($curl); // Close request
// print_r($response->Data[0]->RAW->USD);
 
for ($i=0; $i < 12; $i++) { 
  ${"c$i"} = $response->Data[$i];
  ${"usdc$i"} = ${"c$i"}->RAW->USD;
}
// print_r($c0->CoinInfo->FullName);
// print_r($c0->RAW->USD);

for($i = 0; $i <= 11; $i++) {
${"nc$i"} = ${"c$i"}->CoinInfo->FullName;
${"sc$i"} = ${"c$i"}->CoinInfo->Name;
${"ac$i"} = ${"c$i"}->CoinInfo->MaxSupply;
${"dc$i"} = ${"c$i"}->CoinInfo->AssetLaunchDate;
${"tusdc$i"} = ${"usdc$i"}->PRICE;
${"tc$i"} = ${"usdc$i"}->CIRCULATINGSUPPLY;
${"ssc$i"} = ${"usdc$i"}->CIRCULATINGSUPPLY;
${"mc_usdc$i"} = ${"usdc$i"}->MKTCAP;
${"vl_24usdc$i"} = ${"usdc$i"}->VOLUME24HOUR;
${"per_1usdc$i"} = ${"usdc$i"}->CHANGEPCTHOUR;
${"per_24usdc$i"} = ${"usdc$i"}->CHANGEPCT24HOUR;
${"ico$i"} = ${"usdc$i"}->IMAGEURL;
${"mc_usdc$i"} = substr(${"mc_usdc$i"}, 0, 4);

}
echo "<h1>$mc_usdc0</h1>";





?>