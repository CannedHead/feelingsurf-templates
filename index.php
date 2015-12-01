<?php 
/*
Template Name: index
*/
?>
<?php add_filter('show_admin_bar', '__return_false'); ?>
<?php get_header('nav');?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
        <li data-target="#mycarousel" data-slide-to="4"></li>
      </ol> -->

      <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


      <div class="item active">
          <img class="back-banner" src="https://s3.amazonaws.com/cannedhead.global/img/back-nou.jpg" data-color="lightblue" alt="First Image">
        <div class="col-xs-12  no-pading banner-filter">
          <div class="container banner-home ">
 
            <div class="col-md-4 col-md-offset-4 va-menu">
              <a href=""  data-toggle="modal" data-target="#nou"> <img class="center-block img-responsive logo-banner" src="https://s3.amazonaws.com/cannedhead.global/img/logo-nou-blanco.svg"></a>
              <a href="" data-toggle="modal" data-target="#nou" class=" center-block mas-info-btn"> MÁS INFORMACIÓN</a>
            </div>
        

          </div>
        </div>
      </div>



      <div class="item">
          <img class="back-banner" src="https://s3.amazonaws.com/cannedhead.global/img/back-elpaso.jpg" data-color="lightblue" alt="First Image">
        <div class="col-xs-12  no-pading banner-filter">
          <div class="container banner-home ">
 
            <div class="col-md-4 col-md-offset-4 va-menu">
              <a class="" href="/"> <img class="center-block img-responsive logo-banner" src="https://s3.amazonaws.com/cannedhead.global/img/logo-elpaso-blanco.svg"></a>
              <a class=" center-block mas-info-btn" href="/"> MÁS INFORMACIÓN</a>
            </div>
        

          </div>
        </div>
      </div>


      <div class="item ">
          <img class="back-banner" src="https://images.unsplash.com/photo-1445251836269-d158eaa028a6?ixlib=rb-0.3.5&q=80&fm=jpg&w=1080&fit=max&s=b3521961f1c136183ab054b5da920651" data-color="lightblue" alt="First Image">
        <div class="col-xs-12  no-pading banner-filter">
          <div class="container banner-home ">
 
            <div class="col-md-4 col-md-offset-4 va-menu">
              <a class="" href="/"> <img class="center-block img-responsive logo-banner" src="https://s3.amazonaws.com/cannedhead.global/img/logo-global-blanco.svg"></a>
              <a class=" center-block mas-info-btn" href="/"> MÁS INFORMACIÓN</a>
            </div>
        

          </div>
        </div>
      </div>

      
  </div>
</div>

<?php get_footer('nav');?>