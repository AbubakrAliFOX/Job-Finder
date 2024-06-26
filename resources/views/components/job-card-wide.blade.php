@props(['job'])
<x-panel class="flex gap-x-6 ">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 font-bold text-xl mt-3">{{ $job->title }}
            Developer</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>
    <div class="">
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>
</x-panel>
