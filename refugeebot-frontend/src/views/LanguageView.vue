<template>
  <main>
    <div style="display: flex; justify-content: center; align-items: center" class="language-chooser">
      <img @click="setLanguage('de')" src="@/assets/german.jpg" alt="">
      <img @click="setLanguage('en')" src="@/assets/english.png" alt="">
    </div>
  </main>
</template>

<script setup>
import i18n from '@/i18n';
import router from '@/router/index'

function setLanguage(locale) {
  i18n.global.locale = locale
  localStorage.setItem("locale", locale)
  router.push({
    name: 'chat'
  })
}

</script>

<style>

.language-chooser img {
  width: 150px;
  padding: .5rem;
  transition: .2s;
}

.language-chooser img:hover {
  cursor: pointer;
  opacity: .8;
}
</style>