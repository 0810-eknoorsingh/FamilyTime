<html>
    <head>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fec31707004c1001968ef3a&product=sticky-share-buttons' async='async'></script>
          <link rel="stylesheet" href="style.css">
        <style>


            .container {
                position: relative;;
                width: 1260px;
                height:520px;
                border:1px black  solid;
            }
            .toolbox {
                position: absolute;
                bottom: 0px;
               
                width: 100%;
                height:35px;
            }

            
          
        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://meet.jit.si/external_api.js"></script>
        <script src="script.js"></script>
        
        <script>
            $(function(){
                BindEvent();

                $('#btnStart').on('click',function(){
                    var meetingId = $('#txtMeetingId').val();
                    var dispNme = $('#txtDispNme').val();
                    StartMeeting(meetingId,dispNme);
                });
            });
            
        </script>
    </head>
    <body>
        Display Name: <input id='txtDispNme' type="text"> <br>
        <button id='btnStart'>Start</button>
        Enter Meetind Id:<input type="text" id="txtMeetingId">
        <a href="https://hhhhh.com" target="_new">
                <div class="watermark leftwatermark" style="background-image: url('checkmark.png');max-width: 140px;max-height: 70px;visibility: hidden;"></div></a> </div>
        <div class="container">
            <div id="toolbox" class="toolbox" style="display:none;">
              

              <div id="nowPlayingCenter">

      <div class="content playerControls">

<div class="button">
                <button class="controlButton hangup" id='btnHangup' title="Hangup">
                  <img src="icons/hangup.png" alt="Hangup">
                </button>

                <button class="controlButton mic" id='btnCustomMic' title="mic">
                <img src="icons/mic.png" alt="mic">
                </button>
                <button class="controlButton camera" id='btnCustomCamera' title="camera">
                <img src="icons/camera.png" alt="camera">
             </button>
                <button class="controlButton titleview" id='btnCustomTileView' title="Toggle titleview">
                  <img src="icons/titleview.png" alt="titleview">
                </button>
                <button class="controlButton share screen" id='btnScreenShareCustom' title="Screen Share">
                  <img src="icons/ss.png" alt="share screen">

                </button>
                <button class="controlButton chat" id='btnCustomchat' title="chat">
                  <img src="icons/chat.png" alt="chat">
                </button>
            </div>
          </div>
          </div>
            
          </div>
            <div id='jitsi-meet-conf-container'></div>
        </div>
    </body>
</html>


