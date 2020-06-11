<template>
    <v-app class="mt-5">
    <v-container fluid >
        <v-flex class="pt-5">
            <v-carousel hide-delimiter-background show-arrows-on-hover cycle height="250"  style="border-radius: 15px;">
            <v-carousel-item 
                v-for="meetup in meetups"
                :src="meetup.imageUrl"
                :href="meetup.link"
                :key="meetup.id">
            </v-carousel-item>
            </v-carousel>
        </v-flex>
                    <grid></grid>
        </v-container>
    </v-app>
</template>

<script>
    export default {
     data () {
     return {
        meetups: [
          { imageUrl: 'https://w.wallhaven.cc/full/j5/wallhaven-j58dj5.jpg', title: 'Meetup in New York',link:'https://vuetifyjs.com/en/components/carousels/#carousels' },
          { imageUrl: 'https://a-static.besthdwallpaper.com/battlefield-v-fond-d-ecran-2048x1152-257_49.jpg', title: 'Meetup in Paris',link:'https://www.google.com/' },
          { imageUrl: 'https://a-static.besthdwallpaper.com/guerrier-samourai-fond-d-ecran-2048x1152-3141_49.jpg', title: 'Meetup in Paris',link:'https://www.google.com/' }
        ]
      }
    }
  }
</script>

