<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <title>Dashboard</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dash_master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <link rel="stylesheet" href="css/dash_timer.css">
  <link rel="stylesheet" href="css/dash_statusBarBlock.css">
  <link rel="stylesheet" href="css/dash_responsiveProgressBar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="module" src="js/dashboard/index.js" async></script>
  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>


</head>

<body>
@include('layout.navbar')

  <div id="main">

    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="">
          <div class="text-center">
            <h2>Sale is <span id="saleStatus"></span></h2>
          </div>
          <div class="container-fluid">
            <div class="ciferblate">
              <div class="timerSquare shadowEffect" id="days"></div>
              <div class="tim">:</div>
              <div id="hours" class="timerSquare shadowEffect"></div>
              <div class="">:</div>
              <div id="minutes" class="timerSquare shadowEffect"></div>
              <div class="">:</div>
              <div id="seconds" class="timerSquare shadowEffect"></div>
            </div>

            <div class="timerLabels">
              <div class="timerLabelWindow">Days</div>
              <div class="timerLabelWindow">Hours</div>
              <div class="timerLabelWindow">Minutes</div>
              <div class="timerLabelWindow">Seconds</div>
            </div>
          </div>
        </div>
      </div>
      <!--end of timer block row-->



      <div class="row">
        <div class="block" style="height:auto;padding-bottom:20px;">
          <h2 class="text-center">Sale Status</h2>


          <!--end of responsiveStepBar-->

          <div class="statusBarBlock">

            <div class="dashboardLabels" style="margin-top:40px;">
              <div> <span style="font-weight:bold" >Raised : </span>  <span id="raised">  </span> <span class="currency"></span> <span id="eth_convert_raised"></span></div>
              <div> <span style="font-weight:bold" >Hard Cap: </span>  <span id="hardCap" > </span> <span class="currency" > </span> <span id="eth_convert_hard"></span></div>

            </div>

            <div style="margin-top:1px;display:flex;align-items:center;justify-content:center;">

              <div class="progress " style="width:600px;border:1px none black; background-color:lightgrey;height:15px;margin-bottom:0px">
                <div id="dashboardProgressBar" class="progress-bar progBar" style="background-color:#00bea3;width:50%"> <span id="pbarOutput"style=""></span> </div>
              </div>

            </div>

            <div class="dashboardLabels">

              <div> <span style="font-weight:bold" >Token Sold: </span>  <span id="tokensold">  </span> <span class="tokenName"></span> </div>

            </div>

          </div>
          <!--End of statusBarBlock-->

<div class="" style="display:flex;justify-content:space-between;">
  <div class="infoTable">

  <span style="font-weight:bold"> My Balance : </span>   <span id="referral">  </span> <span class="tokenName"></span>
  <div class="text-center" style="display:flex;margin:20px 0 0 0;">
    <a  href="/ico/purchase_token/purchasetok.html" class="deactivate"><button id="withdraw" type="button" class="btn btn-lg myBtn deactivate" style="width: auto; font-size:13px; ">Withdraw Token</button></a>

  </div>
  </div>
  <div class="righttable">

<div class="" style="margin-top:10px;display:inline">
  <span style="font-weight:bold"> Price per token :</span>  <span>0.20</span>  <span class="currency"> EUR</span>
  <div class="text-center" style="display:flex;margin:20px 0 0 0;">
    <a  href="/ico/purchase_token/purchasetok.html" class="deactivate"><button id="purchaseTokenButton" type="button" class="btn btn-lg myBtn deactivate" style="width: auto; font-size:13px; ">Purchase Token</button></a>

  </div>
</div>



    </div>

</div>


        </div> <!--end of block-->
      </div> <!--end of row-->



    </div>
    <!--end of container-->

<button type="button" name="button" id="showme"></button>
  </div> <!-- end of main div-->


<script type="text/javascript">

$("#showme").click(function(){
var cookie = document.cookie;
alert(cookie);
})
</script>
</body>

</html>
