<template>
<header>
    <div class='container'>
		<div class="header__body">
			<a class="header__logo" href="#"><img src="img/logo.png" alt=""></a>
			<div class="header__burger"><span></span></div>
			<vnav></vnav>
		</div>
	</div>
</header>
</template>

<script>
import vnav from '../../components/common/menu/v-nav.vue';
export default {
    components: {
        vnav
    }
}
</script>