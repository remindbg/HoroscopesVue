@extends('layouts.app')

@section('content')

            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    This is a very simple Demo App showing the daily horoscope. The app uses Laravel as a backend and some VueJS components. However, since the backend does not care about saving any data, there is no real model. The app uses aztro.readthedocs.io as an API. The app is hosted in heroku free plan and the github is
                    <a href="https://github.com/remindbg/HoroscopesVue">here</a>.
                    <p>Pick a Zodiac from the sidebar menu
                    </p>
                </div>
            </div>

@endsection
