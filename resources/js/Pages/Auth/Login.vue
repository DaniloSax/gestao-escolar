<template>
    <div style="height: 100vh;" class="d-flex justify-center align-center">
        <div class="my-4" style="width: 50%;">

            <v-img height="100" src="https://boavista.rr.gov.br/publico/img/logos/logo_2022_v1.png" class="my-10">
            </v-img>

            <v-card>
                <v-card-title primary-title>
                    Fazer Login
                </v-card-title>
                <v-divider></v-divider>
                <v-card-text>
                    <v-form>
                        <v-text-field label="E-mail" v-model="user.email"></v-text-field>
                        <v-text-field type="password" label="Senha" v-model="user.password"></v-text-field>
                    </v-form>

                </v-card-text>

                <v-card-actions>
                    <v-btn block color="primary" dark>Entrar</v-btn>
                </v-card-actions>
            </v-card>
        </div>
    </div>
</template>

<script>
import LoginLayoutBaseVue from '@/layouts/LoginLayoutBase.vue';
import { ref } from '@vue/reactivity';

export default {
    layout: LoginLayoutBaseVue,

    setup() {

        const user = ref({})

        function login() {

        }

        return { user }
    }
}
</script>

<style>

</style>
