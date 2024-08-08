<script setup>
import { reactive } from 'vue';
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import CardImage from '@/Components/CardImage.vue';
import DialogModal from '@/Components/DialogModal.vue';

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
    showModal: false,
    projectIdData: [],
    status: [{ id: 1, name: 'Development' }, { id: 2, name: 'Production' }],
    projetType: [
        { id: 1, name: 'Landing page' },
        { id: 2, name: 'Dashboard' },
        { id: 3, name: 'API' },
        { id: 4, name: 'Monolith' }
    ],
});
const showModal = (data) => {
    state.projectIdData = data;
    state.showModal = true;
   /** axios.get(route('show.projects')).then(response => {
        
    }); */
}
const closeModal = () => {
    state.showModal = false;
}
</script>
<template>

    <Head title="Works" />
    <Nav />
    <div class="mt-5 p-10">
        <h1 class="text-5xl transtitle">Recent work performed</h1>
        <p class="text-md">Most common methods for designing websites that work well on desktop is responsive
            and adaptive design
        </p>
        <div class="w-full mt-10 flex justify-center">
            <SecondaryButton class="m-1">All projects</SecondaryButton>
            <SecondaryButton class="m-1" v-for="types in state.projetType" :key="types.id">{{ types.name }}
            </SecondaryButton>
        </div>
        <div class="grid grid-cols-3 gap-3 mt-7">
            <CardImage v-for="projects in projects.data" :key="projects.id" @click="showModal(projects)">
                <template #image><img :src="projects.image.file" class=" rounded-tl-xl rounded-br-xl "
                        loading="lazy" /></template>
            </CardImage>
        </div>
    </div>
    <DialogModal :show="state.showModal" @close="closeModal()" :max-width="'5xl'">
        <template #content>
            <div>
                {{state.projectIdData}}
            </div>
        </template>
    </DialogModal>
</template>

<style scoped></style>
