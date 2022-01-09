<template>
    <nav class="header__menu">
		<ul class="header__list">
            <li 
            v-for="(link, index) in routes"
            :key="index"
            class="header__link"
            >
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
    },
}
</script>