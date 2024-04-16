<template>
<div class="w-[600px] h-[80px] flex items-center">
    <TextInput type="text" class="block w-full mr-2"
               v-model="search" autocomplete
               @keyup.enter.prevent = "onSearch"
               placeholder="Search For Files And Folders"/>
</div>
</template>

<script setup>
import TextInput from "@/Components/TextInput.vue";
import {onMounted, ref} from "vue";
import {router} from "@inertiajs/vue3";
import {emitter} from "@/event-bus.js";

const search = ref('');
let params = '';
function onSearch(){
    params.set('search',search.value);
    router.get(window.location.pathname+'?' + params.toString());
}

onMounted(() => {
    params = new URLSearchParams(window.location.search);
    search.value = params.get('search');
    emitter.emit('ON_SEARCH',search.value);
})
</script>

<style scoped>

</style>
