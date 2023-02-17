<script setup>

import FullOrderDetails from "@/Components/Ecommerce/OrderSummaries/FullOrderDetails.vue";
import LargeImagesAndProgressBar from "@/Components/Ecommerce/OrderSummaries/LargeImagesAndProgressBar.vue";
import ProgressBar from "@/Components/Ecommerce/OrderSummaries/ProgressBar.vue";
import SplitImageOrderSummary from "@/Components/Ecommerce/OrderSummaries/SplitImageOrderSummary.vue";
</script>

<template layout="UIMarketingLayout">
    <div class="bg-black w-full h-8"></div>

    <FullOrderDetails></FullOrderDetails>
    <div class="bg-black w-full h-8"></div>

    <LargeImagesAndProgressBar></LargeImagesAndProgressBar>
    <div class="bg-black w-full h-8"></div>

    <ProgressBar></ProgressBar>
    <div class="bg-black w-full h-8"></div>

    <SplitImageOrderSummary></SplitImageOrderSummary>
    <div class="bg-black w-full h-8"></div>

</template>
