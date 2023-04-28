<template>
    <form @submit.prevent="submit">
        <!-- Title -->
        <div>
            <label for="post-title" class="block text-sm font-medium text-gray-700">
                Title
            </label>
            <input id="post-title" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <!-- Content -->
        <div class="mt-4">
            <label for="post-content" class="block text-sm font-medium text-gray-700">
                Content
            </label>
            <textarea id="post-content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
        </div>

        <!-- Category -->
        <div class="mt-4">
            <label for="post-category" class="block text-sm font-medium text-gray-700">
                Category
            </label>
            <select id="post-category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="" selected>-- Choose category --</option>
                <option v-for="category in categories" :value="category.id">
                    {{ category.name }}
                </option>
            </select>
        </div>

        <!-- Buttons -->
        <div class="mt-4">
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm uppercase text-white">Save</button>
        </div>
    </form>
</template>

<script setup>
import { onMounted } from 'vue';
import useCategories from '@/composables/categories';

const { categories, getCategories } = useCategories()

const submit = () => {
    console.log('submitted')
}

onMounted(() => {
    getCategories()
})
</script>
