<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({});
</script>

<template>
    <div class="bg-transparent border-b-2 border-gray-800 p-4 flex text-white">
        <div class="w-1/4">
            <h1 class="great-vibes-regular text-2xl">
                <span class="text-purple-500">David</span> 
                <span class=" font-semibold">Salgado</span>
            </h1>
        </div>
        <div class="text-center w-2/4">
            <Link href="/" class="mx-4" :class="{'active': $page.url==='/'}">Inicio</Link>
            <Link href="/projects" class="mx-4" :class="{'active': $page.url==='/projects'}">Portfolio</Link>
            <Link href="/services" class="mx-4" :class="{'active': $page.url==='/services'}">Servicios</Link>
            <Link href="/services" class="mx-4" :class="{'active': $page.url==='/services'}">Sobre mí</Link>
            <Link href="/services" class="mx-4" :class="{'active': $page.url==='/services'}">Contáctame</Link>
            <Link href="/blog" class="mx-4" :class="{'active': $page.url==='/blog'}">Blog</Link>
            
        </div>
        <div class="w-1/4 text-center">
            <Link href="https://github.com/DavidGalileo24">
                <font-awesome-icon :icon="['fab', 'github']" class="text-3xl mx-1 text-purple-300" />
            </Link>
            <Link href="https://www.linkedin.com/in/david-galileo-salgado-mej%C3%ADa-b1a07b128/">
                <font-awesome-icon :icon="['fab', 'linkedin']" class="text-3xl mx-1 text-purple-300" />
            </Link>
            <Link href="https://www.instagram.com/david_galileo24/?hl=es">
                <font-awesome-icon :icon="['fab', 'instagram']" class="text-3xl mx-1 text-purple-300" />
            </Link>
        </div>
    </div>
</template>
<style scoped>
    .active{
        border-bottom: 2px solid #7743DB;
        padding-bottom: 2px;
    }
</style>
