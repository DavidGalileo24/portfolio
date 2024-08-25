<script setup>
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({});
</script>

<template>
    <div class="p-4 flex justify-between items-center text-white bg-green-800">
        <div class="w-1/4 sm:w-1/2 xs:w-1/2">
            <h1 class="great-vibes text-2xl mx-2">
                <span class="text-green-200">David</span> 
                <span class="font-semibold text-gray-300">Salgado</span>
            </h1>
        </div>
        <div class="w-3/4 xl:flex items-center justify-end text-md itemsHeader">
            <Link href="/" class="mx-4 itm" :class="{'active': $page.url==='/'}">Home</Link>
            <Link href="/projects" class="mx-4 itm" :class="{'active': $page.url==='/projects'}">Works</Link>
            <Link href="/services" class="mx-4 itm" :class="{'active': $page.url==='/services'}">Services</Link>
            <Link href="/about-me" class="mx-4 itm" :class="{'active': $page.url==='/about-me'}">About</Link>
            <!--<Link href="/blog" class="mx-4 itm" :class="{'active': $page.url==='/blog'}">Blog</Link>-->
            <Link href="/contact" class="mx-4 itm" :class="{'active': $page.url==='/contact'}">Contact</Link>
        </div>
        <div class="lg:hidden md:hidden sm:w-1/2 xs:w-1/2 xs:justify-start cursor-pointer">
            <font-awesome-icon :icon="['fas', 'bars']" class="text-xl hover:text-green-200" />
        </div>
    </div>
</template>
<style scoped>
    .mainBg{
        background-color: #1c4645;
    }
    .active{
        border-bottom: 2px solid #5FD068;
        padding-bottom: 2px;
    }
    .itm{
        transition: all 0.5s ease;
    }
    .itm:hover{
        color: #379777;
    }
    @media (max-width: 768px){
        .itemsHeader{
            display: none;
        }
    }
</style>
