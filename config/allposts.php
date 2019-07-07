<?php 
	include_once "conn.php";
	$sql = "SELECT * FROM poststest5 ORDER BY uploadTime DESC ";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0){
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "
	        <div class='card' style='width: 35rem;'>
	            <div class='card-header'>".$row['title']."</div>

	            <img src='uploads/".$row['filename']."' class='card-img-top'>
	            <div class='card-body'>
	                <p class='card-text'>".$row['descrptn']."</p>
	                <a href= class='card-link'>".$row['link']."</a>
	            </div>
	            <div class='card-footer text-muted'>
	                ".get_time_ago($row['uploadTime'])."
	            </div>
	        </div>";
	    }
	}else{
	    echo '<h2>No Posts Uploaded</h2>';
	}

	function get_time_ago( $time )
	{
	    $time_difference = time() - $time;

	    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
	    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
	                30 * 24 * 60 * 60       =>  'month',
	                24 * 60 * 60            =>  'day',
	                60 * 60                 =>  'hour',
	                60                      =>  'minute',
	                1                       =>  'second'
	    );

	    foreach( $condition as $secs => $str )
	    {
	        $d = $time_difference / $secs;

	        if( $d >= 1 )
	        {
	            $t = round( $d );
	            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
	        }
	    }
	}
 ?>