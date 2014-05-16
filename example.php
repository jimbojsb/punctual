<?php
$crontab->every("30 minutes")->do("/bin/whoami");
$crontab->at("7pm")->on("tuesdays")->do("/bin/false");
$crontab->each('month')->on('first day')->do('/bin/false');
$crontab->at('7pm')->do('/bin/false')->withEnvironment(['APPLICATION_ENV' => 'production', 'DOMAIN' => 'www.offers.com']);
$crontab->withEnvironment('APPLICATION_ENV', 'production');

$crontab->on('reboot')->do('/bin/task');

$crontab->at("17:00")->on('wednesdays')->do(function () {
    $command = "echo test";
    return $command;
});

// escape command line arguments 
$userInput = "escaped user 'input'";
$crontab->every('day')->do("echo", $userInput);

// get list of jobs
$crontab->jobs();
