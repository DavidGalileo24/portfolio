<script setup>
import { FwbSidebar, FwbSidebarItem } from 'flowbite-vue'
import { Link } from '@inertiajs/vue3';
import AuthenticationCardLogo from './AuthenticationCardLogo.vue';

</script>
<template>
    <div class="w-1/5 text-sm">
        <fwb-sidebar>
            <AuthenticationCardLogo />
            <!--home-->
                <fwb-sidebar-item>
                    <Link href="/admin/dashboard" :class="{'active': $page.url==='/admin/dashboard'}" class="w-full block">
                    <template #default><font-awesome-icon :icon="['fas', 'home']" class="text-gray-300 mr-3 text-lg" />Dashboard</template>
                </Link>
                </fwb-sidebar-item>
            <!--projects-->
                <fwb-sidebar-item>
                    <Link href="/admin/projects" :class="{'active': $page.url==='/admin/projects'}" class="w-full block">
                    <template #default><font-awesome-icon :icon="['fas', 'briefcase']" class="text-gray-300 mr-3 text-lg"/>Projects</template>
                </Link>
                </fwb-sidebar-item>
            <!--services-->
                <fwb-sidebar-item>
                    <Link href="/admin/services" :class="{'active': $page.url==='/admin/services'}" class="w-full block">
                    <template #default><font-awesome-icon :icon="['fas', 'code']" class="text-gray-300 mr-3 text-lg" />Services</template>
                </Link>
                </fwb-sidebar-item>
            <!--Technologys-->
                <fwb-sidebar-item>
                    <Link href="/admin/Technologys" :class="{'active': $page.url==='/admin/Technologys'}" class="w-full block">
                    <template #default><font-awesome-icon :icon="['fas', 'terminal']" class="text-gray-300 mr-3 text-lg"/>Technologys</template>
                </Link>
                </fwb-sidebar-item>
            <!--customers-->
                <fwb-sidebar-item>
                    <Link href="/admin/companies" :class="{'active': $page.url==='/admin/companies'}" class="w-full block">
                    <template #default><font-awesome-icon :icon="['fas', 'star']" class="text-gray-300  mr-3 text-lg" />Customers</template>
                </Link>
                </fwb-sidebar-item>
            <!--blog-->
                <fwb-sidebar-item>
                    <Link href="/admin/blog" :class="{'active': $page.url==='/admin/blog'}" class="w-full block">
                    <template #default><font-awesome-icon :icon="['fas', 'newspaper']" class="text-gray-300  mr-3 text-lg" />Blog</template>
                </Link>
                </fwb-sidebar-item>
        </fwb-sidebar>
    </div>
</template>
<style scoped>
    .active{
        background-color: #3d96ca;
        padding: 5px;
        border-radius: 5px;
        color:white !important;
    }
</style>