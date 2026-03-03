import "./bootstrap";

window.addEventListener("DOMContentLoaded", (event) => {
    const marquees = document.querySelectorAll(".marquee");

    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        addAnimation();
    }

    function addAnimation() {
        marquees.forEach((marquee) => {
            const marqueeInner = marquee.querySelector(".marquee-inner");
            const marqueeWidth = marquee.offsetWidth;
            const marqueeInnerWidth = marqueeInner.scrollWidth;
            const marqueeInnerChildren = Array.from(marqueeInner.children);

            // console.log("Marquee:", marquee);
            // console.log("Marquee Width:", marqueeWidth);

            // console.log("Marquee Inner:", marqueeInner);
            // console.log("Marque Inner Width:", marqueeInnerWidth);

            marqueeInnerChildren.forEach((child) => {
                const clonedChild = child.cloneNode(true);
                clonedChild.setAttribute("aria-hidden", true);
                // marqueeInner.appendChild(clonedChild);
            });

            marquee.setAttribute("data-animated", true);
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("nav-open");
    const closeBtn = document.getElementById("nav-close");
    const overlay = document.getElementById("nav-overlay");
    const panel = document.getElementById("mobile-nav");

    if (!openBtn || !closeBtn || !overlay || !panel) return;

    function openNav() {
        overlay.classList.remove("hidden");
        panel.classList.remove("translate-x-full");
        openBtn.setAttribute("aria-expanded", "true");
        document.body.style.overflow = "hidden";
    }

    function closeNav() {
        panel.classList.add("translate-x-full");
        openBtn.setAttribute("aria-expanded", "false");
        document.body.style.overflow = "";
        setTimeout(() => overlay.classList.add("hidden"), 200);
    }

    openBtn.addEventListener("click", openNav);
    closeBtn.addEventListener("click", closeNav);
    overlay.addEventListener("click", closeNav);

    window.addEventListener("keydown", function (e) {
        if (e.key === "Escape") closeNav();
    });
});
