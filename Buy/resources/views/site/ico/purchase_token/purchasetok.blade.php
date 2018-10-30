<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <title>Purchase Token</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/purchase_token/css//master.css">
  <link rel="stylesheet" href="css/purchase_token/css/purchaseBlock.css">
  <link rel="stylesheet" href="css/purchase_token/css/responsiveProgressBar.css">
  <link rel="stylesheet" href="css/purchase_token/css/investment.css">
  <link rel="stylesheet" href="css/navBar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/purchase_token/purch.js"></script>
  <script type="module" src="js/purchase_token/index.js" async></script>
  <script type="text/javascript" src="js/dashboard/navigationBar.js"async ></script>

</head>

<body>



  @include('layout.navbar')

<div id="main">
  <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>

  <div class="container">
  <div class="row">
      <div class="block" style="">
        <h2 class="red-text text-center">Investment</h2>
        <br>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="display:flex;align-items:center;justify-content:space-between;">
          <button class="btn bouton-image imgBoutonEther curbtn " data-toggle="buttons" id="ether-button"></button>
          <button class="btn bouton-image imgBoutonBitcoin curbtn " data-toggle="buttons" id="bitcoin-button"></button>
          <button class="btn bouton-image imgBoutonEuro curbtn " data-toggle="buttons" id="euro-button"></button>

        </div>
      </div>

    </div>
    <!--end of row 1 buttons-->


    <div class="row">
      <div class="block" style="height:auto;padding-bottom:5px;">
        <h2 class="text-center">Purchase details</h2>
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button group">
          <div class="" style="margin:5px 0 0px 35px ">
            <span>Price per token : <span> 0.20 </span> <span class="currencyName"></span>
            <!--1st id = cryptocurrency 2nd id how many token 3rd id Token name-->
          </div>


          <div id="stageBar" class="container-fluid">


          </div>
          <div class="container-fluid">



            <br>
            <div class="input-group" style="margin-left:15px;">
              <input type="text" class="form-control" style="text-align:left;" value="1" aria-describedby="basic-addon2" id="inputAmount">
              <span class="input-group-addon" style="text-align: left; width: 44px; height: 34px;" id="basic-addon2"><span class="text-center currencyName" ></span></span>

            </div>

            <div class="digits_purchase_datails" style="display:flex;width:20%;padding-top:5px">

             <span style="margin-left:5px"> = </span>
              <span class="" id="tokenAmount" style="margin-left:5px" ></span><span style="margin-left:5px" class="tokenName"></span>

            </div>

          <div class="" style="margin:10px">
            <a href="#" class="deactivate" > <button type="button" class="btnw btn-lg myBtn" id="purchase-myetherwallet" style="float:right" >Purchase Tokens</button> </a>

          </div>

        <!--    <div class="container-fluid">
              <h3>Payment Address</h3>
              <input id="paymentAddressInput" type="text" value="" placeholder="" class="form-control inputAddress">
              <!--ADDRESS  ------------------------ ENTRY ID-->
              <!--  <h6>You can send <span id="paymentCurrency" ></span> from exchange</h6>
            </div>

            <div class="" id="etherButtonsHide">
              <div style="margin:10px 0 0 10px">


                <div class="container-fluid" style="display:flex;justify-content:space-between; padding: 0 15px 0 15px">
                  <div class="" style="width:250px;">Gas limit</div>
                  <div class="" style="width:250px;">Gas Price</div>
                </div>
                <div class="container-fluid" style="display:flex;justify-content:space-between; padding: 0 15px 0 15px">
                  <div id="gasLimitValue" class="" style="width:250px;"></div>
                  <div id="gasPriceValue" class="" style="width:250px;"> 9 <span>GWEI</span> </div>
                </div>
              </div>

              <div class="container" style="width:620px; display:flex; justify-content: space-between;margin-top:50px">

                <a href="#" class="deactivate" > <button type="button" class="btnw btn-lg myBtn" id="purchase-myetherwallet" >MYETHERWALLET</button> </a>
                <a href="#" class="deactivate" > <button type="button" class="btnw btn-lg myBtn" id="purchase-metamask" >METAMASK</button> </a>

              </div>

            </div> -->
          </div>


        </div>
      </div>

    </div>
</div>

</div>
</body>

</html>
