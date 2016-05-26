
<html lang="en">
<head>
	<title>welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<?php echo $map['js']; ?><!DOCTYPE html>
	<style>
	.googlemap{
		height: 300px;
		width:700px;
		align-items: left;
		padding:10px;
		padding-right:10px;
		padding-left:10px;
		display:inline-block;
		vertical-align: top;
	}
	.activitybar{
		display:inline-block;
		width:400px;
	}

	.feature{
		margin-bottom: 50px;
	}



@import url(http://fonts.googleapis.com/css?family=Open+Sans);


.activity-feed {
  padding: 15px;
}
.activity-feed .feed-item {
  position: relative;
  padding-bottom: 20px;
  padding-left: 30px;
  border-left: 2px solid #e4e8eb;
}
.activity-feed .feed-item:last-child {
  border-color: transparent;
}
.activity-feed .feed-item:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: -6px;
  width: 10px;
  height: 10px;
  border-radius: 6px;
  background: #fff;
  border: 1px solid #f37167;
}
.activity-feed .feed-item .date {
  position: relative;
  top: -5px;
  color: #8c96a3;
  text-transform: uppercase;
  font-size: 13px;
}
.activity-feed .feed-item .text {
  position: relative;
  top: -3px;
}


	</style>

</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://www.codingdojo.com">Welcome to Boxes</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Front Page</a></li>
				<li><a href="<?= '/Users/index'?>">Home</a></li>
			</ul>
		</div>
	</nav>



<!-- ********************* GOOGLE MAP ********************* -->

<center><img class="feature" src="/assets/examplefeature.png" alt="example" align></center>
	<div class="container">
		<div class="googlemap">
			<?php echo $map['html']; ?>
		</div>

	<div class="activitybar">
    
<h2>Recent Activity</h2>
<div class="activity-feed">
  <div class="feed-item">
    <div class="date">Sep 25</div>
    <div class="text">User1 purchased <a href="single-need.php">“Jasper's Manga Box”</a></div>
  </div>
    <div class="feed-item">
    <div class="date">Sep 25</div>
    <div class="text">User1 purchased <a href="single-need.php">“Jasper's Manga Box”</a></div>
  </div>
    <div class="feed-item">
    <div class="date">Sep 25</div>
    <div class="text">User1 purchased <a href="single-need.php">“Jasper's Manga Box”</a></div>
  </div>
    <div class="feed-item">
    <div class="date">Sep 25</div>
    <div class="text">User1 purchased <a href="single-need.php">“Jasper's Manga Box”</a></div>
  </div>
    <div class="feed-item">
    <div class="date">Sep 25</div>
    <div class="text">User1 purchased <a href="single-need.php">“Jasper's Manga Box”</a></div>
  </div>
  
</div>
</div>
</div>


















		<div class="row">
			<div class="col-sm-4">
				<h3>JAPAN</h3>

			</div>

		</div>
	</div>

</body>
</html>