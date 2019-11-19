<template>
    <div class="row">
        <div class="col-md-3">
            <panel class="settings-card">
                <ul class="nav">
                    <li v-for="cleaner in cleaners" :key="cleaner.id" class="nav-item">
                        {{ cleaner.first_name }}
                    </li>
                </ul>
            </panel>
        </div>

        <div class="col-md-9">
            <transition name="fade" mode="out-in">
                <router-view />
            </transition>
        </div>
    </div>
</template>

<script>
import axios from 'axios'

export default {
  middleware: 'auth',
  data () {
    return {
      cleaners: null
    }
  },
  created () {
    console.log('loaded');
    axios
      .get('/api/cleaners')
      .then(response => (this.cleaners = response.data.cleaners))
  }
}
</script>

<style>
.settings-card .card-body {
  padding: 0;
}
</style>
