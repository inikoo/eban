<script setup>

import {useLayoutStore} from "@/Stores/layout";

import FAQ from "@/Components/UIMarketing/SectionsTest/FAQ.vue";
import Hero from "@/Components/UIMarketing/Sections/Hero.vue";

import YourAdvantagePenImage from "@/../../public/Images/YourAdvantagePenImage.png";
import ContactUsGreenStuff from "@/../../public/Images/ContactUsGreenStuff.png";

import {ref} from 'vue'
import {Switch} from '@headlessui/vue'


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
        <div class="">
            <FAQ :data="faqsData"></FAQ>
        </div>

        <!-- Your Advantage Section -->

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
                        <div class="inline-flex rounded-md">
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

        <!--  Contact us -->

        <div class="relative bg-white md:h-screen">
            <div class="relative h-56 bg-indigo-600 hidden md:block md:absolute md:left-0 md:h-full md:w-1/2">
                <img class="h-full w-full object-cover"
                     :src="ContactUsGreenStuff"
                     alt=""/>
            </div>
            <div class="relative mx-auto max-w-md  px-6 sm:max-w-7xl py-10 lg:px-1">
                <div class="md:ml-auto md:w-1/2 md:pl-10 ">
                    <div class="overflow-hidden bg-white  px-6 lg:px-8 ">
                        <div class="relative mx-auto max-w-xl">
                            <svg class="absolute left-full translate-x-1/2 transform" width="404" height="404"
                                 fill="none" viewBox="0 0 404 404" aria-hidden="true">
                                <defs>
                                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20"
                                             height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                              fill="currentColor"/>
                                    </pattern>
                                </defs>
                                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"/>
                            </svg>
                            <svg class="absolute right-full bottom-0 -translate-x-1/2 transform" width="404"
                                 height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                                <defs>
                                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20"
                                             height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                              fill="currentColor"/>
                                    </pattern>
                                </defs>
                                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"/>
                            </svg>
                            <div class="text-center">
                                <h2 class="text-6xl font-bold tracking-tight text-gray-900 sm:text-4xl md:text-5xl lg:text-6xl">
                                    Contact Us</h2>
                            </div>
                            <div class="mt-12">
                                <form action="#" method="POST"
                                      class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <div class="mt-1">
                                            <input type="text" name="first-name" id="first-name"
                                                   autocomplete="given-name"
                                                   class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"/>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <div class="mt-1">
                                            <input type="text" name="last-name" id="last-name"
                                                   autocomplete="family-name"
                                                   class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"/>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <div class="mt-1">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                   class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"/>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone
                                            Number</label>
                                        <div class="relative mt-1 rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 flex items-center">
                                                <label for="country" class="sr-only">Country</label>
                                                <select id="country" name="country"
                                                        class="h-full rounded-md border-transparent bg-transparent py-0 pl-4 pr-8 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500">
                                                    <option>US</option>
                                                    <option>CA</option>
                                                    <option>EU</option>
                                                </select>
                                            </div>
                                            <input type="text" name="phone-number" id="phone-number" autocomplete="tel"
                                                   class="block w-full rounded-md border-gray-300 py-3 px-4 pl-20 focus:border-indigo-500 focus:ring-indigo-500"
                                                   placeholder="+1 (555) 987-6543"/>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="message"
                                               class="block text-sm font-medium text-gray-700">Message</label>
                                        <div class="mt-1">
                                            <textarea id="message" name="message" rows="4"
                                                      class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"/>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <Switch v-model="agreed"
                                                        :class="[agreed ? 'bg-indigo-600' : 'bg-gray-200', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                                                    <span class="sr-only">Agree to policies</span>
                                                    <span aria-hidden="true"
                                                          :class="[agreed ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']"/>
                                                </Switch>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-base text-gray-500">
                                                    By selecting this, you agree to the
                                                    {{ ' ' }}
                                                    <a href="#" class="font-medium text-gray-700 underline">Privacy
                                                        Policy</a>
                                                    {{ ' ' }}
                                                    and
                                                    {{ ' ' }}
                                                    <a href="#" class="font-medium text-gray-700 underline">Cookie
                                                        Policy</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <button type="submit"
                                                class="inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                            Let's talk
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->

</template>

