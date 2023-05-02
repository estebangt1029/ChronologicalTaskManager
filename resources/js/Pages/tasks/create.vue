<script setup>
    import AppLayout from "@/Layouts/AppLayout.vue";
    import { useForm } from "@inertiajs/vue3"

    defineProps({
        tasks: Array,
    });
    const form=useForm({
        name:'',
        description:'',
        priority:'',
        status:'',
    });
    function submit(){
        form.post('/tasks')
    }

    
</script>

<template>
    <AppLayout title="tasks">

        <form action="" @submit.prevent="submit()">
            <div class="container text-center p-5 text-gray-100">
                <div class="row md-6 d-flex justify-center g-4">
                    <div class="col-10 d-flex flex-column">
                        <label for="">Name</label>
                        <input type="text" v-model="form.name" class="w-100 bg-gray-400">
                    </div>
                    <div class="col-10 d-flex flex-column">
                        <label for="">Description</label>
                        <input type="text" v-model="form.description" class="w-100 bg-gray-400" maxlength="250">
                    </div>
                    <div class="col-10 d-flex flex-column">
                        <label for="">Priority</label>
                        <select name="" id="" v-model="form.priority" class="bg-gray-400">
                            <option value="alta">alta</option>
                            <option value="media">media</option>
                            <option value="baja">baja</option>
                        </select>
                        <!-- <input type="number" v-model="form.priority" class="w-100"> -->
                    </div>
                    <div class="col-10 d-flex flex-column">
                        <label for="">Status</label>
                        <select name="" id="" v-model="form.status" class="bg-gray-400">
                            <option value="Sin empezar">Sin empezar</option>
                            <option value="En proceso">En proceso</option>
                            <option value="Finalizada">Finalizada</option>
                        </select>
                        <!-- <input type="number" v-model="form.status" class="w-100"> -->
                    </div>
                    <button class="btn bg-dark text-white col-3" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </AppLayout>
    
</template>