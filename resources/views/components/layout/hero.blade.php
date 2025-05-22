<section class="p-6 md:p-16">
    <div class="flex flex-col items-center justify-center text-center text-gray-500 ">
        <h1 class="my-4 text-2xl font-bold">📚 学習アプリへようこそ！</h1>
        <p>このアプリは、4択クイズとフラッシュカードを使って効率的に学習できる</p>
        <p>シンプルな学習支援ツールです。</p>
        <p>スマートフォン・PC問わずご利用いただけます。</p>
        <div class="flex flex-col md:flex-row my-4">
            <x-ui.button-link route="{{ route('register') }}" color="blue" size="small" class="m-6 rounded">登録</x-ui.button-link>
            <x-ui.button-link route="{{ route('login') }}" color="white" size="small" class="m-6 rounded">ログイン</x-ui.button-link>
        </div>
    </div>
</section>