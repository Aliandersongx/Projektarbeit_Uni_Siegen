<template>
  <main>
    <h3 class="text-center mb-1">{{ $t('general.askMeSomething') }}</h3>
    <div class="chatcontainer">
      <div class="messages">
        <div :class="!message.own ? 'leftMessage green' : 'rightMessage'" v-for="message in messages" :key="message.message">

          <div class="chatMessage" v-if="message.own">
            <div class="body">
              {{message.message}}
            </div>
          </div>

          <div class="chatMessage" v-else>
            <div class="header" v-if="message.no_match !== true">
              {{message.question.question}}
            </div>
            <div class="body">
              <a target="_blank" v-if="message.type && message.type === 'maps'" :href="message.answer" style="text-decoration: underline;">
                {{ $t('general.show') }}
              </a>
              <p v-else>
                {{message.no_match ? message.answer : message.answer.answer}}
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="message">
        <input type="text" name="message" v-model="currentUserMessage">
        <button type="submit" class="green" @click="getAnswer" style="background: #333">{{ $t('general.send') }}</button>
      </div>
    </div>
  </main>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import axios from 'axios'


const apiUrl = 'http://localhost:8000'
const messages = ref([])
const currentUserMessage = ref('')

const getPosition = (position) => {
  messages.value.push({
    no_match: true,
    answer: `https://google.com/maps/@${position.coords.latitude},${position.coords.longitude},14z`,
    type: 'maps'
  })
}

const getAnswer = () => { 
  if(currentUserMessage.value.length > 0) {
    messages.value.push({
      own: true,
      message: currentUserMessage.value
    })

    let locale = 'de';

    if(localStorage.getItem("locale")) {
      locale = localStorage.getItem("locale")
    }

    axios.post(`${apiUrl}/chat`, {message: currentUserMessage.value, locale: locale}).then((r) => {
      messages.value.push(r.data)

      if(r.data.answer && r.data.answer.type === 'maps') {

        if(r.data.answer.search_param === 'self') {
          if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(getPosition)
          }
        } else {
          messages.value.push({
            no_match: true,
            answer: `http://maps.google.com/?q=${r.data.answer.search_param}&z=15`,
            type: 'maps'
            })
        }
      }

    })

    currentUserMessage.value = ''
  }
}
onMounted(() => {
  getAnswer()
})

</script>

<style>
</style>