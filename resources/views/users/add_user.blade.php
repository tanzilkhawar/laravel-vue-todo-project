@extends('layouts.master')
@section("content")
    <form @submit.prevent="validateBeforeSubmit">
        <input v-validate="{ required: true, email: true, regex: /[0-9]+/ }" type="text" name="email">
    </form>
@endsection