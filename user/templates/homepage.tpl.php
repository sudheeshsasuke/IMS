    
    <?php ob_start()?>
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Zyxware careers!</div>
          <div class="intro-heading text-uppercase">learn, grow & explore</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#interviews">More</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="interviews">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Interviews</h2>
            <h3 class="section-subheading text-muted">Explore a world of opportunities with Zyxware. Learn, grow, and build a great career!</h3>
          </div>
        </div>
        <div class="row text-center">
          
        </div>
      </div>
    </section>

    <?php
    
    //set hompage bol variable
    $GLOBALS['isHome'] = true;
    $content = ob_get_clean();
    include './user/templates/layout.tpl.php';
    ?>
