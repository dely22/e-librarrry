<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-librarri</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-betapp/public/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15app/public/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="app/public/css/style.css" />
  <link rel="stylesheet" href="app/public/css/detail.css" />
  <link rel="stylesheet" href="app/public/css/sing.css" />
  <link rel="stylesheet" href="app/public/css/slide.css" />

</head>

<body>
  <!-- header section starts  -->
  <header class="header" id="header">
    <nav class="navbar" class="">
      <a href="#" onclick="document.getElementById('idlogin').style.display='block'"><img src="app/public/img/svg/svgexport-1.svg" class="nav_icon" /> ادخل لحسابك أو
        سجل الآن</a>
      <a href="../index.html"><img src="app/public/img/svg/svgexport-2.svg" class="nav_icon" />الرئيسية</a>
      <a href="#"><img src="app/public/img/svg/svgexport-3.svg" class="nav_icon" />من نحن</a>
      <a href="#"><img src="app/public/img/svg/svgexport-4.svg" class="nav_icon" />اتصل بنا</a>
      <a href="#"><img src="app/public/img/svg/svgexport-5.svg" class="nav_icon" /> المساعدة</a>
      <a href="#"><img src="app/public/img/svg/svgexport-11.svg" class="nav_icon" />سياسة
        الخصوصية</a>
      <a href="#"><img src="app/public/img/svg/svgexport-12.svg" class="nav_icon" /> اليمن YER
      </a>
      <a href="#" id='switch_lang' onclick="switchrow">English<img src="app/public/img/svg/svgexport-14.svg" class="nav_icon" /></a>
    </nav>
    <div class="lose">
      <a href="#" class="logo"><img src="app/public/img/logo.PNG" alt="logo" /> </a>

      <form action="">
        <input type="search" id="searchbar" placeholder="البحث" onkeyup="search_book()" />
        <label for="search-bar" class="fas fa-search"></label>
        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
      </form>

      <div class="iconShopping" id="">
        <button type="button" class="icon-button">
          <a href="checkout.html" class="fas fa-shopping-cart"></a>
          <p id='cart-counter' class="icon-button__badge">0</p>
          <!-- icon noto end -->
      </div>

    </div>
  </header>
  <!-- header section ends -->
  <main class="main">
    <!-- Login Model -->
    <section id="idlogin" class="login modal">
      <form class="modal-content animate" action=" " method="post">
        <h2>تسجيل الدخول</h2>
        <hr />
        <div class="close-container">
          <span onclick="document.getElementById('idlogin').style.display='none'" class="close" title=" أغلق الفورم">&times;</span>
        </div>

        <div class="container">
          <input type="text" placeholder=" البريد الاكتروني أو رقم الجوال" name="uname" required />

          <div style="display: inline">
            <input type="password" placeholder="كلمة السر" name="psw" required />
            <span class="psw"> <a href="#">نسيت؟</a></span>
          </div>
          <button type="submit">تسجيل الدخول</button>
        </div>
        <div class="container-boto">
          <label> ليس لديك حساب؟ </label>
          <button type="button" id="sing" class="singation" onclick="document.getElementById('idlogin').style.display='none';
              document.getElementById('idsing').style.display='block';">
            انشاء حساب جديد
          </button>
        </div>
      </form>
    </section>
    <!-- End LogIn -->

    <!-- singUp Model -->
    <section id="idsing" class="singup modal">
      <form action="" class="modal-content animate">
        <h2>إنشاء حساب</h2>
        <hr>
        <div class="close-container">
          <span onclick="document.getElementById('idsing').style.display='none'" class="close" title=" أغلق الفورم">&times;</span>
        </div>
        <div class="phone-number">
          <input type="number" name="" placeholder="رقم الجوال" id="phone" />
          <select name="countryCode" id="countryCode">
            <option data- value="+970">+970</option>
            <option style="background-image: url(app/public/img/svg/country.svg)">
              +970
            </option>
          </select>
        </div>
        <p>سوف نرسل لك <strong>رمز التحقق عن طريق رسالة نصية</strong></p>

        <button class="btn">إرسال رمز التحقق</button>
        <input type="text" name="" placeholder="الإسم الأول" id="" />
        <input type="text" name="" placeholder="أسم العائلة" id="" />
        <input type="email" name="" placeholder="البريد الإلكتروني" id="" />
        <input type="email" name="" placeholder="تأكيد البريد الإلكتروني" id="" />
        <input type="text" name="" placeholder="كلمة المرور" id="" />

        <div class="check">
          <input type="checkbox" name="agree" id="" checked />
          <label for="agree">أوافق علي <a href="">الشروط والاحكام</a></label>
        </div>
        <div class="check">
          <input type="checkbox" name="email-post-signIn" id="" checked />
          <label for="agree">التسجيل للإنضمام للنشرة الإخبارية</label>
        </div>
        <input type="submit" class="btn" value="إنشاء حساب" />

        <button class="sign_btn3">إنشاء حساب</button>
        <div class="container2">
          <p>
            لديك حساب؟
            <a style="color: blue; cursor: pointer;" onclick="document.getElementById('idsing').style.display='none'; 
                    document.getElementById('idlogin').style.display='block'">
              تسجيل الدخول<img src="app/public/img/svg/svgexport-17.svg"> </a>

          </p>
        </div>

        </div>
      </form>
    </section>
    <!-- End singUp -->

    <!-- slider start -->
    <!-- slider start -->
    <section>
      <div class="slideshow-container">

        <div class="mySlides fade">

          <img src="app/public/img/slider_img2.webp" style="width:100%">

        </div>

        <div class="mySlides fade">

          <img src="app/public/img/slider_img.webp" style="width:100%">

        </div>

        <div class="mySlides fade">

          <img src="app/public/img/slider_img3.jpg" style="width:100%">

        </div>

        <!-- <a class="prev" onclick="plusSlides_he(+1)">&#10094;</a>
                  <a class="next" onclick="plusSlides_he(1)">&#10095;</a> -->



        <div class="leftslid" onclick="plusSlides_he(+1)">

          &#10095;
        </div>
        <div class="rightslid" onclick="plusSlides_he(1)">
          &#10094;

        </div>



      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide_he(1)"></span>
        <span class="dot" onclick="currentSlide_he(2)"></span>
        <span class="dot" onclick="currentSlide_he(3)"></span>
      </div>

    </section>
    <!-- slider end -->
    <!-- slider end -->

    <!-- main sec -->
    <section class="det-books">
      <nav class="tit_nav">
        <a href="../index.html"> الرئيسية / </a>
        <a href=""> الكتب العربية / </a>
        <a href=""> كتب الكترونية / </a>
        <a href="">لأنك الله (كتاب الكتروني)</a>
      </nav>
      <div class="continer">
        <div class="book">
          <a href="#" onclick="document.getElementById('show-details').style.display='block';">
            <img src="app/public/img/books/beYou.jpg"></a>
          <div class="slido">
            <img src="app/public/img/books/beYou.jpg">
          </div>
        </div>

        <div class="bo-detail">
          <h3>لأنك الله (كتاب الكتروني) </h3>
          <div class="pric">
            <p>عرض المزيد&blacktriangledown;</p>
            <p>12.99<span>رس </span></p>
            <span>شامل الضريبه</span>
          </div>
          <div class="star">
            <span>وحدة البيع Each </span>
            <p><span>&starf; &starf; &starf; &starf; &starf;</span> (15 المراجعات)</p>
            <span>رقم الصنف <strong>JBB410156</strong>&MediumSpace; رقم المنتج <strong>4</strong></span>
          </div>
          <div class="format">
            <p>الصيغ المتوفرة: </p>
            <div class="option">
              <label>
                <input type="radio" checked> كتاب الكتروني </label>
              <p>12.99<span>رس </span></p>
            </div>
            <div class="option">
              <label>
                <input type="radio"> كتاب مطبوع </label>
              <p>17.25<span>رس </span></p>
            </div>


          </div>
        </div>
        <div class="shoop">
          <div class="text">
            <p>
              <strong>ملاحظة: </strong>
              سيتم اضافة هدا الكتاب الاكتروني الى مكتبتك في قارئ جرير
            </p>
            <a href="#"> اقرأ المزيد</a>

          </div>
          <div class="add">
            <button> 1 &blacktriangledown;</button>
            <button> <a href="checkout.html"><img src="app/public/img/svg/cartRed.svg"> أضف الى السلة</a> </button>
          </div>
          <div class="prop">
            <div class="row">
              <a href="#"><img src="app/public/img/svg/svgexport-16.svg" class="nav_icon" />تسوق امن
              </a>
              <a href="#"><img src="app/public/img/svg/svgexport-4.svg" class="nav_icon" />أصلي و مضمون
              </a>

            </div>
            <a href="#"><img src="app/public/img/svg/svgexport-3.svg" class="nav_icon" /> شحن سريع ومجاني </a>
          </div>
          <hr>
          <div class="shar">
            <button> &hearts; مشاركة</button>
            <button> &hearts; المفضلة </button>
            <button> &hearts; مقارنة </button>
          </div>
          <div class="shoop">
            <div class="shar">
              <button> &hearts; مشاركة</button>
              <button> &hearts; المفضلة </button>
              <button> &hearts; مقارنة </button>
            </div>
          </div>
        </div>

      </div>
      <p class="descrip">
        كتاب يتحدث عن بعض أسماء الله الحسنى وكيف نعيشها في حياتنا , حرص المؤلف أن يكون الكتاب مناسبا لمن هم متوسطي الثقافة ويكون مناسبا للمحتاج والمريض والسليم
      </p>
    </section>
    <section id="show-details" class="modal">
      <div class="close-container">
        <span onclick="document.getElementById('show-details').style.display='none'" class="close" title=" أغلق">&times;</span>
      </div>
      <div class="sl-content">
        <img class="bookImgSlides" src="app/public/img/books/beYou.jpg" />
        <img class="bookImgSlides" src="app/public/img/books/fullSelfTrust.jpg" />
        <img class="bookImgSlides" src="app/public/img/books/realConfidence.jpg" />
        <div class="contSlid" style="width: 100%">
          <div class="leftslid" onclick="plusDivs(1)">
            &#10095;
          </div>
          <div class="rightslid" onclick="plusDivs(-1)">
            &#10094;
          </div>
          <div class="imgslid">
            <img src="app/public/img/books/beYou.jpg" class="imghover demo" onclick="currentDiv(1)" />
            <img src="app/public/img/books/fullSelfTrust.jpg" class="imghover demo" onclick="currentDiv(2)" />
            <img src="app/public/img/books/realConfidence.jpg" class="imghover demo" onclick="currentDiv(3)" />
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- footer section starts  -->
  <footer class="footer">
    <div class="box-container">
      <div class="box">
        <h3>انضم إلى نشرتنا البريدية</h3>
        <form action="">
          <input type="email" id="mail" name="" placeholder="ادخل بريدك  الكتروني" class="email" />
          <label for="mail" class="fa-solid fa-lock"></label>
          <input type="submit" value="اشترك" class="btn" />
        </form>
        <div class="box">
          <h4>تواصل معنا</h4>
          <div class="share">
            <a href="#">
              <img src="app/public/img/svg/svgexport-58.svg" class="shar_icon" /></a>
            <a href="#"><img src="app/public/img/svg/svgexport-59.svg" class="shar_icon" /></a>
            <a href="#"><img src="app/public/img/svg/svgexport-60.svg" class="shar_icon" /></a>
            <a href="#"><img src="app/public/img/svg/svgexport-61.svg" class="shar_icon" /></a>
            <a href="#"><img src="app/public/img/svg/svgexport-62.svg" class="shar_icon" /></a>
            <a href="#"><img src="app/public/img/svg/svgexport-63.svg" class="shar_icon" /></a>
            <a href="#"><img src="app/public/img/svg/svgexport-64.svg" class="shar_icon" /></a>
          </div>
        </div>
      </div>

      <div class="box">
        <h3>خدمة العملاء</h3>
        <a href="#"> مبيعات الشركات </a>
        <a href="#"> الأسئلة المتكررة </a>
        <a href="#"> دليل التسوق والمطبوعات </a>
        <a href="#"> مواقع المعارض </a>
        <a href="#"> سياسة الضمان </a>
        <a href="#"> سياسة الاسترجاع والاستبدال </a>
        <a href="#"> اتصل بنا <span>></span> </a>
        <a href="#"><span>920000089</span></a>
      </div>
      <div class="box">
        <h3>خدمات جرير</h3>
        <a href="#"> خدمة تقسيط المشتريات </a>
        <a href="#"> خدمات ما بعد البيع </a>
        <a href="#"> خدمة الحماية الشاملة </a>
        <a href="#"> خدمة تمديد الضمان </a>
        <a href="#"> حماية أجهزة آبل</a>
        <a href="#"> بطاقة جرير للهدايا</a>
      </div>

      <div class="box">
        <h3>روابط سريعة</h3>
        <a href="#"> إصدارات جرير</a>
        <a href="#"> قارئ جرير</a>
        <a href="#"> شركاء برامج المكافئات</a>
        <a href="#"> خدمات شركات الإتصالات</a>
      </div>
      <div class="box">
        <h3>عن جرير</h3>
        <a href="#">من نحن</a>
        <a href="#">الحوكمة</a>
        <a href="#">علاقات المستثمرين والتقارير</a>
        <a href="#">الاستدامة</a>
        <a href="#">الأخبار</a>
        <a href="#">فرص العمل</a>
      </div>
    </div>

    <div class="credit">
      <div class="copyright__text">
        <p>سياسة الخصوصية| شروط الخدمة</p>
        <p>
          .جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين
          س.ت. 1010654213
        </p>
      </div>
      <div class="brands">
        <a href="#"><img src="app/public/img/svg/svgexport-65.svg" /></a>
        <a href="#"><img src="app/public/img/svg/svgexport-66.svg" /></a>
        <a href="#"><img src="app/public/img/svg/svgexport-67.svg" /></a>
        <a href="#"><img src="app/public/img/svg/svgexport-68.svg" /></a>
        <a href="#"><img src="app/public/img/svg/svgexport-69.svg" /></a>
        <a href="#"><img src="app/public/img/svg/svgexport-70.svg" /></a>
        <!-- <img src="app/public/img/payment.png" alt="payment image" /> -->
      </div>
    </div>
  </footer>
  <!-- footer section ends -->


  <script src="app/public/js/slid.js"></script>
  <script src="app/public/js/langSwitch.js"></script>
  <script src="app/public/js/basket.js"></script>
  <script>
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("bookImgSlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = x.length;
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" s-active", "");
      }
      x[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " s-active";
    }
  </script>
</body>

</html>

</html>