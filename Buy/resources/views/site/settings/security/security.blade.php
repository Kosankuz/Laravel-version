<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>General Settings</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/security/master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>
  <script type="text/javascript" src="js/security/settings.js" async></script>



</head>

<body>

  @include('layout.navbar')

  <div id="main">
   <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>

    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto">
          <h2 class="text-center">Two-Factor Authentication</h2>

          <div class="container" style="width: 300px;margin: auto;">
           <span>
          On  : <input type="radio" name="" value="" checked>
        </span>
           <span>
          Off : <input type="radio" name="" value="">
        </span>

          </div>


            </div>
        <!--end of block-->
        </div>
      </div>
    </div>
  </div>

</body>

</html>
