<template>
    <v-app id="inspire">

        <v-app-bar
            app
            clipped-left
            color="#060539"
        >
            <v-app-bar-nav-icon

                @click.stop="drawer = !drawer"
            />
            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>


    </v-app>
</template>

<script>
    export default {
        props: {
            source: String,
        },
        data: () => ({
            drawer: null,
        }),
        created () {
            this.$vuetify.theme.dark = true
        },
    }
</script>
