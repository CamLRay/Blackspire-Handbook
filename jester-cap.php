<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blackspire Document Compendium</title>
</head>
<body>
<?php include_once("topnav.php");?>

<div class="container-jh">
  <div class="container-jh__title">
    <h1>Jester's Hat</h1>
    <p>Draw from the hat to find your weapon set!</p>
  </div>
  <div class="card" id="mainHand">
    <p class="card__title">Main hand</p>
    <img class="card__image" src="images/jh-shortSword.png">
    <p class="card__message" id="messageMainHand">Short Sword</p>
  </div>
  <div class="card" id="offHand">
    <p class="card__title">Off-hand</p>
    <img class="card__image" src="images/jh-shield.png">
    <p class="card__message" id="messageOffHand">Shield</p>
  </div>
  <button class="container-jh__button">Draw!</button>
</div>

</body>
</html>