<script setup>
 import { data } from 'autoprefixer';
import AppNavBar from '../Component/AppNavBar.vue'

 const props= defineProps({data: Object});
</script>
 
<template>
<AppNavBar />
<h1>name : {{ props.data.name }}</h1>
<h1>age : {{ props.data.age }}</h1>
<h1>city : {{ props.data.city }}</h1>
<h1>Page 1  </h1>

</template>
 
<style scoped>
 
</style>