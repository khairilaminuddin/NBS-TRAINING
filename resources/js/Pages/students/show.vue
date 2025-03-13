<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    student: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AppLayout title="Students">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Student Details
            </h2>
        </template>

        <div class="p-6 bg-white shadow-md rounded-md">
            <h1 class="text-2xl font-bold mb-4">{{ student.name }}</h1>

            <p><strong>Breed:</strong> {{ student.breed }}</p>
            <p><strong>Age:</strong> {{ student.age }}</p>
            <p><strong>DOB:</strong> {{ student.dob }}</p>
            <p><strong>Address:</strong> {{ student.address }}</p>
            <p>
                <strong>Final Year:</strong>
                {{
                    student.is_final_year == 1 || student.is_final_year === true
                        ? "Yes"
                        : "No"
                }}
            </p>

            <a
                :href="route('students.index')"
                class="text-blue-500 hover:underline mt-4 inline-block"
            >
                Back to students list
            </a>
        </div>
    </AppLayout>
</template>
