<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard lho
                


            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                        <!-- ul li -->
                        <ul class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="py-2 px-4 w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">Profile</li>
    <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">Settings</li>
    <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">Messages</li>
    <li class="py-2 px-4 w-full rounded-b-lg">Download</li>
</ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
