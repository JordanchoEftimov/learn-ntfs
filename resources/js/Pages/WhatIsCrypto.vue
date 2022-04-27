<template>
    <div class="container">
        <div class="text-center fw-bold display-5 mb-5">
            What is Crypto?
        </div>
        <div v-for="i in 4" :key="i" class="row mb-4">
            <div class="col col-12 col-md-6" :class="{'order-md-1': i % 2}">
                <div class="fs-3 mb-3 fw-bold">Lorem ipsum dolor</div>
                <div class="fs-6 fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed quam id ipsum aliquam eleifend sit
                    amet at
                    nibh. Aenean vitae velit non lacus lobortis condimentum. Vivamus feugiat tempor ex sed placerat.
                    Suspendisse
                    non dui tincidunt urna accumsan dignissim eget in leo. Etiam vel magna vel felis blandit venenatis
                    quis sit
                    amet velit. Nulla ultrices, nibh in aliquam viverra, magna est auctor sapien, in imperdiet augue
                    velit vitae
                    mi. Phasellus nibh dolor, gravida non sem eu, pharetra pharetra augue. Phasellus maximus elit
                    lectus, sit
                    amet luctus purus facilisis quis. Pellentesque congue gravida ante, ut aliquam enim consectetur
                    vitae.
                </div>
            </div>
            <div class="col col-12 col-md-6" :class="{'order-md-0': i % 2}">
                <a href="https://www.freepik.com/vectors/blockchain-cryptocurrency" target="_blank">
                    <img src="/images/how-to-make-nft-image.jpg" alt="Blockchain image" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import DefaultLayout from "../Layouts/DefaultLayout";

export default {
    name: "WhatIsCrypto",
    layout: DefaultLayout
}
</script>

<style scoped>

</style>
