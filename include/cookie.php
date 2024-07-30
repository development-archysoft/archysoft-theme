<div class="cookie">
    <div class="cookie_title">
        Manage Cookie Consent
    </div>
    <div class="cookie_description">
        To provide the best experiences, we use technologies like cookies to store and/or access device information. Consenting to these technologies will allow us to process data such as browsing behaviour or unique IDs on this site. Not consenting or withdrawing consent, may adversely affect certain features and functions.
    </div>
    <div class="cookie__btn_wrapper">
        <div class="cookie_accept">
            Accept
        </div>
        <div class="cookie_deny">
            Deny
        </div>
    </div>
    <div class="privacy_link" onclick="window.open('/privacy-policy', '_self');return true;">
        Privacy policy
    </div>
</div>
<style>
 .cookie{
    position: fixed;
    bottom: 10px;
    right: 10px;
    max-width: 500px;
    padding: 15px 20px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0px 4px 20px rgba(4, 4, 4, 0.25);
    z-index: 80;
    display: flex;
    flex-direction: column;
    gap: 10px;
    transform: translatex(1000px);
 }
 .cookie_description{
    font-weight: 400;
    font-size: 12px;
    color: #6b6669;
    line-height: 150%;
 }
.cookie_title{
    font-weight: 400;
    font-size: 14px;
    color: #000;
    line-height: 150%;
    text-align: center;
}
.cookie__btn_wrapper{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}
.cookie_deny,
.cookie_accept{
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    border-radius: 7px;
    font-size: 12px;
    padding: 10px 5px;
    font-weight: 500;
    cursor: pointer;
}
.cookie_deny:hover,
.cookie_accept:hover{
    background: #e93544;
    transition: 0.3s linear;
}
.cookie_deny,
.cookie_accept{
    background: #bf1522;
    color: #fff;
}
.privacy_link{
    font-weight: 400;
    font-size: 12px;
    color: #6b6669;
    line-height: 150%;
    text-decoration: underline;
    text-align: center;
    cursor: pointer;
}
.cookie.active{
    -webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
.cookie.non_act_coo {
	-webkit-animation: slide-out-right 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
	        animation: slide-out-right 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
}
@-webkit-keyframes slide-in-right {
  0% {
    -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}
@keyframes slide-in-right {
  0% {
    -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes slide-out-right {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
    opacity: 0;
  }
}
@keyframes slide-out-right {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
    opacity: 0;
  }
}

@media screen and (max-width: 992px){
    .cookie_deny,
.privacy_link,
.cookie_accept{
    cursor: initial;
}
}
@media screen and (max-width: 768px){
    .cookie{
        max-width: calc(100% - 20px);
    }
}
@media screen and (max-width: 500px){
    .cookie__btn_wrapper{
        flex-direction: column;
    }
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var acceptBtn = document.querySelector(".cookie_accept");
    var denyBtn = document.querySelector(".cookie_deny");
    var privacyLink = document.querySelector(".privacy_link");

    // Перевірка, чи користувач вже прийняв куки
    var cookiesAccepted = localStorage.getItem("cookiesAccepted");

    if (cookiesAccepted === "true") {
        // Якщо куки прийнято, приховуємо віджет
        document.querySelector(".cookie").style.display = "none";
    }

    // Встановлення класу актив після 30 секунд
    setTimeout(function() {
        document.querySelector(".cookie").classList.add("active");
    }, 10000); // 30000 мілісекунд = 30 секунд

    // Функція, яка викликається при натисканні кнопки "Прийняти"
    function acceptCookies() {
        // Зберігаємо стан прийняття кукі в локальному сховищі
        localStorage.setItem("cookiesAccepted", "true");
        // Ховаємо віджет
        document.querySelector(".cookie").style.display = "none";
        console.log("Cookies accepted");
    }

    // Функція, яка викликається при натисканні кнопки "Відхилити"
    function denyCookies() {
        // Додаємо клас non_act_coo
        document.querySelector(".cookie").classList.add("non_act_coo");
        // Встановлюємо таймер для з'явлення блоку через хвилину
        setTimeout(function() {
            document.querySelector(".cookie").classList.remove("non_act_coo");
        }, 20000); // 60000 мілісекунд = 1 хвилина
        console.log("Cookies denied");
    }

    // Обробник події для кнопки "Прийняти"
    acceptBtn.addEventListener("click", acceptCookies);

    // Обробник події для кнопки "Відхилити"
    denyBtn.addEventListener("click", denyCookies);


    // Обробник події для кліків на елементі з класом non_act_coo
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("non_act_coo")) {
            // Видаляємо клас non_act_coo при кліку
            document.querySelector(".cookie").classList.remove("non_act_coo");
        }
    });
});

</script>