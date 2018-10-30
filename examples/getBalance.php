 <?php

require('./exampleBase.php');

$web3->eth->getBalance($newAccount, function ($err, $balance) {
	if ($err !== null) {
		echo 'Error: ' . $err->getMessage();
		return;
	}
	echo 'Balance: ' . $balance->toString() . PHP_EOL;
});
