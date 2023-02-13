<script setup>

import {useLayoutStore} from "@/Stores/layout";

import TypeOfServicesToggle from "@/Components/UIMarketing/Sections/TypeOfServicesToggle.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";
import AwExplanationParagraph from "@/Components/UIMarketing/Sections/AwExplanationParagraph.vue";
import ContactUs from "@/Components/UIMarketing/Sections/ContactUs.vue";



defineProps(['faqsData'])

const solutions = [
    {
        name: 'Inbox',
        description: 'Get a better understanding of where your traffic is coming from.',
        href: '#',
        icon: InboxIcon,
    },
    {
        name: 'Messaging',
        description: 'Speak directly to your customers in a more meaningful way.',
        href: '#',
        icon: ChatBubbleBottomCenterTextIcon,
    },
    {
        name: 'Live Chat',
        description: "Your customers' data will be safe and secure.",
        href: '#',
        icon: ChatBubbleLeftRightIcon,
    },
    {
        name: 'Knowledge Base',
        description: "Connect with third-party tools that you're already using.",
        href: '#',
        icon: QuestionMarkCircleIcon,
    },
]
const agreed = ref(false)

const theme = useLayoutStore().theme

</script>

<template layout="UIMarketingLayout">
    <div class="bg-white bg-[url('@/../../public/Images/HomeHeroPlantImage.jpeg')]  w-full h-[50rem] bg-auto bg-repeat-round">
        <header class="">

                <div class="-mt-48">
                    <div class="mx-auto max-w-7xl py-24 text-black sm:px-6 sm:py-32 lg:px-8">
                        <div class="px-6 py-24 text-center sm:rounded-3xl sm:px-16">
                            <h2
                                class="mx-auto max-w-2xl text-6xl font-bold tracking-widest font-light capitalize">
                                <span class="text-green-500">
                                    Your
                                </span>
                                <span class="text-slate-700">
                                    Digital
                                </span>
                                <span class="text-yellow-300 ">
                                    Guru
                                </span>
                            </h2>
                            <p class="mx-auto mt-6 max-w-xl text-lg leading-6 font-light tracking-wider antialiased">
                                Get the AW advantage of specialist retail digital marketing. More attention - our
                                specialist team in Indonesia will spend many more hours on your account - than any
                                European agency can provide. When you are sleeping we are working studying yesterday's
                                results - tweeking, improving getting your best marketing ready for the next day. Awake
                                to a real advantage everyday.
                            </p>
                            <div class="mt-10 flex items-center justify-center gap-x-6">
                                <a href="#"
                                   class="rounded-full   px-3.5 py-1.5 text-base font-semibold leading-7 text-black  tracking-wide   bg-gradient-to-r from-green-500 to-yellow-300 bg-origin-border hover:from-green-600 hover:to-yellow-400">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
    </div>


    <main>

    <!-- Our Services Section -->
    <TypeOfServicesToggle :data="faqsData"></TypeOfServicesToggle>

    <!-- Your Advantage Section -->
    <AwExplanationParagraph></AwExplanationParagraph>

    <!--  Contact us section -->
    <ContactUs></ContactUs>

    <!-- Footer -->
    <!-- UIMarketingLayout -->

</template>

