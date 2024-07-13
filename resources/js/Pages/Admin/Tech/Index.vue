<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
</script>

<template>
    <AppLayout title="Technologies">
        <div class="bg-white overflow-hidden m-5">
            <div class="w-full">     
                <div class="w-1/2">
                    <form class="p-5 rounded-lg bg-white w-2/3 mx-auto" @submit.prevent="sendEmail()">
                        <h2 class="text-3xl font-semibold">Contact me here!</h2>
                        <div class="mt-5">
                            <InputLabel for="name" value="Name" />
                            <TextInput v-model="name" type="text" class="mt-1 block w-full" autofocus />
                        </div>
                        <div class="mt-3">
                            <InputLabel for="name" value="Percentaje" />
                            <TextInput v-model="percentaje" type="text" class="mt-1 block w-full" autofocus />
                        </div>
                        <div class="flex justify-end mt-2">
                            <PrimaryButton class="m-1">
                                <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send message
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
