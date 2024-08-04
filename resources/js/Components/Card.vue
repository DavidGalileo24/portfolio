<script setup>

</script>
<template>
    <div class="max-w-sm p-3 bg-white border rounded-lg">
        <div class="w-10 h-10">
            <slot name="image" />
        </div>
    <div href="#">
        <h5 class="mb-2 text-xl font-semibold text-gray-900"></h5>
        <slot name="title" />
    </div>
    <p class="mb-3 text-sm text-gray-700">
        <slot name="description" />
    </p>
</div>
</template>
