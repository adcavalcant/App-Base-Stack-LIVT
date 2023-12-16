<template>
    <h1>Olá Mundo!</h1>
    <blockquote>{{ title }}</blockquote>
</template>

<script>
export default {
    props: {
        title: String,
    }
}
</script>
