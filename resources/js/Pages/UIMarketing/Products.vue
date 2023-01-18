<script setup>

import CTA from "@/Components/UIMarketing/Sections/CTA.vue";
import FAQ from "@/Components/UIMarketing/Sections/FAQ.vue";

const ctaData = {

    title: 'this data is different',
    titleH2: 'Hello',
    paragraph: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha si',
    button: 'Hello'
}

const faqsData = {
    questions: {
        'first': {
            question: 'this questions are different',
            answer: 17
        },
        'second': {
            question: 'hi',
            answer: 'Malaga',
        },
        'third': {
            question: '?',
            answer: 'this questions are different'
        },
        'fourth': {
            question: 'this questions are different',
            answer: 'the one that is already prepared'
        },
    }
}

</script>

<template layout="UIMarketingLayout">

    <FAQ :data="faqsData"></FAQ>
    <CTA :data="ctaData"></CTA>
</template>

