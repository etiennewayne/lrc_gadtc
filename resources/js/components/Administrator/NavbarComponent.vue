<template>
    <div>
        <b-navbar>
            <template #brand>
                <b-navbar-item>
                    <strong>ADMINISTRATOR</strong>
                </b-navbar-item>
            </template>
            <template #start>
                <b-navbar-item href="/dashboard-admin">
                    Dashboard
                </b-navbar-item>
                <b-navbar-item href="/library-locations">
                    Library Locations
                </b-navbar-item>
                <b-navbar-dropdown label="Cataloging">
                    <b-navbar-item href="/material-types">
                        <b-icon icon="form-select"></b-icon>&nbsp;
                        Material Types
                    </b-navbar-item>
                    <b-navbar-item href="/catalog">
                        <b-icon icon="folder-text-outline"></b-icon>&nbsp;
                        Catalog
                    </b-navbar-item>
                </b-navbar-dropdown>

                <b-navbar-dropdown label="Account">
                    <b-navbar-item href="/users">
                        <b-icon icon="account"></b-icon> &nbsp;
                        Users
                    </b-navbar-item>
                    <b-navbar-item href="/change-password">
                        <b-icon icon="lock-reset"></b-icon>&nbsp;
                        Change Password
                    </b-navbar-item>
                </b-navbar-dropdown>
            </template>

            <template #end>
                <b-navbar-item tag="div">
                    <div class="buttons">
                        <a class="button is-primary is-outlined" @click="logout">
                            Log out
                        </a>
                    </div>
                </b-navbar-item>
            </template>
        </b-navbar>

    </div>
    

</template>

<script>
export default {
    data(){
        return{
           
        }
    },
    methods: {
        logout(){
            axios.post('/logout').then(()=>{
                window.location = '/';
            })
        }
    }
}
</script>

<style scoped>
    .logo{
        padding: 0 30px 0 30px;
        height: 90px;
    }

    .burger-div{
        width: 20px;
        height: 3px;
        background-color: #696969;
        margin: 0 0 3px 0;
        margin-left: auto;
        border-radius: 10px;
    }

    .burger-button{
        display: flex;
        flex-direction: column;
        margin-left: auto;
    }

    .mynav{
        padding: 25px;
        border-bottom: 2px solid rgba(22, 69, 28, 0.53);
        display: flex;
    }

    .mynav-brand{
        font-weight: bold;
        font-size: 1.2em;
    }

  /* .hero{
        background-image: url("/img/bg-hero.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    } */

</style>
