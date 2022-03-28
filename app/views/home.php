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
  <link rel="stylesheet" href="app/public/css/hom.css" />
  <link rel="stylesheet" href="app/public/css/sing.css" />
  <link rel="stylesheet" href="app/public/css/style.css" />
  <link rel="stylesheet" href="app/public/css/slide.css" />
  <!-- <link rel="stylesheet" href="slider.css" /> -->
</head>

<body class="">
  <!-- header section starts  -->
  <header class="header">
    <nav class="navbar" class="">
      <a href="#" onclick="document.getElementById('idlogin').style.display='block'"><img src="app/public/img/svg/svgexport-1.svg" class="nav_icon" /> ادخل لحسابك أو
        سجل الآن</a>
      <a href="#"><img src="RewriteEngine On

RewriteCond %{REQUEST_FILE_NAME} !/(css|fonts|js)/
RewriteCond %{REQUEST_FILE_NAME} !-d
RewriteCond %{REQUEST_FILE_NAME} !-f

RewriteRule ^(.+)$ index.php?url=$1 [QSA,l]
/app/public/img/svg/svgexport-2.svg" class="nav_icon" />الرئيسية</a>
      <a href="#"><img src="app/public/img/svg/svgexport-3.svg" class="nav_icon" />من نحن</a>
      <a href="#"><img src="app/public/img/svg/svgexport-4.svg" class="nav_icon" />اتصل بنا</a>
      <a href="#"><img src="app/public/img/svg/svgexport-5.svg" class="nav_icon" /> المساعدة</a>
      <a href="#"><img src="app/public/img/svg/svgexport-11.svg" class="nav_icon" />سياسة
        الخصوصية</a>
      <a href="#"><img src="app/public/img/svg/svgexport-12.svg" class="nav_icon" /> اليمن YER
      </a>
      <a href="#" id='switch_lang' onclick="switchrow">English<img src="app/public/img/svg/svgexport-14.svg" class="nav_icon" /></a>
    </nav>
    <!-- <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
      </div> -->
    <div class="lose">
      <a href="#" class="logo"><img src="app/public/img/logo.PNG" alt="logo" /> </a>
      <form action="">
        <input type="search" id="search-bar" placeholder="البحث" />
        <label for="search-bar" class="fas fa-search"></label>
        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
      </form>
      <div class="iconShopping" id="">
        <button type="button" class="icon-button">
          <a href="/checkout" class="fas fa-shopping-cart"></a>
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
    <section class="hello-_-">
      <div class="slideshow-container">

        <div class="mySlides fade">

          <img src="app/public/img/slider_img2.jpg" style="width:100%">

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


    <!-- home -->
    <section class="book-types">
      <h3 class="sec-title"> تصفح حسب القسم</h3>
      <div class="typ-container">
        <img src="app/public/img/svg/rightArrow.svg" alt="" />
        <div class="section">
          <img src="app/public/img/svg/svgexport-46.svg" alt="" />
          <p style="color:hsl(355, 69%, 16%);font-size: 1.6rem; padding-top: 1rem;">دين</p>
        </div>
        <div class="section">
          <img src="app/public/img/svg/svgexport-42.svg" alt="" />
          <p style="color: #f67828;font-size: 1.6rem; padding-top: 1rem;">تاريخ</p>
        </div>
        <div class="section">
          <img src="app/public/img/svg/svgexport-44.svg" alt="" />
          <p style="color: #76689a;font-size: 1.6rem; padding-top: 1rem;">روايات</p>
        </div>
        <div class="section">
          <img src="app/public/img/svg/svgexport-46.svg" alt="" />
          <p style="color: #bc4077;font-size: 1.6rem; padding-top: 1rem;">سياسة</p>
        </div>

        <div class="section">
          <img src="app/public/img/svg/svgexport-45.svg" alt="" />
          <p style="color: #0089b6; font-size: 1.6rem; padding-top: 1rem;">اقتصاد</p>
        </div>
        <div class="section">
          <img src="app/public/img/svg/svgexport-47.svg" alt="" />
          <p style="color: #7db344;font-size: 1.6rem; padding-top: 1rem;">طبخ</p>
        </div>
        <div class="section">
          <img src="app/public/img/svg/svgexport-48.svg" alt="" />
          <p style="color: #9c223f;font-size: 1.6rem; padding-top: 1rem;">تربية</p>
        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" />
      </div>
    </section>
    <!-- galary -->
    <section class="galary">
      <div class="box">
        <img src="app/public/img/slider_img.webp" alt="">
        <img src="app/public/img/slider_img2.jpg" alt="">
        <img src="app/public/img/slider_img3.jpg" alt="">
        <img src="app/public/img/slider_img4.webp" alt="">
      </div>
      <img src="app/public/img/slider_img.webp" alt="">
    </section>

    <!--   current-offers   -->
    <div class="current-offers">
      <div class="head">
        <p>العروض الحالية</p>
        <a href="/category">عرض الكل</a>
      </div>
      <div class="offers">

        <img src="app/public/img/svg/rightArrow.svg" alt="" class="navgo" />
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <!-- -->
          <a href="/detailes">
            <img src="app/public/img/books/beYou.jpg" /></a>
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

          <span class="alert"> لم يتبقى الكثيرعلى العرض</span>
          <div class="counter-container">
            D <div id="days"></div>
            :&nbsp;&nbsp;
            H<div id="hours"></div>
            :&nbsp;&nbsp;
            M<div id="minutes"></div>
            :&nbsp;&nbsp;
            S<div id="seconds"></div>
          </div>
        </div>


        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <!-- -->
          <a href="/detailes">
            <img src="app/public/img/books/beYou.jpg" /></a>
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
          <span class="alert"> لم يتبقى الكثيرعلى العرض</span>
          <div class="counter-container">
            D <div id="days2"></div>
            :&nbsp;&nbsp;
            H<div id="hours2"></div>
            :&nbsp;&nbsp;
            M<div id="minutes2"></div>
            :&nbsp;&nbsp;
            S<div id="seconds2"></div>
          </div>
        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <a href="/detailes">
            <img src="app/public/img/books/beYou.jpg" /></a>

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
          <span class="alert"> لم يتبقى الكثيرعلى العرض</span>
          <div class="counter-container">
            D <div id="days3"></div>
            :&nbsp;&nbsp;
            H <div id="hours3"></div>
            :&nbsp;&nbsp;
            M <div id="minutes3"></div>
            :&nbsp;&nbsp;
            S <div id="seconds3"></div>
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <a href="/detailes">
            <img src="app/public/img/books/beYou.jpg" /></a>

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
          <span class="alert"> لم يتبقى الكثيرعلى العرض</span>
          <div class="counter-container">
            D <div id="days4"></div>
            :&nbsp;&nbsp;
            H <div id="hours4"></div>
            :&nbsp;&nbsp;
            M <div id="minutes4"></div>
            :&nbsp;&nbsp;
            S <div id="seconds4"></div>
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <a href="/detailes">
            <img src="app/public/img/books/beYou.jpg" /></a>

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
          <span class="alert"> لم يتبقى الكثيرعلى العرض</span>
          <div class="counter-container">
            D <div id="days5"></div>
            :&nbsp;&nbsp;
            H <div id="hours5"></div>
            :&nbsp;&nbsp;
            M <div id="minutes5"></div>
            :&nbsp;&nbsp;
            S <div id="seconds5"></div>
          </div>
        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" class="navgo" />
      </div>

    </div>

    <!--   religious books   -->
    <div class="current-offers">
      <div class="head">
        <p>الكتب الدينية</p>
        <a href="/category">عرض الكل</a>
      </div>

      <div class="offers">
        <img src="app/public/img/svg/rightArrow.svg" alt="" class="navgo" />
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <a href="/detailes">
            <img src="app/public/img/books/beYou.jpg" /></a>
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/fullSelfTrust.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">كلي نامي وأبهري الاخرين الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" class="navgo" />
      </div>

    </div>

    <!--   historical books   -->
    <div class="current-offers">
      <div class="head">
        <p>الكتب التاريخية</p>
        <a href="/category">عرض الكل</a>
      </div>

      <div class="offers">
        <img src="app/public/img/svg/rightArrow.svg" alt="" class="navgo" />
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/beYou.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/fullSelfTrust.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" class="navgo" />
      </div>

    </div>

    <!--   politics books   -->
    <div class="current-offers">
      <div class="head">
        <p>الكتب السياسية</p>
        <a href="/category">عرض الكل</a>
      </div>

      <div class="offers">
        <img src="app/public/img/svg/rightArrow.svg" alt="" class="navgo" />
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/beYou.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/fullSelfTrust.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" class="navgo" />
      </div>


    </div>

    <!--   economy books   -->
    <div class="current-offers">
      <div class="head">
        <p>الكتب اللإقتصادية</p>
        <a href="/category">عرض الكل</a>
      </div>

      <div class="offers">
        <img src="app/public/img/svg/rightArrow.svg" alt="" class="navgo" />
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/beYou.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/fullSelfTrust.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" class="navgo" />
      </div>

    </div>

    <!--   cooking books   -->
    <div class="current-offers">
      <div class="head">
        <p>كتب الطبخ</p>
        <a href="/category">عرض الكل</a>
      </div>

      <div class="offers">
        <img src="app/public/img/svg/rightArrow.svg" alt="" class="navgo" />
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/beYou.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/fullSelfTrust.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" class="navgo" />
      </div>

    </div>

    <!--   the best romantic novels   -->
    <div class="current-offers">
      <div class="head">
        <p>أفضل الروايات الرومانسية</p>
        <a href="/category">عرض الكل</a>
      </div>

      <div class="offers">
        <img src="app/public/img/svg/rightArrow.svg" alt="" class="navgo" />
        <!-- ------ offer 1 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/beYou.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">كن انت (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/fullSelfTrust.jpg" alt="" />
          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>
          <p class="title">الثقة التامة بالنفس (كتاب الكتروني)</p>
          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>
          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/karmaDiagnosis.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">تشخيص الكارما (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">الثقة الحقيقية (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer">
          <!-- -->
          <img src="app/public/img/books/yourNewSelf.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title">ذاتك الجديدة (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>
          <div class="options">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>
        <img src="app/public/img/svg/rightArrow.svg" style="transform: rotateY(180deg)" alt="" class="navgo" />
      </div>

    </div>
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

  <script src="js/app.js"></script>
  <script src="js/slid.js"></script>
  <script src="js/langSwitch.js"></script>
  <script src="js/basket.js"></script>
</body>

</html>