<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="items-center p-2 bg-transparent border border-purple-900 rounded-sm text-md text-purple-900 hover:bg-purple-700  disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
