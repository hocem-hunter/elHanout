<template>
        <v-app-bar 
            :clipped-left="$vuetify.breakpoint.lgAndUp"
            app
            color="#060539"
            dark
        >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"/>
            <v-img class="ml-2"
               :src="'./images/logo2.png'"
               height="45"
               width="130"
            ></v-img>
          
            <!--Search-->
            <div class="input-group rounded-pill overflow-hidden d-flex justify-content-end ml-5"
                 style="border: 2px solid #2F80ED;background: #2F80ED;width: 60% !important;">
                <div class="input-group-prepend">
                    <a class="btn  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       style="background: #2F80ED;text-decoration: none;color: white;"
                    >Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <input class="form-control pl-5" type="text" placeholder="Search" aria-label="Search">
                <div class="input-group-append d-flex align-items-center justify-content-center font-weight-bold" style="width: 110px;">
                    <a href="" class="d-flex align-items-center" type="submit"
                       style="background: #2F80ED;text-decoration: none;color: white;">
                        <i class="mdi mdi-magnify mdi-24px pr-2 "></i>
                        <span style="font-family: 'Calibri Light';font-size:18px">Search</span>
                    </a>
                </div>
            </div>
            <v-spacer></v-spacer>
            <div class="hidden-md-and-down" style="width: 220px;">
                <div class="px-5 d-inline">
                    <a href="" style="text-decoration: none; color:white;">Sign-in</a>
                </div>
                <div class=" d-inline">
                    <button style="border: 2px solid #2F80ED;color: white;" class="rounded-pill"
                            type="submit">
                        Join Now
                    </button>
                </div>
            </div>
        </v-app-bar>
</template>

<script>
    export default {
        props: {
            source: String,
        },
        data: () => ({
            drawer: null,
        }),
    }
</script>
