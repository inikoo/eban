<script setup>
import InvoiceList from "@/Components/Ecommerce/OrderHistory/InvoiceList.vue";
import InvoiceListQuickActions from "@/Components/Ecommerce/OrderHistory/InvoiceListQuickActions.vue";
import InvoicePanels from "@/Components/Ecommerce/OrderHistory/InvoicePanels.vue";
import InvoiceTable from "@/Components/Ecommerce/OrderHistory/InvoiceTable.vue";
</script>

<template layout="UIMarketingLayout">
    <div class="bg-black w-full h-8"></div>

    <InvoiceList></InvoiceList>
    <div class="bg-black w-full h-8"></div>

    <InvoiceListQuickActions></InvoiceListQuickActions>
    <div class="bg-black w-full h-8"></div>

    <InvoicePanels></InvoicePanels>
    <div class="bg-black w-full h-8"></div>

    <InvoiceTable></InvoiceTable>
    <div class="bg-black w-full h-8"></div>

</template>
