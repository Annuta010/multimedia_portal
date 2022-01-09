<template>
<div class="wrapper">
   <vheader></vheader>
   <router-view></router-view>
   <vfooter></vfooter>
</div>
</template>

<script>
import vheader from './v-header.vue';
import vfooter from './v-footer.vue';

export default {
   components: { vheader, vfooter }
}
</script>