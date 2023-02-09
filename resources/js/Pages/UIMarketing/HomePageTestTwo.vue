<script setup>

import Features from "@/Components/UIMarketing/Sections/Features.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";
import CTA from "@/Components/UIMarketing/Sections/CTA.vue";
import Pricing from "@/Components/UIMarketing/Sections/Pricing.vue";
import FAQ from "@/Components/UIMarketing/Sections/FAQ.vue";
import Stats from "@/Components/UIMarketing/Sections/Stats.vue";
import Testimonial from "@/Components/UIMarketing/Sections/Testimonial.vue";
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

