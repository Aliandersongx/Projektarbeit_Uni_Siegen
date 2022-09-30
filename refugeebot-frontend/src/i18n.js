import { createI18n } from 'vue-i18n'

const messages = {
    en: {
      general: {
        language: 'Language',
        show: 'Show',
        about: 'About us',
        home: 'Home',
        askMeSomething: 'Ask me something...',
        aboutText: 'This application is designed to simplify information gathering for refugees who are newly arrived and have questions about essential things such as the location of government institutions or food procurement locations or listings of nearby doctors.',
        send: 'Send',
        chat: 'Chat'
      }
    },
    de: {
      general: {
        language: 'Sprache',
        show: 'Anzeigen',
        about: 'Über uns',
        home: 'Home',
        askMeSomething: 'Frage mich etwas...',
        aboutText: 'Diese Applikation dient zur vereinfachten Informationsbeschaffung für Flüchtlinge, die neu zugezogen sind und Fragen zu essentiellen Dingen haben wie Standorte von Behördeninstitutionen bis zu Beschaffungsorte von Lebensmitteln oder Auflistungen von Ärzten in der Nähe.',
        send: 'Senden',
        chat: 'Chat'
      }
    }
  }

export default createI18n({
    locale: localStorage.getItem("locale") ?? "de",
    fallbackLocale: 'de',
    messages
})