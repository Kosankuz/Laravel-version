<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>admin dashboard</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style media="screen">

.main{
  min-width: 300px !important;
}
#a1:hover{
  background-color: #7cb6ae !important;
}
#d1:hover{
  background-color: #7cb6ae !important;
}
#a1:active{
  background-color: #037162 !important;
}
#d1:active{
  background-color: #037162 !important;
}

</style>
  </head>
  <body>
    <div class="" id="main" style="text-align: center; font-size: 105px;width:150px;height:15%;margin:auto;border:1px solid #00BEA3;display:flex;border-radius:5px;margin-top:10%">
   <a style=" color:white !important;text-decoration: none;width:100%;font-family: monospace;" href="{{('admin')}}"><div id="a1" class="buttons" style="width:100%;height:100%;background-color:#00BEA3;border:1px solid white;border-top-left-radius: 10px;border-bottom-left-radius: 10px;">
A</div></a>

   <a style=" color:white !important;text-decoration: none;width:100%;font-family: monospace;" href="{{('dashboard')}}"><div  id="d1" class="buttons" style="width:100%;height:100%;background-color:#00BEA3; border:1px solid white;border-top-right-radius: 10px;border-bottom-right-radius: 10px;">
D</div></a>

    </div>


  </body>
</html>
