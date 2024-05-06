<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({});
</script>

<template>
    <Head title="Inicio | Desarrollador web" />
    <Nav />
    <div class="w-full text-white flex justify-center items-center" style="height: 90vh;">
        <div class="text-center">
            <h1 class="great-vibes-regular" style="font-size: 5rem;">
                <span class="text-teal-500">David</span> 
                <span class="mt-4">Salgado</span>
            </h1>
            <p class="text-xl">Desarrollador web FullStack y desarrollador freelancer</p>
            <div class="flex justify-center mt-5">
                <SecondaryButton class="m-1">Descargar CV</SecondaryButton>
                <PrimaryButton class="m-1">Portfolio</PrimaryButton>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
