<template>
    <div class="col-lg-2">
        <a href="/"> <button class="btn btn-block btn-success">Home</button></a>
        <hr>
        <ul class="list-group">
            <li class="list-group-item"><a href="/zodiacs/today/aries">Aries</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/taurus">Taurus</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/gemini">Gemini</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/cancer">Cancer</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/leo">Leo</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/virgo">Virgo</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/libra">Libra</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/scorpio">Scorpio</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/sagittarius">Sagittarius</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/capricorn">Capricorn</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/aquarius">Aquarius</a></li>
            <li class="list-group-item"><a href="/zodiacs/today/pisces">Pisces</a></li>
        </ul>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
