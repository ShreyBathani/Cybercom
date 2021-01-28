<?php

//working with GET
echo "<h1>working with GET</h1><br>";

$msg = '';
if(isset($_GET['submit'])){
	$date = $_GET['date'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    if (!empty($date) && !empty($month) && !empty($year)) {
        $msg = 'Date:'.$date.'-'.$month.'-'.$year;
	} else {
		$msg = 'All the field required';
	}
}

?>

<?php echo $msg; ?>
<form action="" method="GET">
	<label>Date:</label></br>
	<input type="text" name="date"></br>
	<label>Month:</label></br>
	<input type="text" name="month"></br>
	<label>Year:</label></br>
	<input type="text" name="year"></br></br>
	<input type="submit" name="submit">
</form>