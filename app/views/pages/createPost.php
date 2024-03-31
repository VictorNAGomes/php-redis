<h1 class="text-center mt-5">Criar novo Post</h1>

<form class="m-5">
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="postTitle">
    <label for="postTitle">Título do Post</label>
  </div>
  <div class="form-floating mb-3">
    <input type="password" class="form-control" id="postDesc">
    <label for="postDesc">Descrição do Post</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control h-50" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
    <label for="floatingTextarea">Conteúdo do Post</label>
  </div>
  <button type="submit" class="btn btn-primary w-100 h-10 btn-lg">Criar Post</button>
</form>