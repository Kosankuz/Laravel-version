<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>General Settings</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/support/master.css">
  <link rel="stylesheet" href="css/support/navBar.css">




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>
  <script type="text/javascript" src="js/support/settings.js" async></script>



</head>

<body>

  @include('layout.navbar')

  <div id="main">
    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>

    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto" >
          <h2 class="text-center">Ask a question</h2>

          <div class="container" style="width: 300px;">
            <div class="">
              <select class="" name="" >
                <option value="Question 1"> This question is regading my account</option>
                <option value="Question 2"> This question is regading my email</option>
                <option value="Question 3"> This question is regading my Tokens</option>
                <option value="Question 4"> This question is regading my transaction</option>
              </select>
            </div>
            <br>
          </div>
          <div class="text-center" style="margin:10px 0">

            <textarea name="name" rows="8" cols="80"></textarea>

          </div>
    <div class="text-center">
      <button id="purchaseTokenButton" type="button" class="btn btn-lg myBtn" style="width: auto; font-size:13px;margin-bottom: 15px">Send</button>

    </div>
        </div>
        <!--end of block-->
      </div>
    </div>
  </div>
  </div>

</body>

</html>
