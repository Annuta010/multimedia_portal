<template>
<div>
    <h1>Страница</h1>
    <ul>
        
        <li v-for="blog in blogs" :key="blog.id">
            <p><b>{{blog.title}}</b></p>
            <p>{{blog.description}}</p>
            <p>{{blog.user.name}}</p>
        </li>
    </ul>
</div>

</template>

<script>
export default {
    data() {
        return {
            blogs: []
        }
    },
    mounted() {
        axios.get('/api/v1/blogs')
        .then(response => {
            this.blogs = response.data
        })
    }
    
}
</script>
