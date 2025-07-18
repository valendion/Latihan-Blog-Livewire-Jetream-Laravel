 @props(['author', 'size'])

 @php
     $imageSize = match ($size ?? null) {
         'xs' => 'w-7 h-7',
         'sm' => 'w-9 h-9',
         'md' => 'w-10 h-10',
         'lg' => 'w-14 h-14',
         default => 'w-10 h-10',
     };

     $textSize = match ($size ?? null) {
         'xs' => 'text-xs',
         'sm' => 'text-sm',
         'md' => 'text-base',
         'lg' => 'text-xl',
         default => 'text-base',
     };
 @endphp

 <img class=" {{ $imageSize }} {{ $textSize }} rounded-full mr-3" src="{{ $author->profile_photo_url }}"
     alt="{{ $author->name }}">
 <span class="mr-1 text-xs">{{ $author->name }}</span>
