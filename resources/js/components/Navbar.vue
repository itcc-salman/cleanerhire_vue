<template>
    <div>
    <!--header start-->
    <header id="header" class="ui-header">

        <div class="navbar-header">
            <!--logo start-->
            <router-link :to="{ name: user ? 'home' : 'welcome' }" class="navbar-brand">
                <span class="logo"><strong>{{ appName }}</strong></span>
                <span class="logo-compact"><strong>{{ appName }}</strong></span>
            </router-link>
            <!--logo end-->
        </div>

        <div class="search-dropdown dropdown pull-right visible-xs">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-search"></i></button>
            <div class="dropdown-menu">
                <form >
                    <input class="form-control" placeholder="Search..." type="text">
                </form>
            </div>
        </div>

        <div class="navbar-collapse nav-responsive-disabled">

            <!--toggle buttons start-->
            <ul class="nav navbar-nav">
                <li>
                    <a class="toggle-btn" data-toggle="ui-nav" @click="toggleuiDataNav" href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
            <!-- toggle buttons end -->

            <!--search start-->
            <form class="search-content hidden-xs" >
                <button type="submit" name="search" class="btn srch-btn">
                    <i class="fa fa-search"></i>
                </button>
                <input type="text" class="form-control" name="keyword" placeholder="Search ...">
            </form>
            <!--search end-->

            <!--notification start-->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">5</span>
                    </a>
                    <!--dropdown -->
                    <ul class="dropdown-menu dropdown-menu--responsive">
                        <div class="dropdown-header">Notifications (12)</div>
                        <ul class="Notification-list Notification-list--small niceScroll list-group">
                            <li class="Notification list-group-item">
                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                        <i class="Notification__avatar-icon fa fa-bolt"></i>
                                    </div>
                                    <div class="Notification__highlight">
                                        <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                        <p class="Notification__highlight-time">1.2 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Notification list-group-item">
                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                        <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                    </div>
                                    <div class="Notification__highlight">
                                        <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                        <p class="Notification__highlight-time">2 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Notification list-group-item">
                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Notification__avatar pull-left" href="">
                                        <img src="imgs/a0.jpg" alt="...">
                                    </div>
                                    <div class="Notification__highlight">
                                        <p class="Notification__highlight-excerpt"><b>Tomas Edison</b> and 4 other people like your post “keep clam and watch the fizz”.</p>
                                        <p class="Notification__highlight-time">1 day ago</p>
                                    </div>
                                </a>
                            </li>

                            <li class="Notification list-group-item">
                                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                <a href="">
                                    <div class="Notification__avatar pull-left" href="">
                                        <img src="imgs/a0.jpg" alt="...">
                                    </div>
                                    <div class="Notification__highlight">
                                        <p class="Notification__highlight-excerpt"><b>Luciad Extic</b> can join conference.</p>
                                        <p class="Notification__highlight-time">1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Notification list-group-item">
                                <button class="Notification__status Notification__status--unread" type="button" name="button"></button>
                                <a href="">
                                    <div class="Notification__avatar Notification__avatar--info pull-left" href="">
                                        <i class="Notification__avatar-icon fa fa-database"></i>
                                    </div>
                                    <div class="Notification__highlight">
                                        <p class="Notification__highlight-excerpt"><b>Database Error</b></p>
                                        <p class="Notification__highlight-time">2 days ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Notification list-group-item">
                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Notification__avatar Notification__avatar--danger pull-left" href="">
                                        <i class="Notification__avatar-icon fa fa-bolt"></i>
                                    </div>
                                    <div class="Notification__highlight">
                                        <p class="Notification__highlight-excerpt"><b>Server Error Report</b></p>
                                        <p class="Notification__highlight-time">1.2 hours ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Notification list-group-item">
                                <button class="Notification__status Notification__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Notification__avatar Notification__avatar--success pull-left" href="">
                                        <i class="Notification__avatar-icon fa fa-user-plus"></i>
                                    </div>
                                    <div class="Notification__highlight">
                                        <p class="Notification__highlight-excerpt"><b>New Member Registration</b></p>
                                        <p class="Notification__highlight-time">2 hours ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-footer"><a href="">View more</a></div>
                    </ul>
                    <!--/ dropdown -->
                </li>

                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">5</span>
                    </a>
                    <!--dropdown -->
                    <ul class="dropdown-menu dropdown-menu--responsive">
                        <div class="dropdown-header">Messages (12)</div>
                        <ul class="Message-list niceScroll list-group">
                            <li class="Message list-group-item">
                                <button class="Message__status Message__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                        <img src="imgs/a2.jpg" alt="...">
                                    </div>
                                    <div class="Message__highlight">
                                        <span class="Message__highlight-name">Lubida Teresa</span>
                                        <p class="Message__highlight-excerpt">Hello there! Can you send me a photo please?</p>
                                        <p class="Message__highlight-time">1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Message list-group-item">
                                <button class="Message__status Message__status--unread" type="button" name="button"></button>
                                <a href="">
                                    <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                        <img src="imgs/a1.jpg" alt="...">
                                    </div>
                                    <div class="Message__highlight">
                                        <span class="Message__highlight-name">Sara Souaidan</span>
                                        <p class="Message__highlight-excerpt">Hello there!</p>
                                        <p class="Message__highlight-time">1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Message list-group-item">
                                <button class="Message__status Message__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                        <img src="imgs/a0.jpg" alt="...">
                                    </div>
                                    <div class="Message__highlight">
                                        <span class="Message__highlight-name">Addy Osmany</span>
                                        <p class="Message__highlight-excerpt">Blah Blah Blah</p>
                                        <p class="Message__highlight-time">1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Message list-group-item">
                                <button class="Message__status Message__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                        <img src="imgs/a0.jpg" alt="...">
                                    </div>
                                    <div class="Message__highlight">
                                        <span class="Message__highlight-name">Picaso Patel</span>
                                        <p class="Message__highlight-excerpt">Bhai, are you there?</p>
                                        <p class="Message__highlight-time">2 years ago</p>
                                    </div>
                                </a>
                            </li>
                            <li class="Message list-group-item">
                                <button class="Message__status Message__status--read" type="button" name="button"></button>
                                <a href="">
                                    <div class="Message__avatar Message__avatar--danger pull-left" href="">
                                        <img src="imgs/a0.jpg" alt="...">
                                    </div>
                                    <div class="Message__highlight">
                                        <span class="Message__highlight-name">Bengali Tiger</span>
                                        <p class="Message__highlight-excerpt">Mu ha ha</p>
                                        <p class="Message__highlight-time">10 years ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-footer"><a href="">View more</a></div>
                    </ul>
                    <!--/ dropdown -->
                </li>

                <li class="dropdown dropdown-usermenu">
                    <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <div class="user-avatar"><img src="imgs/a0.jpg" alt="..."></div>
                        <span class="hidden-sm hidden-xs">{{ user.name }}</span>
                        <!--<i class="fa fa-angle-down"></i>-->
                        <span class="caret hidden-sm hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><router-link :to="{ name: 'settings.profile' }"><i class="fa fa-cogs"></i>  Settings</router-link></li>
                        <li class="divider"></li>
                        <li><a href="#" @click.prevent="logout"><i class="fa fa-sign-out"></i> {{ $t('logout') }}</a></li>
                    </ul>
                </li>
            </ul>
            <!--notification end-->

        </div>

    </header>
    <!--header end-->
    <sidebar />
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import LocaleDropdown from './LocaleDropdown'
import Sidebar from './Sidebar'

export default {
  components: {
    LocaleDropdown,
    Sidebar
  },

  data: () => ({
    appName: window.config.appName
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    },
    toggleuiDataNav: function(e) {
        e.preventDefault();
        $('#ui').toggleClass('ui-aside-compact');
    }

  }
}
</script>

<style scoped>
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -.375rem 0;
}
</style>
