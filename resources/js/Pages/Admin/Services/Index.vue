<script setup>
import { reactive } from 'vue';
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Filepond from '@/Components/Filepond.vue';
import Swal from 'sweetalert2/dist/sweetalert2';
import { FwbA, FwbTable, FwbTableBody, FwbTableCell, FwbTableHead, FwbTableHeadCell, FwbTableRow } from 'flowbite-vue'

defineProps({
    services: {
        type: Object,
        default: ({})
    }
});

const state = reactive({
    edit: '',
    form: useForm({
        name: '',
        description: '',
        image: null,
    })
});

const storeservices = () => {
    state.form.post(route('admin.services.store'));
    clearForm();
    alert();
}
const clearForm = () => {
    state.form.name = '';
    state.form.description = '';
    state.form.image = null;
}
const alert = () => {
    Swal.fire({
        icon: 'success',
        text: 'Added service successfully!',
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
</script>

<template>
    <AppLayout title="Services">
        <div class="bg-gray-800 overflow-hidden my-3">
            <div class="w-full flex p-5">
                <div class="w-1/4">
                    <form class="p-3 border rounded-lg bg-white" @submit.prevent="storeservices()">
                        <h2 class="text-xl font-semibold text-center">Added new service</h2>
                        <div class="mt-3">
                            <InputLabel for="image" value="Image" class="text-sm" />
                            <Filepond v-model="state.form.image" @change="handleFile($event)" allow-multiple="false"
                                max-files="1" />
                        </div>
                        <div class="mt-5">
                            <InputLabel for="name" value="Name" class="text-sm" />
                            <TextInput v-model="state.form.name" type="text" class="block w-full" autofocus />
                        </div>
                        <div class="mt-3">
                            <InputLabel for="description" value="Descripción" class="text-sm" />
                            <textarea v-model="state.form.description" type="text" rows="4"
                                class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                        </div>
                        <div class="mt-3">
                            <PrimaryButton class="m-1 w-full">
                                <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send data
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
                <div class="w-3/4 flex flex-wrap justify-center mx-2">
                    <fwb-table class="w-full">
                        <fwb-table-head>
                            <fwb-table-head-cell>Image</fwb-table-head-cell>
                            <fwb-table-head-cell>Service name</fwb-table-head-cell>
                            <fwb-table-head-cell>Description</fwb-table-head-cell>
                        </fwb-table-head>
                        <fwb-table-body>
                            <fwb-table-row v-for="serv in services.data" :key="serv.id">
                                <fwb-table-cell><img :src="serv.image.file" class="techlogo" alt=""></fwb-table-cell>
                                <fwb-table-cell>{{serv.name}}</fwb-table-cell>
                                <fwb-table-cell>{{ serv.description }}</fwb-table-cell>
                            </fwb-table-row>
                        </fwb-table-body>
                    </fwb-table>
                </div>
            </div>
        </div>
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
