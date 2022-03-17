<template>
    <div>

        <b-navbar>
            <template #brand>
                <b-navbar-item>
                    <img
                        src="/img/logo.png"
                    >
                </b-navbar-item>
            </template>
            <template #start>
                
                <!-- <b-navbar-item href="#">
                    Documentation
                </b-navbar-item>
                <b-navbar-dropdown label="Info">
                    <b-navbar-item href="#">
                        About
                    </b-navbar-item>
                    <b-navbar-item href="#">
                        Contact
                    </b-navbar-item>
                </b-navbar-dropdown> -->
            </template>

            <template #end>
                <b-navbar-item href="/">
                    Home
                </b-navbar-item>

                <b-navbar-item tag="div">
                    <div class="buttons">
                        <!-- <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a> -->
                        <a class="button is-light" tag="a" href="/login">
                            Log in
                        </a>
                    </div>
                </b-navbar-item>
            </template>
        </b-navbar>

        <section class="hero is-primary">
            <div class="hero-body">
                <div class="">
                <p class="title">
                    BMIS
                </p>
                <p class="subtitle">
                    Barangay Management Information System
                </p>
                </div>
            </div>
        </section>


    </div> <!--root div-->
</template>

<script>
export default {
  
    data(){
        return{

        }

    },


    methods: {
        submit: function(){
           
        },

    },

    mounted() {
       
    },

    computed: {
        showName(){
            if(this.user){
                return this.user.fname.toUpperCase();
            }
            return '';
        },
        currentLogin(){
            if(this.user){
                return true;
            }
            return false;
        }
    }
}
</script>

<style scoped>

    .is-active .al img {
        filter: grayscale(0%);
    }
    .al img {
        filter: grayscale(100%);
    }




</style>
