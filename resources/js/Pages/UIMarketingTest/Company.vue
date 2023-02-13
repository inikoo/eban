<script setup>

defineProps( ['pricingData']);
import Pricing from "@/Components/UIMarketing/SectionsTest/Pricing.vue";

</script>


<template layout="UIMarketingLayout">
    <Pricing :data="pricingData"></Pricing>
</template>

