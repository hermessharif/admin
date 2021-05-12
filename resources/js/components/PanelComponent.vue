<template>
    <v-app>
        <div class="container-fluid" dir="rtl">
            <div dir="rtl">

                        <nav class="navbar navbar-expand-lg navbar-light">
<!--                            <a class="navbar-brand" href="#">مرکوری</a>-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item" v-for="n in navItems" v-bind:class="tabPage===n.page?'active':''">
                                        <a class="nav-link" href="#" v-on:click="tabPage=n.page,pageTitle=n.title"><i :class="1===1?'mdi mdi-'+n.icon:''"></i>{{n.title}}</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

<!--                    <div class="table">-->
<!--                        <v-card>-->
<!--                            <v-card-title>-->
<!--                                <v-text-field-->
<!--                                    v-model="search"-->
<!--                                    append-icon="mdi-magnify"-->
<!--                                    label="Search"-->
<!--                                    single-line-->
<!--                                    hide-details-->
<!--                                ></v-text-field>-->
<!--                            </v-card-title>-->
<!--                            <v-data-table-->
<!--                                :headers="headers"-->
<!--                                :items="desserts"-->
<!--                                :search="search"-->
<!--                            ></v-data-table>-->
<!--                        </v-card>-->
<!--                    </div>-->
                <main class="mx-5">
                    <div class="h3 text-right" v-text="pageTitle" v-if="tabPage!==0"></div>
                </main>

            </div>
        </div>
    </v-app>
</template>

<script>
export default {
    name: "PanelComponent",
    data () {
        return {
            tabPage:0,
            pageTitle:'',
            navItems:[
                {title:'صفحه اصلی', icon: 'shield-home', page:0},
                {title:'سفارشات', icon: 'order-bool-ascending', page:1},
                {title:'مشتریان', icon: 'shield-account', page:2},
                {title:'خودروها', icon: 'car-estate', page:3},
                {title:'خسارات', icon: 'alarm-light-outline', page:4},
                {title:'پشتیبانی', icon: 'face-agent', page:5},
                {title:'تنظیمات', icon: 'cog', page:6},
            ],


            search: '',
            headers: [
                {
                    text: 'Dessert (100g serving)',
                    align: 'start',
                    filterable: false,
                    value: 'name',
                },
                { text: 'Calories', value: 'calories' },
                { text: 'Fat (g)', value: 'fat' },
                { text: 'Carbs (g)', value: 'carbs' },
                { text: 'Protein (g)', value: 'protein' },
                { text: 'Iron (%)', value: 'iron' },
            ],
            desserts: [
                {
                    name: 'Frozen Yogurt',
                    calories: 159,
                    fat: 6.0,
                    carbs: 24,
                    protein: 4.0,
                    iron: '1%',
                },
                {
                    name: 'Ice cream sandwich',
                    calories: 237,
                    fat: 9.0,
                    carbs: 37,
                    protein: 4.3,
                    iron: '1%',
                },
                {
                    name: 'Eclair',
                    calories: 262,
                    fat: 16.0,
                    carbs: 23,
                    protein: 6.0,
                    iron: '7%',
                },
                {
                    name: 'Cupcake',
                    calories: 305,
                    fat: 3.7,
                    carbs: 67,
                    protein: 4.3,
                    iron: '8%',
                },
                {
                    name: 'Gingerbread',
                    calories: 356,
                    fat: 16.0,
                    carbs: 49,
                    protein: 3.9,
                    iron: '16%',
                },
                {
                    name: 'Jelly bean',
                    calories: 375,
                    fat: 0.0,
                    carbs: 94,
                    protein: 0.0,
                    iron: '0%',
                },
                {
                    name: 'Lollipop',
                    calories: 392,
                    fat: 0.2,
                    carbs: 98,
                    protein: 0,
                    iron: '2%',
                },
                {
                    name: 'Honeycomb',
                    calories: 408,
                    fat: 3.2,
                    carbs: 87,
                    protein: 6.5,
                    iron: '45%',
                },
                {
                    name: 'Donut',
                    calories: 452,
                    fat: 25.0,
                    carbs: 51,
                    protein: 4.9,
                    iron: '22%',
                },
                {
                    name: 'KitKat',
                    calories: 518,
                    fat: 26.0,
                    carbs: 65,
                    protein: 7,
                    iron: '6%',
                },
            ],
        }
    },
}
</script>

<style scoped>

</style>
