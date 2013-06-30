<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo(); ?></title>
<?php /* Template Name: About */ ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo ( 'stylesheet_url' ); ?>">
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
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>">BLACKBURN and FOSTER</a></h1>
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

  <div id="content">

    <div class="post-no-border">
      <img src="wp-content/uploads/profile.png">
        <h2>Meet Allan</h2>
          <p class="no-border">Tons of people came out for opening night at the F.I.T museum. It's so easy to get caught up in what you're doing you forget about all the people majoring in the different arts. The illustration exhibit is unbelievable. I'm going to go back and take some more photos.</p>
    </div>



  </div>
</div>

</body>

</html>