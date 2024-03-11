<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({});
</script>

<template>
    <Head title="David Salgado | Desarrollador web" />
    <Nav />
    <div class="w-full text-white">
        <h1 class="text-5xl text-center">David Salgado</h1>
        <SecondaryButton>Descargar CV</SecondaryButton>
        <PrimaryButton>Descargar CV</PrimaryButton>
    </div>
</template>

<style scoped></style>
