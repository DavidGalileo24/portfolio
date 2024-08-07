<script setup>

</script>
<template>
    <div class="p-4 bg-transparent border border-gray-700 rounded-tl-xl rounded-br-xl hover:cursor-pointer hover:bg-gray-900 hover:border-gray-900">
        <div class="w-12 h-12">
            <slot name="image" />
        </div>
    <div>
        <h3 class="text-xl font-semibold "><slot name="title" /></h3>
    </div>
    <p class="mt-2 text-md font-extralight text-gray-900">
        <slot name="description" />
    </p>
</div>
</template>
