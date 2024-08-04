<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({});
</script>

<template>
    <div class="text-4xl flex">
        <div class="m-2 bgicons" v-tooltip="'Github'">
            <Link href="yttps://github.com/DavidGalileo24">
                <font-awesome-icon :icon="['fab', 'github']" class="text-sky-600" />
            </Link>
        </div>
        <div class="m-2 bgicons" v-tooltip="'Linkedin'">
            <Link href="https://www.linkedin.com/in/david-galileo-salgado-mej%C3%ADa-b1a07b128/">
                <font-awesome-icon :icon="['fab', 'linkedin']" class="text-sky-600" />
            </Link>
        </div>
        <div class="m-2 bgicons" v-tooltip="'Instagram'">
            <Link href="https://www.instagram.com/david_galileo24/?hl=es">
                <font-awesome-icon :icon="['fab', 'instagram']" class="text-sky-600"/>
            </Link>
        </div>
    </div>
</template>
<style scoped>
    .bgicons:hover{
        background: white;
        cursor: pointer;
        width: 50%;
        border-radius: 0 40px 40px 0;
        padding: 2px;
    }
</style>
