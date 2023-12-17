<template>
    <ul>
        <li v-for="b in breweries.data" :key="b.id">{{ b.name }}</li>
    </ul>
</template>

<script>
export default {
    props: {
        breweries: Object,
    },
};
</script>
