<?php

$servername = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "memsite";

try {
  $db = new PDO("mysql:host=$servername;dbname=$dbname", $dbuser, $dbpassword);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //PDO에서 prepared statement를 사용하여 쿼리 실행 prepared statement 미리 컴파일하여 재사용하므로 성능과 보안 면에서 유리
  $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); // PDO는 결과 집합을 서버로부터 일괄적으로 가져오며 쿼리 버퍼링을 활성화(대부분 이렇게 사용)
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO에서 발생하는 모든 에러는 예외(Exception)로 처리

} catch( PDOException $e) {
  echo $e->getMessage();
}

?>