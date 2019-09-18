<?php
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Asia/Tehran');
include('configuration/information.php');
include('configuration/messages.php');
include('functions/sql.php');
include('functions/token.php');
include('functions/user.php');
include('functions/email.php');
include('functions/return.php');
include('functions/validation.php');
include('functions/page.php');
include('functions/captcha.php');
include('functions/off.php');
include('functions/comment.php');
include('functions/category.php');
include('functions/city.php');
include('functions/advertisement.php');
include('functions/pagination.php');
include('PHPmailer/PHPMailerAutoload.php');
include('functions/jdf.php');