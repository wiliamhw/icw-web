<div class="col-span-4 md:col-span-2 row-span-2 w-full bg-table-0 rounded-xl max-w-5xl mx-auto"
     data-aos-duration="{{$duration}}" data-aos="{{ $fadeDirection }}">

    <header class="flex flex-row pt-4 px-4">
        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#EA9696" />
        </svg>
        <svg class="px-1" width="33" height="29" viewBox="0 0 33 29" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="16.9111" cy="14.5" rx="16" ry="14.5" fill="#ffff" />
        </svg>


    </header>

    <main class="py-4 px-4 text-white">
        <strong class="text-2xl">{{ $event->name }}</strong>

        <p class="text-sm py-4 font-extralight">{{ $event->description }}</p>
    </main>

    <footer class="flex justify-start px-4 py-6">
        <a href="{{ route('event-info', Str::slug($event->name, '-')) }}" class="rounded-full py-2 px-6 bg-bgnav-0 text-black ">Pelajari Lebih Lanjut</a>
    </footer>
</div>
