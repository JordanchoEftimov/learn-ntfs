<template>
    <div class="container">
        <div class="text-center fw-bold display-5 mb-5">
            {{ lecture.title }}
        </div>
        <div class="row mb-4">
            <div class="col col-12 col-md-11 col-lg-8 mx-auto">
                <p v-html="lecture.paragraph" class="fs-5 fst-italic">
                </p>
                <div v-html="lecture.image">

                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <Link :href="$route('quizzes.show', lecture.quiz)" class="btn btn-lg btn-primary">
                Attempt Quiz Now
            </Link>
        </div>
    </div>
</template>

<script>
import DefaultLayout from "../../Layouts/DefaultLayout";

export default {
    name: "Show",
    layout: DefaultLayout,
    props: {
        lecture: Object
    }
}
</script>

<style scoped>

</style>
