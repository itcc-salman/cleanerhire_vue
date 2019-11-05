<template>
  <div class="main-layout ui" id="ui">
    <navbar v-if="['login', 'register', 'password.request'].indexOf($route.name) < 0" />

    <div class="ui-content" id="content">
        <div class="ui-content-body">
            <child />
        </div>
    </div>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'

export default {
  name: 'MainLayout',

  components: {
    Navbar
  }
}
</script>
