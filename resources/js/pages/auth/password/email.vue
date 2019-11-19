<template>
    <div class="row">
        <div class="col-lg-8 m-auto">
            <panel :title="$t('reset_password')">
                <form @submit.prevent="send" @keydown="form.onKeydown($event)">
                    <alert-success :form="form" :message="status" />

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">{{ $t('email') }}</label>
                        <input v-model="form.email" :class="{ 'error': form.errors.has('email') }" class="form-control" type="email" id="email" name="email">
                        <has-error :form="form" field="email" />
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <div class="pull-right">
                            <v-button :loading="form.busy">
                                {{ $t('send_password_reset_link') }}
                            </v-button>
                        </div>
                    </div>
                </form>
            </panel>
        </div>
    </div>
</template>

<script>
import Form from 'vform'

export default {
  middleware: 'guest',

  metaInfo () {
    return { title: this.$t('reset_password') }
  },

  data: () => ({
    status: '',
    form: new Form({
      email: ''
    })
  }),

  methods: {
    async send () {
      const { data } = await this.form.post('/api/password/email')

      this.status = data.status

      this.form.reset()
    }
  }
}
</script>
