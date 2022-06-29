

</style>
 <footer id="footer">
    <div class="footer-top">
      <div class="container flex" style="width:100%">
        <div class="col-lg-4">
          <aside id="footer_contact" class="widget "  >
            <h3 class="widget-title">Thông tin liên hệ</h3>
            <div class="contact-info">
              <ul class="contact-details list list-icons">
                <li>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <strong>Địa chỉ:</strong><br>
                  <span>534 Núi Thành,Đà Nẵng</span>
                </li>
                <li>
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <strong>Điện thoại:</strong><br>
                  <span>0949 213 792</span></li>
                <li>
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <strong>Email:</strong><br>
                  <span>nttrong1412@gmail.com</span>
                </li>
                <li>
                  <i class="fa fa-clock-o"></i>
                  <strong>Thời gian làm việc:</strong><br>
                  <span>Tất cả các ngày trong tuần / 9:00 AM - 7:30 PM</span>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="col-lg-4" >
          <aside id="footer_info" class="widget">
            <h3 class="widget-title">Thông tin liên hệ</h3>
            <ul class="info-details">
              <li><a href="#"><i class="fa fa-caret-right"></i>Chính sách bảo mật thông tin</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i>Giới thiệu</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i>Hướng dẫn đặt mua lẻ – Thanh toán – Đổi trả</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i>Hướng dẫn mua sỉ – Thanh toán – Đổi trả</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i>Khuyến mãi về giá ship hàng</a></li>
            </ul>
          </aside>
        </div>
        <div class="col-lg-4" >
          <div class="map">
            <!--<iframe width="400" height="267" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place-->
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.61656825866!2d108.22040101480731!3d16.03346348890299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219eefccfff85%3A0x1876b438985c407e!2zNTM0IE7DumkgVGjDoG5oLCBIb8OgIEPGsOG7nW5nIE5hbSwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1634646422701!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
 
  </footer>
       <link async rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/cssfooter.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/bootstrap.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/sweet-alert.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/jquery.flexslider-min.js"></script>
      <script defer src="<?php echo BASE_URL ?>/public/js/owl.carousel.js" type="text/javascript"></script>
      <script defer src="<?php echo BASE_URL ?>/public/js/jquery.lazyload.min.js" type="text/javascript"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/script_ex.js"></script>
      <script defer type="text/javascript" src="<?php echo BASE_URL ?>/public/js/script_menu.js"></script>
      
      <div id="fb-root"></div>
   <script type="text/javascript">
      $(document).ready(function() {

        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        var slidesPerPage = 5; //globaly define number of elements per page
        var syncedSecondary = true;

        sync1.owlCarousel({
          items : 1,
          slideSpeed : 2000,
          nav: false,
          autoplay: true,
          dots: false,
          loop: true,
          responsiveRefreshRate : 200,
          navText: ['<svg width="10%" height="10%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
          '<svg width="3%" height="3%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 2px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
        }).on('changed.owl.carousel', syncPosition);

        sync2
          .on('initialized.owl.carousel', function () {
            sync2.find(".owl-item").eq(0).addClass("current");
          })
          .owlCarousel({
          items : slidesPerPage,
          dots: false,
          nav: false,
          smartSpeed: 200,
          slideSpeed : 500,
          slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
          responsiveRefreshRate : 100
        }).on('changed.owl.carousel', syncPosition2);

        function syncPosition(el) {
          //if you set loop to false, you have to restore this next line
          //var current = el.item.index;
          
          //if you disable loop you have to comment this block
          var count = el.item.count-1;
          var current = Math.round(el.item.index - (el.item.count/2) - .5);
          
          if(current < 0) {
            current = count;
          }
          if(current > count) {
            current = 0;
          }
          
          //end block

          sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
          var onscreen = sync2.find('.owl-item.active').length - 1;
          var start = sync2.find('.owl-item.active').first().index();
          var end = sync2.find('.owl-item.active').last().index();
          https://thietbivanphong123.com/data/upload/ST8000VN004.jpg
          if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
          }
          if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
          }
        }
        
        function syncPosition2(el) {
          if(syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
          }
        }
        
        sync2.on("click", ".owl-item", function(e){
          e.preventDefault();
          var number = $(this).index();
          sync1.data('owl.carousel').to(number, 300, true);
        });
      });
  </script> 
  
   
      <div style="height: 1840px;position: fixed;width: 100%;top: 0px;left: 0px;right: 0px;bottom: 0px;z-index: 1001;background: #000 none repeat scroll 0% 0%;opacity: 0.3;display: none;text-align:center" id="khungnen"></div>
      <div style="display: none;left: 70%;margin-left: -309px;z-index: 1002;position: fixed;top: 40%;margin-top: 0px;" id="loadding">
        
      
      </div>
   </body>
   <script src="https://code.jquery.com/jquery-1.12.1.min.js" type="text/javascript"></script>
      
      <script>
          /* -------------------------------------------------------------------------*
          * STICKY NAVIGATION
          * -------------------------------------------------------------------------*/
          $(window).scroll(function () {
              if ($(window).scrollTop() >= 180) {
                  $('#nav').addClass('navbar-fixed-top');
              }


              if ($(window).scrollTop() >= 181) {
                  $('#nav').addClass('show');
              } else {
                  $('#nav').removeClass('show navbar-fixed-top');
              }
          });
</script>
</html>

  <style type="text/css">

.footer-bottom {
  margin-right: 0;
  text-align: left;
  background: #222; }
  .footer-bottom h3 {
    font-family: monospace;
    font-size: 12px;
    letter-spacing: normal;
    line-height: 22px;
    background-color: #222222;
    margin: 0; }


#footer {
  position: relative;
  background-color: #2f2f2f; }
  #footer .widget {
    width: 100%;
   margin:0px 10px;
    float: left;
    display: block;
    padding-top: 30px; }
  #footer .widget ul {
    font-family: Roboto Condensed, sans-serif;
    padding: 0; }
    #footer .widget ul li {
      padding-top: 2px;
      padding-bottom: 2px;
      font-size: 14px; }
  #footer .widget .widget-title {
    padding: 5px;
    text-align: center;
    font-weight: 200;
    color: #fff;
    margin-top: 0;
    background-color: #4f4f4f;
    margin-bottom: 15px;
    font-size: 21px;
    letter-spacing: normal;
    font-family: Oswald; }
  #footer .widget i {
    width: 16px;
    color: #00abff; }
  #footer .widget li {
    color: #777; }
  #footer .widget span {
    padding-left: 24px; }


.collection_row_flex-left.cate_mobile {
  width: 100%;
}

.map {
  padding-bottom: 10px;
  padding-top: 30px; }

}