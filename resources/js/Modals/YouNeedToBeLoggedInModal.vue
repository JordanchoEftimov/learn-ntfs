<template>
    <div class="modal fade" id="youNeedToBeLoggedInModal" tabindex="-1" aria-hidden="true" ref="modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="position-absolute end-0 mt-2 me-2" style="z-index: 100">
                    <div
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        class="cursor-pointer">
                        <i class="fa fa-times fa-2x text-black"></i>
                    </div>
                </div>
                <div class="modal-body text-center p-5">
                    <h2 class="fs-5 line-height-normal mb-4">
                        You need to be logged in, in order to take a quiz test!
                    </h2>
                    <div class="d-flex flex-row align-items-center justify-content-center">
                        <button data-bs-dismiss="modal"
                                aria-label="Close" class="btn btn-primary border-radius-12px me-3">
                            <i class="fa fa-ban me-2"></i>Cancel
                        </button>
                        <button @click="goToLogin"
                                class="btn btn-success border-radius-12px">
                            <i class="fa fa-sign-in me-2"></i>Log In
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import {Modal} from 'bootstrap';

export default {
    name: "YouNeedToBeLoggedInModal",
    data() {
        return {
            modal: null,
        }
    },
    mounted() {
        this.modal = Modal.getOrCreateInstance(this.$refs.modal);
    },
    methods: {
        goToLogin() {
            window.location.href = this.$route('show_sign_in')
        }
    }
}
</script>

<style scoped>

</style>
