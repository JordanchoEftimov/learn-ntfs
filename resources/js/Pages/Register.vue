<template>
    <div class="container">
        <div class="fs-2 fw-bold text-center mb-4">
            Register now!
        </div>
        <div class="row">
            <div class="col col-12 col-md-6 col-lg-4 mx-auto">
                <form class="text-center">
                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control"/>
                        <label class="form-label" for="name">Name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control"/>
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control"/>
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <button type="button" class="btn btn-primary btn-block mb-4">Sign up</button>

                    <div class="text-center">
                        <p>Already have an account?
                            <Link :href="$route('login')">Login</Link>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import DefaultLayout from "../Layouts/DefaultLayout";

export default {
    name: "Register",
    layout: DefaultLayout
}
</script>

<style scoped>
input {
    border: 1px solid black;
}
</style>
