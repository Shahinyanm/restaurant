<template>
    <div>
    <button v-on:click="slides"> Changes</button>
    <ul>
        <li v-for="slide in slide"> <img v-if="yes" :src="url+slide.photo"  style="width:100px; height: 100px;"/></li>
    </ul>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component is mounted.')
        },
        data (){
            return {
             message:'Hello',
             show:false,
             slide:[],
             yes:false,
             url:url2+'/'
            }
        },
        methods:{
            slides(){
                axios.post('/slide_images').then((response) => {
                    this.yes= true
                    console.log(response.data)
                    this.slide = response.data
                    console.log(this.slide)
                    console.log(this.url)
                })
            }
        },
        computed:{
            message2 (){
                return this.message +"hayvan"
            }
        }
    }
</script>
