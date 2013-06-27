<?php 
	$files = glob("clips/*.m4a");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>RonSwanson Soundboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div id="container">
		<div class="header">
			<h1> Ron Swanson </h1> 
		</div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(function() {
                $("audio").each(function(i, audioElement) {
                    var audio = $(this);
                    var that = this; //closure to keep reference to current audio tag
                    $(".buttons").append($('<button class="btn btn-large btn-primary type="button">'+audio.attr("title")+'</button>').click(function() {
                    	that.currentTime = 0;
                        that.play();
                    }));
                });
            });
        </script>

        <?php foreach($files as $file) { ?>
            <?php $title = str_replace(".m4a", "", str_replace("clips/", "", $file)); ?>
            <audio src="<?php echo $file; ?>" autobuffer="true" title="<?php echo $title ?>"></audio>
        <?php } ?>

        <div class="buttons">

        </div>

	</div>
</body>
</html>