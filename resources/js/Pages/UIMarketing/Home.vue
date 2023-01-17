<script setup>

import {BoltIcon, DevicePhoneMobileIcon, GlobeAltIcon, ScaleIcon} from "@heroicons/vue/24/outline";
import Features from "@/Components/UIMarketing/Sections/Features.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";
import CTA from "@/Components/UIMarketing/Sections/CTA.vue";
import Pricing from "@/Components/UIMarketing/Sections/Pricing.vue";
import FAQ from "@/Components/UIMarketing/Sections/FAQ.vue";
import Stats from "@/Components/UIMarketing/Sections/Stats.vue";
import Testimonial from "@/Components/UIMarketing/Sections/Testimonial.vue";

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

const ctaData = {

    title: 'Hello',
    titleH2: 'Hello',
    paragraph: 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha si',
    button: 'Hello'
}

const pricingData = {
    title: 'the title',
    paragraph: 'Paragraph',
    paragraphTwo: 'paragraphTwo',
    plans: {
        'economic': {
            name: 'Name',
            price: 30,
            duration: '/month',
            button: 'Nice to meet click right now',
            featuresEconomic: ['Pariatur quod simix11lique', 'Sapiente libero doloribus', 'Vel ipsa esse repudiandae']
        },
        'medium': {
            name: 'hola',
            price: 30,
            duration: '/month',
            button: 'Nice to meet click right now',
            featuresMedium: [
                'Quia rem est sed impedit magnam',
                'Dolorem vero ratione voluptates',
                'Qui sed ab doloribus voluptatem dolore',
                'Laborum commodi molestiae id et fugiat',
                'Nam ut ipsa nesciunt culpa modi dolor',
            ]
        },
        'expensive': {
            name: 'Name',
            price: 30,
            duration: '/month',
            button: 'Nice to meet click right now',
            featuresExpensive : [
                'Quia rem est sed impedit magnam',
                'Dolorem vero ratione voluptates'
            ]
        },
    },
}

const faqsData = {
    questions: {
        'first': {
            question: 'how old are you',
            answer: 17
        },
        'second': {
            question: 'where do you live',
            answer: 'Malaga',
        },
        'third': {
            question: 'do you like your job?',
            answer: 'I could be better at home 👍'
        },
        'fourth': {
            question: 'favourite food?',
            answer: 'the one that is already prepared'
        },
    }
}

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

const testimonialData = {
    people: {
        'first': {
            paragraph: 'lorem oifmweifnweiufbwebfweu fhweui huiowfoiuwebnf wei fnwi e fnwien fw',
            name: 'john',
            jobPosition: 'CTO'
        },
        'second': {
            paragraph: 'lorem oifmweifnweiufbwebfweu fhweui huiowfoiuwebnf wei fnwi e fnwien fw',
            name: 'john',
            jobPosition: 'CTO'
        }
    }
}


</script>

<template layout="UIMarketingLayout">
    <Hero :data="homeSloganData"></Hero>
    <Features :data="featuresData"></Features>
    <Stats :data="statsData"></Stats>
    <CTA :data="ctaData"></CTA>
    <Pricing :data="pricingData"></Pricing>
    <Testimonial :data="testimonialData"></Testimonial>
    <FAQ :data="faqsData"></FAQ>
</template>

