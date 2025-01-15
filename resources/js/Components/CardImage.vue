<script setup>
</script>
<template>
    <div
        class="bg-transparent rounded-tl-xl rounded-br-xl"
    >
        <div class="w-full h-full">
            <slot name="image" />
            <div class=" bg-white border w-11/12 mx-auto p-3 rounded-tl-xl rounded-br-xl text-center shadow-md -mt-10 opacity-90 transition duration-500 hover:scale-105">
                <h2 class="text-xl"><slot name="title"></slot></h2>
                <div class="flex justify-center">
                    <slot name="button"></slot>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>

</style>
