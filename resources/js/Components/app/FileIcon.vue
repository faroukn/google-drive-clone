<template>
<span class="w-8 h-8 inline-flex items-center justify-center mr-2">
    <svg  v-if="file.is_folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 0 0-1.883 2.542l.857 6a2.25 2.25 0 0 0 2.227 1.932H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-1.883-2.542m-16.5 0V6A2.25 2.25 0 0 1 6 3.75h3.879a1.5 1.5 0 0 1 1.06.44l2.122 2.12a1.5 1.5 0 0 0 1.06.44H18A2.25 2.25 0 0 1 20.25 9v.776" />
</svg>

<template v-else>
    <img class="w-6 " v-if="isImage(file)" :src="`/images/icons/image-file-icon.png`">
    <img class="w-6 " v-else-if="isPDF(file)" :src="`/images/icons/pdf-icon.png`">
    <img class="w-6 " v-else-if="isAudio(file)" :src="`/images/icons/volume-icon.png`">
    <img class="w-6 " v-else-if="isVideo(file)" :src="`/images/icons/movie-media-player-icon.png`">
    <img class="w-6 " v-else-if="isWord(file)" :src="`/images/icons/microsoft-word-icon.png`">
    <img class="w-6 " v-else-if="isExcel(file)" :src="`/images/icons/microsoft-word-icon.png`">
    <img class="w-6 " v-else-if="isZip(file)" :src="`/images/icons/archive-file-icon.png`">
    <img class="w-6 " v-else-if="isText(file)" :src="`/images/icons/txt-file-icon.png`">
    <img class="w-6 " v-else :src="`/images/icons/clip-icon.png`">

</template>
</span>
</template>
<script setup>

import {isAudio, isExcel, isImage, isPDF, isText, isVideo, isWord, isZip} from "@/Helper/file-helper.js";

const {file} = defineProps({
    file:Object
})
</script>
<style scoped>

</style>
