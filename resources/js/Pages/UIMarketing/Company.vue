<script setup>

import Pricing from "@/Components/UIMarketing/Sections/Pricing.vue";

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

</script>


<template layout="UIMarketingLayout">

    <pricing :data="pricingData"></pricing>

</template>

