<script setup>
defineProps({
    type: {
        type: String,
        default: "button",
    },
});
</script>

<template>
    <button
        :type="type"
        class="items-center p-2 bg-transparent border border-green-900 rounded-md text-sm text-green-900 hover:bg-green-700 hover:text-white disabled:opacity-25 ease-in-out duration-150 relative transition-colors before:absolute before:inset-0 before:-z-[1] before:h-full before:w-full before:border-2 before:border-transparent before:transition-all before:content-[''] before:hover:top-1 before:hover:left-1 before:rounded-md before:hover:border-green-700"
    >
        <slot />
    </button>
</template>
