import './bootstrap';
import { gsap } from "gsap";
import { SplitText } from "gsap/SplitText";

// Register plugin
gsap.registerPlugin(SplitText);

// Split dan animasi
document.addEventListener("DOMContentLoaded", () => {
    const split = SplitText.create(".header", { type: "chars" });

    gsap.from(split.chars, {
        y: 20,
        autoAlpha: 0,
        stagger: 0.05
    });
});
