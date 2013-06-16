<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo(); ?></title>
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
          <li class="one"><a href="#">Work</a></li>
          <li class="two"><a href="#">About</a></li>
          <li class="three"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a></li>
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

<div id="primary">
      <div id="content">
      <?php if (have_posts()) : ?>

          <div class="post">
          <?php while (have_posts()) : the_post(); ?>
            <p class="date"><?php the_date(); ?></p>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content('Read the rest of this entry &raquo;'); ?></p>
          <?php endwhile ?>
        <?php endif ?>
</div>
</div>

</body>

</html>