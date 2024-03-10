<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({});
</script>

<template>
    <div class="bg-gray-950 border-b-2 border-teal-500 p-4 text-white flex justify-between">
        <div>
            logo
        </div>
        <div>
            <Link href="/" class="mx-4" :class="{'active': $page.url==='/'}">Inicio</Link>
            <Link href="/projects" class="mx-4" :class="{'active': $page.url==='/projects'}">Proyectos</Link>
            <Link href="/services" class="mx-4" :class="{'active': $page.url==='/services'}">Servicios</Link>
            <font-awesome-icon :icon="['fab', 'github']" class="text-2xl mx-1" />
            <font-awesome-icon :icon="['fab', 'linkedin']" class="text-2xl mx-1" />
            <font-awesome-icon :icon="['fab', 'instagram']" class="text-2xl mx-1" />
        </div>
    </div>
</template>
<style scoped>
    .active{
        border-bottom: 2px solid lightblue;
        padding-bottom: 2px;
    }
</style>
