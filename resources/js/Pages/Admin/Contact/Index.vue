<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { FwbCard } from 'flowbite-vue';
import { FwbA, FwbTable, FwbTableBody, FwbTableCell, FwbTableHead, FwbTableHeadCell, FwbTableRow } from 'flowbite-vue'

defineProps({
    contacts: {
        type: Object,
        default: ({})
    }
});

</script>
<template>
    <AppLayout title="Contacts">
        <div class="w-full flex p-5">
            <div class="w-full flex flex-wrap justify-center m-2">
                <fwb-table class="w-full">
                    <fwb-table-head>
                        <fwb-table-head-cell>Name</fwb-table-head-cell>
                        <fwb-table-head-cell>Email</fwb-table-head-cell>
                        <fwb-table-head-cell>Description</fwb-table-head-cell>
                    </fwb-table-head>
                    <fwb-table-body>
                        <fwb-table-row v-for="contact in contacts.data" :key="contact.id">
                            <fwb-table-cell>{{ contact.name }}</fwb-table-cell>
                            <fwb-table-cell>{{ contact.email }}</fwb-table-cell>
                            <fwb-table-cell>{{ contact.description }}</fwb-table-cell>
                        </fwb-table-row>
                    </fwb-table-body>
                </fwb-table>
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
