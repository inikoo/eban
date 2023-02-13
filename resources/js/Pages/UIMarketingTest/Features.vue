<script setup>

import Stats from "@/Components/UIMarketing/SectionsTest/Stats.vue";
import CTA from "@/Components/UIMarketing/SectionsTest/CTA.vue";
import Hero from "@/Components/UIMarketing/SectionsTest/Hero.vue";

defineProps(['statsData' , 'ctaData', 'homeSloganData'])

</script>


<template layout="UIMarketingLayout">

    <hero :data="homeSloganData"></hero>
    <CTA :data="ctaData"></CTA>
    <stats :data="statsData"></stats>

</template>

