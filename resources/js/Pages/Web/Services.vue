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
    <Head title="Services" />
    <Nav />
    <div class="mt-5 p-10 flex">
        <div class="w-2/5 p-5">
            <h1 class="text-5xl transtitle">Services I provide to my clients in here</h1>
            <p class="text-md mt-3">I always want to be able to meet the goals of my clients, I value my services as a designer through my work. You may like my services.</p>
        </div>
        <div class="w-3/5 grid grid-cols-4 gap-2">
            <Card v-for="services in services.data" :key="services.id">
                <template #image><img :src="services.image.file" loading="lazy"  /></template>
                <template #title>{{services.name}}</template>
                <template #description>{{services.description}}</template>
            </Card>
        </div>
    </div>
</template>
