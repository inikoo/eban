<script setup>

defineProps( ['pricingData']);
import Pricing from "@/Components/UIMarketing/Sections/Pricing.vue";

</script>


<template layout="UIMarketingLayout">
    <Pricing :data="pricingData"></Pricing>
</template>

