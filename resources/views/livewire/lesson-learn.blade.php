<div>
    @if (isset($drills[$currentIndex]))

    @php
    $drill = $drills[$currentIndex];
    @endphp

    <h2 class="text-xl font-bold text-gray-800 mb-6">
        問題：{{ $drill->question}}
    </h2>
    <ul class="mt-4 space-y-4">
        <li wire:click="selectAnswer">
            解答.1：{{ $drill->choice_1 }}
        </li>
        <li wire:click="selectAnswer">
            解答.2：{{ $drill->choice_2 }}
        </li>
        <li wire:click="selectAnswer">
            解答.3：{{ $drill->choice_3 }}
        </li>
        <li wire:click="selectAnswer">
            解答.4：{{ $drill->choice_4 }}
        </li>
    </ul>
    @endif

    @if($judgementModal)
    <x-ui.modal-container id="judgement">
        <h3 class="text-center text-2xl font-semibold mb-4">
            正解は「{{ $drill->choice_4 }}」
        </h3>
        {{ $drill->explanations }}
        <div class="text-center">
            <x-ui.button wire="nextQuestion">次へ</x-ui.button>
        </div>
    </x-ui.modal-container>
    @endif
</div>