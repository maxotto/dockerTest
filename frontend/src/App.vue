<template>
  <v-app>
    <v-app-bar
      app
      color="grey"
      dark
      dense
    >
      <div class="d-flex align-center">
        <v-img
          alt="RTRS logo"
          class="shrink mr-2"
          contain
          src="https://cdn.rtrs.ru/bitrix/templates/rtrs/images/profi-logo.png"
          transition="scale-transition"
          width="40"
        />
        <H1>Архив для сноса</H1>
      </div>

      <v-spacer></v-spacer>
      <user-app-bar-block></user-app-bar-block>
    </v-app-bar>

    <v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script lang="ts">
import Vue from 'vue'
import UserAppBarBlock from './components/UserAppBarBlock.vue'

export default Vue.extend({
  name: 'App',
  components: {
    UserAppBarBlock
  },

  data: () => ({
    //
  })
})
</script>
