<script setup>

import {useLayoutStore} from "@/Stores/layout";

import TypeOfServicesToggle from "@/Components/UIMarketing/Sections/TypeOfServicesToggle.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";
import AwExplanationParagraph from "@/Components/UIMarketing/Sections/AwExplanationParagraph.vue";
import ContactUs from "@/Components/UIMarketing/Sections/ContactUs.vue";



defineProps(['faqsData', 'heroData', 'awExplanationData', 'contactUsData'])


const theme = useLayoutStore().theme

</script>

<template layout="UIMarketingLayout">

    <!-- Hero Section -->
    <Hero :data="heroData"></Hero>

    <!-- Our Services Section -->
    <TypeOfServicesToggle :data="faqsData"></TypeOfServicesToggle>

    <!-- Your Advantage Section -->
    <AwExplanationParagraph :data="awExplanationData"></AwExplanationParagraph>

    <!--  Contact us section -->
    <ContactUs :data="contactUsData"></ContactUs>

    <!-- Footer -->
    <!-- UIMarketingLayout -->

</template>

