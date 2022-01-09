<template>
<main>
    <div class='container'>
        <h1>{{pageTitle}}</h1>
        <list :posts="posts"></list>
    </div>
</main>

</template>

<script>
import list from '../../../components/pages/blog/list.vue';
export default {
    data() {
        return {
            posts: [],
            pageTitle: "Посты",
        }
    },
    mounted() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios.get('/api/v1/posts')
            .then(response => {
                this.posts = response.data;
                console.log(response)
            })
            
        }
    },
    components: {
        list,
    }
    
}
</script>
