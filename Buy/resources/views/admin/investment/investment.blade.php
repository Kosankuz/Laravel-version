<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Investment</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/investment/master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <link rel="stylesheet" href="css//investment/coolText.css">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="js/investment/index.js" async></script>
  <script type="text/javascript" src="/js/dashboard/navigationBar.js" async></script>

</head>

<body>


  @include('layout.adminNavbar')
  <div id="main">
    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto;width:600px">
          <h2 class="text-center coolText">Investment Settings </h2>
          <div class="" style="margin-top:20px;">

            <div class="" style="margin:30px 0 0 28px;height:110px;width:90%;background-color: white;border:1px solid #00BEA3;">
              <div class="" style="width:100%;height: 20%;text-align:center;border-bottom:1px solid #00BEA3">
                <h5 class="coolText text-center">Currency</h5>
              </div>
              <div class="container" style="padding: 20px;width:100%;height:70%;text-align:center;" style="display:flex">

                <div class="" style="display:flex;justify-content:space-between;width:100%">

                  <span>Ethereum: <input type="checkbox" name="" value=""></span>
                  <span>Bitcoin: <input type="checkbox" name="" value=""></span>
                  <span>Euro: <input type="checkbox" name="" value=""></span>
                  <span>USD: <input type="checkbox" name="" value=""></span>


                </div>

              </div>
            </div>

            <br>
          </div>







        </div>
      </div>
    </div>
</body>

</html>
