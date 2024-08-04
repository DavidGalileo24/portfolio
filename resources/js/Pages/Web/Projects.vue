<script setup>
import { reactive } from 'vue';
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import CardImage from '@/Components/CardImage.vue';

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

const state = reactive({
    status: [{ id: 1, name: 'Development' }, { id: 2, name: 'Production' }],
    projetType: [
        { id: 1, name: 'Landing page' },
        { id: 2, name: 'Dashboard' },
        { id: 3, name: 'API' },
        { id: 4, name: 'Monolith' }
    ],
});

</script>
<template>

    <Head title="Proyectos" />
    <Nav />
    <div class="mt-10 p-10">
        <h1 class="text-white text-5xl transtitle">Recent work performed</h1>
        <p class="text-white text-md">Most common methods for designing websites that work well on desktop is responsive
            and adaptive design
        </p>
        <div class="w-full mt-10 flex justify-center">
            <SecondaryButton class="m-1">All projects</SecondaryButton>
            <SecondaryButton class="m-1" v-for="types in state.projetType" :key="types.id">{{types.name}}</SecondaryButton>
        </div>
        <div class="grid grid-cols-3 gap-3 mt-7">
            <CardImage v-for="projects in projects.data" :key="projects.id">
                <template #image><img :src="projects.image.file" class=" rounded-tl-xl rounded-br-xl " /></template>
            </CardImage>
        </div>
    </div>
</template>

<style scoped></style>
