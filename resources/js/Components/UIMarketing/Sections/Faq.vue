<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/24/outline'

defineProps(['data'])

</script>

<template>
    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl py-12 px-6 sm:py-16 lg:px-8">
            <div class="mx-auto max-w-3xl divide-y-2 divide-gray-200">
                <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Frequently asked questions</h2>
                <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6" v-slot="{ open }">
                        <dt class="text-lg">
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                <span class="font-medium text-gray-900">{{ data.questions.first.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500">{{ data.questions.first.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6" v-slot="{ open }">
                        <dt class="text-lg">
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                <span class="font-medium text-gray-900">{{ data.questions.second.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500">{{ data.questions.second.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6" v-slot="{ open }">
                        <dt class="text-lg">
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                <span class="font-medium text-gray-900">{{ data.questions.third.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500">{{ data.questions.third.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                    <Disclosure as="div" v-for="faq in data" :key="faq" class="pt-6" v-slot="{ open }">
                        <dt class="text-lg">
                            <DisclosureButton class="flex w-full items-start justify-between text-left text-gray-400">
                                <span class="font-medium text-gray-900">{{ data.questions.fourth.question }}</span>
                                <span class="ml-6 flex h-7 items-center">
                  <ChevronDownIcon :class="[open ? '-rotate-180' : 'rotate-0', 'h-6 w-6 transform']" aria-hidden="true" />
                </span>
                            </DisclosureButton>
                        </dt>
                        <DisclosurePanel as="dd" class="mt-2 pr-12">
                            <p class="text-base text-gray-500">{{ data.questions.fourth.answer }}</p>
                        </DisclosurePanel>
                    </Disclosure>
                </dl>
            </div>
        </div>
    </div>
</template>

