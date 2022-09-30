<template>
  <header>
    <div>
      <img alt="Vue logo" class="logo" src="@/assets/logo.png" height="80" />
      <nav style="display: flex; justify-content: center; align-items:center;">
        <RouterLink to="/">{{ $t('general.language', {}, { locale: 'en'}) }} </RouterLink>
        <RouterLink to="/chat">{{ $t('general.chat', {}, { locale: 'en'}) }}</RouterLink>
        <RouterLink to="/about">{{ $t('general.about', {}, { locale: 'en'}) }}</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<style>

</style>
