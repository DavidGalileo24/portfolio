<script setup>
import { reactive } from 'vue';
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Filepond from '@/Components/Filepond.vue';
import Swal from 'sweetalert2/dist/sweetalert2';
import DialogModal from '@/Components/DialogModal.vue';
import { FwbA, FwbTable, FwbTableBody, FwbTableCell, FwbTableHead, FwbTableHeadCell, FwbTableRow } from 'flowbite-vue'

defineProps({
    projects: {
        type: Object,
        default: ({})
    },
    companies: {
        type: Object,
        default: ({})
    },
    tech: {
        type: Object,
        default: ({})
    },
});

const state = reactive({
    edit: '',
    modalStoreUpdate: false,
    form: useForm({
        name: '',
        company_id: '',
        link: '',
        type: '',
        status: '',
        color: '',
        link_repo: '',
        description: '',
        technology_id: [],
        image: null,
    }),
    status: [{ id: 1, name: 'Development' }, { id: 2, name: 'Production' }],
    projetType: [
        { id: 1, name: 'Landing page' },
        { id: 2, name: 'Dashboard' },
        { id: 3, name: 'API' },
        { id: 4, name: 'Monolith' }
    ],
});

const storeProjects = () => {
    state.form.post(route('admin.projects.store'));
    clearForm();
    alert();
}
const clearForm = () => {
    state.form.name = '';
    state.form.company_id = '';
    state.form.link = '';
    state.form.type = '';
    state.form.status = '';
    state.form.description = '';
    state.form.image = null;
}
const alert = () => {
    Swal.fire({
        icon: 'success',
        text: 'Added project successfully!',
        toast: true,
        position: 'bottom-right',
        showConfirmButton: false,
        timer: 3500,
        timerProgressBar: true
    });
}
const handleFile = (e) => {
    const image = e.target.files[0];
    if (!image) return;
    const reader = new FileReader();
    reader.onload = (e) => {
        state.form.image = image;
    };
    reader.readAsDataURL(image);
}
const showModalStoreUpdate = () => {
    state.modalStoreUpdate = true;
}
const closeModal = () => {
    state.modalStoreUpdate = false;
}
</script>

<template>
    <AppLayout title="Projects">
            <div class="w-full p-5">
                <PrimaryButton @click="showModalStoreUpdate()">New project</PrimaryButton>
                <div class="w-full flex flex-wrap justify-center m-2">
                    <fwb-table class="w-full">
                        <fwb-table-head>
                            <!--<fwb-table-head-cell>Color</fwb-table-head-cell>-->
                            <!--<fwb-table-head-cell>Image</fwb-table-head-cell>-->
                            <fwb-table-head-cell>project</fwb-table-head-cell>
                            <fwb-table-head-cell>Company</fwb-table-head-cell>
                            <fwb-table-head-cell>Link</fwb-table-head-cell>
                            <fwb-table-head-cell>Repo</fwb-table-head-cell>
                            <fwb-table-head-cell>Type</fwb-table-head-cell>
                            <fwb-table-head-cell>Status</fwb-table-head-cell>
                            <fwb-table-head-cell>Description</fwb-table-head-cell>
                        </fwb-table-head>
                        <fwb-table-body>
                            <fwb-table-row v-for="pr in projects.data" :key="pr.id">
                                <!--<fwb-table-cell>{{ pr.color }}</fwb-table-cell>-->
                                <!--<fwb-table-cell><img :src="pr.image.file" class="techlogo" alt="" loading="lazy" ></fwb-table-cell>-->
                                <fwb-table-cell>{{ pr.name }}</fwb-table-cell>
                                <fwb-table-cell>{{ pr.company.name }}</fwb-table-cell>
                                <fwb-table-cell>{{ pr.link }}</fwb-table-cell>
                                <fwb-table-cell>{{ pr.link_repo }}</fwb-table-cell>
                                <fwb-table-cell>{{ pr.type }}</fwb-table-cell>
                                <fwb-table-cell>{{ pr.status }}</fwb-table-cell>
                                <fwb-table-cell>{{ pr.description }}</fwb-table-cell>
                            </fwb-table-row>
                        </fwb-table-body>
                    </fwb-table>
                </div>
        </div>
        <DialogModal :show="state.modalStoreUpdate" @close="closeModal()" :max-width="'5xl'">
            <template #title>Added new project</template>
            <template #content>
                <form class="p-3 bg-white" @submit.prevent="storeProjects()">
                    <div class="flex justify-between mt-3">
                        <div class="w-1/2 mx-1">
                            <InputLabel for="image" value="Screenshot" class="text-sm" />
                            <Filepond v-model="state.form.Screenshot" @change="handleFile($event)" allow-multiple="false"
                                max-files="1" />
                        </div>
                        <div class="w-1/2 mx-1">
                            <InputLabel for="technology_id" value="Tecnologías" class="text-sm" />
                            <span v-for="tech in tech.data" :key="tech.id">
                                <input v-model="state.form.technology_id" type="checkbox" :value="tech.id" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 rounded">
                                <label class="text-sm font-medium text-gray-900 dark:text-gray-300 mr-4 ml-0.5">{{tech.name}}</label>
                            </span>
                        </div>
                    </div>
                    <div class="mx-1">
                            <InputLabel for="color" value="Color" class="text-sm" />
                            <input v-model="state.form.color" type="color" class="block w-full" autofocus />
                        </div>
                    <div class="flex justify-between mt-3">
                        <div class="w-1/3 mx-1">
                            <InputLabel for="name" value="Name" class="text-sm" />
                            <TextInput v-model="state.form.name" type="text" class="block w-full" autofocus />
                        </div>
                        <div class="w-1/3 mx-1">
                            <InputLabel for="company_id" value="Company" class="text-sm" />
                            <select v-model="state.form.company_id" class="w-full border-gray-300 text-sm rounded-md shadow-sm">
                                <option :value="comp.id" v-for="comp in companies.data" :key="comp.id">
                                    {{ comp.name }}
                                </option>
                            </select>
                        </div>
                        <div class="w-1/3 mx-1">
                            <InputLabel for="link" value="Link" class="text-sm" />
                            <TextInput v-model="state.form.link" type="text" class="block w-full" autofocus />
                        </div>
                    </div>
                    <div class="flex justify-between mt-3">
                        <div class="w-1/3 mx-1">
                            <InputLabel for="link_url" value="Repository Link" class="text-sm" />
                            <TextInput v-model="state.form.link_repo" type="text" class="block w-full" autofocus />
                        </div>
                        <div class="w-1/3 mx-1">
                            <InputLabel for="type" value="Project type" class="text-sm" />
                            <select v-model="state.form.type"
                                class="w-full border-gray-300 text-sm focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                <option :value="type.name" v-for="type in state.projetType" :key="type.id">
                                    {{ type.name }}
                                </option>
                            </select>
                        </div>
                        <div class="w-1/3 mx-1">
                            <InputLabel for="status" value="Project status" class="text-sm" />
                            <select v-model="state.form.status"
                                class="w-full border-gray-300 text-sm focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                                <option :value="status.name" v-for="status in state.status" :key="status.id">
                                    {{ status.name }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <InputLabel for="description" value="Descripción" class="text-sm" />
                        <textarea v-model="state.form.description" type="text" rows="4"
                            class="w-full text-sm border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mt-3 flex justify-end">
                        <PrimaryButton class="">
                            <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send data
                        </PrimaryButton>
                    </div>
                </form>
            </template>
        </DialogModal>
    </AppLayout>
</template>
<style scoped>
    .techlogo{
        padding: 5px;
        width: 100px;
        height: 100px;
        display:block;
        margin:0 auto;
        border-bottom: 1px solid #dae2eb;
    }
</style>
