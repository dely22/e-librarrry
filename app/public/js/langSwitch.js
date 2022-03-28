var direction=document.getElementsByClassName('.navbar');
function switchrow(){
direction.className.replace(" active", "");
}
const switch_lang = document.getElementById('switch_lang');
const body = document.getElementsByTagName('body')

let cuurentLang = localStorage.getItem('lang')
const checkLang = () => {
    console.log('[before the storage]', cuurentLang);
    if (cuurentLang != null) {
        if (cuurentLang === 'en') {
            body[0].classList.add('en');
            // body[0].dir="ltr"
        }
        else {
            body[0].classList.remove('en');
            // body[0].dir="rtl"

        }
    } else {
        body[0].classList.add('en')
    }
    console.log('[afer the chainge]', cuurentLang);
    localStorage.setItem('lang', cuurentLang)
    switch_lang.innerText = cuurentLang === 'en' ? 'english' : 'العربية'
}
switch_lang.innerText = body[0].className === '' ? 'english' : 'العربية'
switch_lang.addEventListener('click', (e) => {
    cuurentLang === 'en' ? 'ar' : 'en'
    body[0].classList.toggle('en')
    switch_lang.innerText = body[0].className === '' ? 'english' : 'العربية'
})