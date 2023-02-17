<script setup>
import MultiStep from "@/Components/Ecommerce/CheckoutForms/MultiStep.vue";
import OrderSummarySidebar from "@/Components/Ecommerce/CheckoutForms/OrderSummarySidebar.vue";
import SingleStepOrderSummary from "@/Components/Ecommerce/CheckoutForms/SingleStepOrderSummary.vue";
</script>

<template layout="UIMarketingLayout">

    <div class="bg-black w-full h-8"></div>

    <MultiStep></MultiStep>
    <div class="bg-black w-full h-8"></div>

    <OrderSummarySidebar></OrderSummarySidebar>
    <div class="bg-black w-full h-8"></div>

    <SingleStepOrderSummary></SingleStepOrderSummary>
    <div class="bg-black w-full h-8"></div>

</template>
