<script setup>
import { reactive } from 'vue';
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import Social from '@/Components/Social.vue';
import Swal from 'sweetalert2/dist/sweetalert2';

defineProps({
    tech: {
        type: Object,
        default: ({})
    },
    company: {
        type: Object,
        default: ({})
    },
});
</script>
<template>

    <Head title="About me" />
    <Nav />
    <div class="p-5 lg:flex md:flex bg-green-800 text-white border-t scree items-center">
        <div class="lg:w-1/3 p-10 md:w-1/2 sm:w-full xs:w-full">
            <img src="images/photo1.png" class="mx-auto"/>
        </div>
        <div class="xl:w-2/3 p-16 md:w-1/2 sm:w-full xs:w-full">
            <h1 class="text-5xl">About Me</h1>
            <p class="text-md mt-3">Hello there! I am a web developer, and I am very passionate and dedicated to my work. With 3 years experience as a professional, I have adquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.</p>
            <div class="mt-3">
                <PrimaryButton class="" v-tooltip="'Download'" @click="downloadcv()" >
                    <font-awesome-icon :icon="['fas', 'download']" class="mr-2" />Curriculum Vitae
                </PrimaryButton>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center p-5">
        <div v-for="tech in tech.data" :key="tech.id">
            <img :src="tech.image.file" alt="tech.name" class="w-20 h-20"  v-tooltip="tech.name" />
        </div>
    </div>
</template>

<style scoped>
.scree {
    height: 70vh;
}
</style>
