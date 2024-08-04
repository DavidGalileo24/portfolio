<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
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
    <div class="mt-10 text-2xl p-10">
        <h1 class="text-white mb-5">What I Do</h1>
        <Card v-for="services in services.data" :key="services.id">
            <template #image><img :src="services.image.file" /></template>
            <template #title>{{services.name}}</template>
            <template #description>{{services.description}}</template>
        </Card>
    </div>
    Services {{ services }}
</template>

<style scoped></style>
