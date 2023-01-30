<!--
  - Author: Raul Perusquia <raul@inikoo.com>
  - Created: Fri, 06 Jan 2023 14:42:07 Malaysia Time, Kuala Lumpur, Malaysia
  - Copyright (c) 2023, Inikoo Ltd
  -->
<script setup>
import {Link} from '@inertiajs/vue3';
import {Popover, PopoverButton, PopoverPanel} from '@headlessui/vue';
import {Bars3Icon, XMarkIcon} from '@heroicons/vue/24/outline';
import {inject} from 'vue';
import Footer from "@/Components/Footer.vue";


const navigation = [
    {name: 'Products', route: 'ui-marketing.products.index'},
  /*  {name: 'Features', route: 'ui-marketing.features'}, */
    {name: 'Company', route: 'ui-marketing.company'},
];

const initialiseApp = inject('initialiseApp');
const layout = initialiseApp();

</script>

<template>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 ">
        <div class="relative overflow-hidden bg-white">
            <div class="mx-auto max-w-7xl">
                <!-- experimental solution, pb-40 makes the footer be at the end in the register page -->
                <div class="relative z-10 bg-white pb-40">

                    <!-- experimental solution, pb-40 makes the footer be at the end in the register page -->

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
                                    <Link v-for="item in navigation" :key="item.name" :href="route(item.route)" class="font-medium text-gray-500 hover:text-gray-900">{{ item.name }}</Link>

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
                                        <Link v-for="item in navigation" :key="item.name" :href="route(item.route)"
                                           class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">{{ item.name }}</Link>
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
        </div>
        <Footer></Footer>
    </div>
</template>

