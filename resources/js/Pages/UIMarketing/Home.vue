<script setup>

import {BoltIcon, DevicePhoneMobileIcon, GlobeAltIcon, ScaleIcon} from "@heroicons/vue/24/outline";
import Features from "@/Components/UIMarketing/Sections/Features.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";

const featuresData = {
    title: "Hello",
    features: [
        {
            name: 'Competitive exchange rates',
            description:
                'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
            icon: GlobeAltIcon,
        },
        {
            name: 'No hidden fees',
            description:
                'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
            icon: ScaleIcon,
        },
        {
            name: 'Transfers are instant',
            description:
                'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
            icon: BoltIcon,
        },
        {
            name: 'Mobile X',
            description:
                'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
            icon: DevicePhoneMobileIcon,
        },
    ]
}

const homeSloganData = {
    title: 'Hello',
    titleSpan: 'Hello2',
    paragraph: "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.",
    buttonLeft: "button1",
    buttonRight: "button2",

}


</script>

<template layout="UIMarketingLayout">
    <Hero :data = "homeSloganData"></Hero>
    <features :data = "featuresData"></features>
</template>

