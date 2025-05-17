<section>
    @php
    $drill = $drills[$currentIndex];
    @endphp

    <h2 class="text-xl font-bold text-gray-800 mb-6">
        問題：{{ $drill->question}}
    </h2>
    <div class="w-[90%] mx-auto">
        <x-ui.answer-button wire="selectChoice(1)" listName="解答1">
            {{ $drill->choice_1 }}
        </x-ui.answer-button>
        <x-ui.answer-button wire="selectChoice(2)" listName="解答2">
            {{ $drill->choice_2 }}
        </x-ui.answer-button>
        <x-ui.answer-button wire="selectChoice(3)" listName="解答3">
            {{ $drill->choice_3 }}
        </x-ui.answer-button>
        <x-ui.answer-button wire="selectChoice(4)" listName="解答4">
            {{ $drill->choice_4 }}
        </x-ui.answer-button>
    </div>

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
            🎉 レッスン終了 🎉
        </h2>
        <p class="my-6 text-lg text-gray-700 text-center">
            お疲れさまでした！これにてクイズは終了です
        </p>

        @if ($wrongQuestions)
        <h3 class="text-lg font-semibold mb-2">❌ 間違えた問題 ❌</h3>
        @foreach ($wrongQuestions as $wrongQuestion)
        <div class="p-4 my-4 rounded-lg shadow-md bg-red-100 border hover:border-gray-600">
            <h4 class="my-2 font-semibold">{{ $wrongQuestion['question'] }} </h4>
            <div class="my-2">
                <span class="font-semibold text-green-700">✅ 正解</span>
                <p class="ml-8">{{ $wrongQuestion['correct'] }}</p>
            </div>
            <div class="my-2">
                <span class="font-semibold text-blue-700">📘 解説</span>
                <p class="ml-8">{{ $wrongQuestion['explanations'] }}</p>
            </div>
        </div>
        @endforeach
        @endif

        <div class="mt-4 text-center">
            <x-ui.button-link route="{{ route('dashboard') }}" class="rounded">レッスンの一覧へ</x-ui.button-link>
            <x-ui.button-link route="{{ route('learn', [$lesson_id => $lesson->id]) }}" color="gray" class="rounded">もういちど挑戦</x-ui.button-link>
        </div>
    </x-ui.modal-container>
    @endif
</section>