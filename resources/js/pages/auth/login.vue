<template>
    <div class="sign-in-wrapper">
        <div class="sign-container">
            <div class="text-center">
                <h2 class="logo"><img src="imgs/logo-dark.png" width="130px" alt=""/></h2>
                <h4 :title="$t('login')">Login to Admin</h4>
            </div>

            <form class="sign-in-form" role="form"  @submit.prevent="login" @keydown="form.onKeydown($event)">
                <div class="form-group">
                    <input type="email" v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" class="form-control" name="email">
                    <has-error :form="form" field="email" />
                </div>
                <div class="form-group">
                    <input v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" type="password" class="form-control" name="password">
                    <has-error :form="form" field="password" />
                </div>
                <div class="form-group text-center">
                    <label class="i-checks">
                        <input type="checkbox" name="remember" v-model="remember">
                        <i></i>
                    </label>
                    {{ $t('remember_me') }}
                </div>
                <v-button :loading="form.busy" class="btn btn-info btn-block">
                    {{ $t('login') }}
                </v-button>
                <div class="text-center help-block">
                    <router-link :to="{ name: 'password.request' }" class="small ml-auto my-auto">
                        {{ $t('forgot_password') }}
                    </router-link>
                </div>
            </form>
            <div class="text-center copyright-txt">
                <small>Cleaner Hire - Copyright © 2019</small>
            </div>
        </div>
    </div>
</template>

<script>
import Form from 'vform'
import LoginWithGithub from '~/components/LoginWithGithub'

export default {
  middleware: 'guest',

  components: {
    LoginWithGithub
  },

  metaInfo () {
    return { title: this.$t('login') }
  },

  data: () => ({
    form: new Form({
      email: '',
      password: ''
    }),
    remember: false
  }),

  methods: {
    async login () {
      // Submit the form.
      const { data } = await this.form.post('/api/login')

      // Save the token.
      this.$store.dispatch('auth/saveToken', {
        token: data.token,
        remember: this.remember
      })

      // Fetch the user.
      await this.$store.dispatch('auth/fetchUser')

      // Redirect home.
      this.$router.push({ name: 'home' })
    }
  }
}
</script>
