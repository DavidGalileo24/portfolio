<script setup>
import { reactive, onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import CardImage from '@/Components/CardImage.vue';
import DialogModal from '@/Components/DialogModal.vue';
import { useHead } from 'unhead'

useHead({
  title: 'Projects',
  ogImage: '@/images/ico.png',
  twitterCard: 'summary_large_image',
  meta: [
    {name: 'description', content: 'David Galileo Salgado FullStack Developer using Laravel and Vue, autodidact and Freelancer based in San Salvador El Salvador'},
    {property: 'og:description', content: 'David Galileo Salgado FullStack Developer using Laravel and Vue, autodidact and Freelancer based in San Salvador El Salvador'},
    {property: 'og:title', content: 'Projects'},
  ]
});

onMounted(() => {
    resetToZero();
});
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
    tabActive: 0,
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

const resetToZero=()=> {
    state.tabActive = 0;
}
const changeTab=()=>{
    state.tabActive = 1;
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
        <h1 class="text-5xl">Recent work performed</h1>
        <p class="text-md">Most common methods for designing websites that work well on desktop is responsive
            and adaptive design
        </p>
        <div class="w-full mt-10 justify-center flex">
            <PrimaryButton class="m-1 active">All projects</PrimaryButton>
            <SecondaryButton class="m-1" v-for="types in state.projetType" :key="types.id" :class="{'active': state.tabActive == 1}" @click="changeTab()" disabled>{{ types.name }}
            </SecondaryButton>
        </div>
        <div class="grid gap-3 mt-7 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
            <CardImage v-for="projects in projects.data" :key="projects.id">
                <template #image><img :src="projects.image.file" class="opacity-90 rounded-tl-xl rounded-br-xl info"
                        loading="lazy" style="width: 100%; height: 75%;" /></template>
                <template #title>{{projects.name}}</template>
                <template #button>
                    <SecondaryButton class="" v-tooltip="'Details from work'" @click="showModal(projects)">
                        Read more <font-awesome-icon :icon="['fas', 'arrow-right']" />
                    </SecondaryButton></template>
            </CardImage>
        </div>
    </div>
    <DialogModal :show="state.showModal" @close="closeModal()" :max-width="'4xl'">
        <template #content>
            <div class="lg:flex items-center w-full">
                <div class="lg:w-1/2 sm:w-full xs:w-full">
                    <img :src=state.projectIdData.image.file class="w-full h-72 rounded-md" loading="lazy" />
                    <div class="flex mt-2 justify-between text-center">
                        <div class="w-1/3 border-r-2">
                            <span class="font-semibold poppins">Company:</span>
                            <img :src="state.projectIdData.company.image.file" class="w-7 h-7 " loading="lazy" style="display:block;margin:0 auto"/>
                        </div>
                        <div class="w-1/3">
                            <span class="font-semibold poppins">Status:</span>
                            <p>{{ state.projectIdData.status }}</p>
                        </div>
                        <div class="w-1/3 border-l-2">
                            <span class="font-semibold poppins"> Project type:</span>
                            <p>{{ state.projectIdData.type }}</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 p-4 xs:w-full sm:w-full">
                    <h1 class="font-bold text-xl poppins">{{ state.projectIdData.name }}</h1>
                    <p class="mt-3">{{ state.projectIdData.description }}</p>
                    <div>
                        <span class="font-semibold mt-5 poppins block">Technologies:</span>
                        <div v-for="tech in state.projectIdData.technologies" :key="tech.id"
                            class="inline-block items-center">
                            <img :src="tech.image.file" loading="lazy" class="w-10 h-10" v-tooltip="tech.name"/>
                        </div>
                    </div><hr>
                    <div class="flex justify-end mt-5">
                        <a :href="state.projectIdData.link" target="blank">
                            <PrimaryButton class="mx-1" v-tooltip="'View URL Demo'">
                                <font-awesome-icon :icon="['fas', 'link']" class="mr-1" />Demo
                            </PrimaryButton>
                        </a>
                        <a :href="state.projectIdData.link_repo" target="blank">
                            <SecondaryButton class="mx-1" v-tooltip="'View code repository'">
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
