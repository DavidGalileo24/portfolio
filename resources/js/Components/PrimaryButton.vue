<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="items-center p-2 bg-sky-600  rounded-md text-md text-white hover:bg-sky-700  active:bg-sky-900 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
