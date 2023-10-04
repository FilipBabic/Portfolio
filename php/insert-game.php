<html>
<body>

<?php 
include('connection.php');

$player_num = $_POST['playerNumber'];
function add_rank($r){
        
    $upit;
    if ($r == 1) {
        $upit = ",`first_place` =`first_place`+ 1 ";
    } elseif ($r == 2) {
        $upit = ",`second_place` =`second_place`+ 1 ";
    } elseif ($r == 3) {
        $upit = ",`third_place` =`third_place`+ 1 ";
    } elseif ($r > 3) {
        $upit = " ";
    };
    return $upit;
};
$gameID;
$user = $_POST['loggedUser'];
$sql2 = "SELECT DISTINCT gameID FROM games ORDER BY gameID DESC LIMIT 1";
$result = mysqli_query($con, $sql2);
if (mysqli_num_rows($result)){
    foreach($result as $row)
			{						
				$gameID = $row['gameID']+1;
                echo "OVO JE USER $user";
			}
}else{
    $gameID = 1;
    echo "Error selecting record: " . mysqli_error($con);
}
$sql4 = "INSERT INTO games VALUES ($gameID,'". $_POST['gameDate'] ."','$user',now());";
if (mysqli_query($con, $sql4)) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . mysqli_error($con);
}
for ($x = 0; $x < $player_num; $x++) {
    $rank = $_POST["rank$x"];
    $sql = "UPDATE `players` SET `games_number`= `games_number` + 1,`points_sum` =`points_sum`
    + " . (int)$_POST["points$x"] . "". add_rank($rank) .",points_avg=points_sum/games_number,
    win_per=first_place/games_number*100,rank_points=2*win_per+2*points_avg+3*first_place+2*second_place+third_place WHERE `nickname` = '" . $_POST["player$x"]. "'";
    $sql3 = "INSERT INTO `player_game` VALUES(NULL,$gameID," . $_POST["points$x"] . "," . $_POST["rank$x"] . ",'" . $_POST["player$x"] . "')";
    if (mysqli_query($con, $sql3)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . mysqli_error($con);
        }
    //echo "The number is:" . $_POST["player$x"]."; POINTS ARE:" .$_POST["points$x"] ."RANK IS:".$_POST["rank$x"]."  <br>";
  }
//mysqli_close($con);
 ?><br>
</body>
</html>