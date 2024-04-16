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
    <div class="w-full text-white mt-20 p-20">
        <h3 class="text-2xl">Hi! I'm</h3>
        <h1 class="text-5xl">David Salgado</h1>
        <p>FullStack developer and freelancer</p>
        <div class="flex justify-start mt-5">
            <SecondaryButton class="m-1">Descargar CV</SecondaryButton>
            <PrimaryButton class="m-1">Portfolio</PrimaryButton>
        </div>
    </div>
</template>

<style scoped></style>
