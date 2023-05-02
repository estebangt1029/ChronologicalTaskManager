<script setup>
    import AppLayout from "@/Layouts/AppLayout.vue";
    import { useForm } from "@inertiajs/vue3"
    const props=defineProps({
        task: Object,
    });
    const form=useForm({
        name:props.task.name,
        description:props.task.description,
        priority:props.task.priority,
        status:props.task.status,
        id:props.task.id,
    });
    function submit(){
        form.post('/tasks/update')
    }

    
</script>

<template>
    <AppLayout title="tasks">
        <form action="" @submit.prevent="submit()">
            <div class="container text-center p-5 text-white">
                <div class="row md-6 d-flex justify-center g-4">
                    <div class="col-10 d-flex flex-column">
                        <label for="">Name</label>
                        <input type="text" v-model="form.name" class="w-100 bg-gray-400">
                    </div>
                    <div class="col-10 d-flex flex-column">
                        <label for="">Description</label>
                        <input type="text" v-model="form.description" class="w-100 bg-gray-400">
                    </div>
                    <div class="col-10 d-flex flex-column">
                        <label for="">Priority</label>
                        <select name="" id="" class="bg-gray-400" v-model="form.priority">
                            <option value="Alta">Alta</option>
                            <option value="Media">Media</option>
                            <option value="Baja">Baja</option>
                        </select>
                        <!-- <input type="number" v-model="form.priority" class="w-100 bg-gray-400"> -->
                    </div>
                    <div class="col-10 d-flex flex-column">
                        <label for="">Status</label>
                        <select name="" id="" class="bg-gray-400" v-model="form.status">
                            <option value="En proceso">En proceso</option>
                            <option value="Sin empezar">Sin empezar</option>
                            <option value="Finalizada">Finalizada</option>
                        </select>
                        <!-- <input type="number" v-model="form.status" class="w-100 bg-gray-400"> -->
                    </div>
                    <button class="btn bg-dark text-white col-3" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </AppLayout>

    

</template>