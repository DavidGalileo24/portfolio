<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import Social from '@/Components/Social.vue';

const typedStrings = ["I'm David Salgado", 'Lives In San Salvador', 'FullStack Developer', 'Frontend Developer', 'Backend Developer', 'Freelancer', 'Autodidact', 'Web Designer'];
defineProps({
    aboutme: {
        type: Object,
    }
});
</script>
<template>

    <Head title="Home" />
    <div style="height: 100vh;" class="">
        <Nav />
        <!--<div class="w-1/3 mx-auto">
            <marquee>
                <img loading="lazy" src="/images/loading.gif" class="loadingclass animate__animated animate__pulse animate__infinite	infinite" alt="">
                <p class="text-center">Loading...</p>
            </marquee>
        </div>-->
        <div class="flex justify-center items-center h-4/5 w-full">
            <div class="w-full flex justify-center">
                <div class="text-center">
                    <div class="text-xl mx-auto rounded-md-xl">Hello There!</div>
                    <VueTyped :strings="typedStrings" :typeSpeed="70" :backSpeed="50" :loop="true" class="poppins text-7xl font-bold transtitle" />
                    <div class="flex justify-center mt-10">
                        <Social />
                        <!--<PrimaryButton class="mx-4" v-tooltip="'Download'" @click="downloadcv()" >
                            <font-awesome-icon :icon="['fas', 'download']" class="mr-2" />Curriculum Vitae
                        </PrimaryButton>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg1 {
    background-image: url('/images/img1.png') !important;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
}
.loadingclass{
    width: 50px;
    display: block;
    margin: 0 auto;
}
</style>
