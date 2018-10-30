<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>General Settings</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/general/master.css">
  <link rel="stylesheet" href="css/navBar.css">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>
  <script type="text/javascript" src="/js/general/settings.js" async></script>



</head>

<body>

  @include('layout.navbar')

  <div id="main">

    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto">
          <h2 class="text-center">Setting</h2>
          <div class="container">

            <div class="" style="margin:30px 0 20px 28px;height:110px;width:590px;background-color: white;border:1px solid #00BEA3;">

              <div class="container" style="width:100%;height:70%;text-align:center;" style="display:flex">
                <h5>
                  Enable this function to receive notifications about your account .
                  When this function is enabled you are going to receive notifications about your account and transactions made.
                  Also you are going to be notified in case of any fraudlent activity.
                </h5>
              </div>
                <h5 class="coolText container" style="text-align:left">Send notifications to the email <input type="checkbox" name="" value=""></h5>


            </div>

          </div>
        </div>

        <!--end of block-->
      </div>
    </div>
  </div>
  </div>

</body>

</html>
