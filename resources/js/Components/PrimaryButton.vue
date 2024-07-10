<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="items-center px-2 py-1 bg-sky-600 font-semibold rounded-md text-md text-white hover:bg-sky-700  active:bg-sky-900 focus:outline-none focus:ring-2 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
