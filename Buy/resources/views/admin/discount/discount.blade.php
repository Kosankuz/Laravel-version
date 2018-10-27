<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin Discount</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/discounts/master.css">
  <link rel="stylesheet" href="css/navBar.css">
  <link rel="stylesheet" href="css/discounts/coolText.css">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="js/discounts/index.js" async></script>
  <script type="text/javascript" src="js/dashboard/navigationBar.js" async></script>

</head>

<body>

  @include('layout.navbar')
  
  <div id="main">
    <span style="font-size:30px;cursor:pointer;position:fixed;" onclick="openNav()" id="openNavBtn">&#9776;</span>

    <div class="container">
      <!-- timer block -->
      <div class="row">
        <div class="block" style="height:auto;width:600px;">
          <h2 class="text-center">Discount Amount</h2>

          <div class="" style="width:auto;">

            <ul class="nav nav-tabs" style="display:flex;justify-content:space-between;">
              <li class="active"><a data-toggle="tab" href="#private">Private Sale</a></li>
              <li><a data-toggle="tab" href="#presale">Pre-Sale</a></li>
              <li><a data-toggle="tab" href="#public">Public Sale</a></li>

            </ul>

            <div class="tab-content">
              <div id="private" class="tab-pane fade in active container">
                <h3 class=""style="">Private sale</h3>
                <div class="" style="margin-top:10px;">
                  <p>
                    <div class="" style="width:600px">


                      <div class="" style="margin-top:20px;">
                        <div class="" style="margin:0px 0 20px 0px;height:120px;width:568px;background-color: white;border:1px solid #00BEA3;">
                          <div class="" style="width:100%;height: 17%;text-align:center;border-bottom:1px solid #00BEA3">
                            <h5 class="coolText text-center">Discount Configuration</h5>
                          </div>
                          <div class="container" style="padding: 15px;width:100%;height:70%;" style="">
                          <div class="" style="">
                              <p>

                                <span>Bonus: </span> <input type="text" name="" value="" size="5"> <span class=""> %</span>  Amount <input type="text" name="" value="" size="5"><span class=""></span>
                                <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px; ">Add</button></a>
                              </p>
                              <br>
                            </div>
                          </div>
                        </div>

                      </div>
                    <div class="" style="background-color: white;border:1px solid #00BEA3;width:568px">

                      <div class="" style="padding: 15px;width:auto;height:70%;" style="">
                        <table class="table table-hover">

                          <tbody id="tbody">
                            <thead>
                              <tr>
                                <th scope="col" class="tableSmallFont">#</th>
                                <th scope="col" class="tableSmallFont text-center">Bonus </th>
                                <th scope="col" class="tableSmallFont text-center"><span>Amount</span> </th>
                                <th scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"></th>
                                <th scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"></th>
                              </tr>
                            </thead>
                            <tr>
                              <td scope="col" class="tableSmallFont">1</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 10%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>5</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">2</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 35%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>10</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">3</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 75%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>20</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">4</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 100%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>40</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                   </div>
                  </p>
                </div>

              </div>
              <div id="presale" class="tab-pane fade in container">
                <h3 class=""style="">Pre-sale</h3>
                <div class="" style="margin-top:10px;">
                  <p>
                    <div class="" style="width:600px">


                      <div class="" style="margin-top:20px;">
                        <div class="" style="margin:0px 0 20px 0px;height:120px;width:568px;background-color: white;border:1px solid #00BEA3;">
                          <div class="" style="width:100%;height: 17%;text-align:center;border-bottom:1px solid #00BEA3">
                            <h5 class="coolText text-center">Discount Configuration</h5>
                          </div>
                          <div class="container" style="padding: 15px;width:100%;height:70%;" style="">
                            <div class="" style="">
                              <p>

                                <span>Bonus: </span> <input type="text" name="" value="" size="5"> <span class=""> %</span>  Amount <input type="text" name="" value="" size="5"><span class=""></span>
                                <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px; ">Add</button></a>
                              </p>
                              <br>
                            </div>
                          </div>
                        </div>

                      </div>
                    <div class="" style="background-color: white;border:1px solid #00BEA3;width:568px">

                      <div class="" style="padding: 15px;width:auto;height:70%;" style="">
                        <table class="table table-hover">

                          <tbody id="tbody">
                            <thead>
                              <tr>
                                <th scope="col" class="tableSmallFont">#</th>
                                <th scope="col" class="tableSmallFont text-center">Bonus </th>
                                <th scope="col" class="tableSmallFont text-center"><span>Amount</span> </th>
                                <th scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"></th>
                                <th scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"></th>
                              </tr>
                            </thead>
                            <tr>
                              <td scope="col" class="tableSmallFont">1</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 10%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>5</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">2</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 35%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>10</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">3</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 75%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>20</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">4</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 100%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>40</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                   </div>
                  </p>
                </div>

              </div>

              <div id="public" class="tab-pane fade in container">
                <h3 class=""style="">Public Sale</h3>
                <div class="" style="margin-top:10px;">
                  <p>
                    <div class="" style="width:600px">


                      <div class="" style="margin-top:20px;">
                        <div class="" style="margin:0px 0 20px 0px;height:120px;width:568px;background-color: white;border:1px solid #00BEA3;">
                          <div class="" style="width:100%;height: 17%;text-align:center;border-bottom:1px solid #00BEA3">
                            <h5 class="coolText text-center">Discount Configuration</h5>
                          </div>
                          <div class="container" style="padding: 15px;width:100%;height:70%;" style="">
                            <div class="" style="">
                              <p>

                                <span>Bonus: </span> <input type="text" name="" value="" size="5"> <span class=""> %</span>  Amount <input type="text" name="" value="" size="5"><span class=""></span>
                                <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px; ">Add</button></a>
                              </p>
                              <br>
                            </div>
                          </div>
                        </div>

                      </div>
                    <div class="" style="background-color: white;border:1px solid #00BEA3;width:568px">

                      <div class="" style="padding: 15px;width:auto;height:70%;" style="">
                        <table class="table table-hover">

                          <tbody id="tbody">
                            <thead>
                              <tr>
                                <th scope="col" class="tableSmallFont">#</th>
                                <th scope="col" class="tableSmallFont text-center">Bonus </th>
                                <th scope="col" class="tableSmallFont text-center"><span>Amount</span> </th>
                                <th scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"></th>
                                <th scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"></th>
                              </tr>
                            </thead>
                            <tr>
                              <td scope="col" class="tableSmallFont">1</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 10%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>5</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">2</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 35%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>10</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">3</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 75%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>20</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                            <tr>
                              <td scope="col" class="tableSmallFont">4</td>
                              <td scope="col" class="tableSmallFont text-center"> <span> 100%</span> </td>
                              <td scope="col" class="tableSmallFont text-center"><span>40</span><span></span> </td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Remove</button></a></td>
                              <td scope="col" class="tableSmallFont text-center"> <a  href="" class="deactivate"><button id="" type="button" class="btn btn-lg myBtn deactivate" style="margin:0 0 10px 25px;width: auto; font-size:13px;">Edit</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                   </div>
                  </p>
                </div>

              </div>



              </div>



            </div>

          </div>

        </div>
        <!--end of block-->
      </div>
    </div>
        </div>

</body>

</html>
