<?php 
    include ('connection.php');
    $sql = "SELECT COUNT(*) as total FROM games;";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
      $data=mysqli_fetch_assoc($result);
      $game_number = $data['total'];
      for ($x = $game_number; $x >= 1; $x--) {
        $sql = "SELECT * FROM player_game WHERE gameId = '$x';";
        $sql2 = "SELECT * FROM games WHERE gameId = '$x';";
        $result33 = mysqli_query($con, $sql);
        $result34 = mysqli_query($con, $sql2);
        if(mysqli_num_rows($result34) > 0) {
          while($row22 = mysqli_fetch_assoc($result34)){
            $originalDate = $row22['game_date'];
            $enrolled = $row22['enroll'];
            $num = $row22['gameID'];
            $newDate = date("d-m-Y | H:i:s", strtotime($originalDate));
          echo "<h4 class='text-success'>#".$num."</h4><h5>".$newDate."</h5><br>";
        }
        echo '<table class="table w-auto table-responsive table-dark table-striped text-center"><tr><th>Rank</th><th>Name</th><th>Points</th></tr>';
          while($row = mysqli_fetch_assoc($result33)){
          echo "<tr><td class='text-start'>" . $row["rank"]. '</td><td class="text-success text-start">'
    . $row["playerName"]. '</td><td>' . $row["points"].'</td></tr>';
        }
        echo "</table><h6 class='text-secondary'>entered by: ".$enrolled."<br><br></h6>";
        }
        
      }
      } else {
        echo '<h6>0 results</h6>';
      }
      // ovo je join 
      // SELECT players.name, player_game.points, player_game.rank FROM players INNER JOIN player_game ON players.id = player_game.playerID;
      mysqli_close($con);
?>