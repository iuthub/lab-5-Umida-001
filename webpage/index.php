<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
    <?php if(isset($_REQUEST["name"]) and isset($_REQUEST["section"]) and isset($_REQUEST["creditCard"]))
    {

    ?>
		<h1>Thanks, sucker!</h1>
        <?php
        $content = $_REQUEST["name"].';'.$_REQUEST["section"].';'.$_REQUEST["creditCard"].';'.PHP_EOL;
        file_put_contents("suckers.txt", $content, FILE_APPEND);
        ?>
		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $_REQUEST["name"]?></dd>

			<dt>Section</dt>
			<dd><?= $_REQUEST["section"]?></dd>

			<dt>Credit Card</dt>
			<dd> <?= $_REQUEST["creditCard"] ?></dd>
		</dl>
    <p>Here are all the suckers who have submitted here: <pre><?= file_get_contents('suckers.txt');?></pre></p>
    <?php }
    else{  ?>
        <h2>SORRY!</h2>
        <p>You didn't fill out form completely. <a href="buyagrade.html">Try Again?</a></p>
    <?php } ?>
	</body>
</html>  