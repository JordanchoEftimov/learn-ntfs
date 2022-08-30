<template>
    <div class="container">
        <div class="row">
            <h2 class="text-center fw-bold">
                {{ quiz.title }}
            </h2>
            <div v-if="!showResult" class="col col-12 col-md-8 col-lg-6 mx-auto">
                <div class="fs-4 text-center fw-bold mb-5">
                    Test your knowledge!
                </div>
                <div class="fs-3 mb-2">
                    {{ currentQuestionIndex + 1 }}. {{ currentQuestion.question }}
                </div>
                <div v-for="answer in currentQuestion.answers" :key="answer" class="mb-2">
                    <div class="form-check fs-5">
                        <input v-model="pickedAnswer" class="form-check-input" type="radio" name="answers"
                               :id="answer.id"
                               :value="answer">
                        <label class="form-check-label" :for="answer.id">
                            {{ answer.answer }}
                        </label>
                    </div>
                </div>
                <button v-if="pickedAnswer" class="btn btn-link" @click="pickedAnswer = null">
                    Uncheck answer
                </button>
                <div class="d-flex align-items-center justify-content-between mt-5">
                    <Link v-if="!currentQuestionIndex" :href="$route('lectures.show', quiz.lecture_id)"
                          class="btn btn-primary px-3 fw-bold">
                        <i class="fa fa-angle-left"></i> Back
                    </Link>
                    <button v-else @click="back"
                            class="btn btn-primary px-3 fw-bold">
                        <i class="fa fa-angle-left"></i> Back
                    </button>
                    <button @click="next" v-if="currentQuestionIndex !== questions.length - 1"
                            class="btn btn-success px-3 fw-bold">
                        Next <i class="fa fa-angle-right"></i>
                    </button>
                    <button @click="finish" v-else class="btn btn-success px-3 fw-bold">
                        Finish <i class="fa fa-check"></i>
                    </button>
                </div>
            </div>
            <div v-else class="col col-12 col-md-8 col-lg-6 mx-auto text-center fw-bold">
                <img v-if="successfullyPassed" src="/images/thumbs-up.png" alt="Thumbs up" height="200"/>
                <div v-else>
                    <i class="fa fa-close fa-5x text-danger"></i>
                </div>
                <div class="fs-3 mb-2">
                    <span v-if="successfullyPassed">You have successfully finished this exam!</span>
                    <span v-else>You did not pass the exam successfully!</span>
                </div>
                <div class="fs-4 mb-4"
                     :class="{'text-success': successfullyPassed, 'text-danger': !successfullyPassed}">
                    <div>
                        Your grade:
                    </div>
                    <div>
                        {{ correctAnswers }}/{{ questions.length }}
                    </div>
                </div>
                <Link class="btn btn-primary btn-lg" :href="$route('homepage')">Back to homepage</Link>
            </div>
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
    },
    data() {
        return {
            questions: [
                ...this.quiz.questions
            ],
            currentQuestionIndex: 0,
            showResult: false,
            pickedAnswer: null,
            correctAnswers: 0
        }
    },
    computed: {
        currentQuestion() {
            return this.questions[this.currentQuestionIndex];
        },
        successfullyPassed() {
            return this.correctAnswers / this.questions.length > 0.7
        }
    },
    methods: {
        back() {
            --this.currentQuestionIndex
            this.pickedAnswer = null
            --this.correctAnswers
        },
        next() {
            ++this.currentQuestionIndex
            this.correctAnswers += this.pickedAnswer.is_correct
            this.pickedAnswer = null
        },
        finish() {
            this.showResult = true
            if (this.successfullyPassed)
                this.$inertia.post(this.$route('pass_quiz', this.quiz.id))
        }
    }
}
</script>

<style scoped>

</style>
