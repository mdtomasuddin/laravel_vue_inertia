<script setup>
 import { data } from 'autoprefixer';
import AppNavBar from '../Component/AppNavBar.vue'
import Child1 from '../Component/Child1.vue';

 const props= defineProps({data: Object});
</script>
 
<template>
<AppNavBar />
<h1>passing data controller to page </h1>
<h1>name : {{ props.data.name }}</h1>
<h1>age : {{ props.data.age }}</h1>
<h1>city : {{ props.data.city }}</h1>


<Child1 :data="props.data" />

</template>
 
<style scoped>
 
</style>