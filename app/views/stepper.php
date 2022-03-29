<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="app/public/css/frame.css" />
  <script src="script.js" defer></script>
  <title>Registraion Form</title>
</head>

<body>
  <form action="#" class="form modal">
    <h1 class="text-center">فورم الشراء </h1>
    <!-- Progress bar -->
    <div class="progressbar">
      <div class="progress" id="progress"></div>

      <div class="progress-step progress-step-active" data-title="معلومات شخصية"></div>
      <div class="progress-step" data-title="التواصل"></div>
      <div class="progress-step" data-title="رقم التعريف"></div>
      <div class="progress-step" data-title=" السرية"></div>
    </div>

    <!-- Steps -->
    <div class="form-step form-step-active">
      <div class="input-group">
        <label for="username">الاسم</label>
        <input type="text" name="username" id="username" />
      </div>
      <div class="input-group">
        <label for="position">العنوان</label>
        <input type="text" name="position" id="position" />
      </div>
      <div class="">
        <a href="#" class="btn btn-next width-50 ml-auto">التالي</a>
      </div>
    </div>
    <div class="form-step">
      <div class="input-group">
        <label for="phone">رقم الجوال</label>
        <input type="text" name="phone" id="phone" />
      </div>
      <div class="input-group">
        <label for="email">الايميل</label>
        <input type="text" name="email" id="email" />
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">السابق </a>
        <a href="#" class="btn btn-next">التالي</a>
      </div>
    </div>
    <div class="form-step">
      <div class="input-group">
        <label for="dob">تاريخ الميلاد</label>
        <input type="date" name="dob" id="dob" />
      </div>
      <div class="input-group">
        <label for="ID">رقم البطاقة </label>
        <input type="number" name="ID" id="ID" />
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">السابق</a>
        <a href="#" class="btn btn-next">التالي</a>
      </div>
    </div>
    <div class="form-step">
      <div class="input-group">
        <label for="password">كلمة السر</label>
        <input type="password" name="password" id="password" />
      </div>
      <div class="input-group">
        <label for="confirmPassword"> كود التحقق</label>
        <input type="password" name="confirmPassword" id="confirmPassword" />
      </div>
      <div class="btns-group">
        <a href="#" class="btn btn-prev">السابق</a>
        <a href="../index.html" class="btn">
          دفع
        </a>
      </div>
    </div>
  </form>
  <script>
    const prevBtns = document.querySelectorAll(".btn-prev");
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-step");

    let formStepsNum = 0;

    nextBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
        updateProgressbar();
      });
    });

    prevBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
      });
    });

    function updateFormSteps() {
      formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
          formStep.classList.remove("form-step-active");
      });

      formSteps[formStepsNum].classList.add("form-step-active");
    }

    function updateProgressbar() {
      progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
          progressStep.classList.add("progress-step-active");
        } else {
          progressStep.classList.remove("progress-step-active");
        }
      });

      const progressActive = document.querySelectorAll(".progress-step-active");

      progress.style.width =
        ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
    }
  </script>
</body>

</html>