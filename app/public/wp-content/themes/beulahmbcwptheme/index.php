<?php get_header();
/*
* Template Name: Home/Index Page
*/
?>

<main class="container page section no-sidebars">
<div class="jumbotron jumbotron-fluid">
  <div class="container textbox">
    <h5 style="margin:0">Welcome to</h5>
    <h1 style="margin:0">Beulah Missionary Baptist Church</h1>
    <p class="lead" style="margin:0">802 South Jefferson Street Albany, GA</p>
<!-- 
    <div class= "times">
        <p class="lead">Sunday School 10AM</p>
        <p class="lead">Sunday Worship 11:30 AM</p>
        <p class="lead">5th Sunday Worship 8AM</p>
        <p class="lead">Adult Bible Study: Tues 7PM</p>
        <p class="lead">Youth Bible Study: Wed 6PM</p>
        <p class="lead">Noon Day Prayer: Fri 11 AM</p>
    </div> 
-->      
  </div>
</div>
<div class="container">
   <?php while(have_posts()): the_post(); ?>
        
        <?php the_content();?>
           
        
    <?php endwhile;?> 
</div>
<!--Section -->
<div class="paral ">
    <div class=" container row">
        <div class="col-sm-6">
                <h1 >Welcome to Beulah</h1>
                <p class="lead">Here is a short description 1</p>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid pastor" src="<?php echo get_template_directory_uri() . "/img/pastor.jpg" ?>" style="width:25rem;" alt="" >
            </div>
    </div>
</div>
<!-- News and Events -->
<div class="container sidebar">
<?php
            dynamic_sidebar('sidebar');
        
        ?>
</div>
</main>
<?php get_footer();?>
