<template>
    <v-app>
             <v-row>
                    <v-col
                        v-for="i in 22"
                        :key="i"
                        cols="6"
                        md="2"
                        sm="4"
                    >
                        <v-card  style="border-radius: 5px;height:250px;">                     
                        <div>                    
                              <v-img src="https://shop.asmonaco.com/2485-large_default/maillot-home-2019-20.jpg" max-height="200    " position="background-position: top;" ></v-img>
                              <p class="text-center" style="font">as Monaco Maillot <br>90£</p>
                         </div>              
                        </v-card>
                    </v-col>
             </v-row>
    </v-app>
</template>


