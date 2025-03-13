<script setup>
import { router } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import { ref } from "vue";

const form = ref({
    name: "",
    age: "",
    dob: "",
    address: "",
    is_final_year: false,
});

const errors = ref({});

const submit = () => {
    errors.value = {};
    if (!form.value.name) errors.value.name = "Name is required";
    if (!form.value.age || isNaN(form.value.age))
        errors.value.age = "Valid age is required";
    if (!form.value.dob) errors.value.dob = "Date of birth is required";
    if (!form.value.address) errors.value.address = "Address is required";

    if (Object.keys(errors.value).length === 0) {
        router.post(route("students.store"), {
            ...form.value,
            is_final_year: form.value.is_final_year ? 1 : 0,
        });
    }
};
</script>

<template>
    <AppLayout title="Create Student">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Student
            </h2>
        </template>

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <form @submit.prevent="submit" class="space-y-4">
                <div>
                    <label
                        for="name"
                        class="block text-sm font-medium text-gray-700"
                        >Name</label
                    >
                    <input
                        type="text"
                        id="name"
                        v-model="form.name"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    />
                    <p v-if="errors.name" class="text-red-600 text-sm">
                        {{ errors.name }}
                    </p>
                </div>
                <div>
                    <label
                        for="age"
                        class="block text-sm font-medium text-gray-700"
                        >Age</label
                    >
                    <input
                        type="text"
                        id="age"
                        v-model="form.age"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    />
                    <p v-if="errors.age" class="text-red-600 text-sm">
                        {{ errors.age }}
                    </p>
                </div>
                <div>
                    <label
                        for="dob"
                        class="block text-sm font-medium text-gray-700"
                        >DOB</label
                    >
                    <input
                        type="date"
                        id="dob"
                        v-model="form.dob"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    />
                    <p v-if="errors.dob" class="text-red-600 text-sm">
                        {{ errors.dob }}
                    </p>
                </div>
                <div>
                    <label
                        for="address"
                        class="block text-sm font-medium text-gray-700"
                        >Address</label
                    >
                    <input
                        type="text"
                        id="address"
                        v-model="form.address"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                    />
                    <p v-if="errors.address" class="text-red-600 text-sm">
                        {{ errors.address }}
                    </p>
                </div>
                <div class="flex items-center">
                    <input
                        type="checkbox"
                        id="is_final_year"
                        v-model="form.is_final_year"
                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded"
                    />
                    <label
                        for="is_final_year"
                        class="ml-2 block text-sm text-gray-900"
                        >Is Final Year</label
                    >
                </div>
                <div>
                    <button
                        type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md"
                    >
                        Submit
                    </button>
                </div>
            </form>
            <div class="mt-4">
                <a :href="route('students.index')" class="text-blue-600"
                    >Back</a
                >
            </div>
        </div>
    </AppLayout>
</template>
