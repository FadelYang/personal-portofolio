import "./bootstrap";

import Typed from "typed.js";

document.addEventListener("DOMContentLoaded", function () {
    new Typed("#headingHero", {
        strings: ["👋 Hello, I’m Fadel"],
        typeSpeed: 50,
        showCursor: false,
        smartBackspace: true,
        loop: false,
        onComplete: function () {
            // Initialize the second Typed instance after the first one completes
            new Typed("#secondaryHeadingHero", {
                strings: [
                    "Fullstack web developer 🌐💻 based in Jakarta, Indonesia",
                ],
                typeSpeed: 50,
                showCursor: false,
                smartBackspace: true,
                loop: false,
            });
        },
    });
});

// Burger menus
document.addEventListener("DOMContentLoaded", function () {
    // open
    const burger = document.querySelectorAll(".navbar-burger");
    const menu = document.querySelectorAll(".navbar-menu");

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll(".navbar-close");
    const backdrop = document.querySelectorAll(".navbar-backdrop");

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener("click", function () {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle("hidden");
                }
            });
        }
    }
});
