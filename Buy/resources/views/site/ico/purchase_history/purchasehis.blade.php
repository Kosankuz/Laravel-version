<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Purchase History</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/purchase_history/master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <link rel="stylesheet" href="css/purchase_history/table.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="module" src="js/purchase_history/js/index.js" async></script>
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

<h2 class="text-center">Purchase History</h2>

<div class="history">
  <div class="historyTable">

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col" class="tableSmallFont">#</th>
          <th scope="col" class="tableSmallFont text-center">Date </th>
          <th scope="col" class="tableSmallFont text-center">Type </th>
          <th scope="col" class="tableSmallFont text-center">Sum </th>

          <th scope="col" class="tableSmallFont text-center">Rate</th>
          <th scope="col" class="tableSmallFont text-center">Tokens</th>
              <th scope="col" class="tableSmallFont text-center">Confirms </th>
          <th scope="col" class="tableSmallFont text-center">Status</th>
        </tr>
      </thead>
      <tbody id="tbody">

      </tbody>
    </table>
</div>

        </div> <!--end of block-->
      </div>
    </div>
  </div>
</body>

</html>
