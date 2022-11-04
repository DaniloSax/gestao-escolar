<template>
    <v-layout>
        <v-navigation-drawer color="grey-darken-2" permanent></v-navigation-drawer>
        <v-app-bar color="grey-lighten-2"></v-app-bar>
        <v-main>
            <v-card height="200px"></v-card>
            <slot />
        </v-main>
    </v-layout>
</template>

<script>
export default {

}
</script>

<style>

</style>
