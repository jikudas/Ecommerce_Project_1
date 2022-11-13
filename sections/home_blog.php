<?php $articles = $easyfie->ProductsOrBlogs($token, 'article', 6, 'desc'); ?>



<section class="blog_section mb-5">
  <div class="heading_container heading_center mb-5 mt-5 pt-5">
    <h2>
      <span class="title">Articles</span>
    </h2>
  </div>
  <div class="container d-flex flex-wrap">
    <?php foreach($articles->data as $blog) { ?>
    <?php if(!empty($blog)) { ?>
    <div class="col-sm-6 col-md-4 p-md-2 py-3" data-aos="fade-up" data-aos-duration="3000">
      <div class="card">
        <div class="card__header">
          <img src="<?= 'https://cdn.easyfie.com/' . $blog->thumbnail ?>" alt="card__image" class="card__image" width="600">
        </div>
        <div class="card__body px-2 pt-2">
          <span class="tag tag-blue">
            <?php 
              if($blog->english) {
                echo $blog->english;
              } else {
                echo "No Category";
              }
            ?>
          </span>
          <h4 class="py-2">
          <a href="blog/<?php
            $mslug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $blog->title)));
            echo $mslug.'-'.$blog->id;
          ?>">
              <p>
                <?php 
                $blogTitle = $blog->title;
                if(strlen($blogTitle)>25) {
                  echo substr($blogTitle, 0, 25) . "...";
                } else {
                  echo $blog->title;
                }?>
              </p>
          </a>
          </h4>
          <p>
            <?php
              $blogContent = $blog->content;
              
              if(strlen(strlen($blogContent)>170)) {
                echo substr(strip_tags(html_entity_decode($blogContent)), 0, 250) . "...";
              } else {
                echo $blogContent;
              }
            ?>
          </p>
        </div>
        <div class="card__footer">
          <div class="user">
            <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
            <div class="user__info">
              <h5>
                <?= $me->first_name . " " . $me->last_name; ?>
              </h5>
              <small>view: 
                <?php 
                if($blog->visited == 0) {
                  echo 0;
                } else {
                  echo $blog->visited;
                }
                ?> </small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php } ?>
  </div>
</section>