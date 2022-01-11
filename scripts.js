var myip;
var bhc = 0;
$(document).ready(function(){



  myip = $("#myip").val();
  console.log(myip);
    if(myip == "69.168.123.97"){
      var mybutton = $("<div />",{
        "id" : "mybutton", 
        "text" : "Test Button"


      }).prependTo($(".topnav"));
    }


  $(document).on("click", "#mybutton", function(){
    if(bhc == 0){
      changeBackground();
    }else{
      
      restoreBackground();
    }
  })

  function changeBackground(){
    $(".test123").each(function(i,y){
      console.log(i);
      if(i % 2 == 0){
        $(y).css("background-color", "yellow");
      }
  
  
    });
    bhc = 1;
  }

  function restoreBackground(){
    $(".test123").each(function(i,y){
      console.log(i);
      $(y).css("background-color", "white");
  
  
    });
    bhc = 0;
  }

});

