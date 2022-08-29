<template>
    <div class="container">
        <div class="row">
            <h2 class="text-center fw-bold">
                {{ quiz.title }}
            </h2>
        </div>
    </div>
</template>

<script>
import DefaultLayout from "../../Layouts/DefaultLayout";

export default {
    name: "Quiz",
    layout: DefaultLayout,
    props: {
        quiz: Object
    }
}
</script>

<style scoped>

</style>
