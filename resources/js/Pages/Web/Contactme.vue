<script setup>
import { reactive } from 'vue';
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import Swal from 'sweetalert2/dist/sweetalert2';

defineProps({
    info: {
        type: Object,
        default: ({})
    },
});
const downloadcv = () => {
    alert();
}
const alert = () => {
    Swal.fire({
        icon: 'success',
        text: 'Curriculum vitae download successfully!',
        toast: true,
        position: 'bottom-right',
        showConfirmButton: false,
        timer: 3500,
        timerProgressBar: true
    });
} 
</script>
<template>

    <Head title="Contact me" />
    <Nav />
    <div class="mt-5 p-10">
        <div class="w-2/5 border rounded-lg p-5">
            <h1 class="text-5xl transtitle">Contact Me</h1>
            <p class="text-md mt-3">Get in touch and let me know how can help</p>

            <form class="rounded-lg bg-white w-full" @submit.prevent="downloadcv()">
                <div class="mt-5">
                    <InputLabel for="name" value="Name" />
                    <TextInput v-model="name" type="text" class="mt-1 block w-full" autofocus />
                </div>
                <div class="mt-3">
                    <InputLabel for="name" value="Email" />
                    <TextInput v-model="email" type="text" class="mt-1 block w-full" autofocus />
                </div>
                <div class="mt-3">
                    <InputLabel for="name" value="Message" />
                    <textarea v-model="description" id="" cols="30" rows="3"
                        class="mt-1 border-gray-300 rounded-md shadow-sm block w-full"></textarea>
                </div>
                <div class="flex justify-end mt-2">
                    <PrimaryButton class="m-1">
                        <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send message
                    </PrimaryButton>
                </div>
            </form>
        </div>
        <div class="w-3/5">

        </div>
    </div>
</template>

<style scoped></style>
