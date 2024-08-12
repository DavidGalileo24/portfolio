<template>
    <div class="min-h-screen bg1 flex flex-col sm:justify-center items-center p-5 sm:pt-0">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white rounded border overflow-hidden sm:rounded-lg">
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
