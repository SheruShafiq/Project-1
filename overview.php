<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>overview</title>
  <link rel="stylesheet" href="overview.css">
  <script src="https://kit.fontawesome.com/00d245e29a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/cryptocharts"></script>
</head>
<body>
<?php
session_start();
$url = 'https://min-api.cryptocompare.com/data/top/totalvolfull?limit=39&tsym=USD&api_key={2fa37e5d4f9ff6921fb5b5f3440c68cc9280886e2e3fa1f12f0dca8527b27496}';
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
 
for ($i=0; $i < 31; $i++) { 
  ${"c$i"} = $response->Data[$i];
  ${"usdc$i"} = ${"c$i"}->RAW->USD;
}
// print_r($c0->CoinInfo->FullName);
// print_r($c0->RAW->USD);

for($i = 0; $i <= 30; $i++) {
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
$symbol = $_POST['symbol'];
    for ($i=0; $i < 30; $i++) { 
      if($symbol == ${"sc$i"}) {
        $key = $i;
    } 
  }
  $_POST["icon"] = ${"ico$key"};
  $_POST["price"] = ${"tusdc$key"};
  $_POST["marketcap"]  = ${"tusdc$key"} ;
  $_POST["volume"] = ${"vl_24usdc$key"};
?>


  <header>
    <div class="headbeg">
    <a href="fullindex.php"><img src="coinstalker.png" alt="" /></a>
      <a href="fullindex.php" class="logo">
        <p class="naam">Coinstalker</p>
      </a>
      <!-- <button id="toggle">Hide THIRD div</button>
          <button onClick="window.location.reload();">Refresh Page</button> -->
    </div>
    <!-- <div class="wrap">
      <div class="search-input">
        <input type="text" placeholder="Search for a coin">
        <div class="autocom-box">

        </div>
        <div class="icon"><i class="fas fa-search"></i></div>
      </div>
    </div> -->
    <button class="hamburger" id="hamburger">
      <!-- <i class="fas fa-bars" onclick="beneden()"></i> -->
    </button>
    <ul class="ul-list" id="ul-list">
      <li><a href="fullindex.php">Home</a></li>
      <!-- <li><a href="overview.php">Login</a></li> -->
    </ul>
  </header>
  <div class="overview">
    <div class="cont">
      <div class="coinname">
      <?php 
      $icon = $_POST['icon'];
      $symbol = $_POST['symbol'];
      echo "<img src='https://www.cryptocompare.com$icon' alt=''>";
         echo "<h1>$symbol</h1>" ;
        ?>




        </div>
      <div class="section">
        <div class="chart">
        <div id="mychart" width="00px"></div>
        <script>
          var symbol = "<?php $name = $_POST['symbol'];
  echo $name;?>"
          function graph(days = 90) { 
            CryptoCharts.roiComparison({
              chart_id: "mychart",
              cryptocompare_tickers: [symbol],
              iconomi_tickers: [],
              last_days: days
            }); }
            function tijd() {
                var days = document.querySelector('input[name="sample"]:checked').value;
                console.log(days)
                document.getElementById('mychart').innerHTML = ""
                graph(days)
               
              }              
            graph(90)
          </script>













        </div>

        <div class="about">
          <div class="top">
            <h1>About</h1>
          </div>
          <div class="bottom">
            <div class="datas">
              <p id="grey"><strong>Price</strong></p>
              <p><strong><?php $name = $_POST['price'];
          echo "$$name";?></strong></p>
            </div>
            <hr>
            <div class="datas">
              <p id="grey"><strong>Market cap</strong></p>
              <p><strong><?php $name = $_POST['marketcap'];
          echo "$$name B";?></strong></p>
            </div>
            <hr>
            <div class="datas">
              <p id="grey"><strong>Volume</strong></p>
              <p><strong><?php $name = $_POST['volume'];
          echo "$$name";?></strong></p>
            </div>
            <hr>
            <!-- <h1>Compare with</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
              <select name="choicetwo" class="select" id="choicetwo">
                <option  disabled selected>None</option>
                <option value="Coin">Coin</option>
                <option value="Coin">Coin</option>
              </select> -->
              <!-- <br><br>
              <input type="submit" value="Submit" id="submit"> -->
            </form>
          </div>
          <div class="botbottom">
            <h1>Sort By</h1>
            <label class="custom-radio-btn">
              <span class="label">7D</span>
              <input type="radio" name="sample" value="7" onclick="tijd()">
              <span class="checkmark"></span>
            </label>
            <label class="custom-radio-btn left">
              <span class="label">1M</span>
              <input type="radio" name="sample" value="30" onclick="tijd()">
              <span class="checkmark"></span>
            </label>
            <label class="custom-radio-btn" aria-label="Choice C">
              <span class="label">3M</span>
              <input type="radio" name="sample" checked value="90" onclick="tijd()">
              <span class="checkmark"></span>
            </label>
            <label class="custom-radio-btn" aria-label="Choice C">
              <span class="label">1Y</span>
              <input type="radio" name="sample" value="365"  onclick="tijd()">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
</body>
<script src="overview.js"></script>
<script src="suggestions.js"></script>
</html>

</html>
