<script setup>
import { Link } from '@inertiajs/vue3';
import Social from './Social.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

defineProps({});
</script>

<template>
    <div class="p-4 flex justify-around items-center text-white" style="background: transparent !important;">
        <div class="w-1/4">
            <h1 class="great-vibes-regular text-3xl mx-2">
                <span class="text-purple-500">David</span> 
                <span class="font-semibold">Salgado</span>
            </h1>
        </div>
        <div class="w-3/4 flex items-center justify-end">
            <Link href="/" class="mx-4" :class="{'active': $page.url==='/'}">Inicio</Link>
            <Link href="/projects" class="mx-4" :class="{'active': $page.url==='/projects'}">Portfolio</Link>
            <Link href="/services" class="mx-4" :class="{'active': $page.url==='/services'}">Servicios</Link>
            <Link href="/about-me" class="mx-4" :class="{'active': $page.url==='/about-me'}">Sobre mí</Link>
            <Link href="/blog" class="mx-4" :class="{'active': $page.url==='/blog'}">Blog</Link>
            <Link href="/contact" class="mx-4" :class="{'active': $page.url==='/contact'}">Contáctame</Link>
            <SecondaryButton class="mx-4">
                <font-awesome-icon :icon="['fas', 'download']" class="mr-2" />Curriculum Vitae
            </SecondaryButton>
        </div>
    </div>
</template>
<style scoped>
    .active{
        border-bottom: 2px solid #7743DB;
        padding-bottom: 2px;
    }
</style>
