<script setup>

import Stats from "@/Components/UIMarketing/Sections/Stats.vue";
import CTA from "@/Components/UIMarketing/Sections/CTA.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";

defineProps(['statsData' , 'ctaData', 'homeSloganData'])

</script>


<template layout="UIMarketingLayout">

    <hero :data="homeSloganData"></hero>
    <CTA :data="ctaData"></CTA>
    <stats :data="statsData"></stats>

</template>

