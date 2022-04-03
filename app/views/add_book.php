<!DOCTYPE html>


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="assets/" data-template="vertical-menu-template-semi-dark">


<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:12 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Add-book</title>

    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu start -->
            <?php include("aside.php"); ?>
            <!-- Menu End -->

            <!-- header start  -->
            <?php include("header.php"); ?>
            <!-- header End  -->

            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted"> اضافة </span> كتاب جديد </h4>
                    <!-- Multi Column with Form Separator -->
                    <div class="card mb-4">
                        <!-- <h5 class="card-header">انشاء كتاب جديد</h5> -->
                        <form class="card-body" action="/save_book" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-username">عنوان الكتاب</label>
                                    <input name="title" type="text" id="multicol-username" class="form-control" placeholder="" />
                                </div>
                                <div class="col-md-6">
                                    <label for="formFile" class="form-label">الصورة</label>
                                    <input class="form-control" name="image" type="file" id="formFile">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-pages_number">رقم الصفحات</label>
                                    <input name="pages_number" type="number" id="multicol-pages_number" class="form-control" placeholder="" />
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-username">سعر الكتاب</label>
                                    <input name="price" type="number" id="multicol-phone" class="form-control" placeholder="" />
                                </div>
                                <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                                    <label class="form-label" for="multicol-email"> القسم</label>
                                    <select name="categories" class="form-select item-details mb-2">
                                        <?php
                                        foreach ($params['categories'] as $category) {
                                        ?>
                                            <option value='<?= $category['id'] ?>'><?= $category['name'] ?></option>

                                        <?php

                                        } ?>

                                    </select>
                                </div>
                                <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                                    <label class="form-label" for="multicol-email"> الكاتب</label>
                                    <select name="authors" class="form-select item-details mb-2">
                                        <?php
                                        foreach ($params['authors'] as $author) {
                                        ?>
                                            <option value='<?= $author['id'] ?>'><?= $author['name'] ?></option>

                                        <?php

                                        } ?>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                                    <label class="form-label" for="multicol-email"> الناشر</label>
                                    <select name="publishers" class="form-select item-details mb-2">
                                        <?php
                                        foreach ($params['publishers'] as $publisher) {
                                        ?>
                                            <option value='<?= $publisher['id'] ?>'><?= $publisher['name'] ?></option>

                                        <?php

                                        } ?>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-country">الكمية</label>
                                    <input name="quantity" type="number" id="multicol-country" class="form-control" placeholder="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-format">الصيغة</label>
                                    <input name="format" type="text" id="multicol-format" class="form-control" placeholder="" />
                                </div>
                                <div class="col-md-6">
                                    <div class="form-password-toggle">
                                        <label class="form-label" for="multicol-confirm-password">الحالة</label>
                                        <div class="input-group input-group-merge">
                                            <label class="switch">
                                                <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label"> مفعل </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="exampleFormControlTextarea1" class="form-label">الوصف</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>


                            <div class="pt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">إضافة</button>
                                <button type="reset" class="btn btn-label-secondary">إلغاء</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php include("footer.php"); ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="assets/vendor/libs/moment/moment.js"></script>
    <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="assets/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/form-layouts.js"></script>

</body>


<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:13 GMT -->

</html>