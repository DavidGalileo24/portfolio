<script setup>
import { reactive } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Filepond from '@/Components/Filepond.vue';

const state = reactive({
    form: {
        name: '',
        percentaje: '',
        type: '',
        image: null,
    }
});

const handleFile=(e)=>{
    const image = e.target.files[0];
      if(!image) return;
      const reader = new FileReader();
      reader.onload = (e) => {
          this.form.file = image;
      };
      reader.readAsDataURL(image);
}
</script>

<template>
    <AppLayout title="Technologies">
        <div class="bg-white overflow-hidden my-3 text-sm">
            <div class="w-full flex p-5">     
                <div class="w-1/3">
                    <form class="p-5 border rounded-lg bg-white" @submit.prevent="sendEmail()">
                        <h2 class="text-2xl font-semibold">Added new technology</h2>
                        <div class="mt-5">
                            <InputLabel for="name" value="Name" />
                            <TextInput v-model="state.form.name" type="text" class="mt-1 block w-full" autofocus />
                        </div>
                        <div class="mt-3">
                            <InputLabel for="percentaje" value="Percentaje" />
                            <TextInput v-model="state.form.percentaje" type="text" class="mt-1 block w-full" />
                        </div>
                        <div class="mt-3">
                            <InputLabel for="type" value="Technology type" />
                            <select v-model="state.form.type"
                                class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option disabled>Seleccione una opción</option>
                                <option value="Languaje">Languaje</option>
                                <option value="Framework">Framework</option>
                                <option value="Library">Library</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <InputLabel for="image" value="Image" />
                            <Filepond v-model="state.form.image" @change="handleFile($event)"
                                allow-multiple="false" max-files="1" />
                        </div>
                        <div class="mt-3">
                            <PrimaryButton class="m-1 w-full">
                                <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
                <div class="w-2/3">
                    <p>lorem</p>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
