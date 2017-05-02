@extends('layouts.master')

@section('content')
<h1>Bitcoin : Add Coin</h1>
<div class="" id="vue-add-singer">
    <div class="form-group">
        <label for="coin">Coin</label>
        <input type="text" class="form-control" v-model="coin" id="coin" placeholder="Coin">
        <label for="price">Price</label>
        <input type="text" class="form-control" v-model="price" id="price" placeholder="Price">
        <label for="name">Name</label>
        <input type="text" class="form-control" v-model="name" id="name" placeholder="Name">
    </div>

    <button class="btn btn-primary" v-on:click="submit()">Submit</button>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-singer',
    data: {
        'coin': '',
        'price': '',
        'name': ''
    },
    methods: {
        submit: function () {
            axios.post('http://lab10.dev/api/bitcoins', {
                coin: this.coin,
                price: this.price,
                name: this.name
            }).then(function (response) {
                console.log(response.data.data);
                alert(response.data.data);
                vm.coin = '';
                vm.price = '';
                vm.name = '';
            }).catch(function (error) {
                alert('Error (see console log)');
                console.log(error);
            });
        }
    }
});
</script>
@endsection
