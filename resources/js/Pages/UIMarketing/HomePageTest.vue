<script setup>
import {defineComponent, h} from 'vue'
import {Popover, PopoverButton, PopoverGroup, PopoverPanel} from '@headlessui/vue'
import {
    ArrowUturnLeftIcon,
    Bars3Icon,
    ChatBubbleBottomCenterTextIcon,
    ChatBubbleLeftEllipsisIcon,
    ChatBubbleLeftRightIcon,
    DocumentChartBarIcon,
    HeartIcon,
    InboxIcon,
    PencilSquareIcon,
    QuestionMarkCircleIcon,
    TrashIcon,
    UsersIcon,
    XMarkIcon,
} from '@heroicons/vue/24/outline'
import {ChevronDownIcon} from '@heroicons/vue/20/solid'
import LogoImage from "@/../../public/Images/AWAdvantageLogo.png";
import {useLayoutStore} from "@/Stores/layout";
import FAQ from "@/Components/UIMarketing/Sections/FAQ.vue";
import YourAdvantagePenImage from "@/../../public/Images/YourAdvantagePenImage.png";


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
const features = [
    {
        name: 'Unlimited Inboxes',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: InboxIcon,
    },
    {
        name: 'Manage Team Members',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: UsersIcon,
    },
    {
        name: 'Spam Report',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: TrashIcon,
    },
    {
        name: 'Compose in Markdown',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: PencilSquareIcon,
    },
    {
        name: 'Team Reporting',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: DocumentChartBarIcon,
    },
    {
        name: 'Saved Replies',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: ArrowUturnLeftIcon,
    },
    {
        name: 'Email Commenting',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: ChatBubbleLeftEllipsisIcon,
    },
    {
        name: 'Connect with Customers',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: HeartIcon,
    },
]
const metrics = [
    {id: 1, stat: '8K+', emphasis: 'Companies', rest: 'use laoreet amet lacus nibh integer quis.'},
    {id: 2, stat: '25K+', emphasis: 'Countries around the globe', rest: 'lacus nibh integer quis.'},
    {id: 3, stat: '98%', emphasis: 'Customer satisfaction', rest: 'laoreet amet lacus nibh integer quis.'},
    {id: 4, stat: '12M+', emphasis: 'Issues resolved', rest: 'lacus nibh integer quis.'},
]
const footerNavigation = {
    solutions: [
        {name: 'Marketing', href: '#'},
        {name: 'Analytics', href: '#'},
        {name: 'Commerce', href: '#'},
        {name: 'Insights', href: '#'},
    ],
    support: [
        {name: 'Pricing', href: '#'},
        {name: 'Documentation', href: '#'},
        {name: 'Guides', href: '#'},
        {name: 'API Status', href: '#'},
    ],
    company: [
        {name: 'About', href: '#'},
        {name: 'Blog', href: '#'},
        {name: 'Jobs', href: '#'},
        {name: 'Press', href: '#'},
        {name: 'Partners', href: '#'},
    ],
    legal: [
        {name: 'Claim', href: '#'},
        {name: 'Privacy', href: '#'},
        {name: 'Terms', href: '#'},
    ],
    social: [
        {
            name: 'Facebook',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', {fill: 'currentColor', viewBox: '0 0 24 24'}, [
                        h('path', {
                            'fill-rule': 'evenodd',
                            d: 'M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z',
                            'clip-rule': 'evenodd',
                        }),
                    ]),
            }),
        },
        {
            name: 'Instagram',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', {fill: 'currentColor', viewBox: '0 0 24 24'}, [
                        h('path', {
                            'fill-rule': 'evenodd',
                            d: 'M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z',
                            'clip-rule': 'evenodd',
                        }),
                    ]),
            }),
        },
        {
            name: 'Twitter',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', {fill: 'currentColor', viewBox: '0 0 24 24'}, [
                        h('path', {
                            d: 'M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84',
                        }),
                    ]),
            }),
        },
        {
            name: 'GitHub',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', {fill: 'currentColor', viewBox: '0 0 24 24'}, [
                        h('path', {
                            'fill-rule': 'evenodd',
                            d: 'M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z',
                            'clip-rule': 'evenodd',
                        }),
                    ]),
            }),
        },
        {
            name: 'Dribbble',
            href: '#',
            icon: defineComponent({
                render: () =>
                    h('svg', {fill: 'currentColor', viewBox: '0 0 24 24'}, [
                        h('path', {
                            'fill-rule': 'evenodd',
                            d: 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z',
                            'clip-rule': 'evenodd',
                        }),
                    ]),
            }),
        },
    ],
}

const theme = useLayoutStore().theme

</script>

<template>
    <div class="bg-white">
        <header
            class="bg-[url('@/../../public/Images/HomeHeroPlantImage.jpeg')]  w-full h-[50rem] bg-auto bg-repeat-round	">
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
                                <PopoverPanel
                                    class="absolute z-10 -ml-4 mt-3 w-screen max-w-md transform lg:left-1/2 lg:ml-10 lg:max-w-2xl lg:-translate-x-1/3">
                                    <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                        <div
                                            class="relative grid gap-6 bg-white px-5 ml-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">
                                            <a v-for="item in solutions" :key="item.name" :href="item.href"
                                               class="-m-3 flex items-start rounded-lg p-3 hover:bg-gray-50">
                                                <div
                                                    class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white sm:h-12 sm:w-12">
                                                    <component :is="item.icon" class="h-6 w-6" aria-hidden="true"/>
                                                </div>
                                                <div class="ml-4">
                                                    <p class="text-base font-medium text-gray-900">{{ item.name }}</p>
                                                    <p class="mt-1 text-sm text-gray-500">{{ item.description }}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </PopoverPanel>
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
                           class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Sign
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
                                    <nav class="grid grid-cols-1 gap-7">
                                        <a v-for="item in solutions" :key="item.name" :href="item.href"
                                           class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                            <div
                                                class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                                <component :is="item.icon" class="h-6 w-6" aria-hidden="true"/>
                                            </div>
                                            <div class="ml-4 text-base font-medium text-gray-900">{{ item.name }}</div>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                            <div class="py-6 px-5">
                                <div class="grid grid-cols-2 gap-4">
                                    <a href="#"
                                       class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>
                                    <a href="#"
                                       class="text-base font-medium text-gray-900 hover:text-gray-700">Partners</a>
                                    <a href="#"
                                       class="text-base font-medium text-gray-900 hover:text-gray-700">Company</a>
                                </div>
                                <div class="mt-6">
                                    <a href="#"
                                       class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Sign
                                        up</a>
                                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                                        Existing customer?
                                        <a href="#" class="text-gray-900">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </PopoverPanel>
                </transition>
                <div class="-mt-32">
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
                                Incididunt sint fugiat pariatur
                                cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do
                                ea.</p>
                            <div class="mt-10 flex items-center justify-center gap-x-6">
                                <a href="#"
                                   class="rounded-full text-red-60 bg-black px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm tracking-wide">Learn
                                    More</a>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"
                                 class="absolute top-1/2 left-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
                                 aria-hidden="true">
                                <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)"
                                        fill-opacity="0.7"/>
                                <defs>
                                    <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                                        <stop stop-color="#7775D6"/>
                                        <stop offset="1" stop-color="#E935C1"/>
                                    </radialGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </Popover>
        </header>
    </div>


    <main>
        <!-- Hero section -->
        <!-- <div class="bg-white h-[40rem]">
            <div class="flex justify-around mt-6 min-w-max">
                <div class="">
                    <img class="object-cover rounded-3xl" :src='OurServicePlantImage' alt=""/>
                </div>
                <div>
                    <FAQ :data="faqsData"></FAQ>
                </div>
                <div class="">
                    <img class="object-cover rounded-3xl" :src='OurServicePenImage' alt=""/>
                </div>
            </div>
        </div> -->
        <div class="">
            <FAQ :data="faqsData"></FAQ>
        </div>

        <!-- Logo Cloud -->

        <!-- Alternating Feature Sections -->

        <!-- Gradient Feature Section -->

        <!-- Stats section -->
        <div class="relative bg-[#dbdbdb] h-screen">
            <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                <img class="h-full w-full object-cover"
                     :src="YourAdvantagePenImage"
                     alt=""/>
            </div>
            <div class="relative mx-auto max-w-md py-12 px-6 sm:max-w-7xl sm:py-20 md:py-28 lg:px-8 lg:py-32">
                <div class="md:ml-auto md:w-1/2 md:pl-10 ">
                    <h2 class="mt-2 text-3xl font-bold tracking-tight text-black sm:text-4xl">Your Advantage</h2>
                    <p class="mt-3 text-lg text-black">The AW-Advantage team bring you a host of skills to supercharge
                        your retail business. Use our modular approach - buy just the services you need - but as you add
                        modules they will work holistically. EG. your PPC guy will meet with your Social Media and make
                        a complimentary plan - mutipling results. AW-Advantage - team work. The AW-Advatage team is
                        rewarded and motivated by improving your business - helping you grow and succeed is our
                        reward.</p>
                    <div class="mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <a href="#"
                               class="inline-flex items-center justify-center rounded-full border border-transparent bg-black px-5 py-3 text-base font-medium text-white">
                                Visit the help center
                                <ArrowTopRightOnSquareIcon class="-mr-1 ml-3 h-5 w-5 text-gray-400" aria-hidden="true"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Section -->
        <div class="bg-white ">
            <div
                class="mx-auto max-w-4xl py-16 px-6 sm:py-24 lg:flex lg:max-w-7xl lg:items-center lg:justify-between lg:px-8">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    <span class="block">Ready to get started?</span>
                    <span
                        class="-mb-1 block bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text pb-1 text-transparent">Get in touch or create an account.</span>
                </h2>
                <div class="mt-6 space-y-4 sm:flex sm:space-y-0 sm:space-x-5">
                    <a href="#"
                       class="flex items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-3 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Learn
                        more</a>
                    <a href="#"
                       class="flex items-center justify-center rounded-md border border-transparent bg-indigo-50 px-4 py-3 text-base font-medium text-indigo-800 shadow-sm hover:bg-indigo-100">Get
                        started</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-50" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 pt-16 pb-8 lg:px-8 lg:pt-24">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-base font-medium text-gray-900">Solutions</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in footerNavigation.solutions" :key="item.name">
                                    <a :href="item.href"
                                       class="text-base text-gray-500 hover:text-gray-900">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-base font-medium text-gray-900">Support</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in footerNavigation.support" :key="item.name">
                                    <a :href="item.href"
                                       class="text-base text-gray-500 hover:text-gray-900">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-base font-medium text-gray-900">Company</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in footerNavigation.company" :key="item.name">
                                    <a :href="item.href"
                                       class="text-base text-gray-500 hover:text-gray-900">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3 class="text-base font-medium text-gray-900">Legal</h3>
                            <ul role="list" class="mt-4 space-y-4">
                                <li v-for="item in footerNavigation.legal" :key="item.name">
                                    <a :href="item.href"
                                       class="text-base text-gray-500 hover:text-gray-900">{{ item.name }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-12 xl:mt-0">
                    <h3 class="text-base font-medium text-gray-900">Subscribe to our newsletter</h3>
                    <p class="mt-4 text-base text-gray-500">The latest news, articles, and resources, sent to your
                        inbox weekly.</p>
                    <form class="mt-4 sm:flex sm:max-w-md">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input type="email" name="email-address" id="email-address" autocomplete="email" required=""
                               class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:placeholder-gray-400 focus:outline-none focus:ring-indigo-500"
                               placeholder="Enter your email"/>
                        <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                            <button type="submit"
                                    class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-3 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
                <div class="flex space-x-6 md:order-2">
                    <a v-for="item in footerNavigation.social" :key="item.name" :href="item.href"
                       class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">{{ item.name }}</span>
                        <component :is="item.icon" class="h-6 w-6" aria-hidden="true"/>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights
                    reserved.</p>
            </div>
        </div>
    </footer>
</template>

