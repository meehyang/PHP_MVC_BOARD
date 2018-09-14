<?
	//상수정의 define('변수명', '값');
	//db관련
	define("_HOST", "localhost");
	define("_DBNAME", "php_mvc");
	define("_DBID", "root");
	define("_DBPWD", "acs");
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
	$url = str_replace("index.php","","http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"]);
	define("_URL", $url);

	define('_IMG',"http://".$_SERVER["HTTP_HOST"].'/include/img/');
  define('_CSS',"http://".$_SERVER["HTTP_HOST"].'/include/css/');
  define('_JS',"http://".$_SERVER["HTTP_HOST"].'/include/js/');

	//상수 설정이 끝나면 func.php 파일 include후 객체 정의 없이 Application 객체 생성
	require_once(_CONFIG."func.php");
	//func.php 속 함수에 따라 new App(); 이란 객체 정의 없는 객체 생성은 app.php 파일을 실행하게 된다.
	new App();
?>
