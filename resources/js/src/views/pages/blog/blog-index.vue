<template>
<main>
    <div class='container'>
        <h1>{{pageTitle}}</h1>
        <list :blogs="blogs"></list>
    </div>
</main>

</template>

<script>
import list from '../../../components/pages/blog/list.vue';
export default {
    data() {
        return {
            blogs: [],
            pageTitle: "Блог",
        }
    },
    mounted() {
        this.getBlogs();
    },
    methods: {
        getBlogs() {
            axios.get('/api/v1/blogs')
            .then(response => {
                this.blogs = response.data
            })
        }
    },
    components: {
        list,
    }
    
}
</script>
