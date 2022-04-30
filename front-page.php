<?php
get_header();
?>
<section class="main-banner">
  <div id="main-banner__carousel" class="main-banner__list owl-carousel owl-theme">
    <a href="#" class="main-banner__item">
    <img src="<?php echo get_theme_file_uri('/images/main-banner-2.jpg') ?>" alt="banner" title="banner" class="main-banner__img">
    </a>
    <a href="#" class="main-banner__item">
    <img src="<?php echo get_theme_file_uri('/images/main-banner-2.jpg') ?>" alt="banner" title="banner" class="main-banner__img">
    </a>
    <a href="#" class="main-banner__item">
    <img src="<?php echo get_theme_file_uri('/images/main-banner-2.jpg') ?>" alt="banner" title="banner" class="main-banner__img">
    </a>
  </div>
</section>
<section class="benefits">
  <div class="container">
    <div class="benefits__wrapper">
    <a href="#" class="benefits__item">
      <div class="benefits__item__icon-wrapper">
        <img src="<?php echo get_theme_file_uri('/images/box.png') ?>" alt="Icon" title="Icon title" class="benefits__item__icon">
      </div>
      <span class="benefits__item__desc">SHIP COD TOÀN QUỐC</span>
    </a>
    <a href="#" class="benefits__item">
      <div class="benefits__item__icon-wrapper">
        <img src="<?php echo get_theme_file_uri('/images/refund.png') ?>" alt="Icon" title="Icon title" class="benefits__item__icon">
      </div>
      <span class="benefits__item__desc">7 NGÀY ĐỔI TRẢ MIỄN PHÍ</span>
    </a>
    <a href="#" class="benefits__item">
      <div class="benefits__item__icon-wrapper">
        <img src="<?php echo get_theme_file_uri('/images/shipped.png') ?>" alt="Icon" title="Icon title" class="benefits__item__icon">
      </div>
      <span class="benefits__item__desc">MIỄN PHÍ VẬN CHUYỂN</span>
    </a>
    <a href="#" class="benefits__item">
      <div class="benefits__item__icon-wrapper">
        <img src="<?php echo get_theme_file_uri('/images/medal.png') ?>" alt="Icon" title="Icon title" class="benefits__item__icon">
      </div>
      <span class="benefits__item__desc">CAM KẾT CHÍNH HÃNG</span>
    </a>
    </div>
  </div>
</section>
<section class="catalog">
  <div class="container">
    <div class="catalog__wrapper">
      <div class="catalog__title">
        <a href="#" class="catalog__title__link">
          <span class="catalog__title__top-desc">DANH MỤC</span>
          <span class="catalog__title__bottom-desc">SẢN PHẨM</span>
        </a>
      </div>
      <div id="product-list__carousel" class="catalog__product-list owl-carousel owl-theme">        
        <a href="#" class="catalog__product-item">
          <div class="catalog__product-item__img-wrapper">
            <img src="<?php echo get_theme_file_uri('/images/girl1.png') ?>" alt="Product1" title="Product Name" class="catalog__product-item__img">
          </div>
          <span class="catalog__product-item__title">
          CHĂM SÓC DA MẶT
          </span>
        </a>
        <a href="#" class="catalog__product-item">
          <div class="catalog__product-item__img-wrapper">
            <img src="<?php echo get_theme_file_uri('/images/girl2.png') ?>" alt="Product1" title="Product Name" class="catalog__product-item__img">
          </div>
          <span class="catalog__product-item__title">
          CHĂM SÓC DA MẶT
          </span>
        </a>
        <a href="#" class="catalog__product-item">
          <div class="catalog__product-item__img-wrapper">
            <img src="<?php echo get_theme_file_uri('/images/girl3.png') ?>" alt="Product1" title="Product Name" class="catalog__product-item__img">
          </div>
          <span class="catalog__product-item__title">
          CHĂM SÓC DA MẶT
          </span>
        </a>
        <a href="#" class="catalog__product-item">
          <div class="catalog__product-item__img-wrapper">
            <img src="<?php echo get_theme_file_uri('/images/girl4.png') ?>" alt="Product1" title="Product Name" class="catalog__product-item__img">
          </div>
          <span class="catalog__product-item__title">
          CHĂM SÓC DA MẶT
          </span>
        </a>
        <a href="#" class="catalog__product-item">
          <div class="catalog__product-item__img-wrapper">
            <img src="<?php echo get_theme_file_uri('/images/girl5.png') ?>" alt="Product1" title="Product Name" class="catalog__product-item__img">
          </div>
          <span class="catalog__product-item__title">
          CHĂM SÓC DA MẶT
          </span>
        </a>
        <a href="#" class="catalog__product-item">
          <div class="catalog__product-item__img-wrapper">
            <img src="<?php echo get_theme_file_uri('/images/girl5.png') ?>" alt="Product1" title="Product Name" class="catalog__product-item__img">
          </div>
          <span class="catalog__product-item__title">
          CHĂM SÓC DA MẶT
          </span>
        </a>
      </div>
    </div>
  </div>
</section>
<section class="flash-sale">
  <div class="container">
    <div class="flash-sale__wrapper">
      <div class="flash-sale__title-countdown">
        <div class="flash-sale__title">
            <a href="#" class="flash-sale__title__link">
              <span class="flash-sale__title__top-desc">SẢN PHẨM</span>
              <span class="flash-sale__title__bottom-desc">FLASH SALE</span>
            </a>
        </div>
        <div class="flash-sale__countdown">
          <div class="flash-sale__countdown-item">
            <span class="flash-sale__countdown-item__number">5</span>
            <span class="flash-sale__countdown-item__desc">Ngày</span>
          </div>
          <div class="flash-sale__countdown-item">
            <span class="flash-sale__countdown-item__number">100</span>
            <span class="flash-sale__countdown-item__desc">Giờ</span>
          </div>
          <div class="flash-sale__countdown-item">
            <span class="flash-sale__countdown-item__number">100</span>
            <span class="flash-sale__countdown-item__desc">Phút</span>
          </div>
          <div class="flash-sale__countdown-item">
            <span class="flash-sale__countdown-item__number">100</span>
            <span class="flash-sale__countdown-item__desc">Giây</span>
          </div>
          
        </div>
    </div>
    <div id="flash-sale__product-list" class="flash-sale__product-list owl-carousel owl-theme">
      <a href="#" class="flash-sale__product-item">
        <div  class="flash-sale__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p1.png') ?>" alt="Product Name" title="Product Name" class="flash-sale__product-item__img">
          <span class="flash-sale__product-item__discount-percent">-100%</span>
        </div>
        <span class="flash-sale__product-item__title">KEM CHỐNG NẮNG S-WHITE</span>
        <span class="flash-sale__product-item__brand">S-White</span>
        <p class="flash-sale__product-item__discounted-price">
          <span class="flash-sale__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="flash-sale__product-item">
        <div  class="flash-sale__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p2.png') ?>" alt="Product Name" title="Product Name" class="flash-sale__product-item__img">
          <span class="flash-sale__product-item__discount-percent">-100%</span>
        </div>
        <span class="flash-sale__product-item__title">KEM NEW SKIN 360 DƯỠNG DA TRẮNG SÁNG</span>
        <span class="flash-sale__product-item__brand">S-White Premium</span>
        <p class="flash-sale__product-item__discounted-price">
          <span class="flash-sale__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="flash-sale__product-item">
        <div  class="flash-sale__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p3.png') ?>" alt="Product Name" title="Product Name" class="flash-sale__product-item__img">
          <span class="flash-sale__product-item__discount-percent">-100%</span>
        </div>
        <span class="flash-sale__product-item__title">MẶT NẠ Ủ DƯỠNG CHÂN SHIN-NEE</span>
        <span class="flash-sale__product-item__brand">Shin nee</span>
        <p class="flash-sale__product-item__discounted-price">
          <span class="flash-sale__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="flash-sale__product-item">
        <div  class="flash-sale__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p4.png') ?>" alt="Product Name" title="Product Name" class="flash-sale__product-item__img">
          <span class="flash-sale__product-item__discount-percent">-100%</span>
        </div>
        <span class="flash-sale__product-item__title">PHẤN TƯƠI DƯỠNG DA S-WHITE</span>
        <span class="flash-sale__product-item__brand">S-White Makeup</span>
        <p class="flash-sale__product-item__discounted-price">
          <span class="flash-sale__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="flash-sale__product-item">
        <div  class="flash-sale__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p5.png') ?>" alt="Product Name" title="Product Name" class="flash-sale__product-item__img">
          <span class="flash-sale__product-item__discount-percent">-100%</span>
        </div>
        <span class="flash-sale__product-item__title">CỐT NGHỆ HẠ THỔ</span>
        <span class="flash-sale__product-item__brand">Mía Organic</span>
        <p class="flash-sale__product-item__discounted-price">
          <span class="flash-sale__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
    </div>
  </div>
</section>
<section class="best-seller">  
  <div class="container">
    <div class="best-seller__wrapper">
      <div class="best-seller__title-countdown">
        <div class="best-seller__title">
            <a href="#" class="best-seller__title__link">
              <span class="best-seller__title__top-desc">SẢN PHẨM</span>
              <span class="best-seller__title__bottom-desc">BÁN CHẠY</span>
            </a>
        </div>        
    </div>
    <div id="best-seller__product-list" class="best-seller__product-list owl-carousel owl-theme">
      <a href="#" class="best-seller__product-item">
        <div  class="best-seller__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p6.png') ?>" alt="Product Name" title="Product Name" class="best-seller__product-item__img">
          <span class="best-seller__product-item__discount-percent">-100%</span>
        </div>
        <span class="best-seller__product-item__title">SERUM REVITAL COOLING AMPOULE</span>
        <span class="best-seller__product-item__brand">S-White</span>
        <p class="best-seller__product-item__discounted-price">
          <span class="best-seller__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="best-seller__product-item">
        <div  class="best-seller__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p7.png') ?>" alt="Product Name" title="Product Name" class="best-seller__product-item__img">
          <span class="best-seller__product-item__discount-percent">-100%</span>
        </div>
        <span class="best-seller__product-item__title">KEM NEW SKIN 360 DƯỠNG DA TRẮNG SÁNG</span>
        <span class="best-seller__product-item__brand">S-White Premium</span>
        <p class="best-seller__product-item__discounted-price">
          <span class="best-seller__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="best-seller__product-item">
        <div  class="best-seller__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p8.png') ?>" alt="Product Name" title="Product Name" class="best-seller__product-item__img">
          <span class="best-seller__product-item__discount-percent">-100%</span>
        </div>
        <span class="best-seller__product-item__title">MẶT NẠ Ủ DƯỠNG CHÂN SHIN-NEE</span>
        <span class="best-seller__product-item__brand">Shin nee</span>
        <p class="best-seller__product-item__discounted-price">
          <span class="best-seller__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="best-seller__product-item">
        <div  class="best-seller__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p9.png') ?>" alt="Product Name" title="Product Name" class="best-seller__product-item__img">
          <span class="best-seller__product-item__discount-percent">-100%</span>
        </div>
        <span class="best-seller__product-item__title">PHẤN TƯƠI DƯỠNG DA S-WHITE</span>
        <span class="best-seller__product-item__brand">S-White Makeup</span>
        <p class="best-seller__product-item__discounted-price">
          <span class="best-seller__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
      <a href="#" class="best-seller__product-item">
        <div  class="best-seller__product-item__img-wrapper">
          <img src="<?php echo get_theme_file_uri('/images/p10.png') ?>" alt="Product Name" title="Product Name" class="best-seller__product-item__img">
          <span class="best-seller__product-item__discount-percent">-100%</span>
        </div>
        <span class="best-seller__product-item__title">CỐT NGHỆ HẠ THỔ</span>
        <span class="best-seller__product-item__brand">Mía Organic</span>
        <p class="best-seller__product-item__discounted-price">
          <span class="best-seller__product-item__price">295.000₫</span>
          590.000₫
        </p>
        
      </a>
    </div>
  </div>
</section>
<section class="promotion">
  <div class="container">
    <div class="promotion__wrapper">      
        <div class="promotion__title">
            <a href="#" class="promotion__title__link">
              <span class="promotion__title__top-desc">TỔNG HỢP</span>
              <span class="promotion__title__bottom-desc">KHUYẾN MÃI</span>
            </a>
            <a href="#" class="promotion__title__all-promotion-link">XEM TẤT CẢ<i class="fa fa-angle-right" aria-hidden="true"></i>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
      </div>    
  </div>
  <div id="promotion__product-list" class="promotion__product-list owl-carousel owl-theme">
    <div class="promotion__product-item">
      <a href="#" class="promotion__product-item__wrapper">
        <img src="<?php echo get_theme_file_uri('/images/m1.jpg') ?>" alt="Product Name" title="Product Name" class="promotion__product-item__img">
        <div class="promotion__product-item__overplay"></div>
        <p class="promotion__product-item__title">
        SALE SẬP SÀN
          <span class="promotion__product-item__promotion-price">ĐẠI HỘI ĐỒNG GIÁ 99K & 199K</span>
        </p>
      </a>
    </div>
    <div class="promotion__product-item">
      <a href="#" class="promotion__product-item__wrapper">
        <img src="<?php echo get_theme_file_uri('/images/m2.jpg') ?>" alt="Product Name" title="Product Name" class="promotion__product-item__img">
        <div class="promotion__product-item__overplay"></div>
        <p class="promotion__product-item__title">
        SALE SẬP SÀN
          <span class="promotion__product-item__promotion-price">ĐẠI HỘI ĐỒNG GIÁ 99K & 199K</span>
        </p>
      </a>
    </div>
    <div class="promotion__product-item">
      <a href="#" class="promotion__product-item__wrapper">
        <img src="<?php echo get_theme_file_uri('/images/m3.jpg') ?>" alt="Product Name" title="Product Name" class="promotion__product-item__img">
        <div class="promotion__product-item__overplay"></div>
        <p class="promotion__product-item__title">
        SALE SẬP SÀN
          <span class="promotion__product-item__promotion-price">ĐẠI HỘI ĐỒNG GIÁ 99K & 199K</span>
        </p>
      </a>
    </div>
    <div class="promotion__product-item">
      <a href="#" class="promotion__product-item__wrapper">
        <img src="<?php echo get_theme_file_uri('/images/m4.jpg') ?>" alt="Product Name" title="Product Name" class="promotion__product-item__img">
        <div class="promotion__product-item__overplay"></div>
        <p class="promotion__product-item__title">
        SALE SẬP SÀN
          <span class="promotion__product-item__promotion-price">ĐẠI HỘI ĐỒNG GIÁ 99K & 199K</span>
        </p>
      </a>
    </div>
    <div class="promotion__product-item">
      <a href="#" class="promotion__product-item__wrapper">
        <img src="<?php echo get_theme_file_uri('/images/m5.jpg') ?>" alt="Product Name" title="Product Name" class="promotion__product-item__img">
        <div class="promotion__product-item__overplay"></div>
        <p class="promotion__product-item__title">
        SALE SẬP SÀN
          <span class="promotion__product-item__promotion-price">ĐẠI HỘI ĐỒNG GIÁ 99K & 199K</span>
        </p>
      </a>
    </div>
  </div>
</section>

<?php
get_footer();
?>