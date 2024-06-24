@prop(['job'])
<x-panel class="flex gap-x-6 ">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">Tamakan</a>
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 font-bold text-xl mt-3">Fullstack Web
            Developer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - From $60,000</p>
    </div>
    <div class="">
        @foreach ($jobs->tags as $tag)
            <x-tag :tag="$tag">
        @endforeach
    </div>
</x-panel>
