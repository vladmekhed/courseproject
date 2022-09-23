"use strict";
blogError();
function blogError() {
  let cards = document.querySelectorAll(".blog-inner__small-card");
  let error = document.querySelector(".error");
  let btn = document.querySelector(".blog-inner__btn");
  cards.forEach((e) => {
    e.addEventListener("click", () => {
      error.style.transform = "translateY(0)";
      setTimeout(() => {
        error.style.transform = "translateY(-100%)";
      }, 1500);
    });
  });
  btn.addEventListener("click", () => {
    error.style.transform = "translateY(0)";
    setTimeout(() => {
      error.style.transform = "translateY(-100%)";
    }, 1500);
  });
}
