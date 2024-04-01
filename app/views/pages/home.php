<style>
  .posts-container {
    margin: 50px 15px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px;
  }
</style>

<h1 class="text-center mt-5">Todos os Posts</h1>

<div class="posts-container">
  <?php
  foreach ($posts as $post) {
  ?>
    <div class="card w-100  " style="width: 18rem;">
      <img src="https://images.unsplash.com/photo-1682685797332-e678a04f8a64?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $post['title'] ?></h5>
        <p class="card-text"><?= $post['descricao'] ?></p>
        <a href="post/<?= $post['id'] ?>" class="btn btn-primary">Visualizar Post</a>
      </div>
    </div>
  <?php
  }
  ?>
</div>