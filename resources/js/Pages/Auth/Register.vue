<template>
    <div class="container">
        <div class="fs-2 fw-bold text-center mb-4">
            Register now!
        </div>
        <div class="row">
            <div class="col col-12 col-md-6 col-lg-4 mx-auto">
                <form @submit.prevent="sign_up" class="text-center">
                    <div class="form-outline mb-4">
                        <input :class="{'is-invalid': form.errors.name}" v-model="form.name" type="text" id="name"
                               class="form-control"/>
                        <div class="invalid-feedback">{{ form.errors.name }}</div>
                        <label class="form-label" for="name">Name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input :class="{'is-invalid': form.errors.email}" v-model="form.email" type="email" id="email"
                               class="form-control"/>
                        <div class="invalid-feedback">{{ form.errors.email }}</div>
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                        <div class="position-relative">
                            <input :class="{'is-invalid': form.errors.password}" v-model="form.password"
                                   :type="passwordVisible ? 'text' : 'password'" id="password"
                                   class="form-control"/>
                            <i @click="passwordVisible = !passwordVisible"
                               :class="{'text-primary': passwordVisible, 'text-black': !passwordVisible, 'd-none': form.errors.password}"
                               class="fa fa-eye position-absolute end-0 top-50 translate-middle-y me-3 cursor-pointer"></i>
                            <div class="invalid-feedback">{{ form.errors.password }}</div>
                        </div>
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
                </form>
                <div class="text-center">
                    <p>Already have an account?
                        <Link :href="$route('show_sign_in')">Login</Link>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DefaultLayout from "../../Layouts/DefaultLayout";

export default {
    name: "Register",
    layout: DefaultLayout,
    data() {
        return {
            passwordVisible: false,
            form: this.$inertia.form({
                name: '',
                email: '',
                password: ''
            })
        }
    },
    methods: {
        sign_up() {
            this.form.post(this.$route('sign_up'))
        },
    }
}
</script>

<style scoped>
input {
    border: 1px solid black;
}
</style>
