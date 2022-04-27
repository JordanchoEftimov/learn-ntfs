<template>
    <main class="d-flex w-100">
        <div :class="{'sidebar-hidden':!sidebar}" class="sidebar position-relative">
            <button class="text-white btn position-absolute end-0 d-lg-none" @click="sidebar = !sidebar">
                <i class="fa fa-times fa-2x"></i>
            </button>
            <div class="d-flex flex-column p-3 bg-dark shadow-sm text-white">
                <Link :href="$route('homepage')"
                      class="mb-3 text-white fst-italic fs-2 text-decoration-none text-center">
                    LearnNFTs
                </Link>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <!-- Link options -->
                    <li v-for="item in menuOptions" :key="item.name" class="nav-item line-height-normal"
                        :class="{'d-none':item.hide}">
                        <Link :href="$route(item.link)"
                              class="nav-link text-white"
                              :class="{'active': $route().current(item.link)}"
                              aria-current="page">
                            <i class="fa" :class="item.icon"></i>
                            {{ item.name }}
                        </Link>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main position-relative" :class="{'to-right':sidebar}">
            <div class="main-overlay" @click="sidebar = !sidebar" v-if="sidebar"></div>
            <nav class="navbar navbar-dark bg-dark px-2 shadow">
                <div class="container-fluid">
                    <button class="navbar-toggler d-lg-none " :class="{'d-none':sidebar}" type="button"
                            @click="sidebar = !sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav class="navbar navbar-dark bg-dark">
                        <span class="navbar-brand mb-0 h1"></span>
                    </nav>

                    <div class="nav navbar-nav navbar-right">
                        <div v-if="false" class="dropdown">
                            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                               id="dropdownUser2" data-bs-display="static" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <div
                                    class="rounded-circle me-2 bg-white d-flex align-items-center justify-content-center"
                                    style="width:2rem; height:2rem;">
                                    <i class="fa fa-user"></i>
                                </div>
                                <strong class="d-none d-lg-block"></strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end text-small shadow border-radius-18px"
                                aria-labelledby="dropdownUser2">
                                <li>
                                    <Link method="post" as="button" type="button"
                                          class="dropdown-item"
                                    ><i class="fa fa-sign-out me-2"></i>Одјави се
                                    </Link>
                                </li>
                            </ul>
                        </div>
                        <div v-else class="d-flex align-items-center">
                            <Link class="btn btn-outline-light me-2 px-4">Register</Link>
                            <Link class="btn btn-outline-light px-4">Login</Link>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container pt-3 pb-5">
                <slot></slot>
            </div>
        </div>
    </main>
</template>

<script>
import {Inertia} from '@inertiajs/inertia'

export default {
    name: "DefaultLayout",
    props: {
        menu: Object
    },
    data() {
        return {
            sidebar: false,
            removeEvent: null,
            menuOptions: [
                {
                    name: 'Home',
                    icon: 'fa-home',
                    link: 'homepage',
                },
                {
                    name: 'What is Crypto?',
                    icon: 'fa-home',
                    link: 'homepage',
                },
                {
                    name: 'What is NFT?',
                    icon: 'fa-home',
                    link: 'homepage',
                },
                {
                    name: 'NFT Basics',
                    icon: 'fa-home',
                    link: 'homepage',
                },
                {
                    name: 'How to buy NFT?',
                    icon: 'fa-home',
                    link: 'homepage',
                },
                {
                    name: 'Where to buy NFT?',
                    icon: 'fa-home',
                    link: 'homepage',
                },
                {
                    name: 'How to make NFT?',
                    icon: 'fa-home',
                    link: 'homepage',
                },
            ],
        }
    },
    computed: {
        user() {
            return this.$page.props.auth.user
        },
        can() {
            return this.$page.props.can
        }
    },
    mounted() {
        this.removeEvent = Inertia.on('start', (event) => {
            this.sidebar = false
        })
    },
    beforeDestroy() {
        this.removeEvent()
    }
}
</script>

<style scoped>
i {
    width: 1.3rem;
    text-align: center;
}
</style>
