<template>
    <div class="container">
        <div class="row">
            <div v-if="!showResult" class="col col-12 col-md-8 col-lg-6 mx-auto">
                <div class="display-6 text-center fw-bold mb-3">
                    Test your knowledge!
                </div>
                <div class="fs-3 mb-2">
                    {{ currentQuestionIndex + 1 }}. {{ currentQuestion.question }}
                </div>
                <div v-for="answer in currentQuestion.answers" :key="answer" class="mb-2">
                    <div class="form-check fs-5">
                        <input class="form-check-input" type="radio" name="answers" :id="answer"
                               :value="answer">
                        <label class="form-check-label" :for="answer">
                            {{ answer }}
                        </label>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-5">
                    <button v-if="!currentQuestionIndex" @click="goBackFirstQuestion"
                            class="btn btn-primary px-3 fw-bold">
                        Back
                    </button>
                    <button v-else @click="back"
                            class="btn btn-primary px-3 fw-bold">
                        Back
                    </button>
                    <button @click="next" v-if="currentQuestionIndex !== questions.length - 1"
                            class="btn btn-success px-3 fw-bold">
                        Next
                    </button>
                    <button @click="showResult = true" v-else class="btn btn-success px-3 fw-bold">
                        Finish
                    </button>
                </div>
            </div>
            <div v-else class="col col-12 col-md-8 col-lg-6 mx-auto text-center fw-bold">
                <img src="/images/thumbs-up.png" alt="Thumbs up" height="200"/>
                <div class="fs-3 mb-2">
                    You have successfully finished this exam!
                </div>
                <div class="fs-4 text-success mb-4">
                    <div>
                        Your grade:
                    </div>
                    <div>
                        2/3
                    </div>
                </div>
                <Link class="btn btn-primary btn-lg" :href="$route('homepage')">Back to homepage</Link>
            </div>
        </div>
    </div>
</template>

<script>
import DefaultLayout from "../Layouts/DefaultLayout";

export default {
    name: "Quiz",
    layout: DefaultLayout,
    data() {
        return {
            questions: [
                {
                    question: 'What is Crypto?',
                    answers: [
                        'Answer 1 on what is Crypto',
                        'Answer 2 on what is Crypto',
                        'Answer 3 on what is Crypto',
                        'Answer 4 on what is Crypto',
                    ]
                },
                {
                    question: 'What is NFT?',
                    answers: [
                        'Answer 1 on what is NFT',
                        'Answer 2 on what is NFT',
                        'Answer 3 on what is NFT',
                        'Answer 4 on what is NFT',
                    ]
                },
                {
                    question: 'How to buy NFT?',
                    answers: [
                        'Answer 1 on how to buy NFT',
                        'Answer 2 on how to buy NFT',
                        'Answer 3 on how to buy NFT',
                        'Answer 4 on how to buy NFT',
                    ]
                }
            ],
            currentQuestionIndex: 0,
            showResult: false
        }
    },
    computed: {
        currentQuestion() {
            return this.questions[this.currentQuestionIndex];
        }
    },
    methods: {
        goBackFirstQuestion() {
            history.back()
        },
        back() {
            --this.currentQuestionIndex
        },
        next() {
            ++this.currentQuestionIndex
        }
    }
}
</script>

<style scoped>

</style>
