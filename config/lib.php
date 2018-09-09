<?
	//상수정의 define('변수명', '값');
	//db관련
	define("_HOST", "localhost");
	define("_PORT", "3306");
	//세션으로 들어온 아이디 저장
	define("_ID", "");

	//경로
	define("_ROOT", dirname(__FILE__)."/");

	define("_APP", _ROOT."app/");
	define("_CONTROLLER", _APP."controller/");
	define("_MODEL", _APP."model/");
	define("_VIEW", _APP."view/");

	define("_CONFIG", _ROOT."config/");
	//http://localhost:8000/index.php 주소에서 index.php 를 뺀 실제 app 실행 경로 주소
	$url = str_replace("index.php","",$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]);
	define("_URL", $url);
	// static 파일 경로
	define("_IMG", _URL."include/img/");
	define("_CSS", _URL."include/css/");
	define("_JS", _URL."include/js/");

	//상수 설정이 끝나면 func.php 파일 include후 객체 정의 없이 Application 객체 생성
	require_once("_CONFIG"."func.php");
	new App();
?>
