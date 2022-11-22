<!-- footer section -->
<footer >
   <div class="container-fluid">
      <div class="row d-flex justify-content-center p-4">
         <div class="col-md-3 d-flex justify-content-center align-items-center mb-4">
            <div class="full">
               <div>
                  <a class="navbar-brand m-0" href="index.php"">
                  <img loading="lazy" src="<?php echo 'https://cdn.easyfie.com/' . $web_data->logo ?>" class="" alt="" img width="250px">
                  </a>
               </div>
            </div>
         </div>
         <div class="col-6 col-md-9">
            <div class="row">
               <div class="col-md-6 mb-4">
                  <div class="row d-flex justify-content-center align-items-start">
                     <div class="col-6">
                        <div class="widget_menu text-center">
                           <h3>Menu</h3>
                              <ul>
                                 <li><a href="<?= baseurl ?>">Home</a></li>
                                 <li><a href="<?= baseurl . 'products' ?>">Store</a></li>
                                 <li><a href="<?= baseurl . 'offers'?>">Offer</a></li>
                                 <li><a href="<?= baseurl . 'products' ?>">Pages</a></li>
                                 <li><a href="<?= baseurl . 'blog'?>">Blog</a></li>
                              </ul>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="widget_menu text-center">
                           <h3>Categories</h3>
                           <ul>
                              <li><a href="#">Account</a></li>
                              <li><a href="#">Checkout</a></li>
                              <li><a href="#">Login</a></li>
                              <li><a href="#">Register</a></li>
                              <li><a href="#">Shopping</a></li>
                              <li><a href="#">Widget</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>     
               <div class="col-md-6 pl-md-3 d-flex align-items-start">
                  <div class="widget_menu text-center">
                     <p><strong>ADDRESS:</strong> <?php echo $me->address; ?></p>
                     <p><strong>TELEPHONE:</strong> <?php echo $me->phone_number; ?></p>
                     <p><strong>EMAIL:</strong> <?php echo $me->email; ?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- footer end -->
<div class="cpy_">
   <p>© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a></p>
</div>
   <!-- jQery -->
   <script src="<?= baseurl . 'js/jquery-3.4.1.min.js'?>"></script>
   <!-- elevatezoom JS -->
   <script type="text/javascript" src="https://teeeyes.com/plugins/pan-zoom/Nzoom.min.js"></script>
   <!-- popper js -->
   <script src="<?= baseurl . 'js/popper.min.js'?>"></script>
   <!-- bootstrap js -->
   <script src="<?= baseurl . 'js/bootstrap.min.js'?>"></script>
   <!-- bootstrap bundle js -->
   <script src="<?= baseurl . 'js/bootstrap.bundle.min.js'?>"></script>
   <!-- fontawesome js -->
   <script src="<?= baseurl . 'js/all.min.js'?>"></script>
   <!-- custom js -->
   <script src="<?= baseurl . 'js/custom.js'?>"></script>
   <!-- quantity JS -->
   <script src="<?= baseurl . 'js/quantity.js'?>"></script>
   <!-- mediumish js -->
   <script src="<?= baseurl . 'js/ie10-viewport-bug-workaround.js'?>"></script>
   <!-- app js -->

   <!-- AOS JS -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
   <script>
   // Example starter JavaScript for disabling form submissions if there are invalid fields
   (function() {
      'use strict';

      window.addEventListener('load', function() {
         // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.getElementsByClassName('needs-validation');

         // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
            }
            form.classList.add('was-validated');
         }, false);
         });
      }, false);
   })();
   </script>

   <!-- Add to Cart Script -->
   <script>
      $(document).ready(function() {
         $('.itemBtn').click(function(e) {
            e.preventDefault();
            const pid = '<?= $value->data->id; ?>';
            const pname = $('.p_title').text();
            const pprice = '<?= $value->data->price; ?>';
            const pimage = '<?= $value->data->image; ?>';
            
            $.ajax({
               url: baseurl + 'cart',
               method: 'POST',
               data: {pid:pid, pname:pname, pprice:pprice, pimage:pimage},
               success:function(response) {
                  // $('#message').html(response);
               }
            });
         });
      });
   </script>
   <!-- Add to Cart Script End -->

   <!-- view cart quantity increase decrease script starts -->
   <script>
      
   </script>
   <!-- view cart quantity increase decrease script ends -->
   </body>
</html>