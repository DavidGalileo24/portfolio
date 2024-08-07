<script setup>
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({});
</script>

<template>
    <div class="p-4 flex justify-around items-center text-white" :class="{'bg-gray-900' :  $page.url !='/'}">
        <div class="w-1/4">
            <h1 class="great-vibes-regular text-3xl mx-2">
                <span class="text-sky-500">David</span> 
                <span class="font-semibold">Salgado</span>
            </h1>
        </div>
        <div class="w-3/4 flex items-center justify-end text-md">
            <Link href="/" class="mx-4" :class="{'active': $page.url==='/'}">Home</Link>
            <Link href="/projects" class="mx-4" :class="{'active': $page.url==='/projects'}">Works</Link>
            <Link href="/services" class="mx-4" :class="{'active': $page.url==='/services'}">Services</Link>
            <Link href="/about-me" class="mx-4" :class="{'active': $page.url==='/about-me'}">About</Link>
            <Link href="/blog" class="mx-4" :class="{'active': $page.url==='/blog'}">Blog</Link>
            <Link href="/contact" class="mx-4" :class="{'active': $page.url==='/contact'}">Contact</Link>
        </div>
    </div>
</template>
<style scoped>
    .active{
        border-bottom: 2px solid #3d96ca;
        padding-bottom: 2px;
    }
</style>
