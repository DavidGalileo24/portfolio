<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="items-center p-2 bg-green-900  rounded-md text-sm text-white hover:bg-green-700  active:bg-green-800 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
