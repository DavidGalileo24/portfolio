<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({});
</script>

<template>
    <div class="text-4xl flex">
        <div class="m-2 bgicons" v-tooltip="'Github'">
            <a href="https://github.com/DavidGalileo24" target="_blank">
                <font-awesome-icon :icon="['fab', 'github']" class="text-green-500 hover:text-green-600" />
            </a>
        </div>
        <div class="m-2 bgicons" v-tooltip="'Linkedin'">
            <a href="https://www.linkedin.com/in/david-galileo-salgado-mejia/" target="_blank">
                <font-awesome-icon :icon="['fab', 'linkedin']" class="text-green-500 hover:text-green-600" />
            </a>
        </div>
        <div class="m-2 bgicons" v-tooltip="'Instagram'">
            <a href="https://www.instagram.com/david_galileo24/" target="_blank">
                <font-awesome-icon :icon="['fab', 'instagram']" class="text-green-500 hover:text-green-600"/>
            </a>
        </div>
    </div>
</template>
<style scoped>
    .bgicons{
        transition: all 0.5s ease;
    }
    .bgicons:hover{
        cursor: pointer;
    }
</style>
