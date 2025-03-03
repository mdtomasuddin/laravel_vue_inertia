<script setup>
 import { useForm, usePage } from '@inertiajs/vue3';
import AppNavBar from '../Component/AppNavBar.vue';
 const page = usePage();

 const form=useForm({image_file:""});

 function submit(){
    form.post('/UploadRequest',{
        forceFormData:true,
        preserverScroll:true,
        onSuscess:()=>{
            alert(page.props.flash.message);
            alert(JSON.stringify(page.props.flash.share_data));
            form.reset();
        }
    });
 }
</script>
 
<template>
<AppNavBar />
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-3">File Upload </h3>
            <form @submit.prevent="submit" method="post">
                <div class="mb-3">
                    <label for="file" class="form-label">Choose File</label>
                    <input type="file" class="form-control" id="file" @input="form.image_file = $event.target.files[0]"/>
                </div>
                <button type="submit"  class="btn btn-primary">Upload</button>
            </form>

            <progress v-if="form.progress" :value="form.progress.percentage" max="100">
      {{ form.progress.percentage }}%
    </progress>
        </div>
    </div>
</div>
</template>
 
<style scoped>
 
</style>