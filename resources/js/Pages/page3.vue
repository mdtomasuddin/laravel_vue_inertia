<script setup>
 import AppNavBAr from '../Component/AppNavBar.vue'
 import { usePage } from '@inertiajs/vue3';
 const page=usePage();
</script>
 
<template>
<AppNavBAr />
<h1>page 3 form parent </h1>
<h4>Message :{{ page.props.message }}</h4>
<h4>Status:{{ page.props.status }}</h4>
<h4>Share Data:{{ page.props.share_data }}</h4>
</template>
 
<style scoped>
 
</style>