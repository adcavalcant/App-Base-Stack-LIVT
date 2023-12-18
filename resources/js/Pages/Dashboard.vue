<template>
    <div class="mt-5">
        <div class="px-4 sm:px-8 max-w-5xl m-auto">
            <h1 class="text-center font-bold text-3xl mb-4">Breweries</h1>
            <ul class="border border-gray-200 rounded overflow-hidden shadow-md">
                <li v-for="brewery in breweries.data" :key="brewery.id"
                    class="border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">
                    <div class="flex justify-between items-center px-4 py-2 bg-white hover:bg-sky-100 hover:text-sky-900">
                        <p class="text-lg font-semibold">
                            {{ brewery.name }}
                            <small class="block text-sm text-gray-500">{{ brewery.city }}, {{ brewery.state }} - {{brewery.country}} 📌</small>
                        </p>
                        <small class="block text-sm text-gray-500">Qtd de cervejas: {{ brewery.beers_count }} 🍺</small>
                    </div>
                </li>
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
