<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({});
</script>

<template>
    <div class="bg-gray-950 border-b-2 border-teal-500 p-4 text-white flex">
        <div class="w-1/4">
            logo
        </div>
        <div class="text-center w-2/4">
            <Link href="/" class="mx-4" :class="{'active': $page.url==='/'}">Inicio</Link>
            <Link href="/projects" class="mx-4" :class="{'active': $page.url==='/projects'}">Proyectos</Link>
            <Link href="/services" class="mx-4" :class="{'active': $page.url==='/services'}">Servicios</Link>
            <Link href="/blog" class="mx-4" :class="{'active': $page.url==='/blog'}">Blog</Link>
            
        </div>
        <div class="w-1/4 text-center">
            <font-awesome-icon :icon="['fab', 'github']" class="text-2xl mx-2" />
            <font-awesome-icon :icon="['fab', 'linkedin']" class="text-2xl mx-2" />
            <font-awesome-icon :icon="['fab', 'instagram']" class="text-2xl mx-2" />
        </div>
    </div>
</template>
<style scoped>
    .active{
        border-bottom: 2px solid lightblue;
        padding-bottom: 2px;
    }
</style>
