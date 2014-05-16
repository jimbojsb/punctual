<?php
$crontab->every("30 minutes")->do("/bin/whoami");

$crontab->at("7pm")->every("tuesday")->do("/bin/false");

$crontab->every('1st')->do('/bin/false');

$crontab->every('monday')->do('/bin/false')->as('root');

$crontab->at('7pm')->do('/bin/false')->withEnvironment(['APPLICATION_ENV' => 'production', 'DOMAIN' => 'www.offers.com']);

$crontab->withEnvironment('APPLICATION_ENV', 'production');

$crontab->every('reboot')->do('/bin/task');

$crontab->withEnvironment('APPLICATION_ENV', 'production');

$crontab->every('minute')->do('/bin/whoami')->as('root');

$crontab->cron('0 * * * *')->do('/bin/whoami');

$crontab->every('monday')->do(function() {
    $this->do('/bin/false');
    $this->do('/bin/false');
});