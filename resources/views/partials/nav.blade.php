<nav class="bg-white shadow mb-6">
    <div class="container mx-auto flex justify-between items-center p-4 flex-col sm:flex-row">
        <a href="{{ url('/') }}" class="text-xl font-bold text-green-900">QuoteTime</a>

        <ul class="flex sm:space-x-6 flex-col sm:flex-row text-center sm:text-left">
            <li><a href="{{ url('/') }}" class="font-semibold transition duration-500 hover:text-green-800">Home</a></li>
            <li><a href="{{ url('/about') }}" class="font-semibold transition duration-500 hover:text-green-800">About</a></li>
            <li><a href="{{ url('/contact') }}" class="font-semibold transition duration-500 hover:text-green-800">Contact</a></li>
            <li><a href="{{ url('/aurelius') }}" class="font-semibold transition duration-500 hover:text-green-800">Aurelius</a></li>
            <li><a href="{{ url('/confucius') }}" class="font-semibold transition duration-500 hover:text-green-800">Confucius</a></li>
            <li><a href="{{ url('/plato') }}" class="font-semibold transition duration-500 hover:text-green-800">Plato</a></li>
            <li><a href="{{ url('/laozi') }}" class="font-semibold transition duration-500 hover:text-green-800">Laozi</a></li>
            <!-- You've found a secret! <li><a href="{{ url('/doctor') }}" class="hover:text-blue-600">The Doctor</a></li>-->
        </ul>
    </div>
</nav>