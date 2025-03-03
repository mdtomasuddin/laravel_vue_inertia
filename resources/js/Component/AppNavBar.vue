<script setup>
 import { Link } from '@inertiajs/vue3';
</script>
 
<template>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <Link class="nav-link active" aria-current="page" href="/">Home</Link>
        </li>

        <li class="nav-item">
          <Link class="nav-link" href="/page1">Page1</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" href="/page2">Page2</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" href="/page3">page3</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" href="/page4">page4</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" href="/page5">page5</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" preserve-scroll href="/page6">page6</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" href="/page7">page7</Link>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</template>
 
<style scoped>
 
</style>