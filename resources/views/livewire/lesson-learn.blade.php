<div>
    @if (isset($drills[$currentIndex]))

    @php
    $drill = $drills[$currentIndex];
    @endphp

    <h2 class="text-xl font-bold text-gray-800 mb-6">
        問題：{{ $drill->question}}
    </h2>
    <ul class="mt-4 space-y-4">
        <li>
            解答.1：{{ $drill->choice_1 }}
        </li>
        <li>
            解答.2：{{ $drill->choice_2 }}
        </li>
        <li>
            解答.3：{{ $drill->choice_3 }}
        </li>
        <li>
            解答.4：{{ $drill->choice_4 }}
        </li>
    </ul>
    @endif
</div>