<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "players");

if (isset($_POST['save'])) {
   
    $name = $_POST['name'];
    $joueur = $_POST['joueur'];
    $status = $_POST['status'];
    $position = $_POST['position'];
    $nationnaliteSelect = $_POST['nationnaliteSelect'];
    $nationaliteFlag = $_POST['nationaliteFlag'];
    $clubSelect = $_POST['clubSelect'];
    $clubLogo = $_POST['clubLogo'];
    $rating = $_POST['rating'];
    
  
    $diving = $_POST['diving'] ?? null;
    $handling = $_POST['handling'] ?? null;
    $kicking = $_POST['kicking'] ?? null;
    $reflexes = $_POST['reflexes'] ?? null;
    $speed = $_POST['speed'] ?? null;
    $positioning = $_POST['positioning'] ?? null;

    
    $pace = $_POST['pace'] ?? null;
    $shooting = $_POST['shooting'] ?? null;
    $passing = $_POST['passing'] ?? null;
    $dribbling = $_POST['dribbling'] ?? null;
    $defending = $_POST['defending'] ?? null;
    $physical = $_POST['physical'] ?? null;

    $queryClub = "INSERT INTO club (club, logo) VALUES ('$clubSelect', '$clubLogo')";
    mysqli_query($con, $queryClub);
    $club_id = mysqli_insert_id($con);  

  
    $queryNation = "INSERT INTO nationnality (nationnality, flag) VALUES ('$nationnaliteSelect', '$nationaliteFlag')";
    mysqli_query($con, $queryNation);
    $nationnality_id = mysqli_insert_id($con);  

 
    $queryPlayer = "INSERT INTO player (name, photo, postion, rating, status, nationnality_id, club_id) 
                    VALUES ('$name', '$joueur', '$position', '$rating', '$status', '$nationnality_id', '$club_id')";
    $playerInsert = mysqli_query($con, $queryPlayer);

    if ($playerInsert) {
        
        $player_id = mysqli_insert_id($con);

        if ($position == 'GK') {
           
            $queryGK = "INSERT INTO GK_Player (diving, handling, kicking, reflexes, speed, positioning, player_id) 
                        VALUES ('$diving', '$handling', '$kicking', '$reflexes', '$speed', '$positioning', '$player_id')";
            mysqli_query($con, $queryGK);
        } else {
           
            $queryNormal = "INSERT INTO Normal_player (pace, shooting, passing, dribbling, defending, physical, player_id) 
                            VALUES ('$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical', '$player_id')";
            mysqli_query($con, $queryNormal);
        }
    }

   
    header("location:index.php");
    exit;
}
?>
