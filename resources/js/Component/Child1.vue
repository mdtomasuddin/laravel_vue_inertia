<script setup>
  const props= defineProps({data: Object});
</script>
 
<template>
<h4>passing data controller to component </h4>
<h4>name : {{ props.data.name }}</h4>
<h4>age : {{ props.data.age }}</h4>
<h4>city : {{ props.data.city }}</h4>


</template>
 
<style scoped>
 
</style>