<script setup>
import { ref } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";

const props = defineProps({
    student: {
        type: Object,
        required: true,
    },
});

// Use Inertia.js form handling
const form = useForm({
    name: props.student.name,
    age: props.student.age,
    dob: props.student.dob,
    address: props.student.address,
    is_final_year: props.student.is_final_year,
});

const submitForm = () => {
    form.put(route("students.update", props.student.id));
};
</script>

<template>
    <AppLayout title="Student Update">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Student Update
            </h2>
        </template>

        <div class="p-6 bg-white shadow-md rounded-md">
            <form @submit.prevent="submitForm" class="space-y-4">
                <div>
                    <label for="name" class="block font-medium">Name</label>
                    <input
                        v-model="form.name"
                        type="text"
                        id="name"
                        class="w-full p-2 border rounded-md"
                    />
                </div>

                <div>
                    <label for="age" class="block font-medium">Age</label>
                    <input
                        v-model="form.age"
                        type="text"
                        id="age"
                        class="w-full p-2 border rounded-md"
                    />
                </div>

                <div>
                    <label for="dob" class="block font-medium"
                        >Date of Birth</label
                    >
                    <input
                        v-model="form.dob"
                        type="text"
                        id="dob"
                        class="w-full p-2 border rounded-md"
                    />
                </div>

                <div>
                    <label for="address" class="block font-medium"
                        >Address</label
                    >
                    <input
                        v-model="form.address"
                        type="text"
                        id="address"
                        class="w-full p-2 border rounded-md"
                    />
                </div>

                <div class="flex items-center">
                    <input
                        v-model="form.is_final_year"
                        type="checkbox"
                        id="is_final_year"
                        true-value="1"
                        false-value="0"
                    />
                    <label for="is_final_year" class="ml-2"
                        >Is Final Year</label
                    >
                </div>

                <button
                    type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700"
                >
                    Update
                </button>
            </form>

            <a
                :href="route('students.index')"
                class="text-blue-500 hover:underline mt-4 inline-block"
            >
                Back
            </a>
        </div>
    </AppLayout>
</template>
