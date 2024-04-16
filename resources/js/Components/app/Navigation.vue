<template>
    <nav class="min-w-[200px]">
        <div class="h-[80px] px-3 flex items-center gap-3">
            <Link :href="route('MyFiles')">
                <ApplicationLogo
                    class="block h-9 w-auto fill-current text-gray-800"
                />
            </Link>
            LaraStorage
        </div>

        <div class="px-3">
            <CreateNewDropdown/>

        <div class="py-3">
            <NavLink :href="route('MyFiles')" :active="$page.props.route_name == 'MyFiles'"> My Files</NavLink>
            <NavLink :href="route('file.sharedWithMe')" :active="$page.props.route_name == 'file.sharedWithMe'">Shared with me</NavLink>
            <NavLink :href="route('file.sharedByMe')" :active="$page.props.route_name == 'file.sharedByMe'">Shared by me</NavLink>
            <NavLink :href="route('trash')" :active="$page.props.route_name == 'trash'">Trash</NavLink>
        </div>
        </div>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import CreateNewDropdown from "@/Components/app/CreateNewDropdown.vue";
import NavLink from "@/Components/NavLink.vue";

</script>



<style scoped>

</style>
