<script setup>
import { FwbSidebar, FwbSidebarItem } from 'flowbite-vue'
import { Link } from '@inertiajs/vue3';

</script>
<template>
    <div class="w-1/5 ">
        <fwb-sidebar>
            <!--home-->
            <Link href="/admin/dashboard" :class="{'active': $page.url==='/dashboard'}">
                <fwb-sidebar-item>
                    <template #icon>
                        <font-awesome-icon :icon="['fas', 'home']" class="text-gray-400" />
                    </template>
                    <template #default>Dashboard</template>
                </fwb-sidebar-item>
            </Link>
            <!--projects-->
            <Link href="/admin/projects" :class="{'active': $page.url==='/projects'}">
                <fwb-sidebar-item>
                    <template #icon>
                        <font-awesome-icon :icon="['fas', 'briefcase']" class="text-gray-400"/>
                    </template>
                    <template #default>Projects</template>
                </fwb-sidebar-item>
            </Link>
            <!--services-->
            <Link href="/admin/services" :class="{'active': $page.url==='/services'}">
                <fwb-sidebar-item>
                    <template #icon>
                        <font-awesome-icon :icon="['fas', 'code']" class="text-gray-400" />
                    </template>
                    <template #default>Services</template>
                </fwb-sidebar-item>
            </Link>
            <!--technologies-->
            <Link href="/admin/technologies" :class="{'active': $page.url==='/technologies'}">
                <fwb-sidebar-item>
                    <template #icon>
                        <font-awesome-icon :icon="['fas', 'terminal']" class="text-gray-400"/>
                    </template>
                    <template #default>Technologies</template>
                </fwb-sidebar-item>
            </Link>
            <!--customers-->
            <Link href="/admin/company" :class="{'active': $page.url==='/technologies'}">
                <fwb-sidebar-item>
                    <template #icon>
                        <font-awesome-icon :icon="['fas', 'star']" class="text-gray-400" />
                    </template>
                    <template #default>Customers</template>
                </fwb-sidebar-item>
            </Link>
            <!--blog-->
            <fwb-sidebar-item>
                <template #icon>
                    <font-awesome-icon :icon="['fas', 'newspaper']" class="text-gray-400" />
                </template>
                <template #default>Blog</template>
            </fwb-sidebar-item>
        </fwb-sidebar>
    </div>
</template>