<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({});
</script>

<template>
    <div class="text-center text-4xl">
        <Link href="https://github.com/DavidGalileo24">
            <font-awesome-icon :icon="['fab', 'github']" class="mx-2 text-purple-600" />
        </Link>
        <Link href="https://www.linkedin.com/in/david-galileo-salgado-mej%C3%ADa-b1a07b128/">
            <font-awesome-icon :icon="['fab', 'linkedin']" class="mx-2 text-purple-600" />
        </Link>
        <Link href="https://www.instagram.com/david_galileo24/?hl=es">
            <font-awesome-icon :icon="['fab', 'instagram']" class="mx-2 text-purple-600" />
        </Link>
    </div>
</template>
<style scoped>

</style>
