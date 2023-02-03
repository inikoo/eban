<script setup>
import {computed} from "vue";
import {usePage} from "@inertiajs/vue3";

defineProps(['data'])

const primaryColor = computed(() => usePage().props.primaryColor.color)

</script>

<template>
    <div class="sm:text-center lg:text-left">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">{{data.title}}</span>
            {{ ' ' }}
            <span  class="block xl:inline">{{data.titleSpan}}{{primaryColor}}</span>
        </h1>
        <p class="mt-3 text-base text-gray-500 sm:mx-auto sm:mt-5 sm:max-w-xl sm:text-lg md:mt-5 md:text-xl lg:mx-0">{{data.paragraph}}</p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
                <a href="#"
                   class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">{{data.buttonLeft}}</a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#"
                   class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-100 px-8 py-3 text-base font-medium text-indigo-700 hover:bg-indigo-200 md:py-4 md:px-10 md:text-lg">{{data.buttonRight}}</a>
            </div>
        </div>
    </div>
</template>
