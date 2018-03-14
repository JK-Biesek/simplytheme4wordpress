<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_SimplyTheme
 */

?>


<?php wp_footer(); ?>
<!--===========Sign Up-->
<section id="signup" data-type="background" data-speed="4">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 offset-sm-3">
        <div class="opacity_bg">
          <h2>Are you ready to sign up and get in touch with this <strong>awesome</strong> man?</h2>
        </div>
        <p><a href="#" class="btn btn-lg btn-block btn-success">Wow, Want to sign up !</a></p>
      </div>
    </div>
  </div>
</section>
<!--===========Footer-->
<footer>
  <div class="container">
    <div class="col-sm-3">
      <p> <a href="#"><img src="resources/img/logo.png" alt="Bootstrap theme"> </a></p>
    </div>
    <p class="float-right">&copy Jakub Biesek</p>
    <div class="col-sm-6">
        <nav>
          <ul class="list-unstyled list-inline">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Contact</a></li>
            <li class="signup-link"><a href="#">Sign Up</a></li>
          </ul>

        </nav>

    </div>

  </div>


</footer>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <form class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="first-name">Your Name</label>
            <input type="text" class="form-control" id="form-modal" placeholder="Your Name">
          </div>
          <div class="form-group">
            <label class="sr-only" for="email-subscribe">Your Email</label>
            <input type="text" class="form-control" id="form-modal" placeholder="Your email">
          </div>
          <input type="submit" class="btn btn-danger " value="Subscribe">
        </form>
        <hr>
        <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small> </p>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/resources/js/main.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
