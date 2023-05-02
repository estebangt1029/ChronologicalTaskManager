<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationMark from '@/Components/ApplicationMark.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

        <div class="py-12 bg-gray-700">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg bg-gray-600 d-flex justify-center">
                    <ApplicationMark />

                </div>
            </div>
        </div>
    </AppLayout>
</template>
