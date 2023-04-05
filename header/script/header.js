/**
 * ANIMATION MENU
 */

let headerOpenBtn = document.querySelector("header nav .menuIcone.open");
let headerHiddenBtn = document.querySelector("header nav .menuIcone.close");

let menu = document.querySelector("header nav > ul");

headerOpenBtn.addEventListener("click", () => {
  headerOpenBtn.style.display = "none";
  headerHiddenBtn.style.display = "block";

  menu.setAttribute("class", "active");
});

headerHiddenBtn.addEventListener("click", () => {
  headerHiddenBtn.style.display = "none";
  headerOpenBtn.style.display = "block";

  menu.classList.remove("active");
});

/**
 * ANIMATION SOUS-ITEM
 */

let discoverItem = document.querySelectorAll(
  "header nav ul.general li.underItemContainer"
);
let deployedItem = document.querySelector("header nav > ul li.deployed ul");

discoverItem.forEach((element) => {
  element.addEventListener("click", () => {
    if (element.classList.contains("deployed")) {
      element.classList.remove("deployed");
      document
        .querySelector("header nav > ul li:nth-child(1)")
        .classList.add("deployed");
    } else {
      let undeployed = document.querySelector(".deployed");
      undeployed.classList.remove("deployed");

      element.classList.add("deployed");
    }
  });
});

/**
 *
 * Animation du sous-menu Acount
 *
 */

let acountMenuControl = document.querySelector("header nav #connection");
let acountMenu = document.querySelector("header div.acountMenu");

document.addEventListener("click", (event) => {
  if (acountMenu.classList.contains("active")) {
    if (
      acountMenuControl.contains(event.target) ||
      !acountMenu.contains(event.target)
    ) {
      acountMenu.classList.remove("active");
    }
  } else if (acountMenuControl.contains(event.target)) {
    acountMenu.classList.add("active");
  }
});
