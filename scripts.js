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
    const mainHand = Math.floor(Math.random()*5);
    const offHand = Math.floor(Math.random()*6);
    if(mainHand+offHand === 0){
      console.log("Great Weapon")
      document.getElementById("wepMainHand").innerHTML = "Great Weapon";
      document.getElementById("wepOffHand").innerHTML = "Great Weapon";
      document.getElementById("wepMainHand__image").src = "images/jh-great.png";
      document.getElementById("wepOffHand__image").src = "images/jh-great.png";
    } else{
      rollMainHand(mainHand);
      rollOffHand(offHand);
    }
  })

  function rollMainHand(number){
    if(number === 0){
      console.log("Mainhand Open hand");
      document.getElementById("wepMainHand").innerHTML = "Open Hand";
      document.getElementById("wepMainHand__image").src = "images/jh-freehand.png";

    } else if(number === 1){
      console.log("Mainhand short sword");
      document.getElementById("wepMainHand").innerHTML = "Short Sword";
      document.getElementById("wepMainHand__image").src = "images/jh-shortsword.png";

    } else if(number === 2){
      console.log("Mainhand flail");
      document.getElementById("wepMainHand").innerHTML = "Flail";
      document.getElementById("wepMainHand__image").src = "images/jh-flail.png";

    } else if(number === 3){
      console.log("Mainhand long sword");
      document.getElementById("wepMainHand").innerHTML = "Long Sword";
      document.getElementById("wepMainHand__image").src = "images/jh-longsword.png";

    } else if(number === 4){
      console.log("Mainhand dagger");
      document.getElementById("wepMainHand").innerHTML = "Dagger";
      document.getElementById("wepMainHand__image").src = "images/jh-dagger.png";

    }
  }

  function rollOffHand(number){
    if(number === 0){
      console.log("offhand open hand");
      document.getElementById("wepOffHand").innerHTML = "Open Hand";
      document.getElementById("wepOffHand__image").src = "images/jh-freehand.png";

    } else if(number === 1){
      console.log("offhand short sword");
      document.getElementById("wepOffHand").innerHTML = "Short Sword";
      document.getElementById("wepOffHand__image").src = "images/jh-shortsword.png";

    } else if(number === 2){
      console.log("offhand flail");
      document.getElementById("wepOffHand").innerHTML = "Flail";
      document.getElementById("wepOffHand__image").src = "images/jh-flail.png";

    } else if(number === 3){
      console.log("offhand long sword");
      document.getElementById("wepOffHand").innerHTML = "Long Sword";
      document.getElementById("wepOffHand__image").src = "images/jh-longsword.png";

    } else if(number === 4){
      console.log("offhand shield");
      document.getElementById("wepOffHand").innerHTML = "Shield";
      document.getElementById("wepOffHand__image").src = "images/jh-shield.png";

    } else if(number === 5){
      console.log("offhand dagger");
      document.getElementById("wepOffHand").innerHTML = "Dagger";
      document.getElementById("wepOffHand__image").src = "images/jh-dagger.png";

    }


  }
  


});

