<template>
<v-container>
    <v-row>
            <v-card class="d-inline-block" >
                  <v-col >
                    <v-img class="m-4"
                      height="550"
                      width="400"
                      src="https://shop.asmonaco.com/2485-large_default/maillot-home-2019-20.jpg"
                    ></v-img>
                  </v-col>
            </v-card>
            <v-card class="d-inline-block mx-auto"
                height="550"
                width="500"
                flat
            >
                <v-card-title>Maillot Home Match 2019-20</v-card-title>
                        <v-card-text>
                          <v-row
                            align="center"
                            class="mx-0"
                          >
                            <v-rating
                              :value="4.5"
                              color="amber"
                              dense
                              half-increments
                              readonly
                              size="14"
                            ></v-rating>

                            <div class="grey--text ml-4">4.5 (413)</div>
                          </v-row>

                          <div class="my-4 subtitle-1">
                            77,00 € 
                          </div>

                          <div> 
                            <strong>DESCRIPTION:<br></strong> 
                            <p class="ml-2">Le maillot domicile 2019-2020 de l'AS Monaco. Avec sa traditionnelle diagonale rouge et blanche ce mailot est un élément
                                indispensable pour tout fan de l'ASM. Version officielle, identique a celle portée par les joueurs. Modèle adulte.  
                                Skin Fit : prévoir une taille supplémentaire</p>
                                </div>
                        </v-card-text>

                        <v-divider class="mx-4"></v-divider>

                        <v-card-title>TAILLES</v-card-title>

                        <v-card-text>
                          <v-chip-group
                            v-model="selection"
                            active-class="deep-purple accent-4 white--text"
                            column
                          >
                            <v-chip>S</v-chip>
                            <v-chip>M</v-chip>
                            <v-chip>L</v-chip>
                            <v-chip>XL</v-chip>
                            <v-chip>XLL</v-chip>
                          </v-chip-group>
                        </v-card-text>

            </v-card>
    </v-row>
  </v-container>
</template>