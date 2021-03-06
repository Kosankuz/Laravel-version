<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>withdraw</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="css/withdraw/master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <link rel="stylesheet" href="css/withdraw/table.css">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="module" src="js/withdraw/index_automat.js" async></script>
  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>

</head>

<body>

  @include('layout.navbar')

  <div id="main">

    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto">
          <h2 class="text-center">Token withdraw</h2>

          <div class="" style="margin-top:20px;">
            <h4 class="text-left" style="margin-left:30px;">My Investments</h4>
            <div class="" style="margin-left:28px;height:110px;width:590px;background-color: white;border:1px solid #00BEA3;display:flex;">
              <div class="mywalletSmall" style="width:100px;height:100%;background-color:#a6b3ac">
                <p class="text-center">My Wallet</p> <img src="css/withdraw/img/wallet.png" alt="" style="width:100px;height:70px;">
              </div>
              <div class="container" style="padding-top:-20px">
                <h6>Ethereum address :</h6>
                <h5> <a href="#">0xde0B295669a9FD93d5F28D9Ec85E40f4cb697BAe</a> </h5>

                <p>
                  <h6>Investments :</h6>
                  <h5>0.00</h5>
                </p>
              </div>

            </div>

          </div>
          <br>
          <div style="text-align:center" class="addtok">
            <p>Add this Token address to your Wallet to see Your Tokens <a data-toggle="modal" data-target="#exampleModal"> <i style="font-size:18px; color:#00BEA3" class="fa">&#xf05a;</i></a></p>

          </div>

          <div class="" style="margin:40px 0;width:620px;">
<div class="" style="display:flex;justify-content:space-between;">
  <div class="input-group" style="margin-left:28px;">
    <input type="text" class="form-control" style="text-align:left;" value="1" aria-describedby="basic-addon2" id="inputAmount">
    <span class="input-group-addon basic-addon2 " style="text-align: left; width: 44px; height: 34px;" id="basic-addon2"><span class="text-center currencyName"></span></span>

  </div>

  <div id="wrapper">
    <a href="#" class="deactivate"> <button class="btn btn-lg myBtn" id="withdraw" type="button" name="" style="width:125px;height:34px;font-size:10px;margin-right:10px">WITHDRAW</button> </a>
  </div>

</div>
<div class="container">
            <span class="" style="margin-left:13px;font-size:10px;">Minimum token amount 500 <span class="basic-addon2"></span> </span></span>

</div>
          </div>

          <!--refund top part end-->
          <div class="" style="display:flex;justify-content:center">
            <div class="" style="width:600px;border-bottom:4px double #00BEA3;margin:40px 0px 5px 0"></div>
          </div>
          <h2 class="text-center"> Token withdraw History</h2>

          <div class="history">
            <div class="historyTable">

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col" class="tableSmallFont text-center">Time Stamp</th>
                    <th scope="col" class="tableSmallFont text-center">TxHash</th>
                    <th scope="col" class="tableSmallFont text-center">Address</th>
                    <th scope="col" class="tableSmallFont text-center">Token Amount</th>
                    <th scope="col" class="tableSmallFont text-center">Status</th>
                  </tr>
                </thead>

                <tbody id="tbody_automat">

                </tbody>
              </table>
            </div>

          </div>
          <!--end of block-->
        </div>
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border:2px solid #00BEA3">
          <div class="modal-header" style="border-bottom:1.5px solid #00BEA3">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="addwind " style="width: auto; border-radius:1px solid #00BEA3; font-weight:bold;">
            <p>  <span style="">Token Contract address</span> <br>
              <input type="text" name="" value="0x66a945a11483e05bedb37474ca29ad6e8656c4f4" style="width:350px">
              </p>
                <span>Token Symbol</span>
              <p> <input type="text" name="" value="TES" style="width:350px"></p>
              <p> <span>Decimals of Precision</span> <br>
              <input type="text" name="" value="18" style="width:350px"></p>
            </div>
            <div class="copy">
              <p>Copy this address to your wallet to view your tokens.<a href="https://www.youtube.com" target="_blank"> <i style="font-size:18px; color:#00BEA3" class="fa">&#xf05a;</i></a></p>
                <i>Do not send funds to this addres.</i> </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <script type="text/javascript">
      // Popup window code
      function newPopup(url) {
        popupWindow = window.open(
          url, 'popUpWindow', 'height=300,width=400,left=200,top=200,resizable=no,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
      }
    </script>
</body>

</html>
