<script setup>
import {Disclosure, DisclosureButton, DisclosurePanel} from '@headlessui/vue'
import {ChevronDownIcon} from '@heroicons/vue/24/outline'
import OurServicePlantImage from "../../../../../public/Images/OurServicesPlant.png";
import OurServicePenImage from "../../../../../public/Images/OurServicesPen.png";




defineProps(['data'])


</script>

<template>
    <div class="bg-white ">
        <div class="py-12 px-6 sm:py-16 lg:px-3 flex justify-around ">
            <div class="hidden lg:block">
                <img :src='OurServicePlantImage' class="rounded-3xl" alt="ServicePlant Image">
            </div>
            <div class=" md:max-w-md sm:max-w-xl divide-y-2 divide-black max-w"> <!-- mx-auto max-w-3xl -->
                <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl ">Our Services</h2>
                <dl class="mt-6 space-y-6 divide-y divide-black ">
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6 " v-slot="{ open }">
                        <dt class="text-lg text-center">
                            <DisclosureButton class="flex w-full items-start justify-between  text-gray-400">
                                <span class="font-medium text-gray-900 text-center">{{
                                        data.questions.first.question
                                    }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? 'rotate-180' : 'rotate-0', 'h-6 w-6 transform']"
                                   aria-hidden="true"/>
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500 font-light">{{ data.questions.first.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6" v-slot="{ open }">
                        <dt class="text-lg">
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                <span class="font-medium text-gray-900">{{ data.questions.second.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']"
                                   aria-hidden="true"/>
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500 font-light">{{ data.questions.second.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6" v-slot="{ open }">
                        <dt class="text-lg">
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                <span class="font-medium text-gray-900">{{ data.questions.third.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']"
                                   aria-hidden="true"/>
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500 font-light">{{ data.questions.third.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6" v-slot="{ open }">
                        <dt class="text-lg">
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                <span class="font-medium text-gray-900">{{ data.questions.fourth.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']"
                                   aria-hidden="true"/>
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500 font-light">{{ data.questions.fourth.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                </dl>
                <div class="mt-5 flex items-center justify-center gap-x-6">
                    <a href="#"
                       class="rounded-full mt-5 text-red-60 bg-black px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm tracking-wide">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="hidden lg:flex items-end"> <!-- hidden lg:block-->
                <img :src="OurServicePenImage" class="rounded-3xl" alt="Service Pen Image">
            </div>
        </div>
    </div>
</template>

