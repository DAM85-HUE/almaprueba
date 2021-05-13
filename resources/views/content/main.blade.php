@extends('welcome')
@section('main_content')
    <template v-if="menu==0">   
        <dashboard></dashboard>
    </template>

    <template v-if="menu==1">
        <category></category>
    </template>
    
    <template v-if="menu==2">
        <articles></articles>
    </template>

    <template v-if="menu==3">
        <incomes></incomes>
    </template>

    <template v-if="menu==4">
        <providers></providers>
    </template>

    <template v-if="menu==5">
        <sales></sales>
    </template>

    <template v-if="menu==6">
        <clients></clients>
    </template>

    <template v-if="menu==7">
        <users></users>
    </template>

    <template v-if="menu==8">
       <roles></roles>
    </template>

    
    
@endsection