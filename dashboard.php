<?php 
    session_start();
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: index.php");
		exit;
	}

    include_once ('php/connection.php');
    
    $sql = "SELECT DISTINCT nickname,id FROM players";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die('database query error<br>'.$query);
    };
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
	<link rel="icon" type="image/x-icon" href="img/resume.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
	<h1 class="text-center">Welcome to dashboard </h1>
	<div class="container text-center mb-3">
		<a href="php/logout.php" class="btn btn-danger">Logout</a>	
	</div>
	<h4 class="text-center text-success"> <?php echo $_SESSION['logged_user'] ?></h4>	
		<?php 
			$niz = array();
			foreach($result as $row)
			{				
				$niz[] = $row["nickname"];		
			}
		?>	
	<div class="container text-center">
		<h5>Enter new game</h5>
		<select name="player_num" id="player_num" onchange="enterGame()" class="btn btn-lg btn-dark mt-3 mb-3 selectpicker">
			<option selected value="bez">Number of players</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>
	</div>
	<div class="container">
		<form class="row border border-dark bg-light" id="player_stats" action="php/insert-game.php" method="post">
		</form>
	</div>
	<script>
		let test66 = <?php echo json_encode($niz); ?>;
		let user = "<?php echo $_SESSION['logged_user']; ?>";
		function enterGame() {
			d = document.getElementById("player_num").value;
			var myParent = document.getElementById("player_stats");

			let submitButton = document.createElement("button");
				submitButton.type = "submit";
				submitButton.innerHTML = "ENTER GAME";
				submitButton.setAttribute("class", "btn btn-success mt-2 mb-3 col-md-2 offset-md-5");

			let playerDiv = document.createElement("div");
			let pointsDiv = document.createElement("div");
			let rankDiv = document.createElement("div");
				playerDiv.setAttribute("class","form-group col-xs-4 col-md-2 offset-md-1");
				pointsDiv.setAttribute("class","form-group col-xs-4 col-md-4");
				rankDiv.setAttribute("class","form-group col-xs-4 col-md-4");
				
			let inputPlayerNum = document.createElement("input");
				inputPlayerNum.type = "hidden";
				inputPlayerNum.value = d;
				inputPlayerNum.name= "playerNumber";
			let inputLoggedUser = document.createElement("input");
				inputLoggedUser.type = "hidden";
				inputLoggedUser.value = user;
				inputLoggedUser.name= "loggedUser";
			let datePicker = document.createElement("input");
				datePicker.type = "datetime-local";
				datePicker.setAttribute("class","text-center col-md-8 offset-md-2");
				datePicker.value="2013-01-08 22:30";
				datePicker.name = "gameDate";
			let datePickerLabel = document.createElement("label");
				datePickerLabel.innerHTML = "Game date&time";
				datePickerLabel.setAttribute("class","text-center mt-3 mb-3");
				myParent.innerHTML = "";
			for(var i = 0; i < d;i++){
				let br = document.createElement("br");

				let selectList = document.createElement("select");
					selectList.name = `player${i}`;
					selectList.setAttribute("class", "btn btn-dark form-control mb-3");
				let labelPlayer = document.createElement("label");
					labelPlayer.setAttribute("class","control-label mt-3 mb-3");
					labelPlayer.innerHTML = "Pick a player";

				let inputPoints = document.createElement("input");
					inputPoints.name = `points${i}`;
					inputPoints.setAttribute("class", "form-control mb-3");
				let labelPoints = document.createElement("label");
					labelPoints.setAttribute("class","control-label mt-3 mb-3");
					labelPoints.innerHTML = "Game points";

				let inputRank = document.createElement("input");			
					inputRank.name =`rank${i}`;
					inputRank.setAttribute("class", "form-control mb-3");
				let labelRank = document.createElement("label");
					labelRank.setAttribute("class","control-label mt-3 mb-3");
					labelRank.innerHTML = "Game rank";

				for (const key in test66) {
					let option = document.createElement("option");
						option.value = `${test66[key]}`;
						option.text = `${test66[key]}`;
						selectList.appendChild(option);
				}				
				if(i == 0){
					playerDiv.appendChild(labelPlayer);
					playerDiv.appendChild(selectList);
					pointsDiv.appendChild(labelPoints);
					pointsDiv.appendChild(inputPoints);
					rankDiv.appendChild(labelRank);
					rankDiv.appendChild(inputRank);				
				}else{
					playerDiv.appendChild(selectList);
					pointsDiv.appendChild(inputPoints);
					rankDiv.appendChild(inputRank);
				}						
			}
			myParent.appendChild(datePickerLabel);
			myParent.appendChild(datePicker);
			myParent.appendChild(playerDiv);
			myParent.appendChild(pointsDiv);
			myParent.appendChild(rankDiv);
			myParent.appendChild(inputPlayerNum);
			myParent.appendChild(inputLoggedUser);			
			myParent.appendChild(submitButton);
		}										
	</script>
	<h2>Leaderboards</h2>
        <?php
          require ('php/leaderboards.php');
        ?>
        <br>
        <h2>Games</h2><br>
        <?php
          require ('php/games.php');
        ?>			
	</div>
</body>
</html>