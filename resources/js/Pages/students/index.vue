<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";

defineProps({
    students: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Students">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Student list
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                ></div>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>dob</th>
                            <th>address</th>
                            <th>is final year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody
                        class="text-center"
                        v-for="student in students"
                        :key="student.id"
                    >
                        <td>{{ student.id }}</td>
                        <td>
                            <a :href="route('students.show', student.id)">{{
                                student.name
                            }}</a>
                        </td>
                        <td>{{ student.age }}</td>
                        <td>{{ student.dob }}</td>
                        <td>{{ student.address }}</td>
                        <td>{{ student.is_final_year ? "yes" : "no" }}</td>
                    </tbody>
                </table>
            </div>
        </div>
    </AppLayout>
</template>
