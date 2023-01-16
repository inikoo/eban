<!--
  - Author: Raul Perusquia <raul@inikoo.com>
  - Created: Fri, 06 Jan 2023 14:42:07 Malaysia Time, Kuala Lumpur, Malaysia
  - Copyright (c) 2023, Inikoo Ltd
  -->
<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import {Popover, PopoverButton, PopoverPanel} from '@headlessui/vue';
import {Bars3Icon, XMarkIcon} from '@heroicons/vue/24/outline';
import {computed, inject} from 'vue';
import Footer from "@/Components/Footer.vue";

const navigation = [
    {name: 'Product', href: '#'},
    {name: 'Features', href: '#'},
    {name: 'Company', href: '#'},
];

const initialiseApp = inject('initialiseApp');
const layout = initialiseApp();

const hasHero = computed(() => {
    return layout.currentRoute === 'ui-marketing.home';
});

</script>

<template>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative overflow-hidden bg-white">
            <div class="mx-auto max-w-7xl">
                <div class="relative z-10 bg-white pb-8" :class="hasHero?' sm:pb-16 md:pb-20 lg:w-full lg:max-w-2xl lg:pb-28 xl:pb-32':''">
                    <svg v-if="hasHero" class="absolute inset-y-0 right-0 hidden h-full w-48 translate-x-1/2 transform text-white lg:block" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none"
                         aria-hidden="true">
                        <polygon points="50,0 100,0 50,100 0,100"/>
                    </svg>

                    <Popover>
                        <div class="relative px-6 pt-6 lg:px-8">
                            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                                <div class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0">
                                    <div class="flex w-full items-center justify-between md:w-auto">
                                        <Link :href="route('ui-marketing.home')">
                                            <span class="sr-only">Your Company</span>
                                            <img alt="Your Company" class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"/>
                                        </Link>
                                        <div class="-mr-2 flex items-center md:hidden">
                                            <PopoverButton
                                                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                                <span class="sr-only">Open main menu</span>
                                                <Bars3Icon class="h-6 w-6" aria-hidden="true"/>
                                            </PopoverButton>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden md:ml-10 md:block md:space-x-8 md:pr-4">
                                    <a v-for="item in navigation" :key="item.name" :href="item.href" class="font-medium text-gray-500 hover:text-gray-900">{{ item.name }}</a>

                                    <Link :href="route('ui-marketing.auth.login')" class="font-medium text-indigo-600 hover:text-indigo-500">Log in</Link>
                                    <Link :href="route('ui-marketing.auth.register')" class="font-medium text-indigo-600 hover:text-indigo-500">Register</Link>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile -->
                        <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
                                    leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                            <PopoverPanel focus class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                                <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                                    <div class="flex items-center justify-between px-5 pt-4">
                                        <div>
                                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""/>
                                        </div>
                                        <div class="-mr-2">
                                            <PopoverButton
                                                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                                <span class="sr-only">Close main menu</span>
                                                <XMarkIcon class="h-6 w-6" aria-hidden="true"/>
                                            </PopoverButton>
                                        </div>
                                    </div>
                                    <div class="space-y-1 px-2 pt-2 pb-3">
                                        <a v-for="item in navigation" :key="item.name" :href="item.href"
                                           class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">{{ item.name }}</a>
                                    </div>
                                    <a href="#" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">Log in X</a>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>

                    <main class="mx-auto mt-10 max-w-7xl px-6sm:mt-12 md:mt-16 lg:mt-20 lg:px-8 xl:mt-22 ">
                        <slot></slot>
                    </main>
                </div>
            </div>
            <div v-if="hasHero" class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:h-full lg:w-full"
                     src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt=""/>
            </div>
        </div>
    </div>
    <Footer></Footer>
</template>

