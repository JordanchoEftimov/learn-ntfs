<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'title' => 'What is Crypto?',
                'paragraph' => "<p>Cryptocurrency, also known as \"crypto\", is a digital currency designed to act as a medium of exchange and a store of value but, because it's new, it's more commonly held as a speculative investment asset.</p> <p>Cryptocurrency uses blockchain technology to record transactions in a ledger system. The most important aspect of this technology is that it can be viewed publicly but it can't be changed or controlled by any single entity, making cryptocurrency secure for online transactions and nearly impossible to counterfeit.</p><p>There are thousands of cryptocurrencies that are publicly traded today, as others continue to come on the market. Many of these cryptos are not well known and don't have much trading volume.</p><p>Examples of popular, more widely traded cryptocurrencies include:</p><ul><li>Bitcoin (BTC-USD)</li><li>Ethereum (ETH-USD)</li><li>Litecoin (LTC-USD)</li></ul>",
                'image' => '<img class="img-fluid" src="https://i.ibb.co/BB5c175/3994.jpg" alt="Image"><a href="http://www.freepik.com">Designed by upklyak / Freepik</a>'
            ],
            [
                'title' => 'What is NFT?',
                'paragraph' => "<p>A non-fungible token (NFT) is a digital asset that is verifiable on blockchain technology. Assets include artwork, music, or in-game assets such as unique avatars. Because they are unique, NFTs are becoming sought after as collectibles.</p> <p>NFT stands for 'non-fungible token'. When something is fungible, like a dollar bill, it is equivalent to, and can thus be exchanged for, any other dollar bill. In contrast, a non-fungible token is a unique asset in digital form that cannot be exchanged for any other NFT. This means that every NFT is a 'one-of-a-kind' item. NFTs are transferred from one owner to another using blockchain technology, which creates a digital trail from seller to buyer that verifies the transaction. This encodes the unique ownership rights to the buyer (new owner).</p><p>The physical world counterpart would be a unique collectible asset such as a piece of art, for which you might have a certificate of ownership attesting to its authenticity. The NFT with its blockchain technology replaces the need for certificates of ownership. There are even some NFTs that use blockchain technology to create a digital ownership certificate for a unique physical asset, though this is currently not common.</p><p>NFTs became a popular investment in 2021, even though they’ve been around since 2014. As cryptocurrency investing exploded, so did the idea of taking certain digital assets and selling them to investors to buy online.</p>",
                'image' => '<img class="img-fluid" src="https://i.ibb.co/f0wQtp0/sl-021422-48550-26.jpg" alt="Image"><a href="https://www.freepik.com/free-vector/digital-nft-non-fungible-token-background-design_27236350.htm#query=nft&position=3&from_view=search">Image by starline</a> on Freepik'
            ],
            [
                'title' => 'NFT Basics',
                'paragraph' => "<p>NFT is the acronym for non-fungible token. These tokens are digital representations of real-world things such as art, music, videos, and in-game purchases. Each token is unique, which is what makes it non-fungible. They've become quite popular with collectors of all types including sports trading card collectors. They use blockchain technology to handle the transaction and encode the identity of the owner of the NFT.</p> <p>Most NFT marketplaces use the cryptocurrency Ethereum (ETH-USD), but they may use other cryptos as well that include Polygon (MATIC-USD) Solana (SOL-USD) and Polkadot (DOT-USD).</p><p>These NFT tokens take a physical certificate of ownership and make it digital and secured. Some NFTs actually guarantee ownership of unique physical assets, though the most prominent ones are digital assets.</p>",
                'image' => '<img class="img-fluid" src="https://i.ibb.co/GkGMMmF/5348934.jpg" alt="Image"><a href="https://www.freepik.com/free-vector/gradient-isometric-nft-concept_13816139.htm#query=nft&position=0&from_view=search">Image by pikisuperstar</a> on Freepik'
            ],
            [
                'title' => 'How to make an NFT?',
                'paragraph' => "<p>As is the case with other successful business ventures, it's important to have clear business goals in mind before creating and selling an NFT. Users will need to choose a blockchain platform to sell an NFT product and learn the respective platform's requirements, such as the allowed crypto wallets.</p><h4>Step 1: Outline Business Goals</h4><p>Before entering the NFT market, it's wise to outline business goals. For example, will the business have a name? Will the owner form a business entity, such as a partnership or corporation? Who is the target audience? What does it cost to produce the product and what is the competition?</p><h4>Step 2: Decide What to Create</h4><p>Choose the concept and the type of NFT to create, especially something that takes advantage of the artist/owner's unique talents and skills. There are multiple items that can be created and sold in the NFT universe. NFTs can be art, music, video items, trading cards, memes, big sports moments, domain names or virtual fashion.</p><h4>Step 3: Choose a Blockchain Platform</h4><p>The most common blockchain platform for NFTs is Ethereum. Other blockchains that are known to hold NFTs include Binance, Litecoin, EOS, Tron, Cosmos, Smart Chain, Tezos, and Polkadot. Once the NFT creator has chosen the blockchain, they'll need to learn and choose a crypto wallet that is compatible with the blockchain.</p>",
                'image' => "<img class='img-fluid' src='https://i.ibb.co/pW51zz0/Screenshot-2022-08-29-at-23-39-02.png' alt='Image'>Image by <a href='https://www.freepik.com/free-vector/flat-futuristic-nft-concept_13718606.htm#query=nft&position=17&from_view=search'>Freepik</a>"
            ]
        ])->each(function ($lecture) {
            return Lecture::query()->create([
                'title' => $lecture['title'],
                'paragraph' => $lecture['paragraph'],
                'image' => $lecture['image']
            ]);
        });
    }
}
