<script setup>

import BackgroundImageAndDetailOverlay from "@/Components/Ecommerce/CategoryPreviews/BackgroundImageAndDetailOverlay.vue";
import ImageBackground from "@/Components/Ecommerce/CategoryPreviews/ImageBackground.vue";
import ScrollingCards from "@/Components/Ecommerce/CategoryPreviews/ScrollingCards.vue";
import SplitImages from "@/Components/Ecommerce/CategoryPreviews/SplitImages.vue";
import ThreeColumn from "@/Components/Ecommerce/CategoryPreviews/ThreeColumn.vue";
import ThreeColumnDescription from "@/Components/Ecommerce/CategoryPreviews/ThreeColumnDescription.vue";

</script>

<template layout="UIMarketingLayout">
    <div class="bg-black w-full h-8"></div>

    <BackgroundImageAndDetailOverlay></BackgroundImageAndDetailOverlay>
    <div class="bg-black w-full h-8"></div>

    <ImageBackground></ImageBackground>
    <div class="bg-black w-full h-8"></div>

    <ScrollingCards></ScrollingCards>
    <div class="bg-black w-full h-8"></div>

    <SplitImages></SplitImages>
    <div class="bg-black w-full h-8"></div>

    <ThreeColumn></ThreeColumn>
    <div class="bg-black w-full h-8"></div>

    <ThreeColumnDescription></ThreeColumnDescription>
    <div class="bg-black w-full h-8"></div>

</template>
