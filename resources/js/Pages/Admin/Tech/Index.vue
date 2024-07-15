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
    tech: {
        type: Object,
        default: ({})
    }
});

const state = reactive({
    edit: '',
    form: useForm({
        name: '',
        percentaje: '',
        type: '',
        image: null,
    })
});

const storeTech=()=>{
    state.form.post(route('admin.tech.store'));
    clearForm();
    alert();
}
const clearForm=()=>{
    state.form.name = '';
    state.form.percentaje = '';
    state.form.type = '';
    state.form.image = null;
}
const alert = () => {
    Swal.fire({
        icon: 'success',
        text: 'Added technology successfully!',
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
    <AppLayout title="Technologies">
        <div class="bg-gray-800 overflow-hidden my-3 text-sm">
            <div class="w-full flex p-5">
                <div class="w-1/3">
                    <form class="p-5 border rounded-lg bg-white" @submit.prevent="storeTech()">
                        <h2 class="text-2xl font-semibold">Added new technology</h2>
                        <div class="mt-5">
                            <InputLabel for="name" value="Name" />
                            <TextInput v-model="state.form.name" type="text" class="mt-1 block w-full" autofocus />
                        </div>
                        <div class="mt-3">
                            <InputLabel for="percentaje" value="Percentaje" />
                            <TextInput v-model="state.form.percentaje" type="text" class="mt-1 block w-full" />
                        </div>
                        <div class="mt-3">
                            <InputLabel for="type" value="Technology type" />
                            <select v-model="state.form.type"
                                class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="Languaje">Languaje</option>
                                <option value="Framework">Framework</option>
                                <option value="Library">Library</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <InputLabel for="image" value="Image" />
                            <Filepond v-model="state.form.image" @change="handleFile($event)" allow-multiple="false"
                                max-files="1" />
                        </div>
                        <div class="mt-3">
                            <PrimaryButton class="m-1 w-full">
                                <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
                <div class="w-2/3 flex wrap">
                    <span v-for="tech in tech.data" :key="tech.id">
                        <fwb-card href="#" class=" m-2">
                            <div class="p-3">
                                <img :src="tech.image.file" alt="logo" class="techlogo">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{tech.name}}</h5>
                            </div>
                        </fwb-card>
                    </span>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped>
    .techlogo{
        width: 100px;
        display:block;
        margin:0 auto;
    }
</style>
