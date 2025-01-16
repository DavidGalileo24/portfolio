<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Filepond from '@/Components/Filepond.vue';
import { useServiceStore } from '@/Stores/service';
import { FwbA, FwbTable, FwbTableBody, FwbTableCell, FwbTableHead, FwbTableHeadCell, FwbTableRow } from 'flowbite-vue'

const serviceStore = useServiceStore();
defineProps({
    services: {
        type: Object,
        default: ({})
    }
});


</script>

<template>
    <AppLayout title="Services">
        <div class="w-full flex p-5">
            <div class="w-1/4">
                <form class="p-3 border rounded-lg bg-white" @submit.prevent="serviceStore.storeservices()">
                    <h2 class="text-xl font-semibold text-center">Added new service</h2>
                    <div class="mt-3">
                        <InputLabel for="image" value="Image" class="text-sm" />
                        <Filepond v-model="serviceStore.form.image" @change="serviceStore.handleFile($event)"
                            allow-multiple="false" max-files="1" />
                    </div>
                    <div class="mt-5">
                        <InputLabel for="name" value="Name" class="text-sm" />
                        <TextInput v-model="serviceStore.form.name" type="text" class="block w-full" autofocus />
                    </div>
                    <div class="mt-3">
                        <InputLabel for="description" value="Descripción" class="text-sm" />
                        <textarea v-model="serviceStore.form.description" type="text" rows="4"
                            class="w-full text-sm border-gray-300 focus:border-green-500 focus:ring-green-500 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mt-3">
                        <PrimaryButton class="m-1 w-full">
                            <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send data
                        </PrimaryButton>
                    </div>
                </form>
            </div>
            <div class="w-3/4 flex flex-wrap justify-center mx-2">
                <fwb-table class="w-full">
                    <fwb-table-head>
                        <fwb-table-head-cell>Image</fwb-table-head-cell>
                        <fwb-table-head-cell>Service name</fwb-table-head-cell>
                        <fwb-table-head-cell>Description</fwb-table-head-cell>
                    </fwb-table-head>
                    <fwb-table-body>
                        <fwb-table-row v-for="serv in services.data" :key="serv.id">
                            <fwb-table-cell><img :src="serv.image.file" class="techlogo" alt=""
                                    loading="lazy"></fwb-table-cell>
                            <fwb-table-cell>{{ serv.name }}</fwb-table-cell>
                            <fwb-table-cell>{{ serv.description }}</fwb-table-cell>
                        </fwb-table-row>
                    </fwb-table-body>
                </fwb-table>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped></style>
