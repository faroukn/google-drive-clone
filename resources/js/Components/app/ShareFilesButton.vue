<template>
<button @click="onClick" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white mr-3 border border-gray-200 rounded-lg hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
        <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" clip-rule="evenodd" />
    </svg>

    Share
</button>


    <ShareFilesModal v-model="showEmailsModal" :all-selected="allSelected" :selected-ids="selectedIds"/>

</template>
<script setup>
import {ref} from "vue";
import {useForm, usePage} from "@inertiajs/vue3";
import {showErrorDialog, showSuccessNotification} from "@/event-bus.js";
import ShareFilesModal from "@/Components/app/ShareFilesModal.vue";

const page = usePage()
const form = useForm({
    all: null,
    ids:[],
    parent_id: null,
})

const showEmailsModal = ref(false)

const props = defineProps({
    allSelected:{
        type:Boolean,
        required:false,
        default:false,
    },
    selectedIds:{
        type:Array,
        required:false,
    },

})


const emit = defineEmits(['restore'])
function onClick(){
    if(!props.allSelected && !props.selectedIds.length){
        showErrorDialog('Please Select at least one file to share')
        return
    }
    showEmailsModal.value = true;
}


</script>
<style scoped>

</style>
