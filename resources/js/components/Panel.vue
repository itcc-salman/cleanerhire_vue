<template>
    <div class="panel">
        <header class="panel-heading" v-if="title">{{ title }}</header>
        <div class="panel-body">
            <slot />
        </div>
    </div>
</template>

<script>
export default {
  name: 'Panel',

  props: {
    title: { type: String, default: null }
  }
}
</script>
