<template>
    <swiper
        :spaceBetween="30"
        :centeredSlides="true"
        :autoplay="{
            delay: 2500,
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
                class="object-fill w-full h-96"
                src="https://www.awartisan.eu/wi.php?id=29537"
                alt="image slide 1"
            />
        </swiper-slide>
        <swiper-slide>
            <img
                class="object-fill w-full h-96"
                src="https://www.awartisan.eu/wi.php?id=29535"
                alt="image slide 2"
            />
        </swiper-slide>
        <swiper-slide>
            <img
                class="object-fill w-full h-96"
                src="https://www.awartisan.eu/wi.php?id=13245"
                alt="image slide 3"
            />
        </swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";
import "swiper/css/navigation";

// import required modules
import { Autoplay, Pagination, Navigation } from "swiper";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Autoplay, Pagination, Navigation],
        };
    },
};
</script>
