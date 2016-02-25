<?php

include('Net/SSH2.php');

$host = "104.131.25.142";

$ssh = new Net_SSH2($host);
if (!$ssh->login('root', 'Bjm70e12!')) {
    exit('Login Failed');
}

echo $ssh->exec('pwd');
echo $ssh->exec('ls -la');

