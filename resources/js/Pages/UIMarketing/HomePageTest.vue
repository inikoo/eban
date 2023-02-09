<script setup>
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
import ContactUsGreenStuff from "@/../../public/Images/ContactUsGreenStuff.png";
import { ref } from 'vue'
import { Switch } from '@headlessui/vue'




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
const agreed = ref(false)

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
                                        <stop offset="1" stop-color="#7775D6"/>
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

        <div class="relative bg-white h-screen">
            <div class="relative h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                <img class="h-full w-full object-cover"
                     :src="ContactUsGreenStuff"
                     alt=""/>
            </div>
            <div class="relative mx-auto max-w-md  px-6 sm:max-w-7xl py-10  lg:px-1">
                <div class="md:ml-auto md:w-1/2 md:pl-10 ">
                    <div class="overflow-hidden bg-white  px-6 lg:px-8 ">
                        <div class="relative mx-auto max-w-xl">
                            <svg class="absolute left-full translate-x-1/2 transform" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                                <defs>
                                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                            </svg>
                            <svg class="absolute right-full bottom-0 -translate-x-1/2 transform" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                                <defs>
                                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
                            </svg>
                            <div class="text-center">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact sales</h2>
                                <p class="mt-4 text-lg leading-6 text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                            </div>
                            <div class="mt-12">
                                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                        <div class="mt-1">
                                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                                        </div>
                                    </div>
                                    <div>
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                        <div class="mt-1">
                                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <div class="mt-1">
                                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                        <div class="relative mt-1 rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 left-0 flex items-center">
                                                <label for="country" class="sr-only">Country</label>
                                                <select id="country" name="country" class="h-full rounded-md border-transparent bg-transparent py-0 pl-4 pr-8 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500">
                                                    <option>US</option>
                                                    <option>CA</option>
                                                    <option>EU</option>
                                                </select>
                                            </div>
                                            <input type="text" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-gray-300 py-3 px-4 pl-20 focus:border-indigo-500 focus:ring-indigo-500" placeholder="+1 (555) 987-6543" />
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                        <div class="mt-1">
                                            <textarea id="message" name="message" rows="4" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <Switch v-model="agreed" :class="[agreed ? 'bg-indigo-600' : 'bg-gray-200', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                                                    <span class="sr-only">Agree to policies</span>
                                                    <span aria-hidden="true" :class="[agreed ? 'translate-x-5' : 'translate-x-0', 'inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
                                                </Switch>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-base text-gray-500">
                                                    By selecting this, you agree to the
                                                    {{ ' ' }}
                                                    <a href="#" class="font-medium text-gray-700 underline">Privacy Policy</a>
                                                    {{ ' ' }}
                                                    and
                                                    {{ ' ' }}
                                                    <a href="#" class="font-medium text-gray-700 underline">Cookie Policy</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Let's talk</button>
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

