<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";
const props = defineProps({
    customers: Object,
});
</script>

<template>
    <Head title="Customer" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Customer
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Table start -->
                        <div class="overflow-x-auto">
                            <table class="table w-full">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>
                                            <Link
                                                :href="route('customer.create')"
                                                class="btn btn-primary btn-sm"
                                                >Add New</Link
                                            >
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- row 1 -->
                                    <tr v-for="c in customers.data" :key="c.id">
                                        <td>{{ c.id }}</td>
                                        <td>{{ c.nama }}</td>
                                        <td>{{ c.email }}</td>
                                        <td>
                                            <Link
                                                :href="
                                                    route('customer.edit', c.id)
                                                "
                                                class="btn btn-warning btn-sm mr-1"
                                                >Edit</Link
                                            >
                                            <Link
                                                :href="
                                                    route(
                                                        'customer.destroy',
                                                        c.id
                                                    )
                                                "
                                                method="delete"
                                                class="btn btn-error btn-sm"
                                                >Delete</Link
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table end -->
                    </div>
                </div>
                <Contoh />
            </div>
            <!-- <pagination class="mt-6" :links="customers.links" /> -->
        </div>
    </AuthenticatedLayout>
</template>
