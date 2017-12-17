<?php
//Get the data from the form
$investment = $_POST['investment'];
$interest_rate = $_POST['interest_rate'];
$years = $_POST['years'];

//Validate interest entry
if ( empty($investment) ){
    $error_message = 'Investment is a required field.';
} else if ( !is_numeric($investment) ) {
    $error_message = 'Investment must be a valid number';
} else if ( $investment <= 0){
    $error_message = 'Investment must be greater thn zero';
} else if ( empty($interest_rate) ) {
    $error_message = 'Interest rate is a required field';
} else if ( !is_numeric($interest_rate) ) {
    $error_message = 'Interest rate must be a valid number';
} else if ( $interest_rate <= 0) {
    $error_message = 'Interest rate must be greater than zero';
} else{
    $error_message = '';
}

//If an error message exists, go to the index page
if ($error_message != '') {
    include('index.php');
    exit(); }

//Calculate the future value
$future_value = $investment;
for ($i = 1; $i <= $years; $i++) {
    $future_value =
        ($future_value + ($future_value * $interest_rate * .01));
}

//Apply currency and percent formatting
$investment_f = '$'.number_format($investment, 2);
$yearly_rate_f = $interest_rate.'%';
$future_value_f = '$'.number_format($future_value, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Future Value Calculator</title>
<!--    <link rel="stylesheet" type="text/css" href="main.css"/> -->
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br />
        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br />
        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br />
        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br />
    </div>
</body>
</html>

