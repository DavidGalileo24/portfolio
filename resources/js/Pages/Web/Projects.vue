<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({
    projects: {
        type: Object,
        default: ({})
    },
    show_project: {
        type: Object,
        default: ({})
    },
});
</script>

<template>
    <Head title="Proyectos" />
    <Nav />
    Proyectos {{projects}}
</template>

<style scoped></style>
