<script setup>

import CenteredTextAndDropdown from "@/Components/Ecommerce/CategoryFilters/CenteredTextAndDropdown.vue";
import Dropdown from "@/Components/Ecommerce/CategoryFilters/Dropdown.vue";
import ExpandablePanel from "@/Components/Ecommerce/CategoryFilters/ExpandablePanel.vue";
import InlineActionsAndExpandable from "@/Components/Ecommerce/CategoryFilters/InlineActionsAndExpandable.vue";
import SideBarFilters from "@/Components/Ecommerce/CategoryFilters/SideBarFilters.vue";

</script>

<template layout="UIMarketingLayout">
    <div class="bg-black w-full h-8"></div>

    <CenteredTextAndDropdown></CenteredTextAndDropdown>
    <div class="bg-black w-full h-8"></div>

    <Dropdown></Dropdown>
    <div class="bg-black w-full h-8"></div>

    <ExpandablePanel></ExpandablePanel>
    <div class="bg-black w-full h-8"></div>

    <InlineActionsAndExpandable></InlineActionsAndExpandable>
    <div class="bg-black w-full h-8"></div>
    <SideBarFilters></SideBarFilters>

    <div class="bg-black w-full h-8"></div>

</template>
