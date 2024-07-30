<div class="subscribe_popup" id="subscribe-popup">
    <div class="subscribe_popup_body">
    <div onclick="document.location='#close';return false;" class="popup_close">
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.6569 11.6571C11.5318 11.7821 11.3623 11.8523 11.1855 11.8523C11.0086 11.8523 10.8391 11.7821 10.714 11.6571L6 6.94304L1.28595 11.6571C1.16093 11.7821 0.99136 11.8523 0.81455 11.8523C0.63774 11.8523 0.46817 11.7821 0.343146 11.6571C0.218121 11.5321 0.147884 11.3625 0.147883 11.1857C0.147883 11.0089 0.218121 10.8393 0.343146 10.7143L5.05719 6.00023L0.343146 1.28619C0.218121 1.16116 0.147884 0.991593 0.147883 0.814783C0.147883 0.637972 0.218121 0.468402 0.343146 0.343378C0.46817 0.218353 0.637739 0.148116 0.81455 0.148116C0.991361 0.148116 1.16093 0.218353 1.28595 0.343378L6 5.05742L10.714 0.343378C10.8391 0.218353 11.0086 0.148116 11.1854 0.148116C11.3623 0.148116 11.5318 0.218353 11.6569 0.343378C11.7819 0.468402 11.8521 0.637972 11.8521 0.814783C11.8521 0.991593 11.7819 1.16116 11.6569 1.28619L6.94281 6.00023L11.6569 10.7143C11.7819 10.8393 11.8521 11.0089 11.8521 11.1857C11.8521 11.3625 11.7819 11.5321 11.6569 11.6571Z" fill="#221F20"/>
    </svg>
</div>
    <div class="subscribe_popup_wrapper">
        <img class="subscribe_popup_img lozad" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php  echo get_stylesheet_directory_uri(); ?>/assets/img/Illustration-3.avif" />
        <div class="subscribe_popup_form_wrapper">
                <p class="subscribe_popup_form_title">
                    Subscribe to our newsletter
                </p>
<!--                <form enctype="multipart/form-data" method="POST" class="subscribe_popup_form">-->
<!--                    <label>-->
<!--                        <input name="name" type="text" required="" placeholder="Name">-->
<!--                    </label>-->
<!--                    <label>-->
<!--                        <input name="email" type="email" required="" placeholder="Email" pattern="\S+@[a-z]+.[a-z]+">-->
<!--                    </label>-->
<!--                    <input class="subscribe_popup_form_btn" type="submit" value="Subscribe">-->
<!--                 </form>-->
            <?php echo do_shortcode('[hubspot type="form" portal="25327294" id="0fc91a91-a018-4a99-bfc4-087659380b4f"]') ?>

                 <div class="subscribe_popup_form_tnx">Thank you for your message. It has been sent.</div>
            </div>
    </div>
    </div>
</div>

<style>
    .subscribe_popup_form_tnx.send_active{
        opacity: 1;
        display: block;
        visibility: visible;
    }
    .subscribe_popup_form_tnx{
        font-size: 14px;
    padding: 10px 15px;
    border: 1px solid #bf1522;
    color: #000;
    font-weight: 400;
    line-height: 150%;
    text-align: center;
    border-radius: 10px;
    opacity: 0;
    visibility: hidden;
    transition: all linear 0.5s;
    display: none;
    }
  .subscribe_popup_form_title  {
        line-height: 150%;
    color: #000;
    font-weight: 500;
    font-size: 16px;
    }
    .subscribe_popup_form_wrapper{
        max-width: 300px;
    }
      .subscribe_popup {
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.8);
  z-index: 20;
  align-items: center;
  justify-content: center;
  display: none;
  opacity: 0;
  visibility: hidden;
  padding: 15px;
  z-index: 999;
}
.subscribe_popup:target {
  visibility: visible;
  opacity: 1;
  display: flex;
}
.subscribe_popup_body{
        background: #fff;
        background: #fff;
    padding: 20px 60px;
    border-radius: 18px;
    max-width: 700px;
    position: relative;
    min-height: 410px;
    display: flex;
    align-items: center;
    }
    .subscribe_popup_wrapper{
        display: flex;
    flex-direction: row;
    align-items: center;
    gap: 50px;
    }
    .subscribe_popup_form input:not(.subscribe_popup_form_btn){
        width: 100%;
    font-family: "Poppins", Sans-serif;
    resize: none;
    width: 100%;
    font-size: 14px;
    line-height: 150%;
    color: #495057;
    background-color: #ffffff;
    border: 1px solid #e7eaf3;
    outline: none;
    padding: 10px 15px;
    resize: none;
    width: 100%;
    line-height: 150%;
    color: #7a7a7a;
    cursor: pointer;
    }
    .subscribe_popup_form,
    .subscribe_popup_form_wrapper{
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .subscribe_popup_form_wrapper{
        min-width: 300px;
    }
    .subscribe_popup_form_btn{
        width: 100%;
    background-color: #bf1522;
    color: #fff;
    border-radius: 7px 7px 7px 7px;
    padding: 10px 25px;
    font-size: 14px;
    font-family: "Poppins", Sans-serif;
    font-weight: 500;
    border: none;
    cursor: pointer;
    }
    .subscribe_popup_img {
        width: max-content;
        height: max-content;
        aspect-ratio: 155 / 263;
    }
    @media screen and (max-width: 600px){
       .subscribe_popup_body {    padding: 40px 20px;}
       .subscribe_popup_form_wrapper{
        min-width: auto;
       }
       .subscribe_popup_body{
        max-width: 100%;
        width: 100%;
       }
       .subscribe_popup_wrapper{
        flex-direction: column;
       }
       .subscribe_popup_wrapper{
        width: 100%;
        width: 100%;
       }
       .subscribe_popup_form_wrapper{
        width: 100%;
       }
    }
</style>
<script>
// let leave_subscribe_pop_submit = document.querySelector(".subscribe_popup_form_btn");
// let leave_subscribe_pop_form = document.querySelector(".subscribe_popup_form");
// let leave_subscribe_pop_input = document.querySelectorAll(
//   ".subscribe_popup_form *:not(label)"
// );
// let leave_subscribe_pop_title = document.querySelector(".subscribe_popup_form_tnx");
//
// leave_subscribe_pop_submit.addEventListener("click", function (e) {
//   let error = false;
//   for (let i = 0; i < leave_subscribe_pop_input.length; i++) {
//     if (leave_subscribe_pop_input[i].value.length == 0) {
//       error = true;
//     }
//   }
//   if (!error) {
//     e.preventDefault();
//     let data = new FormData(leave_subscribe_pop_form);
//
//     // Відправка на HubSpot
//     fetch("//js-eu1.hsforms.net/submissions/v3/integration/submit/144627752/20cca438-75a9-4f73-b2dd-1b0f2035e7f7", {
//       method: "POST",
//       headers: {
//         "Content-Type": "application/json",
//       },
//       body: JSON.stringify(Object.fromEntries(data)),
//       mode: "no-cors" // Додаємо режим no-cors
//     }).then((response) => {
//       if (response.ok) {
//         leave_subscribe_pop_form.reset();
//         leave_subscribe_pop_title.classList.add("send_active");
//         setTimeout(() => {
//             leave_subscribe_pop_title.classList.remove("send_active");
//         }, 40000);
//       }
//     });
//
//     // Відправка на електронну пошту через PHP
//     fetch("/wp-content/themes/archysoft/send.php", {
//       method: "POST",
//       body: data,
//     }).then((response) => {
//       if (response.ok) {
//         // Опціонально: додаткові дії, якщо відправка на пошту успішна
//       }
//     });
//   }
// });


</script>