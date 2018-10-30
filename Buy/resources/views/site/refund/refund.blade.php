<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Refund</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/refund/master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <link rel="stylesheet" href="css/refund/table.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>

  <script type="module" src="/js/refund/index.js" async></script>

</head>

<body>

  @include('layout.navbar')

  <div id="main">

    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto;width:330px;">
          <h2 class="text-center">Refund</h2>

          <div class="" style="width:auto">

            <ul class="nav nav-tabs" style="display:flex;justify-content:space-between;">
              <li class="active"><a data-toggle="tab" href="#ether">Ether</a></li>
              <li><a data-toggle="tab" href="#bitcoin">Bitcoin</a></li>
              <li><a data-toggle="tab" href="#euro_usd">Euro and USD</a></li>

            </ul>

            <div class="tab-content">
              <div id="ether" class="tab-pane fade in active container">
                <h3 class=""style="">Ethereum Refund</h3>
                <div class="" style="margin-top:10px;">
                  <p>
                    <h5> Please enter address where to refund : </h5>
                    <p> <input type="text" name="" value="" size="35" class="form-control" style="width:300px;" placeholder="address"></p>
                  </p>
                </div>






              </div>
              <div id="bitcoin" class="tab-pane fade container">
                <h3>Bitcoin Refund</h3>

                <div class="" style="margin-top:10px;">
                  <p>
                    <h5> Please enter address where to refund : </h5>
                    <p> <input type="text" name="" value="" size="35" class="form-control" style="width:300px;" placeholder="address"></p>
                  </p>
                </div>





              </div>

              <div id="euro_usd" class="tab-pane fade container" style="">

                <h3>Euro / USD Refund</h3>

                <div class="" style="margin-top:10px;">
                  <p>
                    <h5> Please enter your account number: </h5>
                    <p> <input type="text" name="" value="" size="35" class="form-control" style="width:300px" placeholder="account number"> </p>
                  </p>
                </div>

                <div class="" style="margin-top:10px;">
                  <p>
                    <h5> Please enter your sort code: </h5>
                    <p> <input type="text" name="" value="" size="35" class="form-control" style="width:300px" placeholder="sort code"> </p>
                  </p>
                </div>




              </div>

            </div>

          </div>
          <div class="text-center" >
            <button name="button" type="button" class="btn btn-lg myBtn coolText" style="width:auto;height:24px;line-height:1px;margin-bottom:10px" onclick="">Request Refund</button>
      </div>

        </div>
        <!--end of block-->
      </div>
    </div>
  </div>
</body>

</html>
