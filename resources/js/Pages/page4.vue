<script setup>
import AppNavBar from '../Component/AppNavBar.vue'
import { useForm } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const page=usePage();

const form = useForm({
    first_name: 'tomas',
    last_name: 'uddin',
    email: 'tomasuddin@gmail.com'
});

function submit() {
    form.post("/PostBackRequest",{
        preserveScroll: true,
        onSuccess: () => {
            alert(page.props.flash.message);
            alert(page.props.flash.status);
            alert(JSON.stringify(page.props.flash.share_data));
        },
    });
}
</script>

<template>
    <AppNavBar />
    <div class="container">
        <div class="row justify-center">
            <div class="col-md-5">
                <form @submit.prevent="submit">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" v-model="form.first_name">
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" v-model="form.last_name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" v-model="form.email">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped></style>