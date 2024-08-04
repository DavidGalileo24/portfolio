<script setup>

</script>
<template>
    <div class="p-4 bg-transparent border rounded-tl-xl rounded-br-xl">
        <div class="w-12 h-12">
            <slot name="image" />
        </div>
    <div>
        <h3 class="text-xl font-semibold text-white"><slot name="title" /></h3>
    </div>
    <p class="mt-2 text-md text-gray-200">
        <slot name="description" />
    </p>
</div>
</template>
