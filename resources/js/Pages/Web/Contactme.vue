<script setup>
import { Head } from '@inertiajs/vue3';
import Nav from '@/Components/Nav.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import Social from '@/Components/Social.vue';
import { useContactStore } from '@/Stores/contact';

import { useHead } from 'unhead'

const contact = useContactStore();
useHead({
  title: 'Contact me',
  ogImage: '@/images/ico.png',
  twitterCard: 'summary_large_image',
  meta: [
    {name: 'description', content: 'David Galileo Salgado FullStack Developer using Laravel and Vue, autodidact and Freelancer based in San Salvador El Salvador'},
    {property: 'og:description', content: 'David Galileo Salgado FullStack Developer using Laravel and Vue, autodidact and Freelancer based in San Salvador El Salvador'},
    {property: 'og:title', content: 'Contact me'},
  ]
});

defineProps({
    info: {
        type: Object,
        default: ({})
    },
});



</script>
<template>

    <Head title="Contact me" />
    <Nav />
    <div class="mt-5 p-5 lg:flex md:flex ">
        <div class="lg:w-1/2 bg-gray-100 rounded-xl p-10 md:w-1/2 sm:w-full xs:w-full">
            <h1 class="text-5xl">Contact Me</h1>
            <p class="text-md mt-3">Get in touch and let me know how can help</p>
            <form class="rounded-lg w-full" @submit.prevent="contact.contactForm()">
                <div class="mt-5">
                    <InputLabel for="name" value="Name" />
                    <TextInput v-model="contact.form.name" type="text" class="mt-1 block w-full" autofocus />
                </div>
                <div class="mt-3">
                    <InputLabel for="name" value="Email" />
                    <TextInput v-model="contact.form.email" type="text" class="mt-1 block w-full" />
                </div>
                <div class="mt-3">
                    <InputLabel for="name" value="Message" />
                    <textarea v-model="contact.form.description" id="" cols="30" rows="3"
                        class="mt-1 border-gray-300 rounded-md block w-full" ></textarea>
                </div>
                <div class="flex justify-end mt-5">
                    <PrimaryButton class="m-1" >
                        <font-awesome-icon :icon="['fas', 'paper-plane']" class="mr-2" />Send message
                    </PrimaryButton>
                </div>
            </form>
        </div>
        <div class="xl:w-1/2 p-10 md:w-1/2 sm:w-full xs:w-full">
            <h1 class="text-5xl">Let's Connect</h1>
            <p class="text-md mt-3">Looking for help? Fill the form and start a new adventure.</p>
            <ul class="mt-7">
                <li class="m-3 flex items-center">
                    <font-awesome-icon :icon="['fas', 'envelope-open-text']" class="mx-2 text-2xl text-gray-800 rounded-xl bg-green-400 p-3" />
                    {{ info.email }}
                </li>
                <li class="m-3 flex items-center">
                    <font-awesome-icon :icon="['fas', 'phone-alt']" class="mx-2 text-2xl text-gray-800 rounded-xl bg-green-400 p-3"/>
                    {{ info.phone }}
                </li>
                <li class="m-3 flex items-center">
                    <font-awesome-icon :icon="['fas', 'map-marker-alt']" class="mx-2 text-3xl text-gray-800 rounded-xl bg-green-400 p-3"/> 
                    {{ info.address }}
                </li>
            </ul><hr>
            <div class="flex justify-end">
                <Social />
            </div>
        </div>
    </div>
</template>

<style scoped></style>
