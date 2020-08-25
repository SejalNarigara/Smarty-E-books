<?php
$count_unique = 0;
$unique_hours = 24;
$min_digits = 0;

error_reporting(E_ALL ^ E_NOTICE);

$page = 'C:\wamp\www\smarty ebook\count\a';
$logfile    =  $page . '.html';


if (file_exists($logfile)) 
{

	
	$count = intval(trim(file_get_contents($logfile))) or $count = 0;
	$cname = 'gcount_unique_'.$page;

	if ($count_unique==0 || !isset($_COOKIE[$cname]))
    {
		
		$count = $count + 1;
		$fp = @fopen($logfile,'w+') or die('ERROR: Can\'t write to the log file ('.$logfile.'), please make sure this file exists and is CHMOD to 666 (rw-rw-rw-)!');
		flock($fp, LOCK_EX);
		fputs($fp, $count);
		flock($fp, LOCK_UN);
		fclose($fp);

		
	//	header('P3P: CP="NOI NID"');
		//setcookie($cname, 1, time()+60*60*$unique_hours);
	}

    
    if ($min_digits > 0)
    {
        $count = sprintf('%0'.$min_digits.'s',$count);
    }

  
    $len = strlen($count);
    for ($i=0;$i<$len;$i++)
    {
        echo "<img src='count/fdb/".substr($count,$i,1).".gif' />";
    }
    exit();

}
else
{
    die('ERROR: Invalid log file!');
}


function input($in)
{
    $out = htmlentities(stripslashes($in));
    $out = str_replace(array('/','\\'), '', $out);
    return $out;
}
?>
