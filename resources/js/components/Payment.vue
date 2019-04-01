<template>
    <div>
        <form action="/purchase" method="POST">
            <input type="hidden" name="stripeToken" v-model="stripeToken">
            <input type="hidden" name="stripeEmail" v-model="stripeEmail">


            <button type="submit" @click.prevent="buy">Subscribe</button>
        </form>
    </div>
</template>



<script>
export default {

    data(){
        return {
            stripeEmail: '',
            stripeToken: ''
        }
    },
    created(){
        this.stripe = StripeCheckout.configure({
            key: Laravel.stripeKey,
            image: "https://stripe.com/img/documentation/checkout/marketplace.png",
            locale: "auto",
            token: (token)=>{
                this.stripeEmail = token.email;
                this.stripeToken = token.id;


                axios.post('/purchase', this.$data)
                    .then(response=> alert('Thanks for the money'))
            }
        });
    },
    methods: {
        buy(){
            this.stripe.open({
                name: 'Musicians Toolkit',
                description: 'The greatest thing that ever did something',
                zipCode: true,
                amount: 2500
            });
        }
    }
}
</script>