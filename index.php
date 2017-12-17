<!DOCTYPE html>
<html lang="en">
<head>
    <title>Future Value Calculator</title>
</head>

<body>
<div id="content">
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
<?php } ?>
<form action="display_results.php" method="post">

    <div id="data">
        <label>Investment Amount:</label>
        <input type="text" name="investment"
               value="<?php if(isset($investment )) echo $investment; ?>"/><br />

        <label>Yearly Interest Rate:</label>
        <input type="text" name="interest_rate"
               value="<?php if(isset($interest_rate ))echo $interest_rate; ?>"/><br />

        <label>Number of Years:</label>
        <input type="text" name="years"
               value="<?php if(isset($years )) echo $years; ?>"/><br />
    </div>

    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Calculate"/><br />
    </div>

    </form>
    </div>
</body>
</html>