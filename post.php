<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

      if($post['id'] == $postId) {
        $currentPost = $post;
      }

    }

  }
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolor soluta aliquam corrupti earum consectetur, hic, nemo iure deserunt maiores magnam distinctio reprehenderit! Quos itaque error totam rem, maiores dolores.
      Officia consectetur ab rerum aliquid a ipsum voluptates numquam placeat, distinctio beatae temporibus voluptatem quibusdam quo quod quos labore veritatis dolorum unde illo atque reiciendis accusantium ex. Numquam, ipsam odit!
      Laudantium quos iure saepe qui eveniet pariatur impedit earum dolorum rerum. Blanditiis, veritatis ratione sit cupiditate suscipit sint consequuntur incidunt aperiam? Repudiandae officiis quas quis aperiam accusamus aliquid assumenda voluptates.
      Consequatur tenetur voluptates vel possimus eaque repellat maxime cupiditate cumque ipsa mollitia ut, quas, quo, molestias natus? Nulla iusto et ut, asperiores magni obcaecati eveniet reprehenderit molestias alias eos voluptates!
      Ducimus amet, ad illo commodi repellat vel tempore, reiciendis quibusdam itaque sequi cumque eius quam dolores sed. Voluptatibus, similique delectus. Impedit at reiciendis ab quibusdam soluta facere illo, fuga repellendus!</p>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolor soluta aliquam corrupti earum consectetur, hic, nemo iure deserunt maiores magnam distinctio reprehenderit! Quos itaque error totam rem, maiores dolores.
      Officia consectetur ab rerum aliquid a ipsum voluptates numquam placeat, distinctio beatae temporibus voluptatem quibusdam quo quod quos labore veritatis dolorum unde illo atque reiciendis accusantium ex. Numquam, ipsam odit!
      Laudantium quos iure saepe qui eveniet pariatur impedit earum dolorum rerum. Blanditiis, veritatis ratione sit cupiditate suscipit sint consequuntur incidunt aperiam? Repudiandae officiis quas quis aperiam accusamus aliquid assumenda voluptates.
      Consequatur tenetur voluptates vel possimus eaque repellat maxime cupiditate cumque ipsa mollitia ut, quas, quo, molestias natus? Nulla iusto et ut, asperiores magni obcaecati eveniet reprehenderit molestias alias eos voluptates!
      Ducimus amet, ad illo commodi repellat vel tempore, reiciendis quibusdam itaque sequi cumque eius quam dolores sed. Voluptatibus, similique delectus. Impedit at reiciendis ab quibusdam soluta facere illo, fuga repellendus!</p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
      </ul>
    </aside>
  </main>
<?php
  include_once("templates/footer.php");
?>