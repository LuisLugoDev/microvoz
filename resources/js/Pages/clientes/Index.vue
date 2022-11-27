<script>
import BreezeAuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import BreezeNavLink from "@/Components/NavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        BreezeNavLink,
        Link,
    },
    props: {
        clientes: Object,
    },
    methods: {
        destroy(id) {
            this.$inertia.delete(route("clientes.destroy", id));
        },
    },
};
</script>
<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Clientes
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="mb-4">
                            <Link
                                class="
                                    px-6
                                    py-2
                                    mb-2
                                    text-green-100
                                    bg-green-500
                                    rounded
                                "
                                :href="route('clientes.create')"
                            >
                                Crear cliente
                            </Link>
                        </div>
                        <table>
                            <thead class="font-bold bg-gray-300 border-b-2">
                                <td class="px-4 py-2">ID</td>
                                <td class="px-4 py-2">Nombre</td>
                                <td class="px-4 py-2">Apellido</td>
                                <td class="px-4 py-2">Email</td>
                                <td class="px-4 py-2">Numero telefónico</td>
                                <td class="px-4 py-2">Tipo Cliente</td>
                                <td class="px-4 py-2">Descripcion</td>
                                <td class="px-4 py-2"></td>
                            </thead>
                            <tbody>
                                <tr v-for="cliente in clientes.data" :key="cliente.id">
                                    <td class="px-4 py-2">{{ cliente.id }}</td>
                                    <td class="px-4 py-2">{{ cliente.nombre }}</td>
                                    <td class="px-4 py-2">{{ cliente.apellido }}</td>
                                    <td class="px-4 py-2">{{ cliente.email }}</td>
                                    <td class="px-4 py-2">{{ cliente.numero_telefonico }}</td>
                                    <td class="px-4 py-2">{{ cliente.id_tipo_cliente }}</td>
                                    <td class="px-4 py-2">{{ cliente.descripcion_tipo_cliente }}</td>
                                    <td class="px-4 py-2 font-extrabold">
                                        <Link
                                            class="text-green-700"
                                            :href="route('clientes.edit', {cliente:cliente.id})"
                                        >
                                            Edit
                                        </Link>
                                        <Link
                                            @click="destroy({cliente:cliente.id})"
                                            class="text-red-700"
                                            >Delete</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <pagination :links="clientes.links" /> -->
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>