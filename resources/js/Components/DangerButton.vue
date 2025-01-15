<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="items-center justify-center p-2 bg-red-600 border border-transparent rounded-md text-sm text-white hover:bg-red-700 active:bg-red-700 ease-in-out duration-150 transition-colors before:absolute before:inset-0 before:-z-[1] before:h-full before:w-full before:border-2 before:border-transparent before:transition-all before:content-[''] before:hover:top-1 before:hover:left-1 before:rounded-md before:hover:border-red-700">
        <slot />
    </button>
</template>
