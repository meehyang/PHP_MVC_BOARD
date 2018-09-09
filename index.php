<?
	// MIA_PHP 애플리케이션에서 가장 먼저 실행되는 파일
	// 최초 실행 시 환경설정이 이뤄지는 config/lib.php 파일로 redirect시키기
	header("Location: ".dirname(__FILE__)."/config/lib.php");
	die();
?>
