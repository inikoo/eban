<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";
import "swiper/css/navigation";
import "swiper/css/effect-fade";


// import required modules
import { Autoplay, Pagination, Navigation, EffectFade } from "swiper";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Autoplay, Pagination, Navigation, EffectFade],
        };
    },
};
</script>

<template>
    <swiper
        :spaceBetween="30"
        :centeredSlides="true"
        :effect="'fade'"
        :autoplay="{
            delay: 3000,
            disableOnInteraction: false,
        }"
        :pagination="{
            clickable: true,
        }"
        :navigation="true"
        :modules="modules"
        class="mySwiper"
    >
        <swiper-slide>
            <img
                class="object-contain w-full h-99 "
                src="https://www.awartisan.eu/wi.php?id=29537"
                alt="image slide 1"
            />
        </swiper-slide>
        <swiper-slide>
            <img
                class="object-contain w-full h-99"
                src="https://www.awartisan.eu/wi.php?id=29535"
                alt="image slide 2"
            />
        </swiper-slide>
        <swiper-slide>
            <img
                class="object-contain w-full h-99"
                src="https://www.awartisan.eu/wi.php?id=13245"
                alt="image slide 3"
            />
        </swiper-slide>
    </swiper>
</template>
