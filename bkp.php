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
  <header>
    <div class="headbeg">
      <img src="coinstalker.png" alt="" />
      <a href="index.html" class="logo">
        <p class="naam">Coinstalker</p>
      </a>
      <!-- <button id="toggle">Hide THIRD div</button>
          <button onClick="window.location.reload();">Refresh Page</button> -->
    </div>
    <div class="wrap">
      <div class="search-input">
        <input type="text" placeholder="Search for a coin">
        <div class="autocom-box">
        </div>
        <div class="icon"><i class="fas fa-search"></i></div>
      </div>
    </div>
    <button class="hamburger" id="hamburger">
      <i class="fas fa-bars" onclick="beneden()"></i>
    </button>
    <ul class="ul-list" id="ul-list">
      <li><a href="index.php">Home</a></li>
      <li><a href="overview.php">Login</a></li>
    </ul>
  </header>
  <div class="overview">
    <div class="cont">
      <div class="coinname">
        <img src="logos/1.png" alt="">
        <?php echo  '<h1>';
        echo $_POST['name'];
        echo'</h1>'; 
        ?>
      </div>
      <div class="section">
        <div class="chart">
          <div id="mychart" width="00px"></div>
          <script>
          var symbol = "<?php $name = $_POST['symbol'];
  echo $name;?>"
  var name = "<?php $name = $_POST['name'];
  echo $name;?>"
          function graph(days) { 
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
              <p><strong>$000</strong></p>
            </div>
            <hr>
            <div class="datas">
              <p id="grey"><strong>Market cap</strong></p>
              <p><strong>$000</strong></p>
            </div>
            <hr>
            <div class="datas">
              <p id="grey"><strong>Volume</strong></p>
              <p><strong>$000</strong></p>
            </div>
            <hr>
            <h1>Compare with</h1>
            <form action="">
              <select name="choiceone" class="select" id="choiceone">
                <option disabled selected>None</option>
              </select>
              <select name="choicetwo" class="select" id="choicetwo">
                <option  disabled selected>None</option>
                <option value="Coin">Coin</option>
                <option value="Coin">Coin</option>
              </select>
              <br><br>
              <input type="submit" value="Submit" id="submit">
            </form>
          </div>
          <div class="botbottom">
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