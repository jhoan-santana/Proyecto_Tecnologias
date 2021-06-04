<?php
    session_start();
    $sql = "SELECT rating_number, FORMAT((total_points / rating_number),1) as average_rating FROM post_rating WHERE post_id = 1 AND status = 1";
    $result = $con->query($sql);
    $ratingRow = $result->fetch_assoc();

include_once 'ConnectionDB.php';
if(!empty($_POST['ratingPoints'])){
    $postID = $_POST['postID'];
    $ratingNum = 1;
    $ratingPoints = $_POST['ratingPoints'];
    
    //Check the rating row with same post ID
    $prevRatingQuery = "SELECT * FROM post_rating WHERE post_id = ".$postID;
    $prevRatingResult = $con->query($prevRatingQuery);
    if($prevRatingResult->num_rows > 0):
        $prevRatingRow = $prevRatingResult->fetch_assoc();
        $ratingNum = $prevRatingRow['rating_number'] + $ratingNum;
        $ratingPoints = $prevRatingRow['total_points'] + $ratingPoints;
        //Update rating data into the database
        $sql = "UPDATE post_rating SET rating_number = '".$ratingNum."', total_points = '".$ratingPoints."', modified = '".date("Y-m-d H:i:s")."' WHERE post_id = ".$postID;
        $update = $con->query($sql);
    else:
        //Insert rating data into the database
        $sql = "INSERT INTO post_rating (post_id,rating_number,total_points,created,modified) VALUES(".$postID.",'".$ratingNum."','".$ratingPoints."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."')";
        $insert = $con->query($sql);
    endif;
    
    //Fetch rating deatails from database
    $query2 = "SELECT rating_number, FORMAT((total_points / rating_number),1) as average_rating FROM post_rating WHERE post_id = ".$postID." AND status = 1";
    $result = $con->query($sql2);
    $ratingRow = $result->fetch_assoc();
    
    if($ratingRow){
        $ratingRow['status'] = 'ok';
    }else{
        $ratingRow['status'] = 'err';
    }
    
    //Return json formatted rating data
    echo json_encode($ratingRow);
}
?>