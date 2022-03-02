<template>
    <div class="login-wrapper">
        <div class="login">
            <form @submit.prevent="submit">
                <div class="box">
                    <h1 class="title is-5">SECURITY CHECK</h1>
                    <b-field label="Username" label-position="on-border"
                        :type="this.errors.username ? 'is-danger':''"
                        :message="this.errors.username ? this.errors.username[0] : ''"
                    >
                        <b-input type="text" v-model="fields.username" placeholder="Username" />
                    </b-field>

                    <b-field label="Password" label-position="on-border"
                        :type="this.errors.password ? 'is-danger':''"
                        :message="this.errors.password ? this.errors.password[0] : ''"
                    >
                        <b-input type="password" v-model="fields.password" password-reveal placeholder="Password" />
                    </b-field>

                    <div class="buttons">
                        <button class="button is-primary">LOGIN</button>
                    </div>
               
                </div>
            </form>

        </div>
    </div>
</template>

<script>

export default {
    data(){
        return {
            fields: {
                username: '',
                password: '',
            },

            errors: {},
        }
    },

    methods: {
        submit: function(){
            axios.post('/login', this.fields).then(res=>{
                console.log(res.data)
                if(res.data.role === 'ADMINISTRATOR'){
                    window.location = '/dashboard-admin';
                }
             
            }).catch(err=>{
                this.errors = err.response.data.errors;
            })
        }
    }
}
</script>


<style scoped>
    .login-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login{
        width: 500px;
    }





</style>
