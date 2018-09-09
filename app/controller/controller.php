<?
	class BoardController{
		//변수
		var $filename; //화면이 뿌려질 파일 주소
		var $db;
		var $title;

		// 객체가 생성될 때 생성 시점에 해야할 기능이 있다면 객체 생성 시 인자로 전달해 __construct함수에서 받아 처리함
    function __construct($fname){
        $this->filename = $fname;
				$this->db = new $modelName($this->filename); //현재 페이지에 맞는 db를 매개변수로 받아 해당하는 모델을 불러오기 위한 클래스 생성 필요
				$this->boardList(); //객체 생성과 동시에 처음 보여질 페이지는 list페이지
    }

		//board/list.php 일 때
		function boardList(){
			// 사이트 제목
			$this->getTitle();
    }

		//사이트 제목 정하는 함수
		function getTitle(){
			$this->title = "MVC 모델 php게시판";
		}

		//header 불러오는 함수
		function getHeader(){

		}
	}
?>
