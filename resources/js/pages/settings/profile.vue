<template>
    <panel :title="$t('your_info')">
        <form @submit.prevent="update" @keydown="form.onKeydown($event)">
            <alert-success :form="form" :message="$t('info_updated')" />
            <div class="form-group">
                <label for="name">{{ $t('name') }}</label>
                <input v-model="form.name" :class="{ 'error': form.errors.has('name') }" class="form-control" id="name" type="text" name="name">
                <has-error :form="form" field="name" />
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email">{{ $t('email') }}</label>
                <input v-model="form.email" :class="{ 'error': form.errors.has('email') }" class="form-control" id="email" type="email" name="email">
                <has-error :form="form" class="error" field="email" />
            </div>
            <!-- Submit Button -->
            <div class="form-group">
                <div class="pull-right">
                    <v-button :loading="form.busy" type="success">{{ $t('update') }}</v-button>
                </div>
            </div>
        </form>
    </panel>
</template>

<script>
import Form from 'vform'
import { mapGetters } from 'vuex'

export default {
  scrollToTop: false,

  metaInfo () {
    return { title: this.$t('settings') }
  },

  data: () => ({
    form: new Form({
      name: '',
      email: ''
    })
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  created () {
    // Fill the form with user data.
    this.form.keys().forEach(key => {
      this.form[key] = this.user[key]
    })
  },

  methods: {
    async update () {
      const { data } = await this.form.patch('/api/settings/profile')

      this.$store.dispatch('auth/updateUser', { user: data })
    }
  }
}
</script>
