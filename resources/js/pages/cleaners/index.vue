<template>
    <div class="row">
        <div class="col-md-12">
            <panel class="settings-card">
                <ul class="nav">
                    <li v-for="cleaner in cleaners" v-bind:key="cleaner.id" class="nav-item">
                        {{ cleaner }}
                    </li>
                </ul>
            </panel>
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
  mounted () {
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
