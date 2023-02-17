<script setup>

import Features from "@/Components/UIMarketing/SectionsTest/Features.vue";
import Hero from "@/Components/UIMarketing/SectionsTest/Hero.vue";
import CTA from "@/Components/UIMarketing/SectionsTest/CTA.vue";
import Pricing from "@/Components/UIMarketing/SectionsTest/Pricing.vue";
import Stats from "@/Components/UIMarketing/SectionsTest/Stats.vue";
import Testimonial from "@/Components/UIMarketing/SectionsTest/Testimonial.vue";


defineProps(['pricingData', 'ctaData', 'homeSloganData', 'statsData', 'featuresData', 'testimonialData'])



</script>

<template layout="UIMarketingLayout">
    <Hero :data="homeSloganData"></Hero>
    <Features :data="featuresData"></Features>
    <Stats :data="statsData"></Stats>
    <CTA :data="ctaData"></CTA>
    <Pricing :data="pricingData"></Pricing>
    <Testimonial :data="testimonialData"></Testimonial>
</template>
