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
