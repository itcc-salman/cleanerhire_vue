<template>
  <div class="main-layout">
    <navbar v-if="['login', 'register', 'password.request'].indexOf($route.name) < 0" />

    <div class="container mt-4">
      <child />
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
