<template>
    <div class="mt-20">
    <div class="px-4 sm:px-8 max-w-5xl m-auto">
        <h1 class="text-center font-semibold text-sm">Breweries</h1>
        <p class="mt-2 text-center text-xs mb-4 text-gray-500">Breweries List</p>
        <ul class="border border-gray-200 rounded overflow-hidden shadow-md">
            <li v-for="brewery in breweries.data" :key="brewery.id" class="px-4 py-2 bg-white hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">{{ brewery.name}}</li>
        </ul>
    </div>
</div>
</template>

<script>
export default {
    props: {
        breweries: Object,
    },
};
</script>
