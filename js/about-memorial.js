gsap.from(".about-text p", {
    scrollTrigger: {
        trigger: ".about-text",
        start: "top 80%",
        end: "top 30%",
        scrub: true
    },
    opacity: 0,
    y: 40,
    stagger: 0.3,
    ease: "power2.out"
});

gsap.from(".about-images img", {
    scrollTrigger: {
        trigger: ".about-images",
        start: "top 80%",
        end: "top 30%",
        scrub: true
    },
    opacity: 0,
    scale: 0.9,
    stagger: 0.2,
    ease: "power2.out"
});
