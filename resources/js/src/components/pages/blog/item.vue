<template>
    <li>
        <p><b>{{title}}</b></p>
        <p>{{description}}</p>
        <p>{{author}}</p>
    </li>
</template>

<script>

export default {
    props: ['title','description', 'author'],
}
</script>