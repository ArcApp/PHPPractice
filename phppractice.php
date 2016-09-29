<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>PHP Practice!!!!!</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<style>
		body {
			background-color: darkgrey;
		}
		table {
			width: 300px;
		}
		h1 {
			text-align: center;
		}
		td {
			height: 35px;
			width: 35px;
			border: 1px;
			padding: 1px;
		}
		td.blackSq {
			background-color: black;
		}
		td.redSq {
			background-color: red;
		}
		table.TA {
			border: 5px solid white;
			width: 80%;
			margin: 15px auto;
		}
		caption {
			background-color: white;
		}
		th {
			background-color: darkred;
			color: white;
			width: 70%;
		}
		td.TA {
			border: 1px solid green;
			color: green;
			background-color: black;
			text-align: center;
			font-weight: bold;
		}

	</style>
</head>

<body>

<h1>PHP Assignment Page!</h1><br/><br/>

<h2>Part1: Charlie ate my Lunch!</h2>
<p>
<?php
	function isBitten() {
		$x = rand(1,100);
		return $x <= 50;
	}

	if (isBitten()) {
		echo "Charlie ate my lunch!";
	} else {
		echo "Charlie did not eat my lunch!";
	}
?>
</p><br/>

<h2>Part2: Checker Board</h2>
	<?php
	function checkerboard() {
		echo '<table cellspacing="1px">';
		for ($i = 0; $i < 8; $i++) {
			echo '<tr>';
			for ($j = 0; $j < 8; $j++) {
				if (($i % 2 == 0 && $j % 2 == 0)||($i % 2 == 1 && $j % 2 == 1)) {
					echo '<td class="redSq"></td>';
				} else {
					echo '<td class="blackSq"></td>';
				}
			}
			echo '</tr>';
		}
		echo '</table>';
	}

	checkerboard();
	?>
	<br/>

<h2>Part 3: Arrays and Functions</h2>
	<?php
	$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	function forMonthOrder($arr) {
		for ($i = 0; $i < sizeof($arr); $i++) {
			echo "$arr[$i] ";
		}
	}
	function forMonthAlpha($arr) {
		sort($arr);
		for ($i = 0; $i < sizeof($arr); $i++) {
			echo "$arr[$i] ";
		}
	}
	function foreachMonthOrder($arr) {
		foreach ($arr as $value) {
			echo "$value ";
		}
	}
	function foreachMonthAlpha($arr) {
		sort($arr);
		foreach ($arr as $value) {
			echo "$value ";
		}
	}
	?>

	<ol>
		<li>Print months in order using FOR loop:
			<ul>
				<li><?php forMonthOrder($month); ?></li>
			</ul>
		</li>
		<li>Print months in alphabetical order using FOR loop:
			<ul>
				<li><?php forMonthAlpha($month); ?></li>
			</ul>
		</li>
		<li>Print months in order using FOREACH statement:
			<ul>
				<li><?php foreachMonthOrder($month); ?></li>
			</ul>
		</li>
		<li>Print months in alphabetical order using FOREACH statement:
			<ul>
				<li><?php foreachMonthAlpha($month); ?></li>
			</ul>
		</li>
	</ol>

<h2>Part 4: Trip Advisor Table</h2>
	<?php
	$restaurants = array("Chama Gaucha" => "$40.50", "Aviva by Kameel" => "$15.00", "Bone's Restaurant" => "$65.00", "Umi Sushi Buckhead" => "$40.50", "Fandangles" => "$30.00", "Capital Grille" => "$60.50", "Canoe" => "$35.50", "One Flew South" => "$21.00", "Fox Bros. BBQ" => "$15.00", "South City Kitchen Midtown" => "$29.00");
	function tableArray($arr) {
		echo '<table class="TA">';
		echo '<caption>Original Table</caption';
		foreach ($arr as $key => $value) {
			echo '<tr>';
			echo "<th>{$key}</th>";
			echo "<td class=\"TA\">{$value}</th>";
			echo '</tr>';
		}
		echo '</table>';
	}
	function tableArrayPriceOrder($arr) {
		asort($arr);
		echo '<table class="TA">';
		echo '<caption>Table Ordered by Price</caption>';
		foreach ($arr as $key => $value) {
			echo '<tr>';
			echo "<th>{$key}</th>";
			echo "<td class=\"TA\">{$value}</th>";
			echo '</tr>';
		}
		echo '</table>';
	}
	function tableArrayNameOrder($arr) {
		ksort($arr);
		echo '<table class="TA">';
		echo '<caption>Table ordered by Restaurant Name</caption>';
		foreach ($arr as $key => $value) {
			echo '<tr>';
			echo "<th>{$key}</th>";
			echo "<td class=\"TA\">{$value}</th>";
			echo '</tr>';
		}
		echo '</table>';
	}
	tableArray($restaurants);
	tableArrayPriceOrder($restaurants);
	tableArrayNameOrder($restaurants);
	?>

<br/><br/>
<h3><a href="phppractice.txt">Click here to see a .txt version of this page.</a></h3>

</body>
</html>