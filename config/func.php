<?
	//사용자 정의 함수 include
	include_once(_CONFIG."userFunc.php");

	//사용하려는 클래스나 인터페이스가 없는 경우 __autoload 함수가 자동으로 호출된다
	function __autoload($className){
		$className = strtolower($className); //클래스 명 소문자로
		//객체 생성 규칙 Model_ModelName, Controller_ControllerName과 같이 _로 구분
		$classDivide = explode("_", $className);
		switch ($classDivide[0]) {
			// 객체 명에 따라서 디렉토리 상위 경로 설정
			case 'app': $dir = _APP;
				break;
			case 'model': $dir = _MODEL;
				break;
			default: $dir = _CONTROLLER;
				break;
		}
		//해당 객체명에 대응되는 파일을 불러옵니다.
		require_once($dir.$classDivide[0].".php");
	}
?>
