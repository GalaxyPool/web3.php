<?php
use Web3;
use Providers\HttpProvider;
use RequestManagers\HttpRequestManager;

$web3 = new Web3(new HttpProvider(new HttpRequestManager('http://localhost:8545')));

$web3->clientVersion(function ($err, $version) {
    if ($err !== null) {
        // do something
        return;
    }
    if (isset($client)) {
        echo 'Client version: ' . $version;
    }
});
?>