@prop(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Tamakan</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 font-bold text-xl">Fullstack Web Developer
        </h3>
        <p class="text-sm mt-4">Full Time - From $60,000</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($jobs->tags as $tag)
                <x-tag :tag="$tag" size="small">
            @endforeach
        </div>
        <x-employer-logo :width="42" />
    </div>
</x-panel>
