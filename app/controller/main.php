<?
	class Main{
		//변수
		var $param; //화면이 뿌려질 파일 주소
		var $db;	//model 객체를 담을 인스턴스 변수
		var $title;
		// 객체가 생성될 때 생성 시점에 해야할 기능이 있다면 객체 생성 시 인자로 전달해 __construct함수에서 받아 처리함
    function __construct($param){
				$this->param = $param;
				// echo 'view 경로 '.$param->view;
				$this->index(); //객체 생성과 동시에 처음 보여질 페이지는 list페이지
    }

		function index(){
			// 사이트 제목
			$this->getHeader();
			$this->getContent();
			$this->getFooter();
    }

		//header 불러오는 함수
		function getHeader(){
			require_once(_VIEW."/inc/header.php");
		}
		//body 불러오는 함수
		function getContent(){
			require_once(_VIEW."{$this->param->view}/{$this->param->model}.php");
		}
		//footer 불러오는 함수
		function getFooter(){
			require_once(_VIEW."/inc/footer.php");
		}
	}
?>
