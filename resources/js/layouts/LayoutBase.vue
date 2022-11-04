<template>
    <v-app ref="app">
        <v-layout>
            <v-app-bar color="grey-lighten-2" elevation="0" height="100">
                <v-app-bar-nav-icon></v-app-bar-nav-icon>

                <v-app-bar-title>

                    <v-img src="https://boavista.rr.gov.br/publico/img/logos/logo_2022_v1.png" height="60" width="20%">
                    </v-img>

                </v-app-bar-title>

                <v-spacer></v-spacer>

                <v-menu anchor="bottom end" rounded>
                    <template v-slot:activator="{ props }">
                        <v-btn icon v-bind="props">
                            <v-avatar color="white" size="x-large">
                                <v-img aspect-ratio="16/9" cover
                                    src="https://boavista.rr.gov.br/publico/img/logos/logo_2022_v1.png">
                                </v-img>

                            </v-avatar>
                        </v-btn>
                    </template>
                    <v-card>
                        <v-card-text>
                            <div class="mx-auto text-center">

                                <h3>Danilo Veloso</h3>
                                <p class="text-caption mt-1">
                                    danilovsdanilo@gmail.com
                                </p>
                                <v-divider class="my-3"></v-divider>
                                <v-btn rounded variant="text" @click="() => { }">
                                    Perfil
                                </v-btn>
                                <v-divider class="my-3"></v-divider>
                                <v-btn @click="() => { }">
                                    Sair
                                </v-btn>
                            </div>
                        </v-card-text>
                    </v-card>
                </v-menu>
            </v-app-bar>

            <v-navigation-drawer elevation="2" permanent rounded="xl" class="ml-3 mt-1" expand-on-hover rail>
                <v-list>
                    <v-list-item prepend-avatar="https://randomuser.me/api/portraits/women/85.jpg" title="Sandra Adams"
                        subtitle="sandra_a88@gmailcom"></v-list-item>
                </v-list>

                <v-divider></v-divider>

                <v-list density="compact" nav>
                    <v-list-item prepend-icon="mdi-folder" title="My Files" value="myfiles"></v-list-item>
                    <v-list-item prepend-icon="mdi-account-multiple" title="Shared with me" value="shared">
                    </v-list-item>
                    <v-list-item prepend-icon="mdi-star" title="Starred" value="starred"></v-list-item>
                </v-list>
            </v-navigation-drawer>

            <v-main class="bg-color">
                <v-container grid-list-xs>
                    <slot />
                </v-container>
            </v-main>
        </v-layout>
    </v-app>
    <!-- <v-footer color="primary" border height="10px">footer</v-footer> -->
</template>

<script>
import { ref } from '@vue/reactivity'
export default {
    setup() {

        const bgColor = ref('grey-lighten-2')
        const items = ref(['teste', 'items2'])

        return { bgColor, items }
    }
}
</script>

<style>
.bg-color {
    background-color: #e0e0e0;
}
</style>
