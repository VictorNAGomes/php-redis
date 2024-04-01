<h1 class="text-center mt-5">Criar novo Post</h1>

<form class="m-5" method="POST" action="/criar-post-persistence">
  <div class="form-floating mb-3">
    <input type="text" class="form-control" placeholder="" name="postTitle" id="postTitle">
    <label for="postTitle">Título do Post</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" placeholder="" name="postDesc" id="postDesc">
    <label for="postDesc">Descrição do Post</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control h-50" placeholder="" name="postContent" id="postContent"></textarea>
    <label for="postContent">Conteúdo do Post</label>
  </div>
  <button type="submit" class="btn btn-primary w-100 h-10 btn-lg">Criar Post</button>
</form>