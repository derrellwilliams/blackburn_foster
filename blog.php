<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo(); ?></title>
<?php /* Template Name: Blog */ ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo ( 'stylesheet_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?> webfonts/ss-social.css" type="text/css" media="screen"/>
<script type="text/javascript" src="//use.typekit.net/gmj5rob.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body>
<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>

<div id="container">
  <div id="sidebar">
    <div class="logotype">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">BLACKBURN <br> and FOSTER</a></h1>
    </div>

      <div class="menu">
        <ul>
          <li class="one"><a href="<?php echo esc_url( home_url( '/work' ) ); ?>">Work</a></li>
          <li class="two"><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
          <li class="three"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
        </ul>
      </div>

      <div class="social_icons">
        <a href="#" i class="ss-icon ss-social-circle">Facebook</i></a>
        <a href="#" i class="ss-icon ss-social">Instagram</i></a>
        <a href="#" i class="ss-icon ss-social-circle">Twitter</i></a>
        <a href="#" i class="ss-icon ss-social-circle">Linkedin</i></a>
      </div>
  </div>
</div>

  <div id="content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="post">
            <p class="date"><?php the_date(); ?></p>
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt('Read the rest of this entry &raquo;'); ?></p>
          </div>
          <?php endwhile ?>
        <?php endif ?>
  </div>

</body>

</html>