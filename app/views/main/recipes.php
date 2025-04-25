<main class="page">
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>recipes</h4>
          <div class="tags-list">
            <?php foreach ($tags as $tag): ?>
            <a href="tag-template.html"><?php echo $tag['name']; ?> (1)</a>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
        <?php foreach($recipes as $recipe): ?>

            <!-- single recipe -->
            <a href="/main/single?id=<?php echo $recipe['id']; ?>" class="recipe">
              <img
                src="/assets/img/recipes/<?php echo $recipe['img']; ?>"
                class="img recipe-img"
                alt=""
              />
              <h5><?php echo $recipe['name']; ?></h5>
              <p>Prep : <?php echo $recipe['time_prep']; ?>min | Cook : <?php echo $recipe['time_cook']; ?>min</p>
            </a>
            <!-- end of single recipe -->

        <?php endforeach; ?>

        </div>
        <!-- end of recipes list -->
      </section>
    </main>