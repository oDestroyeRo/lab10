@extends('layouts.master')

@section('content')
<h1>Add Coin</h1>
<div class="" id="vue-add-singer">
    <div class="form-group">
        <label for="name">Coin Name</label>
        <input type="text" class="form-control" v-model="name" id="name" placeholder="Singer Name">
    </div>

    <button class="btn btn-primary" v-on:click="submit()">Submit</button>
</div>
@endsection

@section('script')
<script>
var vm = new Vue({
    el: '#vue-add-singer',
    data: {
        'name': ''
    },
    methods: {
        submit: function () {
            axios.post('http://lab10.dev/api/usdollars', {
                name: this.name
            }).then(function (response) {
                console.log(response.data.data);
                alert(response.data.data);
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
