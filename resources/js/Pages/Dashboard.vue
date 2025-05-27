<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
  <AppLayout title="Halaman Utama PSMZA">
    <template #header>
      <h2 class="font-bold text-2xl text-blue-900">Politeknik Sultan Mizan Zainal Abidin</h2>
      <p class="text-sm text-gray-600">Komited Menyediakan Pendidikan Teknikal Berkualiti</p>
    </template>

    <div class="py-10 bg-gray-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

        <!-- Hero Section -->
        <div class="bg-blue-800 text-white p-10 rounded-2xl shadow-md text-center">
          <h1 class="text-3xl font-bold">Selamat Datang ke PSMZA</h1>
          <p class="mt-2 text-lg">Platform informasi pelajar, pensyarah, dan komuniti politeknik.</p>
        </div>

        <!-- Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-blue-800">Profil Pelajar</h3>
            <p class="text-gray-600 mt-2">Lihat dan kemaskini maklumat diri anda sebagai pelajar PSMZA.</p>
          </div>
          <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-blue-800">e-Pembelajaran</h3>
            <p class="text-gray-600 mt-2">Akses modul pembelajaran, tugasan, dan kuiz dalam talian.</p>
          </div>
          <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-blue-800">Pengumuman</h3>
            <p class="text-gray-600 mt-2">Ikuti makluman penting, aktiviti kampus, dan jadual kuliah.</p>
          </div>
        </div>

        <!-- Contact Card -->
        <div class="bg-white rounded-lg shadow p-6 text-center">
          <h3 class="text-xl font-semibold text-blue-800">Hubungi Kami</h3>
          <p class="text-gray-600 mt-2">
            Politeknik Sultan Mizan Zainal Abidin<br />
            23000 Dungun, Terengganu<br />
            Tel: 09-8400777 | Email: info@psmza.edu.my
          </p>
        </div>

      </div>
    </div>
  </AppLayout>
</template>
