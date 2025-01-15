<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="items-center p-2 bg-green-900  rounded-md text-sm text-white hover:bg-green-700 disabled:opacity-25 active:bg-green-800 ease-in-out duration-150 transition-colors before:absolute before:inset-0 before:-z-[1] before:h-full before:w-full before:border-2 before:border-transparent before:transition-all before:content-[''] before:hover:top-1 before:hover:left-1 before:rounded-md before:hover:border-green-700">
        <slot />
    </button>
</template>
