<template>
   <nav>
    <ul>
        <li v-for="(link, index) in routes" :key="index">
            <router-link :to="{name: link.name}">{{link.title}}</router-link>
        </li>
    </ul>
        
    </nav>
</template>

<script>
export default {
    data() {
        return {
            routes: this.$router.options.routes,
        }
    }
}
</script>