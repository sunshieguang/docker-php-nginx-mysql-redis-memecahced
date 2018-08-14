<?php
phpinfo();exit;
echo 'test memecached';
echo "<br/>";
$handle = new \Memcached();
$result = $handle->addServer("memcached",'11211');
$result = $handle->set('test','i am test');
echo $handle->get('test');
echo '<br/>';
echo 'test mysql';
echo '<br/>';
$conn = new mysqli("mysql","root","123456");
if (!$conn) {
  echo "connect mysql error";
} else {
 echo "connect mysql success";
}
