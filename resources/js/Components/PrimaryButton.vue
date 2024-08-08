<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="items-center p-2 bg-purple-900  rounded-md text-sm text-white hover:bg-purple-700  active:bg-purple-800 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
