<script setup>
import { reactive } from 'vue';
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Filepond from '@/Components/Filepond.vue';
import { FwbCard } from 'flowbite-vue';
import Swal from 'sweetalert2/dist/sweetalert2';

defineProps({
    company: {
        type: Object,
        default: ({})
    }
});

const state = reactive({
    edit: '',
    form: useForm({
        name: '',
        image: null,
    })
});

const storecompany=()=>{
    state.form.post(route('admin.company.store'));
    clearForm();
    alert();
}
const clearForm=()=>{
    state.form.name = '';
    state.form.image = null;
}
const alert = () => {
    Swal.fire({
        icon: 'success',
        text: 'Added company successfully!',
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
    <AppLayout title="Customers">
        <div class="bg-gray-800 overflow-hidden my-3">
            <div class="w-full flex p-5">
                <div class="w-1/4">
                    <form class="p-3 border rounded-lg bg-white" @submit.prevent="storecompany()">
                        <h2 class="text-xl font-semibold text-center">Added new customer</h2>
                        <div class="mt-3">
                            <InputLabel for="image" value="Image" class="text-sm"/>
                            <Filepond v-model="state.form.image" @change="handleFile($event)" allow-multiple="false"
                                max-files="1" />
                        </div>
                        <div class="mt-5">
                            <InputLabel for="name" value="Name" class="text-sm" />
                            <TextInput v-model="state.form.name" type="text" class="block w-full" autofocus />
                        </div>
                        <div class="mt-3">
                            <PrimaryButton class="m-1 w-full">
                                <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send data
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
                <div class="w-3/4 flex flex-wrap justify-center mx-2">
                    <span v-for="company in company.data" :key="company.id">
                        <fwb-card href="#" class="m-2 mt-0">
                            <div class="p-2">
                                <img :src="company.image.file" alt="logo" class="companylogo">
                                <h3 class="text-lg font-bold tracking-tight text-center text-gray-900">{{company.name}}</h3>
                            </div>
                        </fwb-card>
                    </span>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped>
    .companylogo{
        padding: 5px;
        width: 125px;
        height: 100px;
        display:block;
        margin:0 auto;
        border-bottom: 1px solid #dae2eb;
    }
</style>
