<template>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">My Todos <i class="fa fa-list pull-right"></i></div>
                <div class="panel-body">
                    <todo-items></todo-items>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import TodoItems from './../components/Todo/TodoItems.vue'

    export default {
        components: {
            TodoItems
        }
    }
</script>
