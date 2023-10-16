import "./bootstrap";

window.addEventListener("DOMContentLoaded", (event) => {
    console.log(event);
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

            console.log("Marquee:", marquee);
            console.log("Marquee Width:", marqueeWidth);

            console.log("Marquee Inner:", marqueeInner);
            console.log("Marque Inner Width:", marqueeInnerWidth);

            marqueeInnerChildren.forEach((child) => {
                const clonedChild = child.cloneNode(true);
                clonedChild.setAttribute("aria-hidden", true);
                // marqueeInner.appendChild(clonedChild);
            });

            marquee.setAttribute("data-animated", true);
        });
    }
});
