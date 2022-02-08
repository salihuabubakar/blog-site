<?php 

    $token = $_GET['token'];
    include_once("../Includes/connection.php");
    $stmt = "SELECT * FROM myblog_table WHERE md5(mblog_id) = '$token'";
    $sql_stmt = mysqli_query($connection, $stmt);
    if ($sql_stmt) {
        $g = mysqli_fetch_array($sql_stmt);
        $myblog_id = $g['mblog_id'];
        $myblog_title = $g['myblog_title'];
        $myblog_paragraph = $g['myblog_paragraph'];

        echo ' 
                <div class="news-div">
                    <p style = "color: white";>'.$myblog_paragraph.'</p>
                </div>
                
            ';        
    }

?>

