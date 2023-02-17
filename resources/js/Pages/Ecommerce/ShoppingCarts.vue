<script setup>

import ExtendedSummary from "@/Components/Ecommerce/ShoppingCarts/ExtendedSummary.vue";
import SingleColumn from "@/Components/Ecommerce/ShoppingCarts/SingleColumn.vue";
import SliderOver from "@/Components/Ecommerce/ShoppingCarts/SliderOver.vue";
import TwoColumnQuantityDropdown from "@/Components/Ecommerce/ShoppingCarts/TwoColumnQuantityDropdown.vue";
</script>

<template layout="UIMarketingLayout">
    <div class="bg-black w-full h-8"></div>

    <ExtendedSummary></ExtendedSummary>
    <div class="bg-black w-full h-8"></div>

    <SingleColumn></SingleColumn>
    <div class="bg-black w-full h-8"></div>

    <SliderOver></SliderOver>
    <div class="bg-black w-full h-8"></div>

    <TwoColumnQuantityDropdown></TwoColumnQuantityDropdown>
    <div class="bg-black w-full h-8"></div>

</template>
