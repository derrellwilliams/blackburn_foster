<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo(); ?></title>
<?php /* Template Name: Main */ ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo ( 'stylesheet_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?> webfonts/ss-social.css" type="text/css" media="screen"/>
<script type="text/javascript" src="//use.typekit.net/gmj5rob.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body id="homepage">
<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>

<div id="container">
  <div id="sidebar">
    <div class="logotype">
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">BLACKBURN and FOSTER</a></h1>
    </div>

      <div class="menu">
        <ul>
          <li class="one"><a href="http://localhost:8888/blackburn_foster_wp/work">Work</a></li>
          <li class="two"><a href="http://localhost:8888/blackburn_foster_wp/about">About</a></li>
          <li class="three"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
        </ul>
      </div>

    	<p class="bio">Blackburn and Foster is a menswear brand focusing on durable products that build character over time.</p>

      <div class="social_icons">
        <a href="#" i class="ss-icon ss-social-circle">Facebook</i></a>
        <a href="#" i class="ss-icon ss-social">Instagram</i></a>
        <a href="#" i class="ss-icon ss-social-circle">Twitter</i></a>
        <a href="#" i class="ss-icon ss-social-circle">Linkedin</i></a>
      </div>
  </div>
</div>

</body>

</html>