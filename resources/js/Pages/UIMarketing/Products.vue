<script setup>

import CTA from "@/Components/UIMarketing/Sections/CTA.vue";
import FAQ from "@/Components/UIMarketing/Sections/FAQ.vue";
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

    <FAQ :data="faqsData"></FAQ>
    <CTA :data="ctaData"></CTA>
</template>

