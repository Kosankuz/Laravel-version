<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>General Settings</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/reset_pass/master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>
  <script type="text/javascript" src="js/reset_pass/settings.js" async></script>



</head>

<body>

    @include('layout.navbar')

  <div id="main">

    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto">
          <h2 class="text-center">Reset Password</h2>
          <div class="container" style="width: 200px;margin: auto;">
            <p>
            Old Password : <br> <input type="text" name="" value="">
            </p>
            <p>
            New Password : <br> <input type="text" name="" value="">
            </p>
            <p>
            Confirm New Password : <br> <input type="text" name="" value="">
            </p>
            <button name="button" type="button" class="btn btn-lg myBtn coolText" style="text-align:center;font-size:15px;width:94%;margin-bottom:20px;" onclick="">Change Password</button>

          </div>


            </div>
        <!--end of block-->
        </div>
      </div>
    </div>
  </div>

</body>

</html>
