 <x-event.section-header :title="$title" :description="$description"/>

@if (count($events) == 1)
    @php $fade_direction = 'fade-right' @endphp
    <x-event.event-box :duration="2000"  :fadeDirection="$fade_direction" :event="$events->first()"/>

@elseif (count($events) > 1)
    <div class="grid grid-cols-4 grid-rows-4 gap-10 bg-table py-20 max-w-7xl mx-auto">

        @foreach ($events as $event)
            @php $fade_direction = ($loop->odd) ? 'fade-right' : 'fade-left' @endphp
            <x-event.event-box :duration="2000" :fadeDirection="$fade_direction" :event="$event"/>
        @endforeach

    </div>
@else
    No data (check database) ur fucked up
@endif
