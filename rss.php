
<?php
    $rss= '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820944") or die (mysqli_error($connect));
    $sql = "SELECT * FROM btsprofile;";
    $query = mysqli_query($connect, $sql) or die (mysqli_error($connect));

    while($records= mysqli_fetch_assoc($query)){
        extract($records);
        
        $rss .= '<profile>';
        $rss .= '<realname>' . $realname . '</realname>';
        $rss .= '<stagename>' . $stagename . '</stagename>';
        $rss .= '<position>' . $position . '</position>';
        $rss .= '<btype>' . $btype . '</btype>';
        $rss .= '</profile>';
    }
    $rss .= '</channel>';
    $rss .= '</rss>';

    echo $rss;
?>
