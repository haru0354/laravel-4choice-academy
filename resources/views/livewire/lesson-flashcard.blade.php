<section>
    @php
    $drill = $drills[$currentIndex];
    @endphp

    <div class="flex flex-col fixed inset-0 items-center justify-center w-full h-full bg-gray-700 bg-opacity-50 z-50">
        <div class="flex items-center justify-center w-full max-w-[600px] min-h-[280px] mx-2 p-6 shadow-lg scroll-y-auto overflow-auto border border-gray-400 bg-white">
            @if ($answerCard)
            <div class="w-full text-lg">
                <div class="mb-6">
                    <h4 class="pb-2 mb-2 border-b border-dashed border-gray-700 text-green-700">✅ 答え</h4>
                    <p class="ml-4">{{ $drill->{"choice_" . $drill->correct_choice} }}</p>
                </div>
                <div>
                    <h4 class="pb-2 mb-2 border-b border-dashed border-gray-700 text-blue-700">📘 解説</h4>
                    <p class="ml-4">{{ $drill->explanations }}</p>
                </div>
            </div>
            @else
            <div>
                <h3 class="my-2 text-2xl font-semibold break-words">{{ $drill->question }}</h3>
            </div>
            @endif

        </div>

        <div class="my-2 flex flex-col md:flex-row ">
            <x-ui.button class="mx-2 rounded" color="blue"
                wire="{{ $answerCard ? 'openQuestion' : 'backQuestion' }}">⬅ 戻る</x-ui.button>
            <x-ui.button class="mx-2 rounded" color="green"
                wire="openEndModal">終了</x-ui.button>
            <x-ui.button class="mx-2 rounded"
                wire="{{ $answerCard ? 'nextQuestion' : 'openAnswer'}}">次へ ➡</x-ui.button>
        </div>
    </div>

    @if ($endModal)
    <x-ui.modal-container wire="closeEndModal" id="end-Modal" class="text-xl text-center font-semibold">
        <p class="mb-6">終了するとレッスンの一覧画面へ戻ります。</p>
        <p class="mb-6">次回開始時は最初からとなります。</p>
        <x-ui.button class="mx-2 rounded" color="gray"
            wire="closeEndModal">キャンセル</x-ui.button>
        <x-ui.button-link class="mx-2 rounded" color="red"
            route="{{ route('dashboard') }}">終了</x-ui.button-link>
    </x-ui.modal-container>
    @endif

</section>