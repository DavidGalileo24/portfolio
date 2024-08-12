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
}
const closeModal = () => {
    state.showModal = false;
    state.projectIdData = '';
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
            <div class="flex">
                <div class="w-1/2">
                    <img :src=state.projectIdData.image.file class="w-full h-72 rounded-md" loading="lazy"/>
                    <div class="font-semibold mt-5 poppins">Technologies:</div>
                    <div v-for="tech in state.projectIdData.technologies" :key="tech.id" class="inline-block items-center">
                        <img :src="tech.image.file" loading="lazy" class="w-12 h-12" />
                    </div>
                </div>
                <div class="w-1/2 p-4">
                    <h1 class="font-bold text-xl poppins">{{ state.projectIdData.name }}</h1>
                    <div class="flex mt-2">
                        <div class="w-1/3">
                            <span class="font-semibold poppins">Company:</span>
                            <img :src="state.projectIdData.company.image.file" class="w-7 h-7 " loading="lazy"/>
                        </div>
                        <div class="w-1/3">
                            <span class="font-semibold poppins">Status:</span>
                            <p>{{ state.projectIdData.status }}</p>
                        </div>
                        <div class="w-1/3">
                            <span class="font-semibold poppins"> Project type:</span>
                            <p>{{ state.projectIdData.type }}</p>
                        </div>
                    </div>
                    <p class="mt-3">{{ state.projectIdData.description }}</p>
                    <div class="flex justify-end mt-5">
                        <a :href="state.projectIdData.link" target="blank">
                            <PrimaryButton class="mx-1">
                                <font-awesome-icon :icon="['fas', 'link']" class="mr-1" />Demo
                            </PrimaryButton>
                        </a>
                        <a :href="state.projectIdData.link_repo" target="blank">
                            <SecondaryButton class="mx-1">
                                <font-awesome-icon :icon="['fab', 'github']" class="mr-1" />Repository
                            </SecondaryButton>
                        </a>
                    </div>
                </div>
            </div>
        </template>
    </DialogModal>
</template>

<style scoped></style>
