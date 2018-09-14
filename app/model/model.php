<?
	class Model{
		var $param;
		var $db;
		var $sql;
		var $action; //CRUD명령을 처리할 분기
		var $list;
		var $title;
		var $content;
		var $user_id;

		function __construct($param){
			$this->param = $param;
			$this->column = array();
			$this->db = new PDO("mysql:host="._HOST.";dbname="._DBNAME.";charset=utf8",_DBID,_DBPWD);
			$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			$this->action = $param->model;

			$this->setSql();
		}

		function setSql(){
			$idx = $this->param->idx;

			$this->title = $_POST["title"];
			$this->user_id = $_POST["user_id"];
			$this->content = $_POST["content"];

			switch ($this->action) {
				case 'view':
					$this->sql = "SELECT * FROM board WHERE idx = {$idx} AND del_yn = 'N' ";
					break;

				case 'edit':
					$this->sql = "SELECT * FROM board WHERE idx = {$idx} AND del_yn = 'N' ";
					break;

				case 'insert' :
					$this->sql = "INSERT INTO board SET
													title = '$this->title',
													user_id = '$this->user_id',
													content = '$this->content',
													insert_date = now()
												";
					break;
												// 돌려돌려 반복문

				case 'update' :
					$this->sql = "UPDATE board SET
												title = $this->title,
												content = $this->content
											WHERE idx = {$idx} ";
					break;

				case 'delete' :
					$this->sql = "UPDATE board SET del_yn = 'Y' WHERE idx = {$idx}";
					break;

				case 'list' :
					$this->sql = "SELECT * FROM board WHERE del_yn = 'N' ";
					break;
			}
			//return값으로 실제 db에서 해당 쿼리를 통해 데이터를 가져오는 함수를 실행시킨다
			return $this->query($this->sql);
		}

		function query($sql = false){
			$stmt = $this->db->prepare($this->sql);
			$this->db->beginTransaction();
			$stmt->execute();
			$this->db->commit();
			if($this->action=="list" || $this->action=="view" || $this->action == "edit"){
				$this->list = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
		}

	}
?>
