<script setup>

import ImageGalleryExpandableDetails from "@/Components/Ecommerce/ProductOverviews/ImageGalleryExpandableDetails.vue";
import ImageGridOverview from "@/Components/Ecommerce/ProductOverviews/ImageGridOverview.vue";
import TieredImagesProductOverview from "@/Components/Ecommerce/ProductOverviews/TieredImagesProductOverview.vue";
import SplitImageOverview from "@/Components/Ecommerce/ProductOverviews/SplitImageOverview.vue";

</script>

<template layout="UIMarketingLayout">
    <div class="bg-black w-full h-8"></div>

    <ImageGalleryExpandableDetails></ImageGalleryExpandableDetails>
    <div class="bg-black w-full h-8"></div>

    <ImageGridOverview></ImageGridOverview>
    <div class="bg-black w-full h-8"></div>

    <SplitImageOverview></SplitImageOverview>
    <div class="bg-black w-full h-8"></div>

    <TieredImagesProductOverview></TieredImagesProductOverview>
    <div class="bg-black w-full h-8"></div>


</template>
