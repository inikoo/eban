<script setup>

import CTA from "@/Components/UIMarketing/Sections/CTA.vue";
import FAQ from "@/Components/UIMarketing/Sections/FAQ.vue";

defineProps(['ctaData' , 'faqsData'])

</script>

<template layout="UIMarketingLayout">

    <FAQ :data="faqsData"></FAQ>
    <CTA :data="ctaData"></CTA>
</template>

