@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Daily Horoscope</div>

        <div class="card-body">
            <div>
                <ul id="aztro">
                    <li>Current Date: {{$data->current_date}}</li>
                    <li>Compatibility: {{$data->compatibility}}</li>
                    <li>Lucky Number: {{$data->lucky_number}}</li>
                    <li>Lucky Time: {{$data->lucky_time}}</li>
                    <li>Color: {{$data->color}}</li>
                    <li>Date Range: {{$data->date_range}}</li>
                    <li>Mood: {{$data->mood}}</li>
                    <li>Description: {{$data->description}}</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
