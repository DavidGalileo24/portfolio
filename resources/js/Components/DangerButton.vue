<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="items-center justify-center p-2 bg-red-600 border border-transparent rounded-md text-sm text-white uppercase hover:bg-red-500 active:bg-red-700 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
