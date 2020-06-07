@if (count(Nova::availableResources(request())))
 
    @foreach(Nova::groupedResources(request()) as $group => $resources)
        @if (count($resources) > 0)
            @if (count(Nova::groups(request())) > 1)
                <h4 class="mb-4 text-xs text-white uppercase tracking-wide">{{ $group }}</h4>
            @endif

            <ul class="list-reset mb-8">
                @foreach($resources as $resource)
                    @if (! $resource::$displayInNavigation)
                        @continue
                    @endif

                    <li class="leading-tight mb-4 ml-8 text-sm">
                        <router-link :to="{
                            name: 'index',
                            params: {
                                resourceName: '{{ $resource::uriKey() }}'
                            }
                        }" class="text-white text-justify no-underline dim">
                            {{ $resource::label() }}
                        </router-link>
                    </li>
                @endforeach
            </ul>
        @endif
    @endforeach
@endif

