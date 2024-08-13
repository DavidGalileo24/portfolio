<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import Card from '@/Components/Card.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';

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
        <div class="w-1/3 p-5">
            <div class="">
                <h1 class="text-5xl">Services I provide to my clients in here</h1>
                <p class="text-md mt-3">I always want to be able to meet the goals of my clients, I value my services as a designer through my work. You may like my services.</p>
            </div>
            <SecondaryButton class="mt-5"><font-awesome-icon :icon="['fas', 'plus']" /> All services</SecondaryButton>
        </div>
        <div class="w-2/3 grid gap-3 mt-7 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1">
            <Card v-for="services in services.data" :key="services.id" class="mt-1">
                <template #image><img :src="services.image.file" loading="lazy"  /></template>
                <template #title>{{services.name}}</template>
                <template #description>{{services.description}}</template>
            </Card>
        </div>
    </div>
</template>
