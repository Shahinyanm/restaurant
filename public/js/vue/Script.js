var app1 = new Vue({
    el: '#app1',
    data:{
        message:'Hello',
        show:false,
        slide:[],
        yes:false,
        url:url2+'/'

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

})



Vue.component('button-counter', {
    data: function () {
        return {
            count: 0
        }
    },
    template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
})

new Vue({ el: '#components-demo' })