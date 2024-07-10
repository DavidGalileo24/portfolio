<script setup>
import { FwbSidebar, FwbSidebarItem } from 'flowbite-vue'

</script>
<template>
    <div class="w-1/5 ">
        <fwb-sidebar>
            <!--home-->
            <fwb-sidebar-item>
                <template #icon>
                    <font-awesome-icon :icon="['fas', 'home']" class="text-gray-400" />
                </template>
                <template #default>Dashboard</template>
            </fwb-sidebar-item>
            <!--projects-->
            <fwb-sidebar-item>
                <template #icon>
                    <font-awesome-icon :icon="['fas', 'briefcase']" class="text-gray-400"/>
                </template>
                <template #default>Projects</template>
            </fwb-sidebar-item>
            <!--services-->
            <fwb-sidebar-item>
                <template #icon>
                    <font-awesome-icon :icon="['fas', 'code']" class="text-gray-400" />
                </template>
                <template #default>Services</template>
            </fwb-sidebar-item>
            <!--technologies-->
            <fwb-sidebar-item>
                <template #icon>
                    <font-awesome-icon :icon="['fas', 'terminal']" class="text-gray-400"/>
                </template>
                <template #default>Technologies</template>
            </fwb-sidebar-item>
            <!--customers-->
            <fwb-sidebar-item>
                <template #icon>
                    <font-awesome-icon :icon="['fas', 'star']" class="text-gray-400" />
                </template>
                <template #default>Customers</template>
            </fwb-sidebar-item>
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