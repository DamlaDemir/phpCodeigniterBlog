<?php
/*
|--------------------------------------------------------------------------
| Mail Configuration
|--------------------------------------------------------------------------
|
| Mail Configuration for send emails using Mail services like Mailgun and Mailchimp
|
*/
$config['email']['protocol']     = 'smtp';
$config['email']['smtp_host']    = 'smtp.mailgun.org';
$config['email']['smtp_port']    = '587';
$config['email']['smtp_timeout'] = '30';
$config['email']['smtp_user']    = 'damlanin.blogu@gmail.com';
$config['email']['smtp_pass']    = '01122014Db';
$config['email']['smtp_crypto']  = '';
$config['email']['charset']      = 'utf-8';
$config['email']['mailtype']     = 'html';
$config['email']['wordwrap']     = TRUE;
$config['email']['newline']      = "\r\n";
?>