<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import Card from '@/Components/Card.vue';

defineProps({
    services: {
        type: Object,
        default: ({})
    },
});
</script>

<template>
    <Head title="Servicios" />
    <Nav />
    <div class="mt-10 p-10">
        <h1 class="text-white text-4xl mb-5 transtitle">What I Do</h1>
        <div class="grid grid-cols-4 gap-4">
            <Card v-for="services in services.data" :key="services.id">
                <template #image><img :src="services.image.file" /></template>
                <template #title>{{services.name}}</template>
                <template #description>{{services.description}}</template>
            </Card>
        </div>
    </div>
</template>
