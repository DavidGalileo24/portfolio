<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const typedStrings = ['FullStack developer', 'Frontend developer', 'Backend developer', 'Freelancer', 'Autodidact', 'Web designer'];
defineProps({
    aboutme: {
        type: Object,
    }
});
</script>
<template>

    <Head title="Inicio" />
    <div style="height: 100vh;" class="bg1">
        <Nav />
        <div class="flex justify-evenly items-center h-4/5">
            <div class="w-1/2 text-white flex justify-center">
                <div class="">
                    <h2 class="text-4xl font-bold">Hi, I'm David Salgado</h2>
                    <p class="text-lg text-left">I am into <VueTyped :strings="typedStrings" :typeSpeed="70" :backSpeed="30" :loop="true" /></p>
                    <div class="flex justify-start mt-5">
                        <SecondaryButton class="m-1">
                            <font-awesome-icon :icon="['fas', 'download']" class="mr-2" />Curriculum Vitae
                        </SecondaryButton>
                        <PrimaryButton class="m-1">
                            <font-awesome-icon :icon="['fas', 'briefcase']" class="mr-2" />Portfolio
                        </PrimaryButton>
                    </div>
                </div>
            </div>
            <div class="w-1/2">
                form
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg1 {
    background-image: url('/images/img5.png') !important;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 100%;
    background-attachment: fixed;
}
</style>
