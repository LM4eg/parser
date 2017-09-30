<?php
require_once 'simple_html_dom.php';
$file = 'names.txt';
for($i=1;$i<=1514;$i++) {
$page = file_get_html('http://site.com/'.$i.'/');
foreach($page->find('div.publ_zag a') as $e)
$name = $e->plaintext . '<br>';
file_put_contents($file, $name, FILE_APPEND);
sleep(2);}
?>
