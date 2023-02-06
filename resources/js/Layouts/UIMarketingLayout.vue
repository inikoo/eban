<!--
  - Author: Raul Perusquia <raul@inikoo.com>
  - Created: Fri, 06 Jan 2023 14:42:07 Malaysia Time, Kuala Lumpur, Malaysia
  - Copyright (c) 2023, Inikoo Ltd
  -->
<script setup>
import {Link} from "@inertiajs/vue3";
import {Popover, PopoverButton, PopoverPanel} from '@headlessui/vue';
import {ChevronDownIcon} from '@heroicons/vue/20/solid'
import Images from "@/../../public/Images/AWAdvantageLogo.png";


import {
    Bars3Icon,
    ChartBarIcon,
    CursorArrowRaysIcon,
    ShieldCheckIcon,
    Squares2X2Icon,
    XMarkIcon
} from '@heroicons/vue/24/outline';
import {inject} from 'vue';
import Footer from "@/Components/Footer.vue";

const logIn = [
    {name: 'Products', route: 'ui-marketing.auth.login'},
    /*  {name: 'Features', route: 'ui-marketing.features'}, */
]

const signUp = [
    {name: 'Products', route: 'ui-marketing.auth.register'},
]


const navigation = [
    {name: 'Products', route: 'ui-marketing.products.index'},
    /*  {name: 'Features', route: 'ui-marketing.features'}, */

];

const navigationTwo = [
    {name: 'Company', route: 'ui-marketing.company'},

]

const initialiseApp = inject('initialiseApp');
const layout = initialiseApp();

const solutions = [
    {
        name: 'Ads',
        route: 'ui-marketing.products.adwords',
        icon: ChartBarIcon,
    },
    {
        name: 'Seo',
        route: 'ui-marketing.products.seo',
        icon: CursorArrowRaysIcon,
    },
    {name: 'Email Marketing', route: 'ui-marketing.products.emailmarketing', icon: ShieldCheckIcon},
    {
        name: 'Bannersnack',
        route: 'ui-marketing.products.banners',
        icon: Squares2X2Icon,
    }
]

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
                            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                                 aria-label="Global">
                                <div class="flex flex-shrink-0 flex-grow items-center lg:flex-grow-0">
                                    <div class="flex w-full items-center justify-between md:w-auto">
                                        <Link :href="route('ui-marketing.home')">
                                            <span class="sr-only">Your Company</span>
                                            <img alt="Your Company" class="h-8 w-auto sm:h-16"
                                                 :src='Images'/>
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

                                    <Link v-for="item in navigation" :key="item.name" :href="route(item.route)"
                                          class="font-medium text-gray-500 hover:text-gray-900">{{ item.name }}
                                        <PopoverButton
                                            :class="[open ? 'text-gray-900' : 'text-gray-500', 'group items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                                            <ChevronDownIcon
                                                :class="[open ? 'text-gray-600' : 'text-gray-400', 'ml-2 h-5 w-5 transition duration-150 ease-in-out group-hover:text-gray-900']"
                                                aria-hidden="true"/>
                                        </PopoverButton>
                                    </Link>

                                    <transition enter-active-class="transition ease-out duration-200"
                                                enter-from-class="opacity-0 translate-y-1"
                                                enter-to-class="opacity-100 translate-y-0"
                                                leave-active-class="transition ease-in duration-150"
                                                leave-from-class="opacity-100 translate-y-0"
                                                leave-to-class="opacity-0 translate-y-1">
                                        <PopoverPanel
                                            class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0 lg:max-w-3xl">
                                            <div
                                                class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                                <div
                                                    class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                                                    <Link v-for="item in solutions" :key="item.name"
                                                          :href="route(item.route)"
                                                          class="-m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                                                        <div
                                                            class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-indigo-500 text-white sm:h-12 sm:w-12">
                                                            <component :is="item.icon" class="h-6 w-6"
                                                                       aria-hidden="true"/>
                                                        </div>
                                                        <div class="ml-4">
                                                            <p class="text-base mt-3 font-medium text-gray-900">{{
                                                                    item.name
                                                                }}</p>
                                                            <p class="mt-1 text-sm text-gray-500">{{
                                                                    item.description
                                                                }}</p>
                                                        </div>
                                                    </Link>
                                                </div>
                                            </div>
                                        </PopoverPanel>
                                    </transition>

                                    <Link v-for="item in navigationTwo" :key="item.name" :href="route(item.route)"
                                          class="font-medium text-gray-500 hover:text-gray-900">{{ item.name }}
                                    </Link>


                                    <Link :href="route('ui-marketing.auth.login')"
                                          class="font-medium text-indigo-600 hover:text-indigo-500">Log in
                                    </Link>
                                    <Link :href="route('ui-marketing.auth.register')"
                                          class="font-medium text-indigo-600 hover:text-indigo-500">Register
                                    </Link>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile -->
                        <transition enter-active-class="duration-150 ease-out" enter-from-class="opacity-0 scale-95"
                                    enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
                                    leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                            <PopoverPanel focus
                                          class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                                <div
                                    class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                                    <div class="flex items-center justify-between px-5 pt-4">
                                        <div>
                                            <img class="h-8 w-auto"
                                                 src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                                 alt=""/>
                                        </div>
                                        <div class="-mr-2">
                                            <PopoverButton
                                                class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                                <span class="sr-only">Close main menu</span>
                                                <XMarkIcon class="h-6 w-6" aria-hidden="true"/>
                                            </PopoverButton>
                                        </div>
                                    </div>
                                    <div class="space-y-1 px-2 pt-2 pb-3 text-center">

                                        <Link v-for="item in solutions" :key="item.name" :href="route(item.route)"
                                              class="block rounded-md px-3 py-2  text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">
                                            {{ item.name }}
                                        </Link>
                                    </div>
                                    <div class="flex">
                                        <Link v-for="item in logIn" :href="route(item.route)"
                                              class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">
                                            Log in
                                        </Link>
                                        <Link v-for="item in signUp" :href="route(item.route)"
                                              class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">
                                            Sign up
                                        </Link>
                                    </div>

                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>

                    <main class="mx-auto mt-8 max-w-7xl px-6sm:mt-8 md:mt-3 lg:mt-5 lg:px-1 xl:mt-5
">
                        <slot></slot>
                    </main>
                </div>
            </div>
        </div>
        <Footer></Footer>
    </div>
</template>

