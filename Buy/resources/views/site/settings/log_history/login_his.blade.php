<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login History</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/log_history/master.css">
  <link rel="stylesheet" href="css/navBar.css">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>
  <script type="text/javascript" src="/js/log_history/settings.js" async></script>



</head>

<body>

    @include('layout.navbar')

  <div id="main">

    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>
    <div class="container">
      <!-- timer block -->
      <div class="row">




<div class="block" style="margin-top:10px">
<h2 class="text-center">User Log</h2>

  <div class="container" style="padding: 20px;width:100%;height:70%;text-align:center;" style="display:flex">
    <table class="table table-hover coolText">
      <thead>
        <tr>
          <td scope="col" class="tableSmallFont">Login ID</td>
          <td scope="col" class="tableSmallFont text-center">Date</td>
          <td scope="col" class="tableSmallFont text-center">IP Address</td>
          <td scope="col" class="tableSmallFont text-center">Status</td>
          <td scope="col" class="tableSmallFont text-center">User agent</td>
        </tr>
      </thead>
      <tbody id="tbody">
        <tr>
          <td scope="col" class="tableSmallFont" id="loginId">JW6n@9jJU94j</td>
          <td scope="col" class="tableSmallFont text-center">2019-12-12/23:48</td>
          <td scope="col" class="tableSmallFont text-center">192.168.0.1</td>
          <td scope="col" class="tableSmallFont text-center">COnnection successful</td>
          <td scope="col" class="tableSmallFont text-center">Safari Mac Os</td>
        </tr>
      </tbody>
    </table>
  </div>
              </div>




        </div>
      </div>
    </div>
  </div>

</body>

</html>
