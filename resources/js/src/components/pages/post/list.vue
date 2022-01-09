<template>
<div>
   <ul>
        <item 
        v-for="post in posts" 
        :key="post.id"
        :title="post.title"
        :description="post.description"
        :author="post.user.name"
        >
        </item>
    </ul>
</div>

    
</template>

<script>
import item from './item.vue';
export default {
    props: ['posts'],
    components: {
        item
    }
    
}
</script>