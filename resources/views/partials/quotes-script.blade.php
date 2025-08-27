<p class="quote leading-normal text-xl sm:text-3xl md:text-4xl lg:text-5xl" style="font-family: 'Caveat', cursive;">"{{ $quote }}"</p>
<button id="newQuote" class="block mx-auto mt-6 bg-green-900 text-white px-4 py-2 rounded hover:bg-green-950 transition duration-500 cursor-pointer">
    New Quote
</button>
<script>
    // Make PHP array available in JS
    const quotes = @json($quotes);

    const quoteElement = document.querySelector('.quote');
    const button = document.getElementById('newQuote');
    let typingTimeout;

    function typeWriter(element, text, speed = 50) {
        element.textContent = ''; // clear previous text
        let i = 0;

        if (typingTimeout) {
            clearTimeout(typingTimeout);
        }

        function typing() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                typingTimeout = setTimeout(typing, speed);
            }
        }

        typing();
    }

    button.addEventListener('click', () => {
        const random = quotes[Math.floor(Math.random() * quotes.length)];
        const formatted = `"${random}"`;
        typeWriter(quoteElement, formatted, 4);
    });
</script>