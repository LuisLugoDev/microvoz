<script>
import BreezeAuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { useForm } from "@inertiajs/inertia-vue3";
export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
    },
    setup(props) {
        console.log(props);
        const form = useForm({
            id: props.clientes.id,
            nombre: props.clientes.nombre,
            apellido:  props.clientes.apellido,
            email:  props.clientes.email,
            organizacion:  props.clientes.organizacion,
            numero_telefonico:  props.clientes.numero_telefonico,
            id_tipo_cliente:  props.clientes.id_tipo_cliente,
            descripcion_tipo_cliente:  props.clientes.descripcion_tipo_cliente,
        });

        return { form };
    },
    props: {
        clientes: Object,
    },
    methods: {
        submit() {
            this.form.put(route("clientes.update", this.clientes.id));
        },
    },
};
</script>
<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                              <div>
                                <label for="nombre">Nombre</label>
                                <input
                                    type="text"
                                    v-model="form.nombre"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                /><input
                                    type="hidden"
                                    v-model="form.id"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                />
                            </div>
                            <div>
                                <label for="apellido">Apellido</label>
                                <input
                                    type="text"
                                    v-model="form.apellido"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                />
                            </div>
                            <div>
                                <label for="organizacion">Organizacion</label>
                                <input
                                    type="text"
                                    v-model="form.organizacion"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                />
                            </div>
                            <div>
                                <label for="numero_telefonico">Numero Telefónico</label>
                                <input
                                    type="text"
                                    v-model="form.numero_telefonico"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                />
                            </div>
                            <div>
                                <label for="email">Correo</label>
                                <input
                                    type="text"
                                    v-model="form.email"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                />
                            </div>
                            <div>
                                <label for="id_tipo_cliente">Tipo cliente</label>
                                
                                <select  v-model="form.id_tipo_cliente"  class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    ">
                                <option disabled >Por favor seleccione un tipo de cliente</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="title">Descripcion</label>
                                <textarea
                                    name="descripcion_tipo_cliente"
                                    type="text"
                                    v-model="form.descripcion_tipo_cliente"
                                    class="
                                        w-full
                                        px-4
                                        py-2
                                        mt-2
                                        border
                                        rounded-md
                                        focus:outline-none
                                        focus:ring-1
                                        focus:ring-blue-600
                                    "
                                >
                                </textarea>
                            </div>

                            <!-- submit -->
                            <div class="flex items-center mt-4">
                                <button
                                    class="
                                        px-6
                                        py-2
                                        text-white
                                        bg-gray-900
                                        rounded
                                    "
                                >
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>