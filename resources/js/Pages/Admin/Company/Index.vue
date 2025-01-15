<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Filepond from '@/Components/Filepond.vue';
import { FwbCard } from 'flowbite-vue';
import { useCompanyStore } from '@/Stores/company';

const companyStore = useCompanyStore();
defineProps({
    company: {
        type: Object,
        default: ({})
    }
});

</script>
<template>
    <AppLayout title="Customers">
        <div class="w-full flex p-5">
            <div class="w-1/4">
                <form class="p-3 border rounded-lg bg-white" @submit.prevent="companyStore.storecompany()">
                    <h2 class="text-xl font-semibold text-center">Added new customer</h2>
                    <div class="mt-3">
                        <InputLabel for="image" value="Image" class="text-sm" />
                        <Filepond v-model="companyStore.form.image" @change="companyStore.handleFile($event)" allow-multiple="false"
                            max-files="1" />
                    </div>
                    <div class="mt-5">
                        <InputLabel for="name" value="Name" class="text-sm" />
                        <TextInput v-model="companyStore.form.name" type="text" class="block w-full" autofocus />
                    </div>
                    <div class="mt-3">
                        <PrimaryButton class="m-1 w-full">
                            <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send data
                        </PrimaryButton>
                    </div>
                </form>
            </div>
            <div class="w-3/4 flex flex-wrap justify-center mx-2 bg-gray-800 overflow-hidden p-2 rounded-md">
                <span v-for="company in company.data" :key="company.id">
                    <fwb-card href="#" class="m-2 mt-0">
                        <div class="p-2">
                            <img loading="lazy" :src="company.image.file" alt="logo" class="companylogo">
                            <h3 class="text-lg font-bold tracking-tight text-center text-gray-900">{{ company.name }}</h3>
                        </div>
                    </fwb-card>
                </span>
            </div>
        </div>
    </AppLayout>
</template>
<style scoped>
.companylogo {
    padding: 5px;
    width: 125px;
    height: 100px;
    display: block;
    margin: 0 auto;
    border-bottom: 1px solid #dae2eb;
}
</style>
