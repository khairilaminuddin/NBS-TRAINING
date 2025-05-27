<script setup>
import { router } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    students: {
        type: Array,
        required: true,
    },
});

// Navigate to edit page
const editStudent = (id) => {
    router.get(route("students.edit", { id }));
};

// Delete student function
const deleteStudent = (id) => {
    if (confirm("Are you sure you want to delete this student?")) {
        router.delete(route("students.destroy", { id }));
    }
};

// Navigate to create student page
const createStudent = () => {
    router.get(route("students.create"));
};
</script>

<template>
    <AppLayout title="Students">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                PSMZA Student List
            </h2>
        </template>

        <table
            class="w-full border border-gray-300 shadow-sm rounded-lg overflow-hidden"
        >
            <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
                <tr>
                    <th class="px-4 py-2 border border-gray-300">Id</th>
                    <th class="px-4 py-2 border border-gray-300">Name</th>
                    <th class="px-4 py-2 border border-gray-300">Age</th>
                    <th class="px-4 py-2 border border-gray-300">DOB</th>
                    <th class="px-4 py-2 border border-gray-300">Address</th>
                    <th class="px-4 py-2 border border-gray-300">
                        Is Final Year
                    </th>
                    <th class="px-4 py-2 border border-gray-300">Action</th>
                </tr>
            </thead>
            <tbody class="text-center divide-y divide-gray-200">
                <tr
                    v-for="student in students"
                    :key="student.id"
                    class="hover:bg-gray-100 transition"
                >
                    <td class="px-4 py-2 border">{{ student.id }}</td>
                    <td class="px-4 py-2 border">
                        <a
                            :href="route('students.show', { id: student.id })"
                            class="text-blue-600 hover:underline"
                        >
                            {{ student.name }}
                        </a>
                    </td>
                    <td class="px-4 py-2 border">{{ student.age }}</td>
                    <td class="px-4 py-2 border">{{ student.dob }}</td>
                    <td class="px-4 py-2 border">{{ student.address }}</td>
                    <td class="px-4 py-2 border">
                        <span
                            :class="
                                student.is_final_year
                                    ? 'text-green-600 font-semibold'
                                    : 'text-red-600 font-semibold'
                            "
                        >
                            {{ student.is_final_year ? "Yes" : "No" }}
                        </span>
                    </td>
                    <td class="px-4 py-2 border space-x-2">
                        <button
                            class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition"
                            @click="editStudent(student.id)"
                        >
                            Edit
                        </button>

                        <button
                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition"
                            @click="deleteStudent(student.id)"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button
            class="mt-4 px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 transition"
            @click="createStudent"
        >
            Create Student
        </button>
    </AppLayout>
</template>
