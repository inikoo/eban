<script setup>
import {Disclosure, DisclosureButton, DisclosurePanel} from '@headlessui/vue'
import {ChevronDownIcon} from '@heroicons/vue/24/outline'

defineProps(['data'])

</script>

<template>
    <div class="bg-white">
        <div class="max-w-md max-w-7xl py-12 px-6 sm:py-16 lg:px-3 text-center">
            <div class="mx-auto max-w-3xl divide-y-2 divide-black text-center">
                <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-center">Our Services</h2>
                <dl class="mt-6 space-y-6 divide-y divide-black text-center">
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6 text-center" v-slot="{ open }">
                        <dt class="text-lg text-center">
                            <DisclosureButton class="flex w-full items-start justify-between text-center text-gray-400">
                                <span class="font-medium text-gray-900 text-center">{{ data.questions.first.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-180' : 'rotate-0', 'h-6 w-6 transform']"
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
            </div>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#"
                   class="rounded-full text-red-60 bg-black px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm tracking-wide"> Learn More
                </a>
            </div>
        </div>
    </div>
</template>

