<? require_once(_CONFIG."func.php"); ?>
<?
	Class App{
		//변수
		var $param;

		//생성자 __construct함수는 객체 생성 시 전달되는 매개변수 설정 가능
		function __construct(){
			$this->getParam();
			//new Main($param) 으로 $param을 매개변수로 넘겨주며 객체 생성
			//여기서는 new Board();
			new $this->param->view($this->param);
		}

		function getParam(){
			//get 방식으로 넘어온 파라미터가 있으면 체크하는 메써드
			//현재 app.php 파일에 도달했을 때의 _URL 상태는 http://localhost:8000/ 임
			$nowURL = str_replace("http://localhost:8000/", "", _URL);
			$urlParam = explode("/", $nowURL);

			//url 형태 localhost:8000/board/view/1
			// localhost:8000/ 로 접속한 경우
			$param["view"] = (isset($urlParam[1]) && $urlParam[1] != "" ? $urlParam[1] : "main" );
			$param["model"] = (isset($urlParam[2]) && $urlParam[2] != "" ? $urlParam[2] : "index" );
			$param["idx"] = ( isset($urlParam[3]) && $urlParam[3]!= "" ? $urlParam[3] : "" ); //idx 는 기본값 없음. 없으면 없는거임
			//param을 배열이 아니라 ->방식으로 접근 가능한 객체 형태로 형변환
			$this->param = (object)$param;
		}
	}
?>
