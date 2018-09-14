<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">게시판 목록 &nbsp;&nbsp;&nbsp;&nbsp;<a href="edit" class="btn btn-success">글 작성</a></h1>

  <div class="row">
    <? foreach ($this->list as $data){ ?>
      <div class="col-lg-6 portfolio-item">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">
              <a href="/board/view/<?=$data["idx"]?>"><?=$data["title"]?></a>
            </h4>
            <p class="card-text"><?=$data["content"]?></p>
          </div>
        </div>
      </div>
    <? } ?>
  </div>
  <!-- /.row -->

  <!-- Pagination -->
  <!--
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
   -->
</div>
