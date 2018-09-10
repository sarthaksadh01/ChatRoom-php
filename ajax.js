var yes = true;

$("#frm").click(function(){


    var name = $("#name").val();
       $.ajax({
           type:"POST",
           url :"backend.php",
           data: {
             name_submit:"yes",
             name:name

           },
           success : function(msg)
           {


             $("#login").hide();
             $("#chat").show();
             $("#chat").scrollTop(1000);
             $(".ex1").scrollTop($(".ex1")[0].scrollHeight);

           }
       });

});


$("#msg_send").click(function(){

      var msg = $("#msg_text").val();
       $.ajax({
           type:"POST",
           url :"backend.php",
           data: {
             msg_submit:"yes",
             msg_text:msg

           },
           success : function(msg)
           {


              $("#msg_text").val("");
              playAudio();

           }
       });

});

function fetch_data(){


  $.ajax({
      type:"POST",
      url :"backend.php",
      data: {
        get_msg:"yes"
      },
      success : function(msg)
      {
        $(".ex1").html(msg);
      }
  });
  if(yes){
  	$(".ex1").scrollTop($(".ex1")[0].scrollHeight);
  }
  

}



$(document).on({
        mouseenter:function(){ yes = false; },
        mouseleave:function(){yes = true; },
    }, 
   '.ex1'
);

setInterval(fetch_data,10);


function playAudio() {
  var x = document.getElementById("myAudio");
    x.play();
}
