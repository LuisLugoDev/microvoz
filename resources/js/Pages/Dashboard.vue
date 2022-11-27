<script>
import BreezeAuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },
    setup() {

    },
    methods: {

    },
};
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">PRUEBA CRUD</h2>
            <p> por favor seleccione la opcion de clientes para comenzar.</p>
        </template>
    </BreezeAuthenticatedLayout>
</template>
