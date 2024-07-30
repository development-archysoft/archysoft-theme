// Lozad
const observer = lozad();
observer.observe();



const menuPrevItems = document.querySelectorAll(".child_menu_prev");

// Ітеруємося по кожному елементу і додаємо обробник подій кліку
menuPrevItems.forEach((item) => {
  item.addEventListener("click", function (event) {
    // Зупиняємо подальше розповсюдження події кліку
    event.stopPropagation();

    // Отримуємо елементи з класами 'child-thrd' і 'child_menu_prev'
    const childThrd = item.closest(".childs_menu").querySelector(".child-thrd");

    // Додаємо клас 'active' до обох елементів
    item.classList.toggle("active");
    childThrd.classList.toggle("active");
  });
});

// Lozad
window.addEventListener("scroll", function () {
  var heroSection = document.querySelector(".hero");
  var anchors = document.querySelectorAll(".ancord_head a");

  var heroPassed = false;
  if (heroSection) {
    var heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
    heroPassed = window.pageYOffset >= heroBottom;
  }

  var headerHeight = 170; // висота вашого фіксованого меню

  anchors.forEach(function (anchor) {
    var targetId = anchor.getAttribute("href").substring(1);
    var targetElement = document.getElementById(targetId);

    if (targetElement && isElementInViewport(targetElement, headerHeight)) {
      // Убираем класс 'active' у всех якорей
      anchors.forEach(function (anchor) {
        anchor.classList.remove("active");
      });

      // Добавляем класс 'active' только для текущего якоря
      anchor.classList.add("active");

      // Перевіряємо, чи пройшли секцію з класом hero
      if (heroPassed) {
        // Додаємо клас 'visible' для родительського елементу .ancord_head
        anchor.closest(".ancord_head").classList.add("visible");
      } else {
        // Видаляємо клас 'visible' для всіх .ancord_head
        anchor.closest(".ancord_head").classList.remove("visible");
      }
    }
  });
});

// Перевірка, чи елемент знаходиться в області видимості з врахуванням висоти фіксованого меню
function isElementInViewport(element, headerHeight) {
  var rect = element.getBoundingClientRect();
  return rect.top - headerHeight <= 0 && rect.bottom > headerHeight;
}

// Добавление отступа при кліку на якір
document.querySelectorAll(".ancord_head a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    var targetId = this.getAttribute("href").substring(1);
    var targetElement = document.getElementById(targetId);
    var headerHeight = 130; // висота вашого фіксованого меню
    var offset = targetElement.offsetTop - headerHeight; // відступ з урахуванням висоти меню

    window.scrollTo({
      top: offset,
      behavior: "smooth",
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".ancord a").forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      var headerHeight = 130;
      var targetId = this.getAttribute("href").substring(1);
      var targetElement = document.getElementById(targetId);
      var offset = targetElement.offsetTop - headerHeight;

      window.scrollTo({
        top: offset,
        left: 0,
        behavior: "smooth",
      });
    });
  });
});

function headerTab(tab_btn, tab_posts) {
  if (tab_btn[0] !== undefined) {
    tab_btn[0].classList.add("_active");
    tab_posts[0].classList.add("_active");
    for (let i = 0; i < tab_btn.length; i++) {
      tab_btn[i].addEventListener("click", function () {
        tab_btn[i].classList.remove("_active");
        tab_posts[i].classList.remove("_active");
        for (let a = 0; a < tab_btn.length; a++) {
          tab_btn[a].classList.remove("_active");
          tab_posts[a].classList.remove("_active");
        }
        tab_btn[i].classList.add("_active");
        tab_posts[i].classList.add("_active");
      });
    }
  }
}
let headerBtn = document.getElementsByClassName("tab_btn");
let headerBtnMob = document.getElementsByClassName("tab_btn_mob");
let headerItem = document.getElementsByClassName("tab_item");
let headerItemMob = document.getElementsByClassName("tab_item_mob");
headerTab(headerBtn, headerItem);
headerTab(headerBtnMob, headerItemMob);

const isTouchDevice = () => {
  return window.matchMedia("(pointer: coarse)").matches;
};
const handleDeviceType = (element) => {
  if (isTouchDevice()) {
    element.addEventListener("click", () => {
      if (!element.closest("tab_btn")) {
        element.classList.toggle("active");
      }
    });
  } else {
    element.addEventListener("mouseover", () => {
      element.classList.add("active");
    });
    element.addEventListener("mouseout", () => {
      element.classList.remove("active");
    });
  }
};
const elementSubMenu = document.querySelector(".sub_menu");
handleDeviceType(elementSubMenu);

const isTouchDevices = () => {
  return window.matchMedia("(pointer: coarse)").matches;
};

const handleDeviceTypes = (element) => {
  if (isTouchDevices()) {
    element.addEventListener("click", () => {
      if (!element.closest(".tab_btn")) {
        element.classList.toggle("active");
      }
    });
  } else {
    element.addEventListener("mouseover", () => {
      element.classList.add("active");
    });
    element.addEventListener("mouseout", () => {
      element.classList.remove("active");
    });
  }
};

// Получаем все элементы с классом .foote_menu
const elementsFooterMenu = document.querySelectorAll(".foote_menu");

// Проходимся по каждому элементу и обрабатываем его
elementsFooterMenu.forEach((element) => {
  handleDeviceTypes(element);
});

// Добавляем обработчик события click на .tab_btn для предотвращения всплытия
const tabBtns = document.querySelectorAll(".tab_btn");
tabBtns.forEach((tabBtn) => {
  tabBtn.addEventListener("click", (event) => {
    event.stopPropagation(); // Предотвращаем всплытие события click
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var navIcon4 = document.getElementById("nav-icon4");
  var navElement = document.querySelector("nav");
  var bodyElement = document.querySelector("body");

  navIcon4.addEventListener("click", function () {
    this.classList.toggle("open");
    navElement.classList.toggle("open");
    bodyElement.classList.toggle("lock");
  });
});

function toggleFAQ(faq) {
  if (faq.length > 0) {
    for (let i = 0; i < faq.length; i++) {
      faq[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.querySelector(
          "p, ul, .mvp_item__content, augmentation_item__content"
        ); // Додаємо перевірку на <ul>
        if (content) {
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        }
      });
    }
  }
}

let chess = document.getElementsByClassName("chess_item__wrapper");
let mvpItem = document.getElementsByClassName("mvp_item");
let aditiona = document.getElementsByClassName("aditional_services__item");
let faq = document.getElementsByClassName("question_block_item");
let faqAchivment = document.getElementsByClassName("achievement_item");
let faqAugmentation = document.getElementsByClassName("augmentation_item");
let faqAugmentationStaf = document.getElementsByClassName(
  "staff_augmentation__item"
);
let howWork = document.getElementsByClassName("how_list__item");
let catSingle = document.getElementsByClassName("cats_posts__wrapper");
toggleFAQ(chess);
toggleFAQ(catSingle);
toggleFAQ(mvpItem);
toggleFAQ(howWork);
toggleFAQ(faq);
toggleFAQ(faqAchivment);
toggleFAQ(aditiona);
// toggleFAQ(faqAugmentation);
toggleFAQ(faqAugmentationStaf);
if (window.innerWidth > 840) {
  function aboutTabs(tab_btn, tab_posts) {
    if (tab_btn[0] !== undefined) {
      tab_btn[0].classList.add("_active");
      tab_posts[0].classList.add("_active");
      for (let i = 0; i < tab_btn.length; i++) {
        tab_btn[i].addEventListener("click", function () {
          tab_btn[i].classList.remove("_active");
          tab_posts[i].classList.remove("_active");
          for (let a = 0; a < tab_btn.length; a++) {
            tab_btn[a].classList.remove("_active");
            tab_posts[a].classList.remove("_active");
          }
          tab_btn[i].classList.add("_active");
          tab_posts[i].classList.add("_active");
        });
      }
    }
  }

  let tab_btn = document.getElementsByClassName("technology_btns");
  let tab_posts = document.getElementsByClassName("technology_content__item");
  aboutTabs(tab_btn, tab_posts);
} else {
  var selectElement = document.getElementById("technology_select");
  var technologyContentItems = document.querySelectorAll(
    ".technology_content__item"
  );
  let test;
  if (selectElement !== null) {
    function hideAllTechnologyContent() {
      technologyContentItems.forEach(function (item) {
        item.classList.remove("_active");
      });
    }

    function showFirstContentItem() {
      if (technologyContentItems.length > 0) {
        technologyContentItems[0].classList.add("_active");
      }
    }

    selectElement.addEventListener("change", function () {
      hideAllTechnologyContent();
      var selectedOption = selectElement.value;
      var selectedContentItem = document.getElementById(selectedOption);
      if (selectedContentItem) {
        selectedContentItem.classList.add("_active");
      }
    });

    hideAllTechnologyContent();
    showFirstContentItem();
  }
}

if (window.innerWidth > 840) {
  function aboutTabs(tab_btn, tab_posts) {
    if (tab_btn[0] !== undefined) {
      tab_btn[0].classList.add("_active");
      tab_posts[0].classList.add("_active");
      for (let i = 0; i < tab_btn.length; i++) {
        tab_btn[i].addEventListener("click", function () {
          tab_btn[i].classList.remove("_active");
          tab_posts[i].classList.remove("_active");
          for (let a = 0; a < tab_btn.length; a++) {
            tab_btn[a].classList.remove("_active");
            tab_posts[a].classList.remove("_active");
          }
          tab_btn[i].classList.add("_active");
          tab_posts[i].classList.add("_active");
        });
      }
    }
  }

  let tab_btn = document.getElementsByClassName("technology_btns");
  let tab_posts = document.getElementsByClassName("technology_content__item");
  aboutTabs(tab_btn, tab_posts);
} else {
  var selectElement = document.getElementById("technology_select");
  var technologyContentItems = document.querySelectorAll(
    ".technology_content__item"
  );
  if (selectElement !== null) {
    function hideAllTechnologyContent() {
      technologyContentItems.forEach(function (item) {
        item.classList.remove("_active");
      });
    }

    function showFirstContentItem() {
      if (technologyContentItems.length > 0) {
        technologyContentItems[0].classList.add("_active");
      }
    }

    selectElement.addEventListener("change", function () {
      hideAllTechnologyContent();
      var selectedOption = selectElement.value;
      var selectedContentItem = document.getElementById(selectedOption);
      if (selectedContentItem) {
        selectedContentItem.classList.add("_active");
      }
    });

    hideAllTechnologyContent();
    showFirstContentItem();
  }
}
// let leave_footer_submit = document.querySelector(".footer_contact_submit");
// let leave_footer_form = document.querySelector(".footer_contact_form");
// let leave_footer_input = document.querySelectorAll(
//   ".footer_contact_form *:not(label)"
// );
// let footer_title = document.querySelector(".footer_send_title");
//
// leave_footer_submit.addEventListener("click", function (e) {
//   let error = false;
//   for (let i = 0; i < leave_footer_input.length; i++) {
//     if (leave_footer_input[i].value.length == 0) {
//       error = true;
//     }
//   }
//   if (!error) {
//     e.preventDefault();
//     let data = new FormData(leave_footer_form);
//     fetch("/wp-content/themes/archysoft/send.php", {
//       method: "POST",
//       body: data,
//     }).then((data) => {
//       if (data.ok == true) {
//         leave_footer_form.reset();
//         footer_title.classList.add("send_active");
//         setTimeout(() => {
//           footer_title.classList.remove("send_active");
//         }, 4000);
//       }
//     });
//   }
// });
