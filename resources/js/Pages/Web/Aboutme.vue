<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useHead } from 'unhead';
import { useAboutmeStore } from '@/Stores/aboutme';

const aboutme = useAboutmeStore();
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

useHead({
    title: 'About me',
    ogImage: '@/images/ico.png',
    twitterCard: 'summary_large_image',
    meta: [
        { name: 'description', content: 'David Galileo Salgado FullStack Developer using Laravel and Vue, autodidact and Freelancer based in San Salvador El Salvador' },
        { property: 'og:description', content: 'David Galileo Salgado FullStack Developer using Laravel and Vue, autodidact and Freelancer based in San Salvador El Salvador' },
        { property: 'og:title', content: 'About me' },
    ]
});

</script>
<template>

    <Head title="About me" />
    <div class=" bg-green-800  xl:h-screen xs:h-auto">
    <Nav />
    <div class="lg:flex md:flex text-white border-t items-center">
        <div class="lg:w-1/3 p-5 md:w-1/2 sm:w-1/2 xs:w-full  mt-20">
            <img src="images/photo1.png" class="mx-auto" />
        </div>
        <div class="xl:w-2/3 p-5 xl:p-20 xs:md:w-1/2 sm:w-full xs:w-full">
            <h1 class="text-5xl">About Me</h1>
            <p class="text-md mt-3">Hello there! I am a web developer, and I am very passionate and dedicated to my
                work. With 3 years experience as a professional, I have adquired the skills and knowledge necessary to
                make your project a success. I enjoy every step of the design process, from discussion and
                collaboration.</p>

            <div class="flex mt-3 flex-wrap">
                <div v-for="tech in tech.data" :key="tech.id">
                    <img :src="tech.image.file" alt="tech.name" class="w-14 h-14 m-1" v-tooltip="tech.name" />
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<style scoped>
.scree {
    height: 70vh;
}
</style>
