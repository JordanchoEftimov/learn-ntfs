<template>
    <div class="container">
        <h1 class="text-center display-4 fw-bold mb-5">
            Empower your knowledge about NFTs!
        </h1>
        <div class="row">
            <div class="col col-12 col-md-6 mb-3">
                <div class="display-6 fw-bold fst-italic mb-3">
                    Everything you need to know about NFTs in one place!
                </div>
                <p class="fs-6">
                    A non-fungible token (NFT) is a record on a blockchain which is associated with a particular digital
                    or physical asset. [1] The ownership of an NFT is recorded in the blockchain, and can be transferred
                    by the owner, allowing NFTs to be sold and traded. NFTs can be created by anybody, and require few
                    or no coding skills to create.[2] NFTs typically contain references to digital files such as photos,
                    videos, and audio. Because NFTs are uniquely identifiable assets, they differ from cryptocurrencies,
                    which are fungible.
                </p>
                <p>
                    Proponents of NFTs claim that NFTs provide a public certificate of authenticity or proof of
                    ownership, but the legal rights conveyed by an NFT can be uncertain. The ownership of an NFT as
                    defined by the blockchain has no inherent legal meaning, and does not necessarily grant copyright,
                    intellectual property rights, or other legal rights over its associated digital file. An NFT does
                    not restrict the sharing or copying of its associated digital file, and does not prevent the
                    creation of NFTs that reference identical files.
                </p>
                <p v-if="!user" class="fw-bold">
                    Note: In order to test your knowledge with the quiz, you need to have an account. You can create
                    an account
                    <Link :href="$route('show_sign_up')">here</link>
                    .
                </p>
                <p v-if="!user" class="fw-bold">
                    Have an account? Login
                    <Link :href="$route('show_sign_in')">here</Link>
                    .
                </p>
            </div>
            <div class="col col-12 col-md-6 mb-3 d-flex align-items-center">
                <a href="https://www.freepik.com/vectors/blockchain-cryptocurrency" target="_blank">
                    <img src="/images/home-image.jpg" alt="Blockchain image" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
import DefaultLayout from "../Layouts/DefaultLayout";

export default {
    name: "Homepage",
    layout: DefaultLayout,
    props: {
        user: Object
    }
}
</script>

<style scoped>

</style>
