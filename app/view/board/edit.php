<div class="container">
  <!-- Page Heading -->
  <h1 class="my-4">게시글 작성 <?=$this->list[0]['title']?></h1>
  <div class="row">
		<form class="" action="/board/insert" method="post">
			<div class="col-lg-12 portfolio-item">
				<div>
						<h4 class="card-title">제목 <input type="text" name="title" class="card-text form-control" value="<?=$this->list[0]['title']?>"> </h4>
						<p class="card-text">작성자 <input type="text" name="user_id"  class="card-text form-control" value="<?=$this->list[0]['user_id']?>" readonly="readonly"> </p>
						<p class="card-text">내용</p>
						<textarea name="content" rows="8" cols="80" class="card-text form-control"><?=$this->list[0]['content']?></textarea>
				</div>
        <div style="padding-top:10px;">
          <a href="../view/<?=$this->list[0]['idx']?>" class="btn btn-secondary">이전</a>
          <input type="submit" class="btn btn-info" value="저장"/>
        </div>
			</div>
		</form>
  </div>
  <!-- /.row -->
</div>
