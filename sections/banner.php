<!-- banner section starts -->
<section>
   <div class="container_fluid">
      <?php if (isset($web_data->banner)) { ?>
         
         <?php foreach (json_decode($web_data->banner) as $banner) { ?>
         <div class="">
            <img src="<?php echo 'https://cdn.easyfie.com/' . $banner; ?>" alt="" class="img-fluid">
         </div>
      <?php } ?>
      <?php } ?>
   </div>
</section>
<!-- banner section ends -->