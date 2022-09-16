<?php
session_unset();
session_start();
$url = 'https://min-api.cryptocompare.com/data/top/totalvolfull?limit=10&tsym=USD&api_key={2fa37e5d4f9ff6921fb5b5f3440c68cc9280886e2e3fa1f12f0dca8527b27496}';
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

for ($i = 0; $i < 6; $i++) {
  ${"c$i"} = $response->Data[$i];
  ${"usdc$i"} = ${"c$i"}->RAW->USD;
}
// print_r($c0->CoinInfo->FullName);
// print_r($c0->RAW->USD);

for ($i = 0; $i <= 5; $i++) {
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
  // ${"tusdc$i"} = mb_substr(${"tusdc$i"}, 0, 3);
  // ${"per_24usdc$i"} = mb_substr(${"per_24usdc$i"}, 0, 5);
}


$_SESSION["1"]["n"] = $sc0;
$_SESSION["1"]["i"] = "<div class='img'><img src='https://www.cryptocompare.com$ico0' alt='' /></div>";
$_SESSION["1"]["p"] = $tusdc0;
$_SESSION["2"]['n'] = $sc1;
$_SESSION["2"]["i"] = "<div class='img'><img src='https://www.cryptocompare.com$ico1' alt='' /></div>";
$_SESSION["2"]["p"] = $tusdc1;
$_SESSION["3"]['n'] = $sc2;
$_SESSION["3"]["i"] = "<div class='img'><img src='https://www.cryptocompare.com$ico2' alt='' /></div>";
$_SESSION["3"]["p"] = $tusdc2;
$_SESSION["4"]["n"] = $sc3;
$_SESSION["4"]["i"] = "<div class='img'><img src='https://www.cryptocompare.com$ico3' alt='' /></div>";
$_SESSION["4"]["p"] = $tusdc3;
$_SESSION["5"]['n'] = $sc4;
$_SESSION["5"]["i"] = "<div class='img'><img src='https://www.cryptocompare.com$ico4' alt='' /></div>";
$_SESSION["5"]["p"] = $tusdc4;

ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="home.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/00d245e29a.js" crossorigin="anonymous"></script>
  <title>Welcome</title>
</head>

<body>
  <div class="begin">
    <header>
      <div class="headbeg">
        <a href="index.php"><img src="coinstalker.png" alt="" /></a>
        <a href="index.php" class="logo">
          <p class="naam">Coinstalker</p>
        </a>
      </div>
      <!-- <form method="post" action="overview.php">
        <div class="wrap">
          <div class="search-input">
            <input type="text" name="symbol" placeholder="Search for a coin">
            <div class="autocom-box">
            </div>
            <button class="icon"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </form> -->

      <button class="hamburger" id="hamburger">
        <i class="fas fa-bars" onclick="beneden()"></i>
      </button>
      <ul class="ul-list" id="ul-list">
        <!-- <li><a href="home.php">Home</a></li> -->
        <li><a href="login.php">Login</a></li>
      </ul>
    </header>
    <div class="mid">
      <h1 class='look'>Take a look<br />Buy later</h1>

      <div class="wrapper">

        <div class="card" style="--delay: -1">

          <div class="content">
            <a href="#coinlist" class="gowrap">
              <?php
              $logo = $_SESSION["2"]["i"];
              echo "<div class='img'>$logo</div>";
              echo "<span class='name'>" . $_SESSION["2"]["n"] . "</span>";
              echo "<p>" . "$" . $_SESSION["2"]["p"] . "</p>";
              ?>
            </a>
          </div>


        </div>

        <div class="card" style="--delay: 0">
          <div class="content">
            <a href="#coinlist" class="gowrap">
              <?php
              $logo = $_SESSION["1"]["i"];
              echo "<div class='img'>$logo</div>";
              echo "<span class='name'>" . $_SESSION["1"]["n"] . "</span>";
              echo "<p>" . "$" . $_SESSION["1"]["p"] . "</p>";
              ?>
            </a>
          </div>

        </div>
        <div class="card" style="--delay: 1">
          <div class="content">
            <a href="#coinlist" class="gowrap">
              <?php
              $logo = $_SESSION["3"]["i"];
              echo "<div class='img'>$logo</div>";
              echo "<span class='name'>" . $_SESSION["3"]["n"] . "</span>";
              echo "<p>" . "$" . $_SESSION["3"]["p"] . "</p>";
              ?> </a>
          </div>

        </div>
        <div class="card" style="--delay: 2">
          <div class="content">
            <a href="#coinlist" class="gowrap">
              <?php
              $logo = $_SESSION["4"]["i"];
              echo "<div class='img'>$logo</div>";
              echo "<span class='name'>" . $_SESSION["4"]["n"] . "</span>";
              echo "<p>" . "$" . $_SESSION["4"]["p"] . "</p>";
              ?> </a>
          </div>

        </div>
        <div class="card" style="--delay: 2">
          <div class="content">
            <a href="#coinlist" class="gowrap">
              <?php
              $logo = $_SESSION["5"]["i"];
              echo "<div class='img'>$logo</div>";
              echo "<span class='name'>" . $_SESSION["5"]["n"] . "</span>";
              echo "<p>" . "$" . $_SESSION["5"]["p"] . "</p>";
              ?> </a>
          </div>

        </div>
      </div>




    </div>
    <div class="end">
      <p>take a look at our list</p>
      <br />
      <div class="ani bounce-2">
        <a href="#coinlist">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </a>

      </div>
    </div>
  </div>


  <div class="loginbackground" id="loginmessage">
    <div class="zet"> 
    <div class="loginmessage" id="loginmessage">
      <div class="please">
        <img src="lock.png" alt="">
        <h1>Please sign in or register<br>to get full access!</h1>
        <div class="buttons">
          <button class="account"><a href="signup.php">Sign Up</a></button>
          <button class="account"><a href="check.php">Log in</a></button>
        </div>
      </div>
    </div>
</div>
  </div>

  <div class="coinlist" id="coinlist">
    <div class="listcontent">
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

      for ($i = 0; $i < 100; $i++) {
        ${"c$i"} = $response->Data[$i];
        ${"usdc$i"} = ${"c$i"}->RAW->USD;
      }
      // print_r($c0->CoinInfo->FullName);
      // print_r($c0->RAW->USD);

      for ($i = 0; $i <= 99; $i++) {
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
        ${"mc_usdc$i"} = substr(${"mc_usdc$i"}, 0, 3);
        // ${"tusdc$i"} = mb_substr(${"tusdc$i"}, 0, 3);


        // ${"tusdc$i"} = mb_substr(${"tusdc$i"}, 0, 7);
        // ${"per_24usdc$i"} = mb_substr(${"per_24usdc$i"}, 0, 5);
      }


      $myObj = new stdClass();
      for ($i = 0; $i <= 30; $i++) {
        $myObj->name[$i] = ${"sc$i"};
      }
      $myJSON = json_encode($myObj);
      $bytes = file_put_contents("myfile.json", $myJSON);


      session_start();
      echo "<table>";
      // echo " <thead>";
      echo "<tr class='tablehead'>";
      echo "<th>";
      echo "<h2>Rank</h2>";
      echo "</th>";
      echo "<th class='empty'>";
      echo "</th>";
      echo "<th>";
      echo "<h2>Name</h2>";
      echo "</th>";
      echo "<th>";
      echo "<h2>Symbol</h2>";
      echo "</th>";
      echo "<th>";
      echo "<h2>Price</h2>";
      echo "</th>";
      echo "<th>";
      echo "<h2>Market Cap</h2>";
      echo "</th>";
      echo "<th>";
      echo "<h2></h2>";
      echo "</th>";
      echo "</tr>";
      // echo "</thead>";
      // echo "<tbody>";


      for ($i = 0, $c = 1; $i < 10; $c++, $i++) {
        echo "<tr class='listofcoins'>";
        echo "<td id='boxes'>";
        echo "<h2 class='midba'>   $c</h2>";
        echo "</td>";
        echo "<td>";
        echo "<img src='https://www.cryptocompare.com${"ico$i"}'>";
        echo "</td>";
        echo "<td id='block'>";
        echo "<h2>${"nc$i"}</h2>";
        echo "</td>";
        echo "<td id='block'>";
        echo "<h2>${"sc$i"}</h2>";
        echo "</td>";
        echo "<td>";
        echo "<h2> $   ${"tusdc$i"}  </h2>";
        echo "</td>";
        echo "<td>";
        echo "<h2> $  ${"mc_usdc$i"} B   </h2>";
        echo "</td>";
        echo "<td>";
        // echo "<form action='overview.php'  id='midbabutton' method='post'>";
        echo "<input type='hidden' name='symbol' value=";
        echo "${"sc$i"}";
        echo ">";
        echo "<input type='hidden' name='name' value=";
        echo "${"nc$i"}";
        echo ">";
        echo "<input type='hidden' name='icon' value=";
        echo "${"ico$i"}";
        echo ">";
        echo "<input type='hidden' name='price' value=";
        echo "${"tusdc$i"}";
        echo ">";
        echo "<input type='hidden' name='marketcap' value=";
        echo "${"mc_usdc$i"}";
        echo ">";
        echo "<input type='hidden' name='volume' value=";
        echo "${"vl_24usdc$i"}";
        echo ">";
        echo '<button type="submit" id="sumbit" onclick="btn()">More details</button>';
        echo "</form>";
        echo "</td>";
        echo "</tr>";
      }
      echo "</div>";
      // echo "</tbody>";
      echo "</table>";
      // echo "</a>";
      ?>
</body>

<script src="suggestions.js"></script>
<script src="home.js"></script>

</html>