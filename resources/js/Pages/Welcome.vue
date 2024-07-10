<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Social from '@/Components/Social.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import Swal from 'sweetalert2/dist/sweetalert2';

const typedStrings = ["I'm David Salgado", 'Lives In San Salvador', 'FullStack Developer', 'Frontend Developer', 'Backend Developer', 'Freelancer', 'Autodidact', 'Web Designer'];
defineProps({
    aboutme: {
        type: Object,
    }
});
const sendEmail = () => {
    alert();
}
const alert = () => {
    Swal.fire({
        icon: 'success',
        text: 'Test',
        target: '#custom-target',
        customClass: {
            container: 'position-absolute'
        },
        toast: true,
        position: 'bottom-left',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
} 
</script>
<template>

    <Head title="Inicio" />
    <div style="height: 100vh;" class="bg1">
        <Nav />
        <div class="flex justify-evenly items-center h-4/5">
            <div class="w-1/2 text-white flex justify-center">
                <div class="text-center">
                    <div class="text-md bg-sky-500 w-32 mx-auto rounded-md">Hello There!</div>
                    <VueTyped :strings="typedStrings" :typeSpeed="70" :backSpeed="30" :loop="true"
                        class="text-7xl font-bold text-gray-200" />
                    <div class="flex justify-center mt-10">
                        <Social />
                        
                        <!--<PrimaryButton class="m-1">
                            <font-awesome-icon :icon="['fas', 'briefcase']" class="mr-2" />Portfolio
                        </PrimaryButton>-->
                    </div>
                </div>
            </div>
            <!--<div class="w-1/2">
                <form class="p-5 rounded-lg bg-white w-2/3 mx-auto" @submit.prevent="sendEmail()">
                    <h2 class="text-3xl font-semibold">Contact me here!</h2>
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
                        <textarea v-model="description" id="" cols="30" rows="4 "
                            class="mt-1 border-gray-300 rounded-md shadow-sm block w-full"></textarea>
                    </div>
                    <div class="flex justify-end mt-2">
                        <PrimaryButton class="m-1">
                            <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send message
                        </PrimaryButton>
                    </div>
                </form>
            </div>-->
        </div>
    </div>
</template>

<style scoped>
.bg1 {
    background-image: url('/images/img7.png') !important;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 100%;
    background-attachment: fixed;
}
</style>
