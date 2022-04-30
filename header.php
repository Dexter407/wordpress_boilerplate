<?php header("Access-Control-Allow-Origin: *"); 
      
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <header class="site-header">
    <div class="login-hotline">
      <div class="container login-hotline__wrapper">
          <ul class="login-hotline__list">
            <li class="login-hotline__item">
              <img src="<?php echo get_theme_file_uri('/images/icon-login1@2x.png') ?>" alt="User" title="User" class="login-hotline__img">
              <a href="#" class="login-hotline__link">
              Đăng Nhập / Đăng Ký
              </a>
            </li>
            <li class="login-hotline__item">
              <img src="<?php echo get_theme_file_uri('/images/icon-chamsocKH.png') ?>" alt="Hotline" title="Hotline" class="login-hotline__img">
              <a href="#" class="login-hotline__link">HOTLINE: 
              <span class="login-hotline__hotline-number">0937 85 17 17</span>    
              </a>
            </li>
          </ul>
      </div>
    </div>          
    <div class="main-navbar">
      <div class="container main-navbar__wrapper">        
          <a href="#" class="main-navbar__logo">
            <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="<?php bloginfo('name') ?>" title="<?php bloginfo('name') ?>" class="main-navbar__logo-img">
          </a>          
          <ul class="main-navbar__list">
            <li class="main-navbar__item">
              <a href="#" class="main-navbar__link">
                Về chúng tôi
              </a>
            </li>
            <li class="main-navbar__item">
              <a href="#" class="main-navbar__link">
                Sản phẩm
                <i class="fa fa-chevron-down main-navbar__icon"></i>
              </a>
            </li>
            <li class="main-navbar__item">
              <a href="#" class="main-navbar__link">
                Bài viết
              </a>
            </li>
            <li class="main-navbar__item">
              <a href="#" class="main-navbar__link">
                Khuyến mãi
              </a>
            </li>
            <li class="main-navbar__item">
              <a href="#" class="main-navbar__link">
                Nhượng quyền
              </a>
            </li>
            <li class="main-navbar__item">
              <a href="#" class="main-navbar__link">
                Hệ thống
              </a>
            </li>
          </ul>
          <div class="search-and-cart">
            <div class="search-and-cart__search-button">
              <a href="#" class="search-and-cart__search-button__link">
                <img src="<?php echo get_theme_file_uri('/images/search.png') ?>" alt="Search Shynh Product" title="Search Shynh Products" class="search-and-cart__search-button__img">
              </a>
            </div>
            <div class="search-and-cart__cart-button">
              <a href="#" class="search-and-cart__cart-button__link">
                <span class="search-and-cart__cart-button__quantity">0</span>
                <img src="<?php echo get_theme_file_uri('/images/cart.png') ?>" alt="Shopping Shynh Product" title="Shopping with Shynh Products" class="search-and-cart__cart-button__img">
              </a>
            </div>
            <label class="hamburger-menu">
              <input type="checkbox" name="menu" class="menu-opener">
              <div class="hamburger-menu__line --top-line"></div>
              <div class="hamburger-menu__line --middle-line"></div>
              <div class="hamburger-menu__line --bottom-line"></div>
            </label>
          </div>          
      </div>
    </div>    
  </header>
