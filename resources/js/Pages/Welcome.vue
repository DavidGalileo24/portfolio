<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import Social from '@/Components/Social.vue';
import { useHead } from 'unhead'

useHead({
  title: 'Home',
  ogImage: '@/assets/images/ico.png',
  twitterCard: 'summary_large_image',
  meta: [
    {name: 'description', content: 'David Salgado Web Developer, autodidact and Freelancer based in San Salvador El Salvador'},
    {property: 'og:description', content: 'David Salgado Web Developer, autodidact and Freelancer based in San Salvador El Salvador'},
    {property: 'og:title', content: 'Home'},
  ]
});

const typedStrings = ["I'm David Salgado", 'Lives In San Salvador', 'FullStack Developer', 'Frontend Developer', 'Backend Developer', 'Freelancer', 'Autodidact', 'Web Designer'];
defineProps({
    aboutme: {
        type: Object,
    }
});
</script>
<template>

    <Head title="Home" />
    <div style="height: 100vh;" class="bg1">
        <Nav />
        <div class="flex justify-center items-center h-4/5 w-full text-white">
            <div class="w-full flex justify-center">
                <div class="text-center">
                    <div class="text-xl mx-auto rounded-md-xl">Hello There!</div>
                    <VueTyped :strings="typedStrings" :typeSpeed="70" :backSpeed="50" :loop="true" class="poppins text-7xl font-bold transtitle" />
                    <div class="flex justify-center mt-10">
                        <Social />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg1 {
    background-image: url('/images/img10.png') !important;
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
