<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-transparent border font-semibold border-purple-500 rounded-md text-md text-purple-500 hover:bg-purple-700  active:bg-purple-900 focus:outline-none focus:ring-2 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
