<template>
    <form @submit.prevent="storePost(post)">
        <!-- Title -->
        <div>
            <label for="post-title" class="block text-sm font-medium text-gray-700">
                Title
            </label>
            <input v-model="post.title" id="post-title" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <div class="text-red-600 mt-1">
                <div v-for="message in validationErrors?.title">
                    {{ message }}
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="mt-4">
            <label for="post-content" class="block text-sm font-medium text-gray-700">
                Content
            </label>
            <textarea v-model="post.content" id="post-content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
            <div class="text-red-600 mt-1">
                <div v-for="message in validationErrors?.content">
                    {{ message }}
                </div>
            </div>
        </div>

        <!-- Category -->
        <div class="mt-4">
            <label for="post-category" class="block text-sm font-medium text-gray-700">
                Category
            </label>
            <select v-model="post.category_id" id="post-category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="" selected>-- Choose category --</option>
                <option v-for="category in categories" :value="category.id">
                    {{ category.name }}
                </option>
            </select>
            <div class="text-red-600 mt-1">
                <div v-for="message in validationErrors?.category_id">
                    {{ message }}
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-4">
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm uppercase text-white">Save</button>
        </div>
    </form>
</template>

<script setup>
import { onMounted, reactive } from 'vue';
import useCategories from '@/composables/categories';
import usePosts from '@/composables/posts';

const post = reactive({
    title: '',
    content: '',
    category_id: ''
})

const { categories, getCategories } = useCategories()
const { storePost, validationErrors } = usePosts()

onMounted(() => {
    getCategories()
})
</script>
