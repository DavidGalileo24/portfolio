<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="items-center p-2 bg-transparent border border-sky-500 rounded-md text-md text-sky-400 hover:bg-gray-700  disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
