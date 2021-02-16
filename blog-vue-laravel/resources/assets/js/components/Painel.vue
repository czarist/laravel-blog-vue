<template>
  <div v-bind:class="defineCor">
    <div class="panel-heading">{{ titulo }}</div>

    <div class="panel-body">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ['titulo', 'cor'],
  computed: {
    defineCor: function() {
      return 'panel ' + (this.cor || 'panel-default');
    },
  },
};
</script>
<style media="screen">
.blue {
  border-color: blue;
}
.blue > .panel-heading {
  color: white;
  background-color: blue;
  border-color: blue;
}

.orange {
  border-color: orange;
}
.orange > .panel-heading {
  color: white;
  background-color: orange;
  border-color: orange;
}

.green {
  border-color: green;
}
.green > .panel-heading {
  color: white;
  background-color: green;
  border-color: green;
}

.red {
  border-color: red;
}
.red > .panel-heading {
  color: white;
  background-color: red;
  border-color: red;
}
</style>
