document.addEventListener("DOMContentLoaded", () => {
    "use strict";
    let e = document.querySelector(".mobile-nav-show"),
        t = document.querySelector(".mobile-nav-hide");

    function o() {
        document.querySelector("body").classList.toggle("mobile-nav-active"), e.classList.toggle("d-none"), t.classList.toggle("d-none")
    }
    document.querySelectorAll(".mobile-nav-toggle").forEach(e => {
        e.addEventListener("click", function(e) {
            e.preventDefault(), o()
        })
    }), document.querySelectorAll("#navbar a").forEach(e => {
        if (e.hash) document.querySelector(e.hash) && e.addEventListener("click", () => {
            document.querySelector(".mobile-nav-active") && o()
        })
    });
    let l = document.querySelectorAll(".navbar .dropdown > a");
    l.forEach(e => {
        e.addEventListener("click", function(e) {
            if (document.querySelector(".mobile-nav-active")) {
                e.preventDefault(), this.classList.toggle("active"), this.nextElementSibling.classList.toggle("dropdown-active");
                let t = this.querySelector(".dropdown-indicator");
                t.classList.toggle("bi-chevron-up"), t.classList.toggle("bi-chevron-down")
            }
        })
    });
    let i = document.querySelector(".scroll-top");
    if (i) {
        let r = function() {
            window.scrollY > 100 ? i.classList.add("active") : i.classList.remove("active")
        };
        window.addEventListener("load", r), document.addEventListener("scroll", r), i.addEventListener("click", window.scrollTo({
            top: 0,
            behavior: "smooth"
        }))
    }
    GLightbox({
        selector: ".glightbox"
    });
    let s = document.querySelector(".portfolio-isotope");
    if (s) {
        let a = s.getAttribute("data-portfolio-filter") ? s.getAttribute("data-portfolio-filter") : "*",
            n = s.getAttribute("data-portfolio-layout") ? s.getAttribute("data-portfolio-layout") : "masonry",
            c = s.getAttribute("data-portfolio-sort") ? s.getAttribute("data-portfolio-sort") : "original-order";
        window.addEventListener("load", () => {
            let e = new Isotope(document.querySelector(".portfolio-container"), {
                itemSelector: ".portfolio-item",
                layoutMode: n,
                filter: a,
                sortBy: c
            });
            document.querySelectorAll(".portfolio-isotope .portfolio-flters li").forEach(function(t) {
                t.addEventListener("click", function() {
                    document.querySelector(".portfolio-isotope .portfolio-flters .filter-active").classList.remove("filter-active"), this.classList.add("filter-active"), e.arrange({
                        filter: this.getAttribute("data-filter")
                    }), "function" == typeof d && d()
                }, !1)
            })
        })
    }

    function d() {
        // AOS.init({
        //     duration: 800,
        //     easing: "slide",
        //     once: !0,
        //     mirror: !1
        // })
    }
    new Swiper(".slides-1", {
        speed: 600,
        loop: !0,
        autoplay: {
            delay: 5e3,
            disableOnInteraction: !1
        },
        slidesPerView: "auto",
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: !0
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    }), new Swiper("#hotel-slider", {
        speed: 600,
        loop: !0,
        autoplay: {
            delay: 5e3,
            disableOnInteraction: !1
        },
        slidesPerView: 4,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: !0
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            992: {
                slidesPerView: 3
            }
        }
    }), window.addEventListener("load", () => {
        d()
    })
});
const totalPersonsSelectors = document.getElementsByClassName("total-persons-selector");
for (const selector of totalPersonsSelectors) selector.addEventListener("click", function() {
    this.nextSibling.nextSibling.classList.toggle("show")
});

function updateTotalPersons() {
    let e = document.querySelectorAll(".adult-input"),
        t = document.querySelectorAll(".child-input"),
        o = document.querySelectorAll(".total-persons-selector");
    o.forEach((o, l) => {
        let i = e[l],
            r = t[l],
            s = parseInt(i.value),
            a = parseInt(r.value);
        o.value = `${s} Adult${s > 1 ? "s" : ""} & ${a} Child${a > 1 ? "ren" : ""}`
    })
}
document.addEventListener("click", function(e) {
    let t = document.querySelectorAll(".dropdown-menu"),
        o = document.querySelectorAll(".total-persons-selector");
    t.forEach((t, l) => {
        let i = o[l];
        t.contains(e.target) || e.target === i || t.classList.remove("show")
    })
}), document.querySelectorAll("[data-decrease]").forEach(e => {
    e.addEventListener("click", function() {
        let e = this.parentNode.querySelector("[data-value]");
        e.value > 0 && (e.value--, updateTotalPersons())
    })
}), document.querySelectorAll("[data-increase]").forEach(e => {
    e.addEventListener("click", function() {
        let e = this.parentNode.querySelector("[data-value]");
        e.value++, updateTotalPersons()
    })
});
const Utils = {
        addClass: function(e, t) {
            e.classList.add(t)
        },
        removeClass: function(e, t) {
            e.classList.remove(t)
        },
        showMore: function(e, t) {
            e.addEventListener("click", function(o) {
                o.preventDefault(), t.classList.contains("excerpt-hidden") ? (e.textContent = "Show less", Utils.removeClass(t, "excerpt-hidden"), Utils.addClass(t, "excerpt-visible")) : (e.textContent = "Show more", Utils.removeClass(t, "excerpt-visible"), Utils.addClass(t, "excerpt-hidden"))
            })
        }
    },
    ExcerptWidget = {
        ShowMore: function(e, t) {
            let o = document.querySelectorAll(e);
            o.forEach(function(e) {
                let o = document.getElementById(t);
                Utils.showMore(e, o)
            })
        }
    };
ExcerptWidget.ShowMore(".js-show-more", "corbettContent");
