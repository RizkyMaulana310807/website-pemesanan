import "./bootstrap";
import { gsap } from "gsap";
import { SplitText } from "gsap/SplitText";

// Register plugin
gsap.registerPlugin(SplitText);

// Split dan animasi
document.addEventListener("DOMContentLoaded", () => {
    const split = SplitText.create(".header", {
        type: "words",
        wordsClass: "word++",
        wordDelimiter: String.fromCharCode(8205),
    });

    gsap.from(split.words, {
        y: -100,
        opacity: 0,
        rotation: "random(-80, 80)",
        stagger: 0.1,
        duration: 1,
        ease: "back",
    });
});
