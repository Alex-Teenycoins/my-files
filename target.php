<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="http://localhost:8888/tests/style.css">
        <title>Test Web-app</title>
    </head>
    <body>
    <p>
    You are now saving <?php echo htmlspecialchars($_POST['inputAmount']);?> $,
    <?php
    if ($_POST['inputFreq'] == 1) {
    	echo "every day,";
    }
    else {
    	echo htmlspecialchars('every '.$_POST['inputFreq'].' days,');
    }
    ?>
     for <?php echo htmlspecialchars($_POST['inputDur']);?> months.
    </p>
    </body>
</html>