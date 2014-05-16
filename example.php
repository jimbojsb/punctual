<?php
$crontab->every("30 minutes")->do("/bin/whoami");
$crontab->at("7pm")->on("tuesdays")->do("/bin/false");
$crontab->each('month')->on('first day')->do('/bin/false');
$crontab->at('7pm')->do('/bin/false')->withEnvironment(['APPLICATION_ENV' => 'production', 'DOMAIN' => 'www.offers.com']);
$crontab->withEnvironment('APPLICATION_ENV', 'production');