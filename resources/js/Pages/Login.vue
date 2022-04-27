<template>
    <div class="container">
        <div class="fs-2 fw-bold text-center mb-4">
            Login
        </div>
        <div class="row">
            <div class="col col-12 col-md-6 col-lg-4 mx-auto">
                <form class="text-center">
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control"/>
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control"/>
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="d-flex justify-content-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked/>
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

                    <div class="text-center">
                        <p>Not a member?
                            <Link :href="$route('register')">Register</Link>
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
    name: "Login",
    layout: DefaultLayout
}
</script>

<style scoped>
input {
    border: 1px solid black;
}
</style>
