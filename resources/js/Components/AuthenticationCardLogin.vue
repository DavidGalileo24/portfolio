<template>
    <div class="min-h-screen bg1 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-950">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
<style scoped>
.bg1 {
    background-image: url('/images/img13.png') !important;
    background-position: right top;
    background-repeat: no-repeat;
    background-size: 20%;
    background-attachment: fixed;
}
</style>
