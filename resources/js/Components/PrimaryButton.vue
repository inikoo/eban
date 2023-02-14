<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button
        :type="type"
        class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-full    bg-gradient-to-r from-green-500 to-yellow-300 bg-origin-border px-4 py-2 text-base font-medium text-black shadow-sm hover:from-green-600 hover:to-yellow-400"
    >
        <slot/>
    </button>
</template>
