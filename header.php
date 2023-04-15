<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title>michalikpeter</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale-1.0" />
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time(); ?>" />

    

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inconsolata&family=Source+Code+Pro:wght@300&family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/android-chrome-512x512.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/2574737594.js" crossorigin="anonymous"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script src="jquery-2.1.4.js"></script>
    <script src= "https://smtpjs.com/v3/smtp.js"></script>

   
<?php if ( is_page_template( 'blog.php' ) ) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/blog.css">
<?php } ?>

 






    
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  
<?php wp_body_open(); ?>

<?php if ( is_page_template( 'blog.php' ) ) { ?>
    <section class="header blog-header">
    <nav>
    <a href="https://www.michalikpeter.eu"><img src="<?php echo get_template_directory_uri(); ?>/images/logocrop.png" /></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            
            <ul>
              <li>
                <a href="https://www.michalikpeter.eu"
                  ><span class="bodka">.</span>home</a
                >
              </li>
              <li>
                <a href="https://www.michalikpeter.eu/#aboutme"
                  ><span class="bodka">.</span>about me</a
                >
              </li>
              <li>
                <a href="https://www.michalikpeter.eu/#portf"
                  ><span class="bodka">.</span></span>my
                  work</span></a
                >
              </li>
              <li>
                <a href="https://www.michalikpeter.eu/index.php/blog/"
                  ><span class="bodka">.</span>blog</a
                >
              </li>
              <li>
                <a href="https://www.michalikpeter.eu/#kontakt"
                  ><span class="bodka">.</span>contact</a
                >
              </li>
            </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
        
        </nav>
        <div class="text-box">
            <h1 class="main-title">BLOG IS COMING SOON...</h1>
            
            </div>
    </div>
    <div class="social">
      <a href="https://www.linkedin.com/in/peter-michal%C3%ADk-0182a0102/"><i class="fa-brands fa-linkedin"></i></a>
      <a href="https://www.facebook.com/peto.mio/"><i class="fa-brands fa-facebook"></i></i></a>
      <a href="https://github.com/xpetomichalik"><i class="fa-brands fa-github"></i></i></a>
      <a href="https://instagram.com/petomichalik"><i class="fa-brands fa-instagram"></i></a>
    </div>
    
    </div>
    </section>
<?php } else { ?>
    <section class="header default-header">
    <nav>
        <a href="https://www.michalikpeter.eu"><img src="<?php echo get_template_directory_uri(); ?>/images/logocrop.png" /></a>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          
          <ul>
            <li>
              <a href="https://www.michalikpeter.eu"
                ><span class="bodka">.</span>home</a
              >
            </li>
            <li>
              <a href="https://www.michalikpeter.eu/#aboutme"
                ><span class="bodka">.</span>about me</a
              >
            </li>
            <li>
              <a href="https://www.michalikpeter.eu/#portf"
                ><span class="bodka">.</span></span>my
                work</span></a
              >
            </li>
            <li>
              <a href="https://www.michalikpeter.eu/index.php/blog/"
                ><span class="bodka">.</span>blog</a
              >
            </li>
            <li>
              <a href="https://www.michalikpeter.eu/#kontakt"
                ><span class="bodka">.</span>contact</a
              >
            </li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      
      </nav>
      
      <div class="text-box">
        <h1 class="main-title">Hello world!</h1>
        <p class="main-info">I am Peter, a self-taught web-developer.</p>
        <div class="btnn">
        <a href="./images/cvxd.pdf" class="viewmore-btn" download>Download CV</a>
</div>
      </div>
      <div class="social">
        <a href="https://www.linkedin.com/in/peter-michal%C3%ADk-0182a0102/"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://www.facebook.com/peto.mio/"><i class="fa-brands fa-facebook"></i></i></a>
        <a href="https://github.com/xpetomichalik"><i class="fa-brands fa-github"></i></i></a>
        <a href="https://instagram.com/petomichalik"><i class="fa-brands fa-instagram"></i></a>
      </div>
      <div class="cookie-container">
        <p>
          We use cookies in this website to give you the best experience on our
          site and show you relevant ads. To find out more, read our
          <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
        </p>
  
        <button class="cookie-btn">
          Okay
        </button>
      </div>
    </section>
<?php } ?>

