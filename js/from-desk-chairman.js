
    gsap.from(".chairman-img", {
        scrollTrigger: {
            trigger: ".chairman-img",
            start: "top 80%",
            end: "top 60%",
            scrub: 0.5
        },
        opacity: 0,
        x: -40,
        ease: "power2.out"
    });

    gsap.from(".chairman-text p, .chairman-text div", {
        scrollTrigger: {
            trigger: ".chairman-text",
            start: "top 80%",
            end: "top 60%",
            scrub: 0.5
        },
        opacity: 0,
        y: 40,
        stagger: 0.25,
        ease: "power2.out"
    });

