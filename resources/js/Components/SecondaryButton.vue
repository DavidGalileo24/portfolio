<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="items-center p-2 bg-transparent border border-green-900 rounded-md text-sm text-green-900 hover:bg-green-700 hover:text-white disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
