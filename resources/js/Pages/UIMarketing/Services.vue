<script setup>

import { ChevronRightIcon } from '@heroicons/vue/20/solid'
import { CloudArrowUpIcon, LockClosedIcon, ServerIcon } from '@heroicons/vue/20/solid'
import { CheckIcon, MinusIcon } from '@heroicons/vue/20/solid'
import { LifebuoyIcon, NewspaperIcon, PhoneIcon } from '@heroicons/vue/24/outline'
import { ref } from 'vue'
import { Switch } from '@headlessui/vue'

const agreed = ref(false)

const posts = [
    {
        title: 'Boost your conversion rate',
        href: '#',
        category: { name: 'Article', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.',
        date: 'Mar 16, 2020',
        datetime: '2020-03-16',
        imageUrl:
            'https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '6 min',
        author: {
            name: 'Roel Aufderehar',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },
    {
        title: 'How to use search engine optimization to drive sales',
        href: '#',
        category: { name: 'Video', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.',
        date: 'Mar 10, 2020',
        datetime: '2020-03-10',
        imageUrl:
            'https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '4 min',
        author: {
            name: 'Brenna Goyette',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },
    {
        title: 'Improve your customer experience',
        href: '#',
        category: { name: 'Case Study', href: '#' },
        description:
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.',
        date: 'Feb 12, 2020',
        datetime: '2020-02-12',
        imageUrl:
            'https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1679&q=80',
        readingTime: '11 min',
        author: {
            name: 'Daniela Metz',
            href: '#',
            imageUrl:
                'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
    },
]
const supportLinks = [
    {
        name: 'Sales',
        href: '#',
        description:
            'Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.',
        icon: PhoneIcon,
    },
    {
        name: 'Technical Support',
        href: '#',
        description:
            'Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.',
        icon: LifebuoyIcon,
    },
    {
        name: 'Media Inquiries',
        href: '#',
        description:
            'Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.',
        icon: NewspaperIcon,
    },
]
const features = [
    {
        name: 'Push to deploy.',
        description:
            'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.',
        icon: CloudArrowUpIcon,
    },
    {
        name: 'SSL certificates.',
        description: 'Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.',
        icon: LockClosedIcon,
    },
    {
        name: 'Database backups.',
        description: 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
        icon: ServerIcon,
    },
]
const tiers = [
    { name: 'Basic', href: '#', priceMonthly: 9, description: 'Quis suspendisse ut fermentum neque vivamus non tellus.' },
    {
        name: 'Essential',
        href: '#',
        priceMonthly: 29,
        description: 'Quis eleifend a tincidunt pellentesque. A tempor in sed.',
    },
    {
        name: 'Premium',
        href: '#',
        priceMonthly: 59,
        description: 'Orci volutpat ut sed sed neque, dui eget. Quis tristique non.',
    },
]
const sections = [
    {
        name: 'Features',
        features: [
            { name: 'Molestie lobortis massa.', tiers: { Basic: true, Essential: true, Premium: true } },
            { name: 'Urna purus felis.', tiers: { Basic: true, Essential: true, Premium: true } },
            { name: 'Tellus pulvinar sit dictum.', tiers: { Essential: true, Premium: true } },
            { name: 'Convallis.', tiers: { Essential: 'Up to 20 users', Premium: 'Up to 50 users' } },
        ],
    },
    {
        name: 'Reporting',
        features: [
            { name: 'Adipiscing.', tiers: { Basic: true, Essential: true, Premium: true } },
            { name: 'Eget risus integer.', tiers: { Essential: true, Premium: true } },
            { name: 'Gravida leo urna velit.', tiers: { Premium: true } },
            { name: 'Elementum ut dapibus mi feugiat cras nisl.', tiers: { Premium: true } },
        ],
    },
    {
        name: 'Support',
        features: [
            { name: 'Sit dignissim.', tiers: { Basic: true, Essential: true, Premium: true } },
            { name: 'Congue at nibh et.', tiers: { Essential: true, Premium: true } },
            { name: 'Volutpat feugiat mattis.', tiers: { Essential: true, Premium: true } },
            { name: 'Tristique pellentesque ornare diam sapien.', tiers: { Premium: true } },
        ],
    },
]

defineProps(['ctaData' , 'faqsData'])

</script>

<template layout="UIMarketingLayout">
    <div class="relative isolate overflow-hidden bg-white">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]" aria-hidden="true">
            <defs>
                <pattern id="0787a7c5-978c-4f66-83c7-11c213f99cb7" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#0787a7c5-978c-4f66-83c7-11c213f99cb7)" />
        </svg>
        <div class="mx-auto max-w-7xl px-6 pt-10 pb-24 sm:pb-32 lg:flex lg:py-40 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl lg:flex-shrink-0 lg:pt-8">
                <img class="h-11" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="Your Company" />
                <div class="mt-24 sm:mt-32 lg:mt-16">
                    <a href="#" class="inline-flex space-x-6">
                        <span class="rounded-full bg-indigo-600/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-600/10">What's new</span>
                        <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600">
              <span>Just shipped v1.0</span>
              <ChevronRightIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
            </span>
                    </a>
                </div>
                <h1 class="mt-10 text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Deploy to the cloud with confidence</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                <div class="mt-10 flex items-center gap-x-6">
                    <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                    <a href="#" class="text-base font-semibold leading-7 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mt-0 lg:mr-0 lg:max-w-none lg:flex-none xl:ml-32">
                <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                    <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                        <img src="https://tailwindui.com/img/component-images/project-app-screenshot.png" alt="App screenshot" width="2432" height="1442" class="w-[76rem] rounded-md shadow-2xl ring-1 ring-gray-900/10" />
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- hero -->
    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl md:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:grid-cols-2 lg:items-start">
                <div class="px-6 lg:px-0 lg:pt-4 lg:pr-4">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-lg">
                        <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Deploy faster</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">A better workflow</p>
                        <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            <div v-for="feature in features" :key="feature.name" class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    <component :is="feature.icon" class="absolute top-1 left-1 h-5 w-5 text-indigo-600" aria-hidden="true" />
                                    {{ feature.name }}
                                </dt>
                                {{ ' ' }}
                                <dd class="inline">{{ feature.description }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="sm:px-6 lg:px-0">
                    <div class="relative isolate overflow-hidden bg-indigo-500 px-6 pt-8 sm:mx-auto sm:max-w-2xl sm:rounded-3xl sm:pt-16 sm:pl-16 sm:pr-0 lg:mx-0 lg:max-w-none">
                        <div class="absolute -inset-y-px -left-3 -z-10 w-full origin-bottom-left skew-x-[-30deg] bg-indigo-100 opacity-20 ring-1 ring-inset ring-white" aria-hidden="true" />
                        <div class="mx-auto max-w-2xl sm:mx-0 sm:max-w-none">
                            <img src="https://tailwindui.com/img/component-images/project-app-screenshot.png" alt="Product screenshot" width="2432" height="1442" class="-mb-12 w-[57rem] max-w-none rounded-tl-xl bg-gray-800 ring-1 ring-white/10" />
                        </div>
                        <div class="pointer-events-none absolute inset-0 ring-1 ring-inset ring-black/10 sm:rounded-3xl" aria-hidden="true" />
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- feature -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl bg-white py-16 sm:py-24 sm:px-6 lg:px-8">
            <!-- xs to lg -->
            <div class="mx-auto max-w-2xl space-y-16 lg:hidden">
                <section v-for="(tier, tierIdx) in tiers" :key="tier.name">
                    <div class="mb-8 px-6 sm:px-4">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">{{ tier.name }}</h2>
                        <p class="mt-4">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">${{ tier.priceMonthly }}</span>
                            {{ ' ' }}
                            <span class="text-base font-medium text-gray-500">/mo</span>
                        </p>
                        <p class="mt-4 text-sm text-gray-500">{{ tier.description }}</p>
                        <a :href="tier.href" class="mt-6 block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Buy {{ tier.name }}</a>
                    </div>

                    <table v-for="section in sections" :key="section.name" class="w-full">
                        <caption class="border-t border-gray-200 bg-gray-50 py-3 px-6 text-left text-sm font-medium text-gray-900 sm:px-4">
                            {{
                                section.name
                            }}
                        </caption>
                        <thead>
                        <tr>
                            <th class="sr-only" scope="col">Feature</th>
                            <th class="sr-only" scope="col">Included</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        <tr v-for="feature in section.features" :key="feature.name" class="border-t border-gray-200">
                            <th class="py-5 px-6 text-left text-sm font-normal text-gray-500 sm:px-4" scope="row">{{ feature.name }}</th>
                            <td class="py-5 pr-6 sm:pr-4">
                                <span v-if="typeof feature.tiers[tier.name] === 'string'" class="block text-right text-sm text-gray-700">{{ feature.tiers[tier.name] }}</span>
                                <template v-else>
                                    <CheckIcon v-if="feature.tiers[tier.name] === true" class="ml-auto h-5 w-5 text-green-500" aria-hidden="true" />
                                    <MinusIcon v-else class="ml-auto h-5 w-5 text-gray-400" aria-hidden="true" />
                                    <span class="sr-only">{{ feature.tiers[tier.name] === true ? 'Yes' : 'No' }}</span>
                                </template>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div :class="[tierIdx < tiers.length - 1 ? 'py-5 border-b' : 'pt-5', 'border-t border-gray-200 px-6 sm:px-4']">
                        <a :href="tier.href" class="block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Buy {{ tier.name }}</a>
                    </div>
                </section>
            </div>

            <!-- lg+ -->
            <div class="hidden lg:block">
                <table class="h-px w-full table-fixed">
                    <caption class="sr-only">
                        Pricing plan comparison
                    </caption>
                    <thead>
                    <tr>
                        <th class="px-6 pb-4 text-left text-sm font-medium text-gray-900" scope="col">
                            <span class="sr-only">Feature by</span>
                            <span>Plans</span>
                        </th>
                        <th v-for="tier in tiers" :key="tier.name" class="w-1/4 px-6 pb-4 text-left text-lg font-medium leading-6 text-gray-900" scope="col">{{ tier.name }}</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 border-t border-gray-200">
                    <tr>
                        <th class="py-8 px-6 text-left align-top text-sm font-medium text-gray-900" scope="row">Pricing</th>
                        <td v-for="tier in tiers" :key="tier.name" class="h-full py-8 px-6 align-top">
                            <div class="relative table h-full">
                                <p>
                                    <span class="text-4xl font-bold tracking-tight text-gray-900">${{ tier.priceMonthly }}</span>
                                    {{ ' ' }}
                                    <span class="text-base font-medium text-gray-500">/mo</span>
                                </p>
                                <p class="mt-4 mb-16 text-sm text-gray-500">{{ tier.description }}</p>
                                <a :href="tier.href" class="5 absolute bottom-0 block w-full flex-grow rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Buy {{ tier.name }}</a>
                            </div>
                        </td>
                    </tr>
                    <template v-for="section in sections" :key="section.name">
                        <tr>
                            <th class="bg-gray-50 py-3 pl-6 text-left text-sm font-medium text-gray-900" colspan="4" scope="colgroup">{{ section.name }}</th>
                        </tr>
                        <tr v-for="feature in section.features" :key="feature.name">
                            <th class="py-5 px-6 text-left text-sm font-normal text-gray-500" scope="row">{{ feature.name }}</th>
                            <td v-for="tier in tiers" :key="tier.name" class="py-5 px-6">
                                <span v-if="typeof feature.tiers[tier.name] === 'string'" class="block text-sm text-gray-700">{{ feature.tiers[tier.name] }}</span>
                                <template v-else>
                                    <CheckIcon v-if="feature.tiers[tier.name] === true" class="h-5 w-5 text-green-500" aria-hidden="true" />
                                    <MinusIcon v-else class="h-5 w-5 text-gray-400" aria-hidden="true" />
                                    <span class="sr-only">{{ feature.tiers[tier.name] === true ? 'Included' : 'Not included' }} in {{ tier.name }}</span>
                                </template>
                            </td>
                        </tr>
                    </template>
                    </tbody>
                    <tfoot>
                    <tr class="border-t border-gray-200">
                        <th class="sr-only" scope="row">Choose your plan</th>
                        <td v-for="tier in tiers" :key="tier.name" class="px-6 pt-5">
                            <a :href="tier.href" class="block w-full rounded-md border border-gray-800 bg-gray-800 py-2 text-center text-sm font-semibold text-white hover:bg-gray-900">Buy {{ tier.name }}</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div> <!-- pricing -->
    <div class="bg-white">
        <!-- Header -->
        <div class="relative bg-gray-800 pb-32">
            <div class="absolute inset-0">
                <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="" />
                <div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true" />
            </div>
            <div class="relative mx-auto max-w-7xl py-24 px-6 sm:py-32 lg:px-8">
                <h1 class="text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl">Support</h1>
                <p class="mt-6 max-w-3xl text-xl text-gray-300">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames. Dui, amet, nec sit pulvinar.</p>
            </div>
        </div>

        <!-- Overlapping cards -->
        <section class="relative z-10 mx-auto -mt-32 max-w-7xl px-6 pb-32 lg:px-8" aria-labelledby="contact-heading">
            <h2 class="sr-only" id="contact-heading">Contact us</h2>
            <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
                <div v-for="link in supportLinks" :key="link.name" class="flex flex-col rounded-2xl bg-white shadow-xl">
                    <div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
                        <div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-indigo-600 p-5 shadow-lg">
                            <component :is="link.icon" class="h-6 w-6 text-white" aria-hidden="true" />
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">{{ link.name }}</h3>
                        <p class="mt-4 text-base text-gray-500">{{ link.description }}</p>
                    </div>
                    <div class="rounded-bl-2xl rounded-br-2xl bg-gray-50 p-6 md:px-8">
                        <a :href="link.href" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>
            </div>
        </section>
    </div>  <!-- Support -->
    <div class="bg-white pt-16 lg:py-24">
        <div class="bg-indigo-600 pb-16 lg:relative lg:z-10 lg:pb-0">
            <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-8 lg:px-8">
                <div class="relative lg:-my-8">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden" />
                    <div class="mx-auto max-w-md px-6 sm:max-w-3xl lg:h-full lg:p-0">
                        <div class="aspect-w-10 aspect-h-6 overflow-hidden rounded-xl shadow-xl sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                            <img class="object-cover lg:h-full lg:w-full" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="" />
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:col-span-2 lg:m-0 lg:pl-8">
                    <div class="mx-auto max-w-md px-6 sm:max-w-2xl lg:max-w-none lg:px-0 lg:py-20">
                        <blockquote>
                            <div>
                                <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                </svg>
                                <p class="mt-6 text-2xl font-medium text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna nulla vitae laoreet augue. Amet feugiat est integer dolor auctor adipiscing nunc urna, sit.</p>
                            </div>
                            <footer class="mt-6">
                                <p class="text-base font-medium text-white">Judith Black</p>
                                <p class="text-base font-medium text-indigo-100">CEO at PureInsights</p>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Testimonial -->
    <div class="relative bg-gray-50 px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
        <div class="absolute inset-0">
            <div class="h-1/3 bg-white sm:h-2/3" />
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p>
            </div>
            <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                <div v-for="post in posts" :key="post.title" class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" :src="post.imageUrl" alt="" />
                    </div>
                    <div class="flex flex-1 flex-col justify-between bg-white p-6">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600">
                                <a :href="post.category.href" class="hover:underline">{{ post.category.name }}</a>
                            </p>
                            <a :href="post.href" class="mt-2 block">
                                <p class="text-xl font-semibold text-gray-900">{{ post.title }}</p>
                                <p class="mt-3 text-base text-gray-500">{{ post.description }}</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a :href="post.author.href">
                                    <span class="sr-only">{{ post.author.name }}</span>
                                    <img class="h-10 w-10 rounded-full" :src="post.author.imageUrl" alt="" />
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    <a :href="post.author.href" class="hover:underline">{{ post.author.name }}</a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time :datetime="post.datetime">{{ post.date }}</time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>{{ post.readingTime }} read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Blog -->
    <div class="overflow-hidden bg-white py-16 px-6 lg:px-8 lg:py-24">
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
                        <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                        <div class="mt-1">
                            <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-gray-300 py-3 px-4 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
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
    </div> <!-- Contact -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl py-12 px-6 lg:py-16 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:items-center lg:gap-8">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Used by the world's most average companies</h2>
                    <p class="mt-3 max-w-3xl text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue.</p>
                    <div class="mt-8 sm:flex">
                        <div class="rounded-md shadow">
                            <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-5 py-3 text-base font-medium text-white hover:bg-indigo-700">Create Account</a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-100 px-5 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-200">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                    <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Workcation" />
                    </div>
                    <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage" />
                    </div>
                    <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple" />
                    </div>
                    <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel" />
                    </div>
                    <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit" />
                    </div>
                    <div class="col-span-1 flex justify-center bg-gray-50 py-8 px-8">
                        <img class="max-h-12" src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg" alt="Statamic" />
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Partners -->
    <div class="relative bg-white">
        <div class="lg:absolute lg:inset-0">
            <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
                <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" alt="" />
            </div>
        </div>
        <div class="relative px-6 pt-12 pb-16 sm:pt-16 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div class="lg:col-start-2 lg:pl-8">
                <div class="mx-auto max-w-prose text-base lg:ml-auto lg:mr-0 lg:max-w-lg">
                    <h2 class="font-semibold leading-6 text-indigo-600">Work with us</h2>
                    <h3 class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Our Process</h3>
                    <p class="mt-8 text-lg text-gray-500">Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.</p>
                    <div class="prose prose-indigo mt-5 text-gray-500">
                        <p>Sollicitudin tristique eros erat odio sed vitae, consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut volutpat donec laoreet quam urna.</p>
                        <p>Bibendum eu nulla feugiat justo, elit adipiscing. Ut tristique sit nisi lorem pulvinar. Urna, laoreet fusce nibh leo. Dictum et et et sit. Faucibus sed non gravida lectus dignissim imperdiet a.</p>
                        <p>Dictum magnis risus phasellus vitae quam morbi. Quis lorem lorem arcu, metus, egestas netus cursus. In.</p>
                        <ul role="list">
                            <li>Quis elit egestas venenatis mattis dignissim.</li>
                            <li>Cras cras lobortis vitae vivamus ultricies facilisis tempus.</li>
                            <li>Orci in sit morbi dignissim metus diam arcu pretium.</li>
                        </ul>
                        <p>Rhoncus nisl, libero egestas diam fermentum dui. At quis tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec, a. Morbi enim fermentum lacus in. Viverra.</p>
                        <h3>How we’re different</h3>
                        <p>Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet. Laoreet sem est phasellus eu proin massa, lectus. Diam rutrum posuere donec ultricies non morbi. Mi a platea auctor mi.</p>
                        <p>Mauris ullamcorper imperdiet nec egestas mi quis quam ante vulputate. Vel faucibus adipiscing lacus, eget. Nunc fermentum id tellus donec. Ut metus odio sit sit varius non nunc orci. Eu, mi neque, ornare suspendisse amet, nibh. Facilisi volutpat lectus id sapien dis mauris rhoncus. Est rhoncus, interdum imperdiet ac eros, diam mauris, tortor. Risus id sit molestie magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Blog -->
    <!-- <FAQ :data="faqsData"></FAQ>
    <CTA :data="ctaData"></CTA> -->
</template>

