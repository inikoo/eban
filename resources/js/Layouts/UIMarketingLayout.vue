<!--
  - Author: Raul Perusquia <raul@inikoo.com>
  - Created: Fri, 06 Jan 2023 14:42:07 Malaysia Time, Kuala Lumpur, Malaysia
  - Copyright (c) 2023, Inikoo Ltd
  -->
<script setup>
import {Popover, PopoverButton, PopoverPanel} from '@headlessui/vue';
import {ChevronDownIcon} from '@heroicons/vue/20/solid'
import LogoImage from "@/../../public/Images/AWAdvantageLogo.png";


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

    <div>
        <Popover class=" mx-auto  ">
            <div
                class=" flex max-w-8xl  mb-12  ml-5  items-center justify-between pt-1 md:justify-start md:space-x-10 lg:flex ">
                <PopoverGroup as="nav" class="hidden space-x-10 md:flex  ml-5">
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
                    <Popover class="relative" v-slot="{ open }">
                        <PopoverButton

                            :class="[open ? 'text-gray-900' : 'text-gray-500', 'group inline-flex items-center rounded-md text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                            <span>Services</span>
                            <ChevronDownIcon
                                :class="[open ? 'text-gray-600' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']"
                                aria-hidden="true"/>
                        </PopoverButton>

                        <transition enter-active-class="transition ease-out duration-200"
                                    enter-from-class="opacity-0 translate-y-1"
                                    enter-to-class="opacity-100 translate-y-0"
                                    leave-active-class="transition ease-in duration-150"
                                    leave-from-class="opacity-100 translate-y-0"
                                    leave-to-class="opacity-0 translate-y-1">

                        </transition>
                    </Popover>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">About</a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Contact</a>
                </PopoverGroup>
                <div class="flex  justify-end lg:w-0 lg:flex-1">
                    <a href="#">
                        <!-- <span class="sr-only">Your Company</span> -->
                        <img class="object-cover" width="350" height="350" :src='LogoImage' alt=""/>
                    </a>
                </div>
                <div class="-my-2 mr-7 md:hidden">
                    <PopoverButton
                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true"/>
                    </PopoverButton>
                </div>
                <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0 pr-5">
                    <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign
                        in</a>
                    <a href="#"
                       class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md   bg-gradient-to-r from-green-500 to-yellow-300 bg-origin-border px-4 py-2 text-base font-medium text-black shadow-sm hover:from-green-600 hover:to-yellow-400">Sign
                        up</a>
                </div>
            </div>
            <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95"
                        enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
                        leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
                <PopoverPanel focus
                              class="absolute inset-x-0 top-0 z-30 origin-top-right transform p-2 transition md:hidden">
                    <div
                        class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="px-5 pt-5 pb-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto"
                                         src="https://tailwindui.com/img/logos/mark.svg?from-color=purple&from-shade=600&to-color=indigo&to-shade=600&toShade=600"
                                         alt="Your Company"/>
                                </div>
                                <div class="-mr-2">
                                    <PopoverButton
                                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close menu</span>
                                        <XMarkIcon class="h-6 w-6" aria-hidden="true"/>
                                    </PopoverButton>
                                </div>
                            </div>
                            <div class="mt-6">
                                <nav class="grid grid-cols-1 gap-7 ">
                                    <a v-for="item in solutions" :key="item.name" :href="item.href"
                                       class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                        <div
                                            class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md   bg-gradient-to-r from-green-500 to-yellow-300 bg-origin-border text-black hover:from-green-600 hover:to-yellow-300">
                                            <component :is="item.icon" class="h-6 w-6" aria-hidden="true"/>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">{{ item.name }}</div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </PopoverPanel>
            </transition>
        </Popover>
        <main class="mx-auto">
            <slot></slot>
        </main>
        <Footer></Footer>
    </div>

</template>

