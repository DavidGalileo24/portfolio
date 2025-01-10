<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({});
const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="p-4 flex justify-between items-center text-white bg-green-800"
        :class="{ 'bg-transparent': $page.url == '/' }">
        <div class="w-1/4 sm:w-1/2 xs:w-1/2">
            <h1 class="great-vibes text-2xl mx-2">
                <span class="text-green-200">David</span>
                <span class="font-semibold text-gray-300">Salgado</span>
            </h1>
        </div>
        <div class="w-3/4 xl:flex items-center justify-end text-md itemsHeader">
            <Link href="/" class="mx-4 itm" :class="{ 'active': $page.url === '/' }">Home</Link>
            <Link href="/projects" class="mx-4 itm" :class="{ 'active': $page.url === '/projects' }">Projects</Link>
            <Link href="/services" class="mx-4 itm" :class="{ 'active': $page.url === '/services' }">Services</Link>
            <Link href="/about-me" class="mx-4 itm" :class="{ 'active': $page.url === '/about-me' }">About me</Link>
            <!--<Link href="/blog" class="mx-4 itm" :class="{'active': $page.url==='/blog'}">Blog</Link>-->
            <Link href="/contact" class="mx-4 itm" :class="{ 'active': $page.url === '/contact' }">Contact</Link>
        </div>
        <div class="lg:hidden md:hidden sm:w-1/2 xs:w-1/2 xs:justify-start cursor-pointer">
            <!--<font-awesome-icon :icon="['fas', 'bars']" class="text-xl hover:text-green-200" />-->
            <button
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500  focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                @click="showingNavigationDropdown = !showingNavigationDropdown">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1 bg-gray-200">
            <ResponsiveNavLink href="/" :class="{ 'active': $page.url === '/' }">
                Home
            </ResponsiveNavLink>
            <ResponsiveNavLink href="/projects" :class="{ 'active': $page.url === '/about' }">
                Projects
            </ResponsiveNavLink>
            <ResponsiveNavLink href="/services" :class="{ 'active': $page.url === '/services' }">
                Services
            </ResponsiveNavLink>
            <ResponsiveNavLink href="/about-me" :class="{ 'active': $page.url === '/about-me' }">
                About me
            </ResponsiveNavLink>
            <ResponsiveNavLink href="/contact" :class="{ 'active': $page.url === '/contact' }">
                Contact
            </ResponsiveNavLink>
        </div>

    </div>
</template>
<style scoped>
.mainBg {
    background-color: #1c4645;
}

.active {
    border-bottom: 2px solid #5FD068;
    padding-bottom: 2px;
}

.itm {
    transition: all 0.5s ease;
}

.itm:hover {
    color: #379777;
}

@media (max-width: 768px) {
    .itemsHeader {
        display: none;
    }
}
</style>
