<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    customer: Array,
});

const form = useForm({
    nama: props.customer.nama,
    email: props.customer.email,
});
</script>

<template>
    <Head title="Update Data" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Update Customer
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="form.put('update', form.id)">
                            <div class="form-control w-full max-w-md">
                                <label class="label">
                                    <span class="label-text">Nama</span>
                                </label>
                                <input
                                    type="text"
                                    placeholder="Nama"
                                    name="nama"
                                    v-model="form.nama"
                                    class="input input-bordered w-full max-w-l"
                                />
                                <span
                                    class="text-red-500"
                                    v-if="$page.props.errors.nama"
                                    >{{ $page.props.errors.nama }}</span
                                >
                            </div>
                            <div class="form-control w-full max-w-md">
                                <label class="label">
                                    <span class="label-text">Email</span>
                                </label>
                                <input
                                    type="email"
                                    placeholder="Email"
                                    v-model="form.email"
                                    name="email"
                                    class="input input-bordered w-full max-w-l"
                                />
                                <span
                                    class="text-red-500"
                                    v-if="$page.props.errors.email"
                                    >{{ $page.props.errors.email }}</span
                                >
                            </div>
                            <button type="submit" class="btn btn-success mt-2">
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
