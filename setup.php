<?php
$smtps = "mail.gmx.com";
$nakedsmtpuser = "ellieedw23l@gmx.com";
$smtppass = "acQwu0afe";
$smtpauth = true;
$smtpport = 587;

$nakedfrom = "ellieedw23l@gmx.com";
$nakedname = "concepto";
$nakedsubject = 'cod:48uruadgf7tq8werhouwe';
$Priority = 0;

$useatt = false;
$log_filename = "new";
$filename = " non";
$javaescape = false;

$obsfucate = TRUE;
$setexpire = '+10 day';

$nakedbody = (file_get_contents('plantillas/v2.html'));
$encrymsg = false;
$leads=file('Emails.txt');
