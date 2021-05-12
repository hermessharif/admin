<template>
    <v-app>
        <div class="container" dir="rtl">
            <div v-if="!user" class="row justify-content-center" dir="rtl">
                <div class="col-12" dir="rtl">
                    <v-stepper v-model="e1">
                        <v-stepper-header>
                            <v-stepper-step
                                :complete="e1 > 1"
                                step="1"
                            >
                                استعلام بیمه نامه فعلی
                            </v-stepper-step>

                            <v-divider></v-divider>

                            <v-stepper-step
                                :complete="e1 > 2"
                                step="2"
                            >
                                بررسی کارشناسان بیمه
                            </v-stepper-step>

                            <v-divider></v-divider>

                            <v-stepper-step step="3">
                                صدور بیمه نامه
                            </v-stepper-step>
                        </v-stepper-header>

                        <v-stepper-items>
                            <v-stepper-content step="1">
                                <v-card
                                    class="mb-12"
                                    color="grey lighten-1"
                                    height="200px"
                                ></v-card>

                                <v-btn
                                    color="primary"
                                    @click="e1 = 2"
                                >
                                    ادامه
                                </v-btn>


                            </v-stepper-content>

                            <v-stepper-content step="2">
                                <v-card
                                    class="mb-12"
                                    color="grey lighten-1"
                                    height="200px"
                                ></v-card>

                                <v-btn
                                    color="primary"
                                    @click="e1 = 3"
                                >
                                    ادامه
                                </v-btn>

                                <v-btn text
                                       @click="e1 = 1"
                                >
                                    برگشت
                                </v-btn>
                            </v-stepper-content>

                            <v-stepper-content step="3">
                                <v-card
                                    class="mb-12"
                                    loading
                                    height="200px"

                                >

                                </v-card>


                                <v-btn
                                    color="primary"
                                    @click="e1 = 1"
                                >
                                    ادامه
                                </v-btn>

                                <v-btn
                                    @click="e1 = 2">
                                    برگشت
                                </v-btn>
                            </v-stepper-content>
                        </v-stepper-items>
                    </v-stepper>
                </div>
            </div>
            <div v-if="user" class="row justify-content-center" dir="rtl">

                <div class="col-md-12">
                    <v-card class="mx-auto text-right">
                        <v-list-item three-line>
                            <v-list-item-content>
                                <div class="mb-4">
                                    بیمه بدنه
                                </div>
                                <v-list-item-title class="mb-1">
                                    لیست سفارش بیمه بدنه
                                </v-list-item-title>
                                <v-list-item-subtitle>در این لیست سفارشات منتظر رسدگی قرار می گیرد</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-avatar
                                size="80"
                                color="indigo"
                            >
                                <v-icon dark>
                                    mdi-format-list-text
                                </v-icon>
                            </v-list-item-avatar>
                        </v-list-item>

                        <v-card-actions>
                            <a href="/insurance/body">
                            <v-btn
                                outlined
                                rounded
                                text
                            >
                                مشاهده لیست سفارشات
                            </v-btn>
                            </a>
                        </v-card-actions>
                    </v-card>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <v-card
                        class="mx-auto text-center"
                        color="blue"
                        dark
                        max-width="600"
                    >
                        <v-card-text>
                            <v-sheet color="rgba(0, 0, 0, .12)">
                                <v-sparkline
                                    :value="value"
                                    color="rgba(255, 255, 255, .7)"
                                    height="100"
                                    padding="24"
                                    stroke-linecap="round"
                                    smooth
                                >
                                    <template v-slot:label="item">
                                        ${{ item.value }}
                                    </template>
                                </v-sparkline>
                            </v-sheet>
                        </v-card-text>

                        <v-card-text>
                            <div class="font-weight-thin">
                                استعلام 30 روز گذشته
                            </div>
                        </v-card-text>

                        <v-divider></v-divider>

                        <v-card-actions class="justify-center">
                            <v-btn
                                block
                                text
                            >
                                اطلاعات بیشتر
                            </v-btn>
                        </v-card-actions>
                    </v-card>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <v-card
                        class="mx-auto text-center"
                        color="green"
                        dark
                        max-width="600"
                    >
                        <v-card-text>
                            <v-sheet color="rgba(0, 0, 0, .12)">
                                <v-sparkline
                                    :value="value"
                                    color="rgba(255, 255, 255, .7)"
                                    height="100"
                                    padding="24"
                                    stroke-linecap="round"
                                    smooth
                                >
                                    <template v-slot:label="item">
                                        ${{ item.value }}
                                    </template>
                                </v-sparkline>
                            </v-sheet>
                        </v-card-text>

                        <v-card-text>
                            <div class="font-weight-thin">
                                صدور 30 روز گذشته
                            </div>
                        </v-card-text>

                        <v-divider></v-divider>

                        <v-card-actions class="justify-center">
                            <v-btn
                                block
                                text
                            >
                                اطلاعات بیشتر
                            </v-btn>
                        </v-card-actions>
                    </v-card>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <v-card
                        class="mx-auto text-center"
                        color="red"
                        dark
                        max-width="600"
                    >
                        <v-card-text>
                            <v-sheet color="rgba(0, 0, 0, .12)">
                                <v-sparkline
                                    :value="value"
                                    color="rgba(255, 255, 255, .7)"
                                    height="100"
                                    padding="24"
                                    stroke-linecap="round"
                                    smooth
                                >
                                    <template v-slot:label="item">
                                        ${{ item.value }}
                                    </template>
                                </v-sparkline>
                            </v-sheet>
                        </v-card-text>

                        <v-card-text>
                            <div class="font-weight-thin">
                                خسارات 30 روز گذشته
                            </div>
                        </v-card-text>

                        <v-divider></v-divider>

                        <v-card-actions class="justify-center">
                            <v-btn
                                block
                                text
                            >
                                اطلاعات بیشتر
                            </v-btn>
                        </v-card-actions>
                    </v-card>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <v-card
                        class="mx-auto text-center"
                        color="rgb(102, 51, 153)"
                        dark
                        max-width="600"
                    >
                        <v-card-text>
                            <v-sheet color="rgba(0, 0, 0, .12)">
                                <v-sparkline
                                    :value="value"
                                    color="rgba(255, 255, 255, .7)"
                                    height="100"
                                    padding="24"
                                    stroke-linecap="round"
                                    smooth
                                >
                                    <template v-slot:label="item">
                                        ${{ item.value }}
                                    </template>
                                </v-sparkline>
                            </v-sheet>
                        </v-card-text>

                        <v-card-text>
                            <div class="font-weight-thin">
                                سود 30 روز گذشته
                            </div>
                        </v-card-text>

                        <v-divider></v-divider>

                        <v-card-actions class="justify-center">
                            <v-btn
                                block
                                text
                            >
                                اطلاعات بیشتر
                            </v-btn>
                        </v-card-actions>
                    </v-card>

                </div>

            </div>
            <div v-else class="row justify-content-center" dir="rtl">

            </div>
            <div class="row justify-content-center" dir="rtl">
                <img width="200px" src="storage/logos.jpg" alt="">
            </div>
        </div>
    </v-app>
</template>

<script>
    export default {
        methods: {

        },
        props:['user'],
        data: () => ({
            value: [
                120,
                446,
                50,
                760,
                120,
                446,
                50,
                760,
                120,
                446,
                50,
                760,
            ],
            e1: 1,

        }),
        mounted() {
            console.log('Component mounted.');
            this.changeRTL()
        }
    }
</script>
