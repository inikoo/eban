<script setup>

import Stats from "@/Components/UIMarketing/Sections/Stats.vue";
import CTA from "@/Components/UIMarketing/Sections/CTA.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";


const statsData = {
    title: 'the title',
    paragraph: 'Paragraph',
    stats: {
        'first': {
            id: 1,
            stat: '8K+',
            emphasis: 'Companies',
            rest: 'use laoreet amet lacus nibh integer quis.'
        },
        'second': {
            id: 2, stat: '25K+', emphasis: 'Countries around the globe', rest: 'lacus nibh integer quis.'
        },
        'third': {
            id: 3, stat: '98%', emphasis: 'Customer satisfaction', rest: 'laoreet amet lacus nibh integer quis.'
        },
        'fourth': {
            id: 4, stat: '12M+', emphasis: 'Issues resolved', rest: 'lacus nibh integer quis.'
        }
    }
}

const ctaData = {

    title: 'Hello',
    titleH2: 'Hello',
    paragraph: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha si',
    button: 'Hello'
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

    <hero :data="homeSloganData"></hero>
    <CTA :data="ctaData"></CTA>
    <stats :data="statsData"></stats>

</template>

