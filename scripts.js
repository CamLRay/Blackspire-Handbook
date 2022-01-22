var myip;
var bhc = 0;
$(document).ready(function(){



  myip = $("#myip").val();
  console.log(myip);
    if(myip == "73.180.13.120"){
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


  $(document).on("click", "#container-jh__button", function(){
    const mainHand = Math.floor(Math.random()*4);
    const offHand = Math.floor(Math.random()*6);
    if(mainHand+offHand === 0){
      console.log("Great Weapon")
    } else{
      rollMainHand(mainHand);
      rollOffHand(offHand);
    }
  })

  function rollMainHand(number){
    if(number === 0){
      console.log("Mainhand dagger");
    } else if(number === 1){
      console.log("Mainhand short sword");

    } else if(number === 2){
      console.log("Mainhand flail");

    } else if(number === 3){
      console.log("Mainhand long sword");

    }
  }

  function rollOffHand(number){
    if(number === 0){
      console.log("offhand dagger");
    } else if(number === 1){
      console.log("offhand short sword");

    } else if(number === 2){
      console.log("offhand flail");

    } else if(number === 3){
      console.log("offhand long sword");

    } else if(number === 4){
      console.log("offhand shield");

    } else if(number === 5){
      console.log("offhand open hand");

    }


  }
  


});

