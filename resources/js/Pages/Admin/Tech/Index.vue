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

const storeTech = () => {
    state.form.post(route('admin.tech.store'));
    clearForm();
    alert();
}
const clearForm = () => {
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
        <div class="w-full flex p-5">
            <div class="w-1/4">
                <form class="p-3 border rounded-lg bg-white" @submit.prevent="storeTech()">
                    <h2 class="text-xl font-semibold text-center">Added new technology</h2>
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
                        <InputLabel for="percentaje" value="Percentaje" class="text-sm" />
                        <TextInput v-model="state.form.percentaje" type="text" class="block w-full" />
                    </div>
                    <div class="mt-3">
                        <InputLabel for="type" value="Technology type" class="text-sm" />
                        <select v-model="state.form.type"
                            class="w-full border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm">
                            <option value="Languaje">Languaje</option>
                            <option value="Framework">Framework</option>
                            <option value="Library">Library</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <PrimaryButton class="m-1 w-full">
                            <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send data
                        </PrimaryButton>
                    </div>
                </form>
            </div>
            <div class="w-3/4 flex flex-wrap justify-center mx-2 bg-gray-800 overflow-hidden p-2 rounded-md">
                <span v-for="tech in tech.data" :key="tech.id">
                    <fwb-card href="#" class="m-2 mt-0">
                        <div class="p-2">
                            <img :src="tech.image.file" alt="logo" class="techlogo" loading="lazy">
                            <h3 class="text-lg font-bold tracking-tight text-center text-gray-900">{{ tech.name }}</h3>
                            <div class="flex justify-evenly mt-3">
                                <span
                                    class="text-xs bg-black text-white rounded-xl p-1 text-center">{{ tech.type }}</span>
                                <span>{{ tech.percentaje }}%</span>
                            </div>
                        </div>
                    </fwb-card>
                </span>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped></style>
