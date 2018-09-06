<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"crossorigin="anonymous"></script>
      <link rel="stylesheet" href="index.css">
    <title></title>
  </head>

  <body class="bg-primary">

    <audio id="myAudio">
      <source src="messagesend.mp3" type="audio/mpeg">

    </audio>
      <div id="login" class="container">
          <div class="row  justify-content-center align-items-center d-flex text-center h-100">
                  <div class="col-12 col-md-8  h-50 ">
                      <h1 class="display-2  text-light mb-2 mt-5"><strong>Chat Room</strong> </h1>
                    </div>
                  </div>
            <br/>
      	     <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method = "post">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">

                                    </div>
                                    <!--end of col-->
                                    <div class="col">

                                        <input id="name" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter Your Name here!" name = "name">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button id="frm"  name = "submit" class="btn btn-lg btn-primary" type="button">Enter Chat</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
      </div>
                    <br>
                    <br>


</div>


<div id="chat" class="container ">

  <h1 class="mt-5 text-center text-light display-1"><strong>S Chat</strong></h1>
<div class="ex1 p-3 border">

</div>
<div class="card-body row no-gutters align-items-center">
    <div class="col-auto">

    </div>
    <!--end of col-->
    <div class="col">

        <input id="msg_text" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Type Message Here!" name = "msg">
    </div>
    <!--end of col-->
    <div class="col-auto">
        <button id="msg_send"  name = "msg_text" class="ml-3 btn btn-lg btn-success" type="button">Send</button>
    </div>
    <!--end of col-->
</div>


</div>
<script src="ajax.js" type="text/javascript"></script>


  </body>
</html>
