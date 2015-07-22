<?
/* Назначение: Получение рабочих прокси серверов по списку URl сайтов с прокси-листами. Проверка прокси многопоточная.
 * Автор:         phpdreamer
 * Дата:           14.05.2010
*/
set_time_limit(0);

$filename = 'sitesproxy.txt'; //файл с списком URL сайтов с прокси листами

$n = 15; //количество потоков при проверке проксей
$regular = '#[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}:[0-9]{2,5}#'; 
$ban = array();
$proxy = array();
foreach(file($filename) as $url)
{
	$url = trim($url);
	$page = curlPage($url);
	preg_match_all($regular,$page,$p);
	//если на сайте нет проксей, заносим его в бан - там наверно есть защита от парсинга на javascript'е
	if(!count($p[0]))
		$ban[] = $url ;
	else
		$proxy = $proxy +$p[0];
}
$proxies = array_values( array_unique($proxy) );
$countProxy = count ($proxies);
if($countProxy<=$n)
{
	chk($proxies);
}
else
{
	$c = floor($countProxy/$n);
	for($i=1; $i<=$c; $i++)
		chk(array_slice($proxies,$n*$i,$n));
	chk(array_slice($proxies,$n*($c+1),$countProxy - $n*$c));
}
if(count($ban)==1)
	echo '<hr>Сайт не принес пользы: ' . $ban[0];
if(count($ban)>1)
{
	echo '<hr>Сайты не приносят пользы:<br>';
	foreach($ban as $sitename)
		echo $sitename.'<br>';
}
function chk($proxies)
{
	$mc = curl_multi_init ();
	for ($thread_no = 0; $thread_no<count ($proxies); $thread_no++)
	{
		$c [$thread_no] = curl_init ();
		curl_setopt ($c [$thread_no], CURLOPT_URL, "http://google.com");
		curl_setopt ($c [$thread_no], CURLOPT_HEADER, 0);
		curl_setopt ($c [$thread_no], CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($c [$thread_no], CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt ($c [$thread_no], CURLOPT_TIMEOUT, 10);
		curl_setopt ($c [$thread_no], CURLOPT_PROXY, trim ($proxies [$thread_no]));
		curl_setopt ($c [$thread_no], CURLOPT_PROXYTYPE, 0);
		curl_multi_add_handle ($mc, $c [$thread_no]);
	}
	do 
	{
		while (($execrun = curl_multi_exec ($mc, $running)) == CURLM_CALL_MULTI_PERFORM)
		if ($execrun != CURLM_OK) break;
		while ($done = curl_multi_info_read ($mc))
		{
			$info = curl_getinfo ($done ['handle']);
			if ($info ['http_code'] == 301) 
				echo trim ($proxies [array_search ($done['handle'], $c)])."<br>\r\n";
			curl_multi_remove_handle ($mc, $done ['handle']);
		}
	} while ($running);
	curl_multi_close ($mc);
}

function curlPage($url) //curl
{
	if( !function_exists('curl_init'))
		die('На сервере не установлено или отключено расширение cURL. Скрипт завершил работу.');
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Accept-Language: ru,en-us;q=0.7,en;q=0.3',
	'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8,application/json',
	'User-Agent: Mozilla/5.0 (X11; U; Gentoo-Linux; ru; rv:1.9.2.3)socks-php-bot Gecko/20100404  Firefox/3.7.0 GTB7.0',
	'Accept-Encoding: deflate',
	'Accept-Charset: UTF-8,*'));
	curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,300);
	return curl_exec($curl);
}