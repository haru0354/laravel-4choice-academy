<div>
    @if (isset($drills[$currentIndex]))

    @php
    $drill = $drills[$currentIndex];
    @endphp

    <h2 class="text-xl font-bold text-gray-800 mb-6">
        問題：{{ $drill->question}}
    </h2>
    <ul class="mt-4 space-y-4">
        <li wire:click="selectChoice(1)">
            解答.1：{{ $drill->choice_1 }}
        </li>
        <li wire:click="selectChoice(2)">
            解答.2：{{ $drill->choice_2 }}
        </li>
        <li wire:click="selectChoice(3)">
            解答.3：{{ $drill->choice_3 }}
        </li>
        <li wire:click="selectChoice(4)">
            解答.4：{{ $drill->choice_4 }}
        </li>
    </ul>
    @endif

    @if($judgementModal)
    <x-ui.modal-container id="judgement">
        @if ($isCorrect)
        <p class="mb-4 text-center text-2xl font-semibold text-green-600">正解です 🎊</p>
        @else
        <p class="mb-4 text-center text-2xl font-semibold text-red-600">不正解です ❌</p>
        <p class="text-center text-xl font-semibold">正解は「{{ $drill->correct_choice }}」</p>
        @endif
        <p class="my-4">{{ $drill->explanations }}</p>
        <div class="text-center">
            <x-ui.button wire="nextQuestion" class="rounded">次へ</x-ui.button>
        </div>
    </x-ui.modal-container>
    @endif

    @if ($isLessonEndModal)
    <x-ui.modal-container id="end">
        <h2 class="text-2xl font-extrabold text-gray-800 text-center mb-6">
            🎉 クイズ終了 🎉
        </h2>
        <p class="my-6 text-lg text-gray-700 text-center">
            お疲れさまでした！これにてクイズは終了です
        </p>
        <div class="mt-4 text-center">
            <x-ui.button-link route="{{ route('dashboard') }}" class="rounded">レッスンの一覧へ</x-ui.button-link>
            <x-ui.button-link route="{{ route('learn', [$lesson_id => $lesson->id]) }}" color="gray" class="rounded">もういちど挑戦</x-ui.button-link>
        </div>
    </x-ui.modal-container>
    @endif
</div>