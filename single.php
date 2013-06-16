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
      <h1><a href="blackburn_foster/index.html">BLACKBURN <br> and FOSTER</a></h1>
    </div>

      <div class="menu">
        <ul>
          <li class="one"><a href="#">Work</a></li>
          <li class="two"><a href="#">About</a></li>
          <li class="three"><a href="/blackburn_foster/blog.html">Blog</a></li>
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

          <nav id="nav-single">
            <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous') ); ?></span>
            <span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
          </nav><!-- #nav-single -->


			</div><!-- #content -->
		</div><!-- #primary -->
	</body>
