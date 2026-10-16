import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import "./gallery";

window.Swiper = Swiper;

window.myInfrSwiper = new Swiper(".mySwiper", {
    pagination: {
        observer: true,
        observeParents: true,
        watchSlidesProgress: true,
        el: ".swiper-pagination",
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
            return (
                '<span class="my-pagination-wrapper">' +
                '<span class="' +
                currentClass +
                '"></span>' +
                '<span class="my-separator">/</span>' +
                "</span>" +
                '<span class="' +
                totalClass +
                '"></span>'
            );
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
window.myInfrSwiper = new Swiper(".mySwiper1", {
    pagination: {
        el: ".swiper-pagination-one",
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
            return (
                '<span class="text-black">' +
                '<span class="' +
                currentClass +
                '"></span>' +
                '<span class="my-separator">/</span>' +
                "</span>" + '<span class="text-black text-[32px] text-cinzel mr-[16px]">' +
                '<span class="' +
                totalClass +
                '"></span>'
            );
        },
    },
    navigation: {
        nextEl: ".swiper-button-next-one",
        prevEl: ".swiper-button-prev-one",
    },
});
window.myInfrSwiper = new Swiper(".mySwiper2", {
    pagination: {
        el: ".swiper-pagination-two",
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
            return (
                '<span class="text-black">' +
                '<span class="' +
                currentClass +
                '"></span>' +
                '<span class="my-separator">/</span>' +
                "</span>" + '<span class="text-black text-[32px] text-cinzel mr-[16px]">' +
                '<span class="' +
                totalClass +
                '"></span>'
            );
        },
    },
    navigation: {
        nextEl: ".swiper-button-next-two",
        prevEl: ".swiper-button-prev-two",
    },
});

window.myInfrSwiper = new Swiper(".mySwiper3", {
    pagination: {
        el: ".swiper-pagination-three",
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
            return (
                '<span class="text-white">' +
                '<span class="' +
                currentClass +
                '"></span>' +
                '<span class="my-separator">/</span>' +
                "</span>" + '<span class="text-white text-[32px] text-cinzel mr-[16px]">' +
                '<span class="' +
                totalClass +
                '"></span>'
            );
        },
    },
    navigation: {
        nextEl: ".swiper-button-next-three",
        prevEl: ".swiper-button-prev-three",
    },
});

document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".statsSwiper", {
        slidesPerView: 3,
        slidesPerGroup: 1,
        grabCursor: true,
        navigation: {
            nextEl: ".stats-next",
            prevEl: ".stats-prev",
        },
    });
});
