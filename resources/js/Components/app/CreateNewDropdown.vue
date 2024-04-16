<template>
    <Menu as="div" class="relative inline-block text-left">
            <MenuButton
                class="inline-flex w-full justify-center rounded-md bg-white shadow-md px-4 py-2 text-sm font-medium text-gray-800 hover:bg-black/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75"
            >
                Create New
            </MenuButton>


        <transition
            enter-active-class="transition duration-100 ease-out"
            enter-from-class="transform scale-95 opacity-0"
            enter-to-class="transform scale-100 opacity-100"
            leave-active-class="transition duration-75 ease-in"
            leave-from-class="transform scale-100 opacity-100"
            leave-to-class="transform scale-95 opacity-0"
        >
            <MenuItems
                class="absolute left mt-2 w-32 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none"
            >
                <div class="px-1 py-1">
                    <MenuItem v-slot="{ active }">
                        <a href="#" @click.prevent = "showCreateFolderModel"
                           class="text-gray-700 block px-4 py-2 text-sm">
                            New Folder
                        </a>
                    </MenuItem>
                </div>

                <div class="px-1 py-1">
                    <FileUploadMenuItem/>
                    <FolderUploadMenuItem/>
                </div>

            </MenuItems>
        </transition>
    </Menu>

    <CreateFolderModal v-model="createFolderModal"/>

</template>
<script setup>

import {Menu, MenuButton, MenuItem, MenuItems} from "@headlessui/vue";
import {ChevronDownIcon} from "@heroicons/vue/20/solid/index.js";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import CreateFolderModal from "@/Components/app/CreateFolderModal.vue";
import {ref} from "vue";
import FileUploadMenuItem from "@/Components/app/FileUploadMenuItem.vue";
import FolderUploadMenuItem from "@/Components/app/FolderUploadMenuItem.vue";

const createFolderModal = ref(false);
function showCreateFolderModel()
{
    createFolderModal.value = true;
}
</script>

<style scoped>

</style>
