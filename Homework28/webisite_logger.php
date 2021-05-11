<?php
// Define path to the log file
$logFile = "logs/my-website.log";

// Create logs folder
$date = date('l jS \of F Y h:i:s A');
$page = $_SERVER['REQUEST_URI'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$logLine = $date . "|" . $page . "|" . $browser . "|" . $ip . "\n";
$handle = fopen($logFile, "a+");
$handle = fputs($handle, $logLine);
// Create $page variable and put there value of $_SERVER REQUEST_URI as page URL which you open in browser

// Create $browser and and put there value of $_SERVER HTTP_USER_AGENT which show the browser user used

// Create $ip and put there value of $_SERVER REMOTE_ADDR as user IP address

// Create a variable $logLine and put there all variables created above in format $dt|$page|$browser|$ip when pipe "|" used as separator 
// at the end you should recieve text line like: 
// 2020-05-20 08:38:34 | /Homework27/logger/log.php | Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36 | 127.0.0.1


// using file streams (fopen function) with paramter "a+"  write using fpusts function variable $logLine into $logFile
// dont forget to add "\r\n" characters to indicate new line in file to $logLine if file already exist( and do not add if this is new file to not get first empty line)
// dont forget to close file stream using fclose 


//  try to open this webpage (log.php) in browser and check if  in Visual Studio Code file logs/my-website.log is created and contain correct data inside

 

?>