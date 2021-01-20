<?php
 include 'header.php';
 include 'navbar.php';
  ?>
	


<!-- Start Carousal  -->


<div id="slide" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators  hidden-xs">
    <li data-target="#slide" data-slide-to="0" class="active"></li>
    <li data-target="#slide" data-slide-to="1"></li>
    <li data-target="#slide" data-slide-to="2"></li>
    <li data-target="#slide" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img src="images/01.jpg" alt="...">
      <div class="carousel-caption hidden-xs">
        <h1>Programming</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliq</p>
      </div>
    </div>

    <div class="item">
      <img src="images/02.jpg" alt="...">
      <div class="carousel-caption  hidden-xs">
        <h1>Web Design</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliq</p>     
    	</div>
    </div>
    
    <div class="item">
      <img src="images/03.jpg" alt="...">
      <div class="carousel-caption  hidden-xs">
        <h1>Desktop</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliq</p>    
    	</div>
    </div>
        <div class="item">
      <img src="images/04.jpg" alt="...">
      <div class="carousel-caption hidden-xs">
        <h1>Web Hosting</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliq</p>    
        <div class="btn btn-primary">Read More ...</div>
        <div class="btn btn-danger">Buy Now </div>
    	</div>
    </div>


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#slide" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slide" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- End Carousal -->

<!-- <br>
<br>
<br>
<br>
<a href="?lang=arabic">arabic</a>
<a href="?lang=english">english</a>
 -->

<?php include 'footer.php' ?>