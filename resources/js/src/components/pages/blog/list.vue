<template>
<div>
   <ul>
        <item 
        v-for="blog in blogs" 
        :key="blog.id"
        :title="blog.title"
        :description="blog.description"
        :author="blog.user.name"
        >
        </item>
    </ul>
</div>

    
</template>

<script>
import item from './item.vue';
export default {
    props: ['blogs'],
    components: {
        item
    }
    
}
</script>