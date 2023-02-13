<script setup>

import Features from "@/Components/UIMarketing/SectionsTest/Features.vue";
import Hero from "@/Components/UIMarketing/SectionsTest/Hero.vue";
import CTA from "@/Components/UIMarketing/SectionsTest/CTA.vue";
import Pricing from "@/Components/UIMarketing/SectionsTest/Pricing.vue";
import FAQ from "@/Components/UIMarketing/Sections/TypeOfServicesToggle.vue";
import Stats from "@/Components/UIMarketing/SectionsTest/Stats.vue";
import Testimonial from "@/Components/UIMarketing/SectionsTest/Testimonial.vue";
import Carrousel from "@/Components/Carrousel.vue";



defineProps(['pricingData', 'ctaData', 'faqsData', 'homeSloganData', 'statsData', 'featuresData', 'testimonialData'])



</script>

<template layout="UIMarketingLayout">
    <Carrousel></Carrousel>
    <Hero :data="homeSloganData"></Hero>
    <Features :data="featuresData"></Features>
    <Stats :data="statsData"></Stats>
    <CTA :data="ctaData"></CTA>
    <Pricing :data="pricingData"></Pricing>
    <Testimonial :data="testimonialData"></Testimonial>
    <FAQ :data="faqsData"></FAQ>
</template>

