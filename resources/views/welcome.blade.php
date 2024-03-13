@extends('layouts.basic')

@section('title', 'Dc Comics | Home')

@section('content')
<main>
    @foreach ($products as $element)
        <section id="sezione-titoli">
            <img id="jumbotron" src="{{ $element['thumb'] }}" alt="jumbotron">
            <h3>{{ $element['title'] }}</h3>
        </section>
    @endforeach
</main>

<style lang="scss" scoped> 

        main{
            display: flex;
            flex-wrap: wrap;
        }
        #sezione-titoli{
           padding: 2%;
           display: flex;
           gap: 5px;
           flex-direction: column;
           font-size: 10px;
           width: calc(100% / 6);
           justify-content: center;
           align-items: center;
       }

    #jumbotron{
        height: 18vh;
        width: 130px
    }


</style>