<?php 
include('connection.php');

$sql = "SELECT id,name,nickname,games_number,points_avg,first_place,second_place,third_place,win_per,rank_points FROM players ORDER BY rank_points DESC;";
$result = mysqli_query($con, $sql);
$rank = 1;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo '<table class="table table-responsive table-striped table-dark text-center"><tr>
  <th>Rank</th><th>Name</th><th>Nickname</th><th>Games played</th><th>Points average</th>
  <th>1st</th><th>2nd</th><th>3rd</th><th>Win percent</th><th>Rank points</th></tr>';
  while($row = mysqli_fetch_assoc($result)) {    
    echo "<tr><td>" . $rank. '</td><td class="text-success">'
    . $row["name"]. '</td><td>' . $row["nickname"].'</td><td class="text-center">' . $row["games_number"]. "</td><td>" 
    . $row["points_avg"]."</td><td>". $row['first_place'] ."</td><td>". $row['second_place'] ."
    </td><td>".$row['third_place']."</td><td>".$row['win_per']."</td><td>".$row['rank_points']."</td></tr>";
    $rank++;
  }
  echo "</table>";
} else {
  echo "0 results";
}
// ovo je join 
// SELECT players.name, player_game.points, player_game.rank FROM players INNER JOIN player_game ON players.id = player_game.playerID;
mysqli_close($con);
?>