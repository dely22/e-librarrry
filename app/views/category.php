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
  <link rel="stylesheet" href="app/public/css/hom.css" />
  <link rel="stylesheet" href="app/public/css/slide.css" />
</head>

<body class="">
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
    <section id="idlogin" class="modal">
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
          <button type="button" class="singation" onclick="document.getElementById('idlogin').style.display='none';
              document.getElementById('idsing').style.display='block';">
            انشاء حساب جديد
          </button>
        </div>
      </form>
    </section>
    <!-- End LogIn -->

    <!-- singUp Model -->
    <section>
      <div id="idsing" class="modal">
        <span onclick="document.getElementById('idsing').style.display='none'" class="close3" title="Close Modal">&times;</span>
        <form class="modal-content" action="#">
          <div class="container">
            <div class="textcontainer">
              <h2>إنشاء حساب</h2>
              <hr />
            </div>
            <input type="tel" placeholder="رقم الجوال" name="number" required />
            <select id="country" name="country" aria-placeholder="رمز البلاد">
              <img src="app/public/img/svg/svgexport-12.svg" />
              <option dir="rtl" value="australia">+970</option>
            </select>
            <br />
            <a>سوف نرسل لك <b>رمز التحقق عن طريق رسالة نصية</b></a>
            <button class="sign_btn3">إرسال رمز التحقق</button>
            <input type="text" placeholder="الاسم الاول" name="" required />
            <input type="text" placeholder="اسم العائلة" name="" required />
            <input type="email" placeholder="البريد الإلكتروني" name="email" required />
            <input type="email" placeholder="تأكيد البريد  الكتروني" name="email" required />
            <input type="password" placeholder="كلمة السر" name="psw" required />

            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px" />
              أوافق <strong style="color: blue">على الشروط والاحكام</strong>
            </label>
            <br />
            <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px" />
              التسجيل للانضمام للنشرة البريدية
            </label>
            <button class="sign_btn3">إنشاء حساب</button>
            <div class="container2">
              <p>
                لديك حساب؟
                <!-- <a  style="color: blue; cursor: pointer;" onclick="document.getElementById('idlog').style.display='block'" >تسجيل الدخول<img src="svg/svgexport-17.svg"> </a> -->
                <span onclick="document.getElementById('idsing').style.display='none'" style="color: blue; cursor: pointer">تسجيل الدخول<img src="app/public/img/svg/svgexport-17.svg" /></span>
              </p>
            </div>
          </div>
        </form>
      </div>
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

    <!--   current-offers   -->
    <!--   cooking books   -->
    <div class="current-offers ">
      <div class="head">
      </div>

      <div class="offers list">
        <!-- ------ offer 1 ------ -->
        <div class="offer seritem">
          <a href="detailes.html"> <img src="app/public/img/books/beYou.jpg" alt="" /></a>
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

          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <!-- attToCart is for counter in js -->
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 2 ------ -->
        <div class="offer seritem">
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
          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 3 ------ -->
        <div class="offer seritem">
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

          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 4 ------ -->
        <div class="offer seritem">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title"> كلي ونامي وأبهري (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer seritem">
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
          <!-- -->
        </div>

        <!-- ------ offer 5 ------ -->
        <div class="offer seritem">
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
          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>
        <!-- ------ offer 5 ------ -->
        <div class="offer seritem">
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
          <!-- -->
        </div>
        <!-- ------ offer 4 ------ -->
        <div class="offer seritem">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title"> كلي ونامي وأبهري (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>
        <!-- ------ offer 5 ------ -->
        <div class="offer seritem">
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
            <img src="app/public/img/svg/cartRed.svg" alt="" />
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>
          <!-- -->
        </div>
        <!-- ------ offer 5 ------ -->
        <div class="offer seritem">
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
        <!-- ------ offer 4 ------ -->
        <div class="offer seritem">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title"> كلي ونامي وأبهري (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>
        <!-- ------ offer 5 ------ -->
        <div class="offer seritem">
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
          <!-- -->
        </div>
        <!-- ------ offer 5 ------ -->
        <div class="offer seritem">
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
        <!-- ------ offer 4 ------ -->
        <div class="offer seritem">
          <!-- -->
          <img src="app/public/img/books/realConfidence.jpg" alt="" />

          <div class="type">
            <img src="app/public/img/svg/bookRed.svg" alt="" />
            <span>كتاب الإلكتروني</span>
          </div>

          <p class="title"> كلي ونامي وأبهري (كتاب الكتروني)</p>

          <div class="price">
            <p>17.99</p>
            <p>ر.س</p>
          </div>

          <p class="other"></p>

          <div class="options" id="group">
            <img src="app/public/img/svg/star.svg" alt="" />
            <a href="#" class="cart_icon"> <img src="app/public/img/svg/cartRed.svg" title="أضف للسلة" class="shop" /></a>
            <img src="app/public/img/svg/inverseDirectionArrows.svg" alt="" />
          </div>

        </div>


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

  <script src="app/public/js/app.js"></script>
  <script src="app/public/js/slid.js"></script>
  <script src="app/public/js/basket.js"></script>
</body>

</html>

</html>