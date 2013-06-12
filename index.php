<!DOCTYPE html>
<html>
<head>
	<title>Cards Against Humanity Card Searcher</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/typeahead.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/typeahead.css" />
	<style type="text/css">
	#searchContainer {
		margin-top: 300px;
	}
	.center { float: none; margin-left: auto; margin-right: auto; text-align: center;}
	</style>
	<script type="text/javascript">
	$(function() {
		$("#search").typeahead({
			valueKey: 'text',
			name: 'whites',
			prefetch: 'http://seiyria.com/cah/white.json'
		},{
			valueKey: 'text',
			name: 'blacks',
			prefetch: 'http://seiyria.com/cah/black.json'
		});
	});
	</script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container" style="width: auto; padding: 0 20px;">
				<a class="brand" href="#">Cards Against Humanity Card Search</a>
			</div>
		</div>
	</div>

	<div class="container" id="searchContainer">
		<h1 class="center" style="font-size: 520%;">CAH Search</h1>
		<br><br><br>
		<div class="span12">
			<div class="row">
				<input class="span12" type="text" id="search" placeholder="Do your worst!" />
			</div>
		</div>
	</div>

	<div class="navbar navbar-fixed-bottom">
		<div class="navbar-inner">
			<div class="container" style="width: auto; padding: 0 20px;">
				<p>*I don't own any of this content. My data is taken from <a href="https://github.com/ajanata/PretendYoureXyzzy/blob/master/cah_cards.sql">this SQL dump</a>.</p>
			</div>
		</div>
	</div>
</body>
</html>