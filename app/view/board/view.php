<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">게시판 상세보기</h1>
	<a href="../list" class="btn btn-secondary">이전</a>
  <a href="../edit/<?=$this->list[0]['idx']?>" class="btn btn-info">수정</a>
  <a href="../delete/<?=$this->list[0]['idx']?>" class="btn btn-danger">삭제</a>
	<? foreach ($this->list as $data) { ?>
  <div class="row" style="padding-top:10px;">
    <div class="col-lg-6 portfolio-item">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">제목 : <?=$data["title"];?></h4>
					<p class="card-text">작성자 : <?=$data["user_id"]; ?></p>
					<p class="card-text">작성일 : <?=$data["insert_date"]; ?></p>
          <p class="card-text">내용 : <?= $data["content"]; ?></p>
        </div>
      </div>
    </div>
  </div>
  <? } ?>
  <!-- /.row -->
</div>
