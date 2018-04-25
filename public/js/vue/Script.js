const app = new Vue({
    el: '#app',
    data:{
    	message:'hello'
    },
});
    // app.message="hello";


// var app = new Vue({
//   el: '#app',
//   data: {
//     message: '123'
//   }
// })
// app.message = 'новое сообщение' // изменяем данные
// app.$el.textContent === 'новое сообщение' // false
// Vue.nextTick(function () {
//   app.$el.textContent === 'новое сообщение' // true
// })